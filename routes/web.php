<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\admin;
use App\Http\Controllers\ReportcardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AssigmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentLogin;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[UserController::class,'index']);
Route::get("add-teacher",[admin::class,'add_teacher']);
Route::get("add-banner",[admin::class,'add_banner']);
Route::get("gallerypic",[UserController::class,'gallerypic']);
Route::get("contact",[UserController::class,'contact']);
Route::get("blogs",[UserController::class,'blogs']);
Route::get("about-us",[UserController::class,'aboutus']);
Route::get("services",[UserController::class,'services']);
Route::get("forgetpass",[UserController::class,'forgetpass']);




//admin controller
Route::get("admin-login",[admin::class,'index']);
Route::get("add-blogs",[admin::class,'add_blogs']);
Route::get("dashboard",[admin::class,'dashboard']);
Route::get("logout",[admin::class,'logout']);
Route::get("setting",[admin::class,'setting']);
Route::get("edit/{id}",[admin::class,'editBanner']);
Route::get("Servicesedit/{id}",[admin::class,'Servicesedit']);
Route::get("add-gallery",[admin::class,'add_gallery']);
Route::get("testimonial",[admin::class,'testimonial']);
Route::get("addservices",[admin::class,'addservices']);
Route::get("sort",[admin::class,'sort']);




//setting
Route::post("store",[admin::class,'storedata']);
Route::post("updatesetting",[admin::class,'updatesetting']);
Route::post("addbanner",[admin::class,'addbanner']);
Route::post("deleteBanner",[admin::class,'deleteBanner']);
Route::post("updateBanner",[admin::class,'updateBanner']);
Route::post("blogs",[admin::class,'blogs']);
Route::post("deleteblog",[admin::class,'deleteblog']);
Route::post("addgallery",[admin::class,'addgallery']);
Route::post("addtestimonial",[admin::class,'addtestimonial']);
Route::post("addteacher",[admin::class,'addteacher']);
Route::post("deletetestimonial",[admin::class,'deletetestimonial']);
Route::post("addservice",[admin::class,'addservice']);
Route::post("deleteServices",[admin::class,'deleteServices']);
Route::post("contactus",[UserController::class,'contactus']);
Route::post("comments",[UserController::class,'comments']);
Route::post("contactme",[UserController::class,'contactme']);
Route::post("leadform",[UserController::class,'leadform']);
Route::post("deleteteacherId",[admin::class,'deleteteacherId']);
Route::post("deleteImages",[admin::class,'deleteImages']);
Route::post("getotpnumber",[UserController::class,'getotpnumber']);
Route::post("otpnumbercheck",[UserController::class,'otpnumbercheck']);
Route::post("updatepass",[UserController::class,'updatepass']);
Route::get("blog-details/{id}",[UserController::class,'blog_details']);



// Report card Routes 
  Route::resource("report-card",ReportcardController::class);
  Route::get("students", [StudentController::class, 'students']);

  Route::resource('assigments', AssigmentController::class);
  Route::get('myfunction', [AssigmentController::class, 'myfunction']);

 /* profile */
 Route::get('profile',[ProfileController::class, 'index']);
 Route::post('profile-update',[ProfileController::class, 'profile_update']);

 /*  student login */
 Route::get('login',[StudentLogin::class,'index']);
 Route::post('login-check',[StudentLogin::class,'loginCheck']);
 Route::get('user-logout',[StudentLogin::class,'userLogout']);
 Route::get('forget-password',[StudentLogin::class, 'forgetPassword']);
 Route::post('otp-send',[StudentLogin::class,'otpSend']);
 Route::post('otp_check_number_valid',[StudentLogin::class,'otp_check_number']);
 Route::post('login-check-user',[StudentLogin::class,'loginCheckUser']);
 














