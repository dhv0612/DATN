<?php
namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Imports\ExcelImports;
use App\Models\Employer;

use Carbon\Carbon;
use App\Models\Jobs;
use App\Models\Question;
use App\Models\User;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

// use App\Imports\e
define( 'URL', 'https://dhv0612.com/DATN' );

class EmployerController extends Controller {
    public function Checklogin() {
        $employerid = Session::get( 'employerid' );
        if ( $employerid ) {
            return Redirect::to( 'dashboard-employer' );
        } else {
            return Redirect::to( 'employer' )->send();
        }
    }

    public function employer() {
        return view ( 'pages.employer.login_employer' );
    }

    public function check_login_employer( Request $request ) {
        $data = array();
        $data['Tai_khoan'] = $request->username;
        $data['Mat_khau'] = md5( $request->password ) ;
        $check_employer = Employer::where( 'Tai_khoan', $data['Tai_khoan'] )->where( 'Mat_khau', $data['Mat_khau'] )->first();
        if ( $check_employer ) {
            Session::put( 'employerid', $check_employer->Ma_nha_tuyen_dung );
            Session::put( 'employername', $check_employer->Ten_cong_ty );
            return Redirect::to( '/dashboard-employer' );
        } else {
            Session::put( 'notification', 'Tài khoản hoặc mât khẩu không chính xác. Thử lại' );
            return Redirect::to( 'employer' );
        }
    }

    public function dashboard_employer() {
        $this->Checklogin();
        $employerid =  Session::get( 'employerid' );
        $employer = Employer::where( 'Ma_nha_tuyen_dung', $employerid )->first();
        $job = Jobs::where('Ma_nha_tuyen_dung', $employerid)->count();
        // $user_apply = DB::table('chi_tiet_ung_cu')->
        return view ( 'pages.employer.home_employer' )
        ->with( 'employer', $employer );
        // return response()->json($job);
    }

    public function list_job_employer() {
        $this->Checklogin();
        $employerid =  Session::get( 'employerid' );
        $employer = Employer::where( 'Ma_nha_tuyen_dung', $employerid )->first();
        $job_list = Jobs::where( 'Ma_nha_tuyen_dung', $employerid )->orderBy( 'Tieu_de', 'desc' )->get();
        return view ( 'pages.employer.list_jobs_employer' )
        ->with( 'employer', $employer )
        ->with( 'job_list', $job_list );
    }

    public function logout_employer() {
        Session::put( 'employerid', Null );
        Session::put( 'employername', Null );
        return Redirect::to( 'employer' );
    }

    public function edit_job( $jobid ) {

        $this->Checklogin();
        $place = DB::table( 'dia_diem' )->get();
        $branch = DB::table( 'nganh_nghe' )->get();

        $employerid =  Session::get( 'employerid' );
        $employer = Employer::where( 'Ma_nha_tuyen_dung', $employerid )->first();
        $job_detail = Jobs::where( 'Ma_bai_dang', $jobid )->where( 'Ma_nha_tuyen_dung', $employerid )->first();
        $info_exam = DB::table('thong_tin_kiem_tra')->where('Ma_bai_dang', $jobid)->get();
        $exam = DB::table('bai_kiem_tra')->where('Ma_nha_tuyen_dung', $employerid)->get();
        // $info_exam = DB::table('thong_tin_kiem_tra')->where('')
        if ( $job_detail ) {
            return view ( 'pages.employer.edit_jobs_employer' )
            ->with( 'place', $place )
            ->with( 'branch', $branch )
            ->with( 'employer', $employer )
            ->with('exam', $exam)
            ->with('info_exam', $info_exam)
            ->with( 'job_detail', $job_detail );
        } else {
            return Redirect::to ( 'dashboard-employer' )->with( 'employer', $employer );
        }

    }

    public function update_job_employer( $jobid, Request $request ) {
        $this->Checklogin();
        $employerid = Session::get( 'employerid' );
        $data['Tieu_de'] = $request->title;
        $data['Ma_nganh_nghe'] = $request->branch;
        $data['Ma_dia_diem'] = $request->place;
        $data['Dia_diem_lam_viec'] = $request->address;
        $data['Muc_luong'] = $request->salary;
        $data['Han_ung_tuyen'] = $request->deadline;
        $data['Yeu_cau'] = $request->res;
        $data['Mo_ta_cong_viec'] = $request->des;
        $data['Thong_tin_khac'] = $request->info;
        $data['Tieu_de_SEO'] = $request->tit_seo;
        $data['Mo_ta_SEO'] = $request->des_seo;
        $get_image = $request->file( 'img_seo' );
        if ( $get_image ) {
            date_default_timezone_set( 'Asia/Ho_Chi_Minh' );
            $date = date( 'dmYhis' );
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current( explode( '.', $get_name_image ) );

            $new_image = $date.'-'.$name_image.'.'.$get_image->getClientOriginalExtension();
            $get_image->move( 'public/upload/nhatuyendung/SEO', $new_image );
            $data['Hinh_anh_SEO'] = $new_image;
            DB::table( 'bai_dang_tuyen_dung' )->where( 'Ma_bai_dang', $jobid )->where( 'Ma_nha_tuyen_dung', $employerid )->update( $data );
        } else {
            DB::table( 'bai_dang_tuyen_dung' )->where( 'Ma_bai_dang', $jobid )->where( 'Ma_nha_tuyen_dung', $employerid )->update( $data );    
        }
        $exam_list = DB::table('bai_kiem_tra')->where('Ma_nha_tuyen_dung', $employerid)->get();
        $exam = $request->exam;
        foreach(  $exam_list  as $el){
            $data_el = array();
            $data_el['Trang_thai'] = 0;
            DB::table('thong_tin_kiem_tra')->where('Ma_bai_dang', $jobid)
            ->where('Ma_bai_kiem_tra',$el->Ma_bai_kiem_tra )
            ->update($data_el);
        }
        foreach($exam  as  $ex){
            $data_exam = array();
            $data_exam['Trang_thai'] = 1;
            DB::table('thong_tin_kiem_tra')
            ->where('Ma_bai_dang', $jobid )
            ->where('Ma_bai_kiem_tra', $ex)
            ->update($data_exam);
        }      
        return Redirect::to( 'list-job-employer' );
    }

    public function add_job_employer() {
        $this->Checklogin();
        $place = DB::table( 'dia_diem' )->get();
        $branch = DB::table( 'nganh_nghe' )->get();
        $employerid =  Session::get( 'employerid' );
        $employer = Employer::where( 'Ma_nha_tuyen_dung', $employerid )->first();
        $exam = DB::table('bai_kiem_tra')->where('Ma_nha_tuyen_dung', $employerid)->get();
        return view( 'pages.employer.add_list_jobs_employer' )
        ->with( 'place', $place )
        ->with( 'branch', $branch )
        ->with('exam', $exam)
        ->with( 'employer', $employer );
    }

    public function save_job_employer( Request $request ) {
        $this->Checklogin();
        date_default_timezone_set( 'Asia/Ho_Chi_Minh' );
        $employerid = Session::get( 'employerid' );
        $data['Ma_nha_tuyen_dung'] = $employerid;
        $data['Ngay_dang'] = date( 'Y/m/d' );
        $data['Tieu_de'] = $request->title;
        $data['Ma_nganh_nghe'] = $request->branch;
        $data['Ma_dia_diem'] = $request->place;
        $data['Dia_diem_lam_viec'] = $request->address;
        $data['Muc_luong'] = $request->salary;
        $data['Han_ung_tuyen'] = $request->deadline;
        $data['Yeu_cau'] = $request->res;
        $data['Mo_ta_cong_viec'] = $request->des;
        $data['Thong_tin_khac'] = $request->info;
        $data['Tieu_de_SEO'] = $request->tit_seo;
        $data['Mo_ta_SEO'] = $request->des_seo;
        $get_image = $request->file( 'img_seo' );
        if ( $get_image ) {
            $date = date( 'dmYhis' );
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current( explode( '.', $get_name_image ) );
            $new_image = $date.'-'.$name_image.'.'.$get_image->getClientOriginalExtension();
            $get_image->move( 'public/upload/nhatuyendung/SEO', $new_image );
            $data['Hinh_anh_SEO'] = $new_image;
            $jobid =Jobs::insertGetId( $data );            
        } else {
            $jobid=Jobs::insertGetId( $data );
        }

        $exam_list = DB::table('bai_kiem_tra')->where('Ma_nha_tuyen_dung', $employerid)->select('Ma_bai_kiem_tra')->get();
        $exam = $request->exam;
        foreach($exam_list as $el){
            $data_el = array();
            $data_el['Ma_bai_dang'] = $jobid;
            $data_el['Ma_bai_kiem_tra'] = $el->Ma_bai_kiem_tra;
            DB::table('thong_tin_kiem_tra')->insert($data_el);
        }
        if (isset($exam)){
            foreach( $exam as  $ex){
                // $examid =$exam_list[$i]->Ma_bai_kiem_tra;
                $data_exam = array();
                $data_exam['Ma_bai_dang'] = $jobid;
                $data_exam['Ma_bai_kiem_tra'] = $ex;
                $data_exam['Trang_thai'] = 1;
                DB::table('thong_tin_kiem_tra')->where('Ma_bai_dang', $jobid)->where('Ma_bai_kiem_tra',$ex )->update($data_exam);
            }
        }
     
        return Redirect::to( 'list-job-employer' );
        // return response()->json($exam);
    }

    public function list_exam_employer() {
        $this->Checklogin();
        $employerid =  Session::get( 'employerid' );
        $employer = Employer::where( 'Ma_nha_tuyen_dung', $employerid )->first();
        $exam_list = DB::table( 'bai_kiem_tra' )->where( 'Ma_nha_tuyen_dung', $employerid )->orderBy( 'Ma_bai_kiem_tra', 'desc' )->get();

        return view ( 'pages.employer.list_exam_employer' )
        ->with( 'employer', $employer )
        ->with( 'exam_list', $exam_list );
    }

    public function edit_exam( $examid ) {
        $this->Checklogin();
        $employerid =  Session::get( 'employerid' );
        $employer = Employer::where( 'Ma_nha_tuyen_dung', $employerid )->first();
        $exam_detail = DB::table( 'bai_kiem_tra' )->where( 'Ma_bai_kiem_tra', $examid )->where( 'Ma_nha_tuyen_dung', $employerid )->first();
        if ( isset( $exam_detail ) ) {
            return view ( 'pages.employer.edit_exam_employer' )->with( 'exam_detail', $exam_detail )->with( 'employer', $employer );
        } else {
            return Redirect::to ( 'dashboard-employer' )->with( 'employer', $employer );
        }

    }

    public function update_exam_employer( $examid, Request $request ) {
        $this->Checklogin();
        $employerid =  Session::get( 'employerid' );
        $employer = Employer::where( 'Ma_nha_tuyen_dung', $employerid )->first();
        $exam_detail = DB::table( 'bai_kiem_tra' )->where( 'Ma_bai_kiem_tra', $examid )->where( 'Ma_nha_tuyen_dung', $employerid );
        if ( isset( $exam_detail ) ) {
            $data = array();
            $data['Ten_bai_kiem_tra'] = $request->name;
            $data['Thoi_gian_lam'] = $request->time;
            $data['So_cau'] = $request->number_ques;
            $data['Diem_toi_thieu'] = $request->mark;
            DB::table( 'bai_kiem_tra' )
            ->where( 'Ma_bai_kiem_tra', $examid )
            ->where( 'Ma_nha_tuyen_dung', $employerid )
            ->update( $data );

            return Redirect::to( 'list-exam-employer' )
            ->with( 'employer', $employer );
        } else {
            return Redirect::to ( 'dashboard-employer' )
            ->with( 'employer', $employer );
        }
    }


    public function add_exam_employer() {
        $this->Checklogin();
        $employerid =  Session::get( 'employerid' );
        $employer = Employer::where( 'Ma_nha_tuyen_dung', $employerid )->first();
        return view( 'pages.employer.add_list_exam_employer' )
        ->with( 'employer', $employer );
    }

    public function save_exam_employer( Request $request ) {
        $this->Checklogin();
        $employerid =  Session::get( 'employerid' );
        $employer = Employer::where( 'Ma_nha_tuyen_dung', $employerid )->first();
        $data = array();
        $data['Ten_bai_kiem_tra'] = $request->name;
        $data['Thoi_gian_lam'] = $request->time;
        $data['So_cau'] = $request->number_ques;
        $data['Diem_toi_thieu'] = $request->mark;
        $data['Ma_nha_tuyen_dung'] = $employerid;
        DB::table( 'bai_kiem_tra' )->where( 'Ma_nha_tuyen_dung', $employerid )->insert( $data );

        return Redirect::to( 'list-exam-employer' )
        ->with( 'employer', $employer );
    }

    public function view_question_exam( $examid ){
        $this->Checklogin();
        $employerid =  Session::get( 'employerid' );
        Session::put( 'examid', $examid );
        $employer = Employer::where( 'Ma_nha_tuyen_dung', $employerid )->first();
        $exam = DB::table( 'bai_kiem_tra' )
        ->where( 'Ma_bai_kiem_tra', $examid )
        ->where( 'Ma_nha_tuyen_dung', 2 )
        ->first();
        if ( $exam ) {
            $question_list = DB::table( 'cau_hoi' )
            ->select (
            // DB::raw('SUBSTR(Ten_cau_hoi, 1,30) as Ten_cau_hoi')
            'Ma_bai_kiem_tra'
            , 'Ten_cau_hoi'
            ,'Ma_cau_hoi'
            , 'Lua_chon_a'
            , 'Lua_chon_b'
            , 'Lua_chon_c'
            , 'Lua_chon_d'
            , 'Dap_an')
            ->where( 'Ma_bai_kiem_tra', $exam->Ma_bai_kiem_tra )
            // ->toSql()
            ->get()
            ;

            // return response()->json($question_list);
            return view( 'pages.employer.list_question_employer' )
            ->with( 'question_list', $question_list )
            ->with( 'employer', $employer );
        } else {
            return Redirect::to ( 'dashboard-employer' )
            ->with( 'employer', $employer );
        }

    }

    public function import_question( Request $request ){
        $path = $request->file( 'file' )->getRealPath();
        Excel::import( new ExcelImports, $path );
        return back();
    }

    public function forgot_password_employer(){        
        return view ( 'pages.employer.forgot_password_employer' );
    }
    public function recovery_password_employer(Request $request){
        $data = $request->all();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');
        $title_mail = "Cấp lại mật khẩu".' '.$now;
        $employer =Employer::where ('email', $data['email'])->first();
        if (!isset($employer)){
            Session::put('message',  'Email không tồn tại. Kiểm tra lại' );
            return Redirect::to('/forgot-password-employer');
        }else{
            $token = Str::random();
            $employerid = $employer->Ma_nha_tuyen_dung;
            DB::table('nha_tuyen_dung')->where('Ma_nha_tuyen_dung', $employerid)->update(['token' => $token]);

            $to_email = $data['email'];
            $link_reset_pass =  url('/update-pass-employer?email='.$to_email.'&token='.$token);
            $data = array("name"=>$title_mail, "body"=>$link_reset_pass, "email"=>$data['email']);
            Mail::send('pages.send_mail', $data, function($message) use ($title_mail, $data){
                $message->to($data['email'])->subject($title_mail);
                $message->from($data['email'], $title_mail);
            });
            Session::put('message',  'Check mail to accept' );
            return Redirect::to('/forgot-password-employer');
        }
    }

    public function reset_pass_employer(Request $request){
        $data = $request->all();
        $new_token = Str::random();
        $employer = Employer::where('Email', $data['email'])->where('token', $data['token'])->first();
        if ($employer){
            $employerid = $employer->Ma_nha_tuyen_dung;
            $reset_pass = Employer::find($employerid);
            $reset_pass->Mat_khau=md5($data['password']);
            $reset_pass->token = $new_token;
            $reset_pass->save();
            Session::put('notification','Đổi mật khẩu thành công' );
            return Redirect::to('/employer');
        }else{
            
            return Redirect::to('/forgot-password-employer')->with('message', 'Đường đẫn đã hết hạn. Hãy thử lại');
        }
    }

    public function update_pass_employer(Request $request){
        return view ('pages.employer.update_pass_employer');
    }
    public function user_apply_job($jobid){
        $this->Checklogin();
        $employerid =  Session::get( 'employerid' );
        Session::put( 'jobid' , $jobid);
        $employer = Employer::where( 'Ma_nha_tuyen_dung', $employerid )->first();
        $user = User::get();
        $job_detail = DB::table('chi_tiet_ung_cu')->where('Ma_bai_dang', $jobid)->where('Trang_thai', 1)->get();
        $title_job = Jobs::where('Ma_bai_dang',$jobid)->where('Ma_nha_tuyen_dung',$employerid )->first();
        $education = DB::table('hoc_van')->get();
        if ($title_job){
            return view ('pages.employer.user_apply_job') 
            ->with( 'employer', $employer )
            ->with( 'user', $user )
            ->with( 'job_detail', $job_detail )
            ->with('education', $education)
            ->with('title_job', $title_job)
            ;
        }else{
            return Redirect::to ( 'dashboard-employer' )
            ->with( 'employer', $employer );
        }        
    }
    public function cancle_user($userid){
        $this->Checklogin();
        $employerid =  Session::get( 'employerid' );
        $jobid =  Session::get( 'jobid' );
        $employer = Employer::where( 'Ma_nha_tuyen_dung', $employerid )->first();
        if ($employer){
            DB::table('chi_tiet_ung_cu')
            ->where('Ma_ung_vien', $userid)
            ->where('Ma_bai_dang', $jobid)
            ->update(['Kiem_tra'=> 0])
            ;
            return Redirect()->back()
            ->with( 'employer', $employer );
        }else{
            return Redirect::to ( 'dashboard-employer' )
            ->with( 'employer', $employer );
        }
    }
    public function accept_user($userid){
        $this->Checklogin();
        $employerid =  Session::get( 'employerid' );
        $jobid =  Session::get( 'jobid' );
        $employer = Employer::where( 'Ma_nha_tuyen_dung', $employerid )->first();
        if ($employer){
            DB::table('chi_tiet_ung_cu')
            ->where('Ma_ung_vien', $userid)
            ->where('Ma_bai_dang', $jobid)
            ->update(['Kiem_tra'=> 1])
            ;
            return Redirect()->back()
            ->with( 'employer', $employer );
        }else{
            return Redirect::to ( 'dashboard-employer' )
            ->with( 'employer', $employer );
        }
    }
    public function list_user_test(){
        $this->Checklogin();
        $employerid =  Session::get( 'employerid' );
        $employer = Employer::where( 'Ma_nha_tuyen_dung', $employerid )->first();
        // $user = User::all();
        // $job = Jobs::where('Ma_nha_tuyen_dung', $employerid)->get();
        // $exam = DB::table('bai_kiem_tra')->where('Ma_nha_tuyen_dung', $employerid)->get();
        // $info_exam = DB::table('thong_tin_kiem_tra')->where('Trang_thai', 1)->get();   
        // $exam_detail = DB::table('chi_tiet_kiem_tra')->get();
        $list_user = DB::table('ung_cu_vien')
        ->join('chi_tiet_kiem_tra', 'ung_cu_vien.Ma_ung_vien', '=', 'chi_tiet_kiem_tra.Ma_ung_vien' )
        ->join('bai_kiem_tra', 'chi_tiet_kiem_tra.Ma_bai_kiem_tra', '=','bai_kiem_tra.Ma_bai_kiem_tra')
        ->join('thong_tin_kiem_tra', 'thong_tin_kiem_tra.Ma_bai_kiem_tra', '=', 'bai_kiem_tra.Ma_bai_kiem_tra')
        ->join('bai_dang_tuyen_dung', 'thong_tin_kiem_tra.Ma_bai_dang', '=','bai_dang_tuyen_dung.Ma_bai_dang')
        ->select('ung_cu_vien.Ten_ung_vien',
                'bai_dang_tuyen_dung.Tieu_de', 
                'bai_kiem_tra.Ten_bai_kiem_tra',
                'chi_tiet_kiem_tra.So_diem',
                'chi_tiet_kiem_tra.Ngay_lam_bai',
                'bai_kiem_tra.Diem_toi_thieu',
                'chi_tiet_kiem_tra.So_diem'
                )
        ->where('chi_tiet_kiem_tra.Trang_thai', 1)
        ->where ('thong_tin_kiem_tra.Trang_thai', 1)
        ->where('bai_dang_tuyen_dung.Ma_nha_tuyen_dung', $employerid)
        ->groupBy( 'ung_cu_vien.Ten_ung_vien','bai_dang_tuyen_dung.Tieu_de', 
        'bai_kiem_tra.Ten_bai_kiem_tra',
        'chi_tiet_kiem_tra.So_diem',
        'chi_tiet_kiem_tra.Ngay_lam_bai',
        'bai_kiem_tra.Diem_toi_thieu',
        'chi_tiet_kiem_tra.So_diem')
        ->get()
        // ->tosql()
        ;
        return view ('pages.employer.list_user_test')
        ->with( 'list_user', $list_user ) 
        ->with( 'employer', $employer );
        ;
        // return response()->json($list_user);
    }
    public function change_place_employer()
    {
        $this->Checklogin();
        $employerid =  Session::get( 'employerid' );
        $employer = Employer::where( 'Ma_nha_tuyen_dung', $employerid )->first();
        return view ('pages.employer.edit_place_employer')
        ->with( 'employer', $employer );
        ;
    }
    public function update_place_employer(Request $request)
    {
        $this->Checklogin();
        $employerid =  Session::get( 'employerid' );
        $employer = Employer::where( 'Ma_nha_tuyen_dung', $employerid )->first();
        $data = array();
        $data['Kinh_do']= $request->kinhdo;
        $data['Vi_do']= $request->vido;
        if ($data['Kinh_do'] == null || $data['Vi_do'] == null){
            return Redirect::to('/dashboard-employer')->with( 'employer', $employer );
        }else{
            DB::table('nha_tuyen_dung')->where ('Ma_nha_tuyen_dung', $employerid)->update($data);
            return Redirect::to('/dashboard-employer')->with( 'employer', $employer );
            
        }  
    }
    public function extend_time_employer()
    {
        $this->Checklogin();
        $employerid =  Session::get( 'employerid' );
        $employer = Employer::where( 'Ma_nha_tuyen_dung', $employerid )->first();
        $sevice = DB::table('thoi_han_dang_bai')->get();
        return view ('pages.employer.extend_time_employer')
        ->with('employer', $employer)
        ->with('sevice', $sevice)
        ;
    }
    public function pay_service(Request $request)
    {
        $this->Checklogin();
        $employerid =  Session::get( 'employerid' );
        $employer = Employer::where( 'Ma_nha_tuyen_dung', $employerid )->first();
        $data = array();
        $data['Ma_thoi_han'] = $request->Thoihan;
        $data['Ma_nha_tuyen_dung'] = $employerid;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $today = date('Y-m-d');
        $data['Ngay_thanh_toan'] =$today;
        $idpay = DB::table('thong_tin_thanh_toan')->insertGetId($data);
        $info_pay = DB::table('thong_tin_thanh_toan')
        ->join('nha_tuyen_dung', 'thong_tin_thanh_toan.Ma_nha_tuyen_dung', '=','nha_tuyen_dung.Ma_nha_tuyen_dung')
        ->join('thoi_han_dang_bai', 'thong_tin_thanh_toan.Ma_thoi_han','=', 'thoi_han_dang_bai.Ma_thoi_han')
        ->select('nha_tuyen_dung.Ten_cong_ty',
        'nha_tuyen_dung.Han_dang_bai',
        'thoi_han_dang_bai.Ma_thoi_han',
        'thoi_han_dang_bai.Thoi_han',
        'thoi_han_dang_bai.So_tien',
        'thong_tin_thanh_toan.Ngay_thanh_toan',
        'thong_tin_thanh_toan.Ma_thanh_toan'
        )
        ->where('thong_tin_thanh_toan.Ma_thanh_toan', $idpay)
        ->first()
        ;
        return view ('pages.employer.pay_service_employer')
        ->with('employer', $employer)
        ->with('info_pay', $info_pay)
        ;
    }
    public function history_payment_employer()
    {
        $this->Checklogin();
        $employerid =  Session::get( 'employerid' );
        $employer = Employer::where( 'Ma_nha_tuyen_dung', $employerid )->first();
        $list_history= DB::table('thong_tin_thanh_toan')
        ->join('nha_tuyen_dung','thong_tin_thanh_toan.Ma_nha_tuyen_dung', '=', 'nha_tuyen_dung.Ma_nha_tuyen_dung')
        ->join('thoi_han_dang_bai', 'thong_tin_thanh_toan.Ma_thoi_han', '=','thoi_han_dang_bai.Ma_thoi_han')
        ->select('thoi_han_dang_bai.Thoi_han', 
        'thong_tin_thanh_toan.Ngay_thanh_toan', 
        'thong_tin_thanh_toan.Han_dang_bai')
        ->get();
        return view ('pages.employer.history_payment_employer')
        ->with('employer', $employer)
        ->with('list_history', $list_history)
        ;
    }
    public function pay_successfully()
    {
        $this->Checklogin();
        $employerid =  Session::get( 'employerid' );
        $employer = Employer::where( 'Ma_nha_tuyen_dung', $employerid )->first();
        $idpay = Session::get('idpay');
        $lasttime = Session::get('lasttime');
        $lasttime =date ( 'Y-m-j' , $lasttime );
        $data_tt = array();
        $data_tt['trang_thai'] = 1;
        $data_tt['Han_dang_bai'] = $lasttime;
        $data_ep = array();
        $data_ep['Han_dang_bai'] = $lasttime;
        DB::table('thong_tin_thanh_toan')->where('Ma_thanh_toan', $idpay)->update($data_tt);
        DB::table('nha_tuyen_dung')->where('Ma_nha_tuyen_dung', $employerid)->update($data_ep);
        return Redirect::to('/history-payment-employer')
        ->with('employer', $employer)
        ;
    }
    public function edit_question($questionid)
    {
        $this->Checklogin();
        $employerid =  Session::get( 'employerid' );
        $employer = Employer::find($employerid);
        $question = Question::find($questionid);
        $exam = DB::table('bai_kiem_tra')->where('Ma_bai_kiem_tra', $question->Ma_bai_kiem_tra)->first();
        if (isset($question) && isset($exam)){
            $job = Jobs::find($exam->Ma_nha_tuyen_dung);
            if ($employerid == $job->Ma_nha_tuyen_dung){
                session(['link' => url()->previous()]);  
                return view ('pages.employer.edit_question_employer') 
                ->with('question', $question)
                ->with('employer', $employer);
    
            }else{
                return Redirect::to('/dashboard-employer');
            }
        }else{
            return Redirect::to('/dashboard-employer');
        }
    }
    public function update_question_employer($questionid, Request $request){
        $this->Checklogin();
        $employerid =  Session::get( 'employerid' );
        $employer = Employer::find($employerid);
        $data = array();
        $data['Ten_cau_hoi'] =  $request->Ten_cau_hoi;
        $data['Lua_chon_a'] =$request->Lua_chon_a;
        $data['Lua_chon_b'] =$request->Lua_chon_b;
        $data['Lua_chon_c'] =$request->Lua_chon_c;
        $data['Lua_chon_d'] =$request->Lua_chon_d;
        $data['Dap_an'] =$request->Dap_an;
        Question::find($questionid)->update($data);
        // return Redirect::to('/dashboard-employer');
    //    return $data;
        return Redirect::to( session( 'link' ) );
    }
    public function sendmailer()
    {
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 2;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = 'dhvsport00@gmail.com';
        $mail->Password = 'DHVSport450LeVanViet';
        $mail->setFrom('test@hostinger-tutorials.com', 'Your Name');
        $mail->addReplyTo('test@hostinger-tutorials.com', 'Your Name');
        $mail->addAddress('dhv0612@gmail.com', 'Receiver Name');
        $mail->Subject = 'Testing PHPMailer';
        $mail->Body = 'This is a plain text message body';
		
        //$mail->addAttachment('test.txt');
        if (!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'The email message was sent.';
        }
    }
}