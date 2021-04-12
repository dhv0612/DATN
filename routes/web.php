<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Route::get('/',[HomeController::class, 'index']);
Route::get('/login-user',[HomeController::class, 'login_user']);
Route::get('/signup-user',[HomeController::class, 'signup_user']);
Route::post('/jobs-list',[HomeController::class, 'jobs_list']);
Route::get('/jobs-details/{jobid}',[HomeController::class, 'job_detail']);