<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentLogin extends Controller
{
    public function index()
    {
        return view('web.web_login');
    }
}
