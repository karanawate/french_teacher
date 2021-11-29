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

public function otpSend(Request $request)
{

    $UserMobile = $request->UserMobile;

    $query      = DB::table('tbl_login')
                ->where('UserMobile',$UserMobile)
                ->get();

    if(!$query->isEmpty($query))
    {
      
        $UserMobile = $request->UserMobile;
        $message    = trim("is Your OTP for VEDIC TREE KIDS LEARNING APP login For further details please visit our website www.vedictreeschool.online");
        $otpNumber  = rand(0000,9999); 
        $res        = $this->sendwebsms($message,$otpNumber,$UserMobile);
    }else{
        echo "MOBILE NO IS NOT FOUND";
    }
}



    function sendwebsms($message,$otpNumber,$UserMobile)
    {

        $curl = curl_init();
    
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://2factor.in/API/V1/64423750-ccff-11eb-8089-0200cd936042/SMS/".$UserMobile."/".$otpNumber."/EVEDIC",
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

    









































}
