<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
define("URL", "https://dhv0612.com/DATN");

class EmployerController extends Controller
{
    public function check_login(){
        $employerid = Session::get('employerid');
        if  ($employerid){
            return Redirect::to( 'dashboard' );
        }else{
            return Redirect::to( 'employer' )->send();
        }       
    }

    public function employer(){
        return view ('pages.employer.login_employer');
    }


    public function check_login_employer(Request $request){
        $data = array();
        $data['Tai_khoan'] = $request->username;
        $data['Mat_khau'] = md5($request->password) ;
        $check_employer = Employer::where('Tai_khoan', $data['Tai_khoan'])->where('Mat_khau', $data['Mat_khau'])->first();
        if ($check_employer){
            Session::put('employerid', $check_employer->Ma_nha_tuyen_dung);
            Session::put('employername', $check_employer->Ten_cong_ty);
            // setcookie('userid', $check_user->userid, time() + (86400 * 30 *12 *100), "/");
            // setcookie('username', $check_user->username, time() + (86400 * 30 *12 *100), "/");            
            // return redirect(session('link'));
            return Redirect::to('/employer'); 
        }
        else
        {
            Session::put('notification', 'Tài khoản hoặc mât khẩu không chính xác. Thử lại');
            return Redirect::to('employer');
        }   
    }
    public function dashboard_employer(){
        return view ('pages.employer.home_employer');
    }
}
