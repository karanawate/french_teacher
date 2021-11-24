<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\tbl_login;
use App\Models\tbl_banner;
use App\Models\tbl_blog;
use App\Models\tbl_gallerys;
use App\Models\tbl_testimonials;
use App\Models\tbl_services;
use App\Models\tbl_teacher;
use App\http\Requests\Logincheck;
use Redirect;
use Session;
class admin extends Controller
{
    
    function index()
    {
        return view('admin.login');
    }

    function storedata(Logincheck $request)
    {

        if(isset($_POST['submit']))
        {

             $validated        = $request->validate([
                'UserMobile'   => 'required|digits:10',
                'UserPassword' => 'required',
            ]);
            
            $UserMobile   = $validated['UserMobile'];
            $UserPassword = sha1($validated['UserPassword']);
            $insertdata   = array('UserMobile'=>$UserMobile,'UserPassword'=>$UserPassword);
            $user         = tbl_login::getUser($insertdata);
            if($user==1){
                return Redirect::to('dashboard');
            }else{
                return Redirect::to('admin-login')->with('status', 'Password Credentials Wrog Please Try Again !');;
            }
        }

    }

    function dashboard()
    {
        $res = Session::get('usersession');
        if(!empty($res)){
            return view('admin.dashboard');
        } else {
            return Redirect::to('admin-login');
        }
    }

    function setting()
    {
        $res = Session::get('usersession');
        if(!empty($res)){
            return view('admin.settings');
        } else {
            return Redirect::to('admin-login');
        }   
    }

    function gallery(){
            return Redirect::to('gallery');
    }

    function updatesetting(Request $request){
        if(isset($_POST['submit']))
        {
            $validated         =  $request->validate([
                'UserName'     => 'required',
                'UserEmail'    => 'required|email',
                'UserMobile'   => 'required|digits:10',
                'profileImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'logId'        => 'integer'
            ]);

            $UserName    = $validated['UserName'];
            $UserEmail   = $validated['UserEmail'];
            $UserMobile  = $validated['UserMobile'];
            $logId       = $validated['logId'];
            $oldpic      = $validated['oldpic'];

            if ($image = $request->file('profileImage')) {
                $destinationPath = 'profileImage/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $imageName = "$profileImage";
            } else {
                $imageName = $oldpic;
            }

            $updateData = array('UserMobile'=>$UserMobile,'UserEmail'=>$UserEmail,'UserName'=>$UserName,'profileImage'=>$imageName);
            $user = tbl_login::updateUser($updateData,$logId);
            if($user==1){
                return view('admin.settings');
            }else{
                return Redirect::to('admin-login');
            }

        } else {

            $res = Session::get('usersession');
            if(!empty($res)){
                return view('admin.settings');
            }else{
                return Redirect::to('admin-login');
            }
        }
    }
    
    public function logout()
    {
        Session::forget('usersession');
        Session::flush();
        return Redirect::to('admin-login');
    }

    function add_banner(){
        $res = Session::get('usersession');
        if(!empty($res)){
            $data['getBannerList'] = tbl_banner::getBannerList();
            return view('admin.add_banner',$data);
        }else{
            return Redirect::to('admin-login');
        }
    }


    function addbanner(Request $request){
        if(isset($_POST['submit']))
        {            
            $validated         =  $request->validate([
                'bannerImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            if ($image = $request->file('bannerImage')) {
                $destinationPath = 'bannerImage/';
                $bannerImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $bannerImage);
                $bannerImage = "$bannerImage";
            }else{
                $bannerImage = "";
            }
            $insertdata = array('bannerImage'=>$bannerImage);
            $user = tbl_banner::addbanner($insertdata);
            if($user==1){
                $data['getBannerList'] = tbl_banner::getBannerList();
                $data['error'] = array('error'=>'Insert Banner successfully');
                return view('admin.add_banner',$data);
            }else{
                return Redirect::to('admin-login');
            }
        } else {
            $res = Session::get('usersession');
            if(!empty($res)){
                return view('admin.settings');
            }else{
                return Redirect::to('admin-login');
            }
        }

    }

    function deleteBanner(Request $request){
        if(isset($_POST['submit']))
        {
            
            $validated         =  $request->validate([
                'banId'        => 'required|integer',
            ]);
             $banId  = $validated['banId'];
             $user = tbl_banner::deleteBanner($banId);
            if($user==1){
                $data['getBannerList'] = tbl_banner::getBannerList();
                $data['error'] = array('error'=>'Deleted Banner successfully');
                return view('admin.add_banner',$data);
            }else{
                return Redirect::to('admin-login');
            }

        }else{

            $res = Session::get('usersession');
            if(!empty($res)){
                $data['getBannerList'] = tbl_banner::getBannerList();
                return view('admin.add_banner',$data);
            }else{
                return Redirect::to('admin-login');
            }
        }
    }

    function editBanner($banId){
        $res = Session::get('usersession');
            if(!empty($res)){
                $data['getEditBannerList'] = tbl_banner::getEditBannerList($banId);
                return view('admin.editBanner',$data);
            }else{
                return Redirect::to('admin-login');
            }
    }

    function updateBanner(Request $request){
        if(isset($_POST['submit']))
        {
            $validated         =  $request->validate([
                'banId'        => 'required|integer',
                'bannerImage'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            if ($image = $request->file('bannerImage')) {
                $destinationPath = 'bannerImage/';
                $bannerImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $bannerImage);
                $bannerImage = "$bannerImage";
            }else{
                $bannerImage = "";
            }
            $updateData = array('bannerImage'=>$bannerImage);
            $banId      = $validated['banId'];
            $user       = tbl_banner::updateBanner($updateData,$banId);
            if($user==1){
                $data['error'] = array('error'=>'Update Banner successfully');
                $data['getEditBannerList'] = tbl_banner::getEditBannerList($banId);
                $data['color'] = "green";
                return view('admin.editBanner',$data);
            }else{
                return Redirect::to('admin-login');
            }
        } else {
            $res = Session::get('usersession');
            if(!empty($res)){
                $data['getBannerList'] = tbl_banner::getBannerList();
                return view('admin.add_banner',$data);
            }else{
                return Redirect::to('admin-login');
            }
        }

    }

    function add_blogs(){
        $res = Session::get('usersession');
        if(!empty($res)){
            $data['getBlogList'] = tbl_blog::getBlogList();
            return view('admin.blogs',$data);
        }else{
            return Redirect::to('admin-login');
        }

    }

    function blogs(Request $request){
        if(isset($_POST['submit']))
        {            
            $validated         =  $request->validate([
                'blogTitle'    => 'required',
                'blogDate'     => 'required', 
                'description'  => 'required',
                'blogImage'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            if ($image = $request->file('blogImage')) {
                $destinationPath = 'blogImage/';
                $blogImage       = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $blogImage);
                $blogImage = "$blogImage";
            }else{
                $blogImage = "";
            }

            $blogTitle   = $validated['blogTitle'];
            $blogDate    = $validated['blogDate'];
            $description = $validated['description'];
            $insertdata  = array('blogImage'=>$blogImage,'blogTitle'=>$blogTitle,'blogDate'=>$blogDate,'description'=>$description);
            $user        = tbl_blog::addBlogs($insertdata);
            if($user==1){
                $data['error']       = array('error'=>'Add Blogs successfully');
                $data['getBlogList'] = tbl_blog::getBlogList();
                $data['color']       = "green";
                return view('admin.blogs',$data);
            }else{
                return Redirect::to('admin-login');
            }
        } else {
            $res = Session::get('usersession');
            if(!empty($res)){
                $data['getBlogList'] = tbl_blog::getBlogList();
                return view('admin.blogs',$data);
            }else{
                return Redirect::to('admin-login');
            }
        }

    }

    function deleteblog(Request $request){
        if(isset($_POST['submit']))
        {
            $validated         =  $request->validate([
                'blogId'       => 'required|integer',
            ]);
             $blogId  = $validated['blogId'];
             $user = tbl_blog::deleteblog($blogId);
            if($user==1){
                $data['getBlogList'] = tbl_blog::getBlogList();
                $data['error']       = array('error'=>'Deleted Blog successfully');
                $data['color']       = "green";
                return view('admin.blogs',$data);
            }else{
                return Redirect::to('admin-login');
            }

       }else{

            $res = Session::get('usersession');
            if(!empty($res)){
                $data['getBlogList'] = tbl_blog::getBlogList();
                return view('admin.blogs',$data);
            }else{
                return Redirect::to('admin-login');
            }
        }
    }

    function add_gallery(){
        $res = Session::get('usersession');
        if(!empty($res)){
            $data['getGalleryList'] = tbl_gallerys::getGalleryList();
            return view('admin.add_gallery',$data);
        }else{
            return Redirect::to('admin-login');
        }

    }

    function testimonial(){
        $res = Session::get('usersession');
        if(!empty($res)){
            $data['getTestimonialList'] = tbl_testimonials::getTestimonialList();
            return view('admin.testimonial',$data);
        }else{
            return Redirect::to('admin-login');
        }
    }

    function addservices(){
        $res = Session::get('usersession');
        if(!empty($res)){
            $data['getServicesList'] = tbl_services::getServicesList();
            return view('admin.addservices',$data);
        }else{
            return Redirect::to('admin-login');
        }
    }

    function addservice(Request $request){

        if(isset($_POST['submit']))
        {            
            $validated             =  $request->validate([
                'servicesTitle'    => 'required',
                'servicesDesc'     => 'required',
                'servicesImage'    => 'required',
            ]);
            if ($image = $request->file('servicesImage')) {
                $destinationPath = 'servicesImage/';
                $servicesImage       = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $servicesImage);
                $servicesImage = "$servicesImage";
            }else{
                $servicesImage = "";
            }

            $servicesTitle   = $validated['servicesTitle'];
            $servicesDesc    = $validated['servicesDesc'];
            $insertdata      = array('servicesImage'=>$servicesImage,'servicesTitle'=>$servicesTitle,'servicesDesc'=>$servicesDesc);
            $user            = tbl_services::addservices($insertdata);
            if($user==1){
                $data['error']           = array('error'=>'Add Services successfully');
                $data['getServicesList'] = tbl_services::getServicesList();
                $data['color']           = "green";
                return view('admin.addservices',$data);
            }else{
                return Redirect::to('admin-login');
            }
        } else {
            $res = Session::get('usersession');
            if(!empty($res)){
                $data['getServicesList'] = tbl_services::getServicesList();
                return view('admin.addservices',$data);
            }else{
                return Redirect::to('admin-login');
            }
        }
    }

    function deleteServices(Request $request){

        if(isset($_POST['submit']))
        {
            $validated         =  $request->validate([
                'serviceId'        => 'required|integer',
            ]);
             $serviceId  = $validated['serviceId'];
             $user = tbl_services::deleteServices($serviceId);
            if($user==1){
                
                $data['error']       = array('error'=>'Deleted Services successfully');
                $data['color']       = "green";
                $data['getServicesList'] = tbl_services::getServicesList();
                return view('admin.addservices',$data);
            }else{
                return Redirect::to('admin-login');
            }

       }else{

            $res = Session::get('usersession');
            if(!empty($res)){
                $data['getServicesList'] = tbl_services::getServicesList();
                return view('admin.addservices',$data);
            }else{
                return Redirect::to('admin-login');
            }
        }

    }


    function addtestimonial(Request $request){
        if(isset($_POST['submit']))
        {            
            $validated         =  $request->validate([
                'testDesc'     => 'required',
                'testDate'     => 'required', 
                'testRate'     => 'required',
                'parentName'   => 'required',
                'testiImage'   => 'required|image|max:2048',
            ]);
            if ($image = $request->file('testiImage')) {
                $destinationPath = 'testiImage/';
                $testiImage       = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $testiImage);
                $testiImage = "$testiImage";
            }else{
                $testiImage = "";
            }
            
            $testRate    = $validated['testRate'];
            $testDate    = $validated['testDate'];
            $testDesc    = $validated['testDesc'];
            $parentName  = $validated['parentName'];
            $insertdata  = array('testiImage'=>$testiImage,'testRate'=>$testRate,'testDate'=>$testDate,'testDesc'=>$testDesc,'parentName'=>$parentName);
            
            $user        = tbl_testimonials::addtestimonial($insertdata);
            if($user==1){
                $data['error']       = array('error'=>'Add Testimonial successfully');
                $data['getTestimonialList'] = tbl_testimonials::getTestimonialList();
                $data['colors']       = "green";
                return view('admin.testimonial',$data);
            }else{
                return Redirect::to('admin-login');
            }
        } else {
            $res = Session::get('usersession');
            if(!empty($res)){
                $data['getTestimonialList'] = tbl_testimonials::getTestimonialList();
                return view('admin.testimonial',$data);
            }else{
                return Redirect::to('admin-login');
            }
        }

    }

    function deletetestimonial(Request $request){
        if(isset($_POST['submit']))
        {
            $validated         =  $request->validate([
                'testId'        => 'required|integer',
            ]);
             $testId  = $validated['testId'];
             $user = tbl_testimonials::deletetestimonial($testId);
            if($user==1){
                $data['getTestimonialList'] = tbl_testimonials::getTestimonialList();
                $data['error']        = array('error'=>'Deleted Testimonial Id successfully');
                $data['colors']       = "green";
                return view('admin.testimonial',$data);
            }else{
                return Redirect::to('admin-login');
            }

        }else{

            $res = Session::get('usersession');
            if(!empty($res)){
                $data['getTestimonialList'] = tbl_testimonials::getTestimonialList();
                return view('admin.testimonial',$data);
            }else{
                return Redirect::to('admin-login');
            }
        }
    }

    function addgallery(Request $request){        
        if(isset($_POST['submit'])){
            
            $validated         =  $request->validate([
                'galleryImage' => 'required',
            ]);
            $user = "";
            if($request->hasfile('galleryImage'))
            {
                foreach($request->file('galleryImage') as $key => $file)
                {
                    $destinationPath = 'galleryImage/';
                    $galleryImage       = date('YmdHis') . "." . $file->getClientOriginalExtension();
                    $file->move($destinationPath, $galleryImage);
                    $insertdata  = array('galImages'=>$galleryImage);
                    $user = tbl_gallerys::addGalleryImages($insertdata);
                }
            }
            if($user==1){  
                $data['error']       = array('error'=>'Add Gallery Images successfully');
                $data['color']       = "green";
                $data['getGalleryList'] = tbl_gallerys::getGalleryList();
                return view('admin.add_gallery',$data);
            }else{
                return Redirect::to('admin-login');
            }

       }else{
            $res = Session::get('usersession');
            if(!empty($res)){
                $data['getGalleryList'] = tbl_gallerys::getGalleryList();
            return view('admin.add_gallery',$data);
            }else{
                return Redirect::to('admin-login');
            }
        }
    }


    
    function addteacher(Request $request){
        if(isset($_POST['submit']))
        {            
            $validated           =  $request->validate([
                'testDesc'       => 'required', 
                'testRate'       => 'required',
                'teacherHead'    => 'required',
                'teacherImage'   => 'required',
            ]);
            if ($image = $request->file('teacherImage')) {
                $destinationPath = 'teacherImage/';
                $teacherImage       = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $teacherImage);
                $teacherImage = "$teacherImage";
            }else{
                $teacherImage = "";
            }
            
            $testRate    = $validated['testRate'];
            $testDesc    = $validated['testDesc'];
            $teacherHead = $validated['teacherHead'];
            $insertdata  = array('teacherImage'=>$teacherImage,'testRate'=>$testRate,'testDesc'=>$testDesc,'teacherHead'=>$teacherHead);
            
            $user        = tbl_teacher::addteacher($insertdata);
            if($user==1){
                $data['error']       = array('error'=>'Add Teacher successfully');
                $data['getTeacherList'] = tbl_teacher::getTeacherList();
                $data['colors']       = "green";
                return view('admin.add_teacher',$data);
            }else{
                return Redirect::to('admin-login');
            }
        } else {
            $res = Session::get('usersession');
            if(!empty($res)){
                $data['getTeacherList'] = tbl_teacher::getTeacherList();
                return view('admin.add_teacher',$data);
            }else{
                return Redirect::to('admin-login');
            }
        }

    }

    function deleteteacherId(Request $request){
        if(isset($_POST['submit']))
        {
            $validated         =  $request->validate([
                'teachId'        => 'required|integer',
            ]);
             $teachId  = $validated['teachId'];
             $user = tbl_teacher::deleteteacherId($teachId);
            if($user==1){
                $data['getTeacherList'] = tbl_teacher::getTeacherList();
                $data['error']        = array('error'=>'Deleted teacher Id successfully');
                $data['colors']       = "green";
                return view('admin.add_teacher',$data);
            }else{
                return Redirect::to('admin-login');
            }

         }else{

            $res = Session::get('usersession');
            if(!empty($res)){
                $data['getTeacherList'] = tbl_teacher::getTeacherList();
                return view('admin.add_teacher',$data);
            }else{
                return Redirect::to('admin-login');
            }
        }
    }


    function add_teacher(){
        $res = Session::get('usersession');
        if(!empty($res)){
            $data['getTeacherList'] = tbl_teacher::getTeacherList();
            return view('admin.add_teacher',$data);
        }else{
            return Redirect::to('admin-login');
        }
    }

    function deleteImages(Request $request){
        if(isset($_POST['submit']))
        {
            $validated         =  $request->validate([
                'galId'        => 'required|integer',
            ]);
             $galId  = $validated['galId'];
             $user = tbl_gallerys::deleteImages($galId);
            if($user==1){
                
                $data['error'] = array('error'=>'Deleted Banner successfully');
                $data['getGalleryList'] = tbl_gallerys::getGalleryList();
                return view('admin.add_gallery',$data);       
            }else{
                return Redirect::to('admin-login');
            }

        }else{

            $res = Session::get('usersession');
            if(!empty($res)){
                $data['getGalleryList'] = tbl_gallerys::getGalleryList();
                return view('admin.add_gallery',$data);
            }else{
                return Redirect::to('admin-login');
            }
        }
    }














}
