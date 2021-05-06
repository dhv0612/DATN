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
Route::get('/jobs-list',[HomeController::class, 'jobs_list']);
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
Route::get('/list-exam-user/{jobid}',[UserController::class, 'list_exam_user']);
Route::get('/start-exam/{examid}',[UserController::class, 'start_exam']);
Route::post('/send-exam/{examid}',[UserController::class, 'send_exam']);


//Employer
Route::get('/employer',[EmployerController::class, 'employer']);
Route::post('/check-login-employer',[EmployerController::class, 'check_login_employer']);
Route::get('/dashboard-employer',[EmployerController::class, 'dashboard_employer']);
Route::get('/list-job-employer',[EmployerController::class, 'list_job_employer']);
Route::get('/logout-employer',[EmployerController::class, 'logout_employer']);
Route::get('/delete-job/{jobid}',[EmployerController::class, 'delete_job']);
Route::get('/edit-job/{jobid}',[EmployerController::class, 'edit_job']);
Route::post('/update-job-employer/{jobid}',[EmployerController::class, 'update_job_employer']);
Route::get('/add-job-employer',[EmployerController::class, 'add_job_employer']);
Route::post('/save-job-employer',[EmployerController::class, 'save_job_employer']);
Route::get('/list-exam-employer',[EmployerController::class, 'list_exam_employer']);
Route::get('/edit-exam/{examid}',[EmployerController::class, 'edit_exam']);
Route::get('/delete-exam/{examid}',[EmployerController::class, 'delete_exam']);
Route::post('/update-exam-employer/{examid}',[EmployerController::class, 'update_exam_employer']);
Route::get('/add-exam-employer',[EmployerController::class, 'add_exam_employer']);
Route::post('/save-exam-employer',[EmployerController::class, 'save_exam_employer']);
Route::get('/view-question-exam/{examid}',[EmployerController::class, 'view_question_exam']);
Route::post('/import-question',[EmployerController::class, 'import_question']);
Route::get('/delete-question/{questionid}',[EmployerController::class, 'delete_question']);
Route::get('/forgot-password-employer',[EmployerController::class, 'forgot_password_employer']);
Route::post('/recovery-password-employer',[EmployerController::class, 'recovery_password_employer']);
Route::get('/forgot-password-employer',[EmployerController::class, 'forgot_password_employer']);
Route::get('/update-pass-employer',[EmployerController::class, 'update_pass_employer']);
Route::post('/reset-pass-employer',[EmployerController::class, 'reset_pass_employer']);
Route::get('/user-apply-job/{jobid}',[EmployerController::class, 'user_apply_job']);
Route::get('/cancle-user/{userid}',[EmployerController::class, 'cancle_user']);
Route::get('/accept-user/{userid}',[EmployerController::class, 'accept_user']);
Route::get('/list-user-test',[EmployerController::class, 'list_user_test']);
