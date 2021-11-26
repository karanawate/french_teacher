<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\tbl_login;

class ProfileController extends Controller
{   
        public function index()
        {
            return view('admin.profile.edit');
        }
        
        public function profile_update()
        {
            // 
            echo "Hello";
        }
}
