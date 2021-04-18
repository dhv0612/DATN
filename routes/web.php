<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployerController;
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
//     return view('layout');
// });
//Home
Route::get('/',[HomeController::class, 'index']);
Route::get('/login-user',[HomeController::class, 'login_user']);
Route::get('/signup-user',[HomeController::class, 'signup_user']);
Route::post('/jobs-list',[HomeController::class, 'jobs_list']);
Route::get('/jobs-details/{jobid}',[HomeController::class, 'job_detail']);

//User
Route::post('/check-login-user',[UserController::class, 'check_login_user']);
Route::get('/logout-user',[UserController::class, 'logout_user']);
Route::get('/user-save-job/{jobid}',[UserController::class, 'user_save_job']);
Route::get('/cancle-save-job/{jobid}',[UserController::class, 'cancle_save_job']);
Route::get('/apply-job/{jobid}',[UserController::class, 'apply_job']);
Route::post('/save-user',[UserController::class, 'save_user']);
Route::get('/profile-user',[UserController::class, 'profile_user']);
Route::get('/edit-profile-user',[UserController::class, 'edit_profile_user']);
Route::post('/save-file-user',[UserController::class, 'save_file_user']);
Route::post('/save-info-user',[UserController::class, 'save_info_user']);
Route::get('/jobs-candidates',[UserController::class, 'jobs_candidates']);
Route::get('/jobs-save',[UserController::class, 'jobs_save']);
Route::post('/apply-job-filecv/{jobid}',[UserController::class, 'apply_job_filecv']);
Route::get('/login-facebook',[UserController::class, 'login_facebook']);
Route::get('/user/callback',[UserController::class, 'callback_facebook']);

//Employer
Route::get('/employer',[EmployerController::class, 'employer']);
Route::post('/check-login-employer',[EmployerController::class, 'check_login_employer']);
Route::get('/dashboard-employer',[EmployerController::class, 'dashboard_employer']);