<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_login;
use App\Models\tbl_banner;
use App\Models\tbl_blog;
use App\Models\tbl_gallerys;
use App\Models\tbl_testimonials;
use App\Models\tbl_services;
use App\Models\tbl_contacts;
use App\Models\tbl_comments;
use App\Models\tbl_leads;
use App\Models\tbl_teacher;
use App\Models\tbl_otplogs;

use Redirect;
use Session;
use Mail;


class UserController extends Controller
{
    
    public function index()
    {
        $data['getBlogList'] = tbl_blog::getBlogList();
        $data['getTestimonialList'] = tbl_testimonials::getTestimonialList();
        $data['getTeacherList'] = tbl_teacher::getTeacherList();
        return view('home',$data);
    }

    public function gallerypic()
    {
        $data['getGalleryList'] = tbl_gallerys::getGalleryList();
        return view('gallerypic',$data);
    }
    
    public function blogs()
    {
        $data['getBlogList'] = tbl_blog::getBlogList();
       return view('blogs',$data);
    }

    function contact(){
        return view('contact');
    }

    function aboutus(){
        return view('aboutus');
    }

    function services(){
        $data['services'] = tbl_services::getServicesList();
        return view('services',$data);
    }

    function blog_details($id){
        $data['getBlogList'] = tbl_blog::getBlogListId($id);
        $data['getComments'] = tbl_comments::getComments($id);
        $data['count']       = tbl_comments::count($id);
        return view('blog_details',$data);
    }

    function contactus(Request $request){

        if(isset($_POST['submit']))
        {            
            $validated             =  $request->validate([
                'name'             => 'required',
                'email'            => 'required',
                'subject'          => 'required',
                'message'          => 'required',
            ]);
            
            $name            = $validated['name'];
            $email           = $validated['email'];
            $subject         = $validated['subject'];
            $message         = $validated['message'];
            $insertdata      = array('name'=>$name,'email'=>$email,'subject'=>$subject,'message'=>$message);
            $user            = tbl_contacts::addcontactus($insertdata);
            if($user==1){
                $data['error']           = array('error'=>'Thank you for Contact us');
                $data['getServicesList'] = tbl_services::getServicesList();
                $data['color']           = "green";
                return view('contact',$data);
            }else{
                return Redirect::to('admin-login');
            }
        } 

    }

    function contactme(Request $request){
         
        if(isset($_POST['submit']))
        {            
            $validated             =  $request->validate([
                'name'             => 'required',
                'email'            => 'required',
                'subject'          => 'required',
                'message'          => 'required',
            ]);
            
            $name            = $validated['name'];
            $email           = $validated['email'];
            $subject         = $validated['subject'];
            $message         = $validated['message'];
            $insertdata      = array('name'=>$name,'email'=>$email,'subject'=>$subject,'message'=>$message);
            $user            = tbl_contacts::addcontactus($insertdata);
            if($user==1){
                $data['error']           = array('error'=>'Thank you for Contact us');
                $data['getServicesList'] = tbl_services::getServicesList();
                $data['color']           = "green";
                return Redirect::to('/')->with('status', ' Thank you for Contact us !');
            }else{
                return Redirect::to('/');
            }
        } 

    }


    function leadform(Request $request){

            $validated             =  $request->validate([
                'studentName'      => 'required',
                'studentEmail'     => 'required',
                'studentMobile'    => 'required',
                'fkclass_id'       => 'required',
            ]);
           
            $studentName    = $validated['studentName'];
            $studentEmail   = $validated['studentEmail'];
            $studentMobile  = $validated['studentMobile'];
            $fkclass_id     = $validated['fkclass_id'];
            
            $insertdata     = array('studentName'=>$studentName,'studentEmail'=>$studentEmail,'studentMobile'=>$studentMobile,'fkclass_id'=>$fkclass_id);
            Mail::send('emails.welcome', array('userdata' => $insertdata), function($message)
            {
                $message->to('sojwal.vedictree@gmail.com', 'Vedic Tree School')->subject('Welcome!');
            });
            $user           = tbl_leads::addleadform($insertdata);
            if($user==1){
                return Redirect::to('admin-login');
            }else{
                return Redirect::to('admin-login');
            }
     
    }

    function comments(Request $request){

        if(isset($_POST['submit']))
        {            
            $validated               =  $request->validate([
                'commentMsg'         => 'required',
                'blogid'             => 'required|integer',
                'userName'           => 'required'
            ]);
            $commentMsg      = $validated['commentMsg'];
            $blogid          = $validated['blogid'];
            $userName        = $validated['userName'];
            $insertdata      = array('commentMsg'=>$commentMsg,'blogid'=>$blogid,'userName'=>$userName);
            $user            = tbl_comments::addcomments($insertdata);
            if($user==1){
                $data['error']           = array('error'=>'Thank you for Contact us');
                $data['getServicesList'] = tbl_services::getServicesList();
                $data['color']           = "green";
                return Redirect::to('blogs');
            }else{
                return Redirect::to('admin-login');
            }
        } 

    }

    function forgetpass(){
        return view('admin.forgetpass');
    }

    function getotpnumber(Request $request){
        $validated               =  $request->validate([
            'UserMobile' => 'required|digits:10', 
        ]);

        if(!$validated){
            echo "2";
        }else{

            $UserMobile      = $validated['UserMobile'];
            $otpNumber       = rand(0000,9999);

            $result = tbl_login::checkMobile($UserMobile);
            if($result==1){
                $message = trim("is Your OTP for VEDIC TREE KIDS LEARNING APP login For further details please visit our website www.vedictreeschool.online");

                    $res = $this->sendsmsweb($UserMobile,$otpNumber,$message);
                    if($res=="fail" || $res=="InsufficientBalance")
                    {
                        $data_otp_array = array(
                        'UserMobile'  		=> $UserMobile,
                        'otpNumber'  		=> $otpNumber,
                        'user_OTP_Status'  	=> 2         //failed sending sms
                        );
                    }else{
                        $data_otp_array = array(
                        'UserMobile'  		=> $UserMobile,
                        'otpNumber'  		=> $otpNumber,
                        'user_OTP_Status'  	=> 1          //success sending sms
                        );

                    }
                $res = tbl_otplogs::insertlogs($data_otp_array);  
                if($res==1){
                    echo "1";
                }else{
                    echo "0";
                }
            }else{
                echo "2";
            }
        }

    }

     function sendsmsweb($mobileno,$otpNumber,$message){
    
        $curl = curl_init();
    
            curl_setopt_array($curl, array(
              CURLOPT_URL => "http://2factor.in/API/V1/64423750-ccff-11eb-8089-0200cd936042/SMS/".$mobileno."/".$otpNumber."/EVEDIC",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
              CURLOPT_POSTFIELDS => "",
              CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded"
              ),
            ));
    
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
              return $msg = "cURL Error #:" . $err;
            } else {
    
                $response = json_decode($response);
                if($response->Status=="Success"){
                    return "Success";
                }else{
                    return "fail";
                }
            }
        
    }


    function otpnumbercheck(Request $request){
        $validated      =  $request->validate([
            'otpnumber' => 'required|digits:10', 
        ]);
        if(!$validated)
        {
            echo "2";
        } else {

            $otpnumber  = $validated['otpnumber'];
            $res        = tbl_otplogs::otpnumbercheck($otpnumber);  
            if($res==1){
                echo "1";
            }else{
                echo "0";
            }
        }

    }

    function updatepass(Request $request){

        if(isset($_POST['submit']))
        {            
            $validated              =  $request->validate([
                'otpnumber'         => 'required|integer',
                'UserMobile'        => 'required|integer|digits:10',
                'password'          => 'required',
                'cpassword'         => ['required'],
            ]);
            $commentMsg      = $validated['otpnumber'];
            $UserMobile      = $validated['UserMobile'];
            $password        = $validated['password'];
            $updatedata      = array('UserPassword'=>sha1($password),'UserMobile'=>$UserMobile,'adminStatus'=>1);
            $user            = tbl_login::updatepass($updatedata,$UserMobile);
            if($user==1){
                $data['error']           = array('error'=>'Password Updated Successfully');
                $data['color']           = "green";
                return Redirect::to('admin-login');
            }else{
                return Redirect::to('admin-login');
            }
        } 

    }









    
}
