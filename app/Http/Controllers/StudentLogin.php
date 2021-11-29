<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_login;
use App\Http\Requests\loginRequest;
use Redirect;
use Session;
use DB;
class StudentLogin extends Controller
{
    public function index()
    {
        return view('web.web_login');
    }

    public function loginCheck(loginRequest $request)
    {
        if(isset($_POST['submit']))
        {
            $studentMobile = $request->studentMobile;
            $UserPassword  = sha1($request->UserPassword);
            $user  = DB::table('tbl_login')
                      ->where('UserMobile', $studentMobile)
                      ->where('UserPassword', $UserPassword)
                      ->get();

                if(!$user->isEmpty())
                {
                    Session::put('usersession', $user);
                    return redirect()->back();
                }else{
                    echo "something wrong";
                }  
        }else
        {
            redirect::to('web.web_login');
        }
    }


public function userLogout()
{
    $usersession = Session::get('usersession');
      if($usersession)
      {
        Session::forget('usersession');
        Session::flush();
        return redirect::to('login');
      }else
      {
        return redirect::to('login');
      }
}

public function forgetPassword()
{    
     return view('web_forgetPassword');    
}

public function otpSend()
{
    echo "Hello";
}








































}
