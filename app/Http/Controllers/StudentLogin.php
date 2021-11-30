<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_login;
use App\Http\Requests\loginRequest;
use Redirect;
use Session;
use DB;
use App\Http\Requests\logincheckRequest;
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
                    return redirect()->back()->with('user_danger','Password Credentials Wrog Please Try Again');
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
          if($res == 'Success')
          {
              /* otp send on this mobile no  */
              echo "1";
              $query = DB::table('logsotps')->insert([
                  'UserMobile'       => $UserMobile,
                  'otpNumber'        =>$otpNumber,
                  'user_OTP_Status'  =>1
              ]);

          }else{
              /* something went wrong plese try again */
              echo "3";
              $query = DB::table('logsotps')->insert([
                'UserMobile'       => $UserMobile,
                'otpNumber'        =>$otpNumber,
                'user_OTP_Status'  => 3
            ]);

          }
          
    }else{
       /* if user not found */
        echo "2";
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

    



    public function otp_check_number(Request $request)
    {
         $otpNumber = $request->otpNumber;
         $query     = DB::table('logsotps')
                    ->where('otpNumber', $otpNumber)
                    ->where('user_OTP_Status',1)
                    ->get();
         if(!$query->isEmpty())
         {
             /* varified user */
            echo "5";

         }else
         {
             // otp not be varified
            echo "6";
         }           

    }

    public function loginCheckUser(Request $request)
    {
        
        $update_query = DB::table('tbl_login')
                      ->where('UserMobile',$request->UserMobile)
                      ->update([
                         'UserMobile'    =>$request->UserMobile,
                         'UserPassword'  =>sha1($request->UserPassword)     
                ]);
        if($update_query == 1)
        {
            Session::flash("success_update",'Password Updated Successfully');
            return Redirect::to('login');
        }else
        {
            Session::flash('success_update','Something went wrong');
            return redirect::to('login');
        }


    }





































}
