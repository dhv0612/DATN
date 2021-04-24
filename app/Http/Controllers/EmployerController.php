<?php
namespace App\Http\Controllers;
use App\Models\Employer;
use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
define("URL", "https://dhv0612.com/DATN");
class EmployerController extends Controller
{
    public function Checklogin(){
        $employerid = Session::get('employerid');
        if  ($employerid){
            return Redirect::to( 'dashboard-employer' );
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
            return Redirect::to('/dashboard-employer'); 
        }
        else
        {
            Session::put('notification', 'Tài khoản hoặc mât khẩu không chính xác. Thử lại');
            return Redirect::to('employer');
        }   
    }

    public function dashboard_employer(){
        $this->Checklogin();
        $employerid =  Session::get('employerid');
        $employer = Employer::where('Ma_nha_tuyen_dung', $employerid)->first();
        return view ('pages.employer.home_employer')->with('employer', $employer);
    }

    public function list_job_employer(){
        $this->Checklogin();
        $employerid =  Session::get('employerid');
        $employer = Employer::where('Ma_nha_tuyen_dung', $employerid)->first();
        $job_list = Jobs::where('Ma_nha_tuyen_dung',$employerid)->orderBy('Tieu_de', 'desc')->get();
        return view ('pages.employer.list_jobs_employer')
                    ->with('employer', $employer)
                    ->with('job_list', $job_list);
    }

    public function logout_employer(){
        Session::put('employerid', Null);
        Session::put('employername', Null);
        return Redirect::to( 'employer' );
    }

    public function delete_job($jobid){
        $this->Checklogin();
        $employerid = Session::get('employerid');
        $employer = Employer::where('Ma_nha_tuyen_dung', $employerid)->first();
        if (isset($employerid)){
            $bai_dang = Jobs::where('Ma_bai_dang', $jobid)->where('Ma_nha_tuyen_dung', $employerid)->first();
            if (isset($bai_dang)){
                DB::table('bai_dang_tuyen_dung')->where('Ma_bai_dang', $jobid)->delete();  
                return Redirect::to('list-job-employer')->with('message', 'Xóa bài đăng thành công');
            }
        }else{
            return view ('pages.employer.home_employer')->with('employer', $employer);
        }
    }

    public function edit_job($jobid){        
        $this->Checklogin();
        $place = DB::table('dia_diem')->get();
        $branch = DB::table('nganh_nghe')->get();        
        $employerid =  Session::get('employerid');
        $employer = Employer::where('Ma_nha_tuyen_dung', $employerid)->first();
        $job_detail = Jobs::where('Ma_bai_dang', $jobid)->where('Ma_nha_tuyen_dung',$employerid)->first();
        if ($job_detail){
            return view ('pages.employer.edit_jobs_employer') 
            ->with('place', $place)
            ->with('branch', $branch)
            ->with('employer', $employer)
            ->with('job_detail', $job_detail);
        }else{
            return Redirect::to ('dashboard-employer')->with('employer', $employer);
        }        
    }

    public function update_job_employer($jobid, Request $request){
        $this->Checklogin();
        $employerid = Session::get('employerid');
        $data['Tieu_de']= $request->title;
        $data['Ma_nganh_nghe']= $request->branch;
        $data['Ma_dia_diem']= $request->place;
        $data['Dia_diem_lam_viec']= $request->address;
        $data['Muc_luong']= $request->salary;
        $data['Han_ung_tuyen']= $request->deadline;
        $data['Yeu_cau']= $request->res;
        $data['Mo_ta_cong_viec']= $request->des;
        $data['Thong_tin_khac']= $request->info;
        $data['Tieu_de_SEO']= $request->tit_seo;
        $data['Mo_ta_SEO']= $request->des_seo;
        $get_image = $request->file('img_seo');
        if($get_image){
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date = date("dmYhis");
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));            
            $new_image =$date.'-'.$name_image.'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/nhatuyendung/SEO',$new_image);
            $data['Hinh_anh_SEO']= $new_image;
            DB::table('bai_dang_tuyen_dung')->where('Ma_bai_dang',$jobid)->where('Ma_nha_tuyen_dung', $employerid)->update($data);            
            
            return Redirect::to('list-job-employer');
        }else{
            DB::table('bai_dang_tuyen_dung')->where('Ma_bai_dang',$jobid)->where('Ma_nha_tuyen_dung',$employerid)->update($data);            
            return Redirect::to('list-job-employer');       
        }        
    }

    public function add_job_employer(){
        $this->Checklogin();
        $place = DB::table('dia_diem')->get();
        $branch = DB::table('nganh_nghe')->get();
        $employerid =  Session::get('employerid');
        $employer = Employer::where('Ma_nha_tuyen_dung', $employerid)->first();
        return view('pages.employer.add_list_jobs_employer')
        ->with('place', $place)
        ->with('branch', $branch)
        ->with('employer', $employer);
    }

    public function save_job_employer(Request $request){
        $this->Checklogin();
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $employerid = Session::get('employerid');
        $data['Ma_nha_tuyen_dung'] = $employerid;
        $data['Ngay_dang']= date("Y/m/d");
        $data['Tieu_de']= $request->title;
        $data['Ma_nganh_nghe']= $request->branch;
        $data['Ma_dia_diem']= $request->place;
        $data['Dia_diem_lam_viec']= $request->address;
        $data['Muc_luong']= $request->salary;
        $data['Han_ung_tuyen']= $request->deadline;
        $data['Yeu_cau']= $request->res;
        $data['Mo_ta_cong_viec']= $request->des;
        $data['Thong_tin_khac']= $request->info;
        $data['Tieu_de_SEO']= $request->tit_seo;
        $data['Mo_ta_SEO']= $request->des_seo;
        $get_image = $request->file('img_seo');
        if($get_image){ 
            $date = date("dmYhis");
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));            
            $new_image =$date.'-'.$name_image.'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/nhatuyendung/SEO',$new_image);
            $data['Hinh_anh_SEO']= $new_image;
            DB::table('bai_dang_tuyen_dung')->where('Ma_nha_tuyen_dung', $employerid)->insert($data);           
            return Redirect::to('list-job-employer');
        }else{
            DB::table('bai_dang_tuyen_dung')->where('Ma_nha_tuyen_dung', $employerid)->insert($data);         
            return Redirect::to('list-job-employer');       
        }        
    }

    public function list_exam_employer(){
        $this->Checklogin();
        $employerid =  Session::get('employerid');
        $employer = Employer::where('Ma_nha_tuyen_dung', $employerid)->first();
        $exam_list = DB::table('bai_kiem_tra')->where('Ma_nha_tuyen_dung',$employerid)->orderBy('Ma_bai_kiem_tra', 'desc')->get();
        
        return view ('pages.employer.list_exam_employer')
                    ->with('employer', $employer)
                    ->with('exam_list', $exam_list);
    }

    public function edit_exam($examid){
        $this->Checklogin();
        $employerid =  Session::get('employerid');
        $employer = Employer::where('Ma_nha_tuyen_dung', $employerid)->first();
        $exam_detail = DB::table('bai_kiem_tra')->where('Ma_bai_kiem_tra', $examid)->where('Ma_nha_tuyen_dung',$employerid)->first();
        if (isset($exam_detail)){
            return view ('pages.employer.edit_exam_employer')->with('exam_detail',$exam_detail)->with('employer', $employer);
        }else{
            return Redirect::to ('dashboard-employer')->with('employer', $employer);
        }   
    }

    public function update_exam_employer($examid, Request $request){
        $this->Checklogin();
        $employerid =  Session::get('employerid');
        $employer = Employer::where('Ma_nha_tuyen_dung', $employerid)->first();
        $exam_detail = DB::table('bai_kiem_tra')->where('Ma_bai_kiem_tra', $examid)->where('Ma_nha_tuyen_dung', $employerid);
        if (isset($exam_detail)){
            $data = array();
            $data['Ten_bai_kiem_tra'] = $request->name;
            $data['Thoi_gian_lam'] = $request->time;
            $data['So_cau'] = $request->number_ques;
            $data['Diem_toi_thieu'] = $request->mark;
            DB::table('bai_kiem_tra')
                ->where('Ma_bai_kiem_tra', $examid)
                ->where('Ma_nha_tuyen_dung', $employerid)
                ->update($data);     
            return Redirect::to('list-exam-employer')
                ->with('employer', $employer);
        }else{
            return Redirect::to ('dashboard-employer')
                ->with('employer', $employer);
        }
    }
    public function delete_exam($examid){
        $this->Checklogin();
        $employerid = Session::get('employerid');
        $employer = Employer::where('Ma_nha_tuyen_dung', $employerid)->first();
        if (isset($employerid)){
            $exam_detail = DB::table('bai_kiem_tra')->where('Ma_bai_kiem_tra', $examid)->where('Ma_nha_tuyen_dung', $employerid)->first();
            if (isset($exam_detail)){
                DB::table('bai_kiem_tra')->where('Ma_bai_kiem_tra', $examid)->delete();  
                return Redirect::to('list-exam-employer')->with('message', 'Xóa bài kiểm tra thành công');
            }
        }else{
            return Redirect::to ('dashboard-employer')
                ->with('employer', $employer);
        }
    }
    public function add_exam_employer(){
        $this->Checklogin();
        $employerid =  Session::get('employerid');
        $employer = Employer::where('Ma_nha_tuyen_dung', $employerid)->first();
        return view('pages.employer.add_list_exam_employer')
        ->with('employer', $employer);
    }

    public function save_exam_employer(Request $request){
    
        $this->Checklogin();
        $employerid =  Session::get('employerid');
        $employer = Employer::where('Ma_nha_tuyen_dung', $employerid)->first();
        $data = array();
        $data['Ten_bai_kiem_tra'] = $request->name;
        $data['Thoi_gian_lam'] = $request->time;
        $data['So_cau'] = $request->number_ques;
        $data['Diem_toi_thieu'] = $request->mark;
        $data['Ma_nha_tuyen_dung'] = $employerid;
        DB::table('bai_kiem_tra')->where('Ma_nha_tuyen_dung', $employerid)->insert($data);   
        return Redirect::to('list-exam-employer')
        ->with('employer', $employer);
    }

    public function view_question_exam($examid){
        $this->Checklogin();
        $employerid =  Session::get('employerid');
        $employer = Employer::where('Ma_nha_tuyen_dung', $employerid)->first();
        $exam = DB::table('bai_kiem_tra')->where('Ma_bai_kiem_tra', $examid)->where('Ma_nha_tuyen_dung', $employerid)->first();
        if ($exam){
            return view('pages.employer.list_question_employer')
            ->with('employer', $employer);
        }else{
            return Redirect::to ('dashboard-employer')
                ->with('employer', $employer);
        }               
    }
}
