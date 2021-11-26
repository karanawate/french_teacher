<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use Redirect;
use DB;
use App\Models\tbl_login;

class ProfileController extends Controller
{   
        public function index()
        {
            return view('admin.profile.edit');
        }
        
        public function profile_update(Request $request)
        {
            $usersession = Session::get('usersession');
            if(!empty($usersession))
            {
                $query = DB::table('tbl_login')
                         ->where('logId', $request->logId)
                         ->update(
                             [
                                 'UserEmail'  => $request->UserEmail,
                                 'UserMobile' => $request->UserMobile,
                                 'UserName'   => $request->UserName
                            ]
                        );
                        Session::flash('message', 'Profile Update Successfully'); 
            }else
            {

            }
        }
}
