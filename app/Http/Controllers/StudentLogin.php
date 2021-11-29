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
            $mobile_number = $request->studentMobile;
            $UserPassword  = $request->UserPassword;
            return redirect()->back();
        }else
        {
            redirect::to('web.web_login');
        }
    }
}
