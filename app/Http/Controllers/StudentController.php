<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;
class StudentController extends Controller
{
    public function students()
    {
        $usersession = Session::get('usersession');
        if(!empty($usersession)){
            $students = DB::table('students')->get();
            return view('admin.students.index', compact('students'));        
        }else{
            return Redirect::to('admin-login');
        }
    }



}
