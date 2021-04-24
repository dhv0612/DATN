<?php
namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Employer;
use App\Models\Jobs;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

define("URL", "https://dhv0612.com/DATN");

class HomeController extends Controller
{
    public function index(){
        $branch = DB::table('nganh_nghe')->orderBy('Ma_nganh_nghe')->get();
        $place = DB::table('dia_diem')->orderBy('Ma_dia_diem')->get();
        return view ('pages.home')
        ->with('branch', $branch)
        ->with('place', $place);
    }
    public function login_user(){ 
        $url = Session::get('link');
        Session(['link', $url]);
        if(url()->previous() != URL."/login-user" && url()->previous() != URL."/signup-user" ){
            session(['link' => url()->previous()]);  
        }
        else if ($url == null){
            session(['link', ""]); 
        }
        else{
             session(['link', $url]); 
        }
        return view('pages.user.login_user');
    }
    public function signup_user(){    
        $url = Session::get('link');
        Session(['link', $url]);
        if(url()->previous() != URL."/login-user" && url()->previous() != URL."/signup-user" ){
            session(['link' => url()->previous()]);  
        }
        else if ($url == null){
            session(['link', ""]); 
        }
        else{
             session(['link', $url]); 
        }         
        return view('pages.user.signup_user');
    }
    public function jobs_list(Request $request){
        $data =$request->all();
        $branch = DB::table('nganh_nghe')->orderBy('Ma_nganh_nghe')->get();
        $place = DB::table('dia_diem')->orderBy('Ma_dia_diem')->get();

        if ($data){
            $title =$data['title'];
            $salary_from = $data['salary_from'] * 1000000;
            $salary_to = $data['salary_to'] * 1000000;

            $employer = Employer::all();
           
            $job_list = Jobs::where('Tieu_de','like','%'.$title.'%')
                            ->where('Ma_nganh_nghe',$data['branch'])     
                            ->where('Ma_dia_diem',$data['place'])                     
                            ->whereBetween('Muc_luong', [(int)$salary_from, (int)$salary_to])
                            ->get();

                            // return response()->json($job_list);
                            // return response()->json($data);
            return view ('pages.job.job_list')
                  ->with('jobs_list', $job_list)
                  ->with('employer', $employer)
                  ->with('branch', $branch)
                  ->with('place', $place);
                
        }
      
    }
    
    public function job_detail($jobid){
        $userid = Session::get('userid');
        $job_detail = Jobs::where('Ma_bai_dang', $jobid)->first();
        $employer = Employer::where('Ma_nha_tuyen_dung', $job_detail->Ma_nha_tuyen_dung)->first();
        $place = Place::where('Ma_dia_diem', $job_detail->Ma_dia_diem)->first();
        $branch = Branch::where('Ma_nganh_nghe',$job_detail->Ma_nganh_nghe)->first();    
        $detail = DB::table('chi_tiet_ung_cu')->where('Ma_bai_dang', $jobid)->where('Ma_ung_vien', $userid)->first();    
        // return response()->json($job_des);
        return view ('pages.job.job_detail')
                    ->with('place', $place)
                    ->with('branch', $branch)
                    ->with('employer', $employer)
                    ->with('job_detail',$job_detail)
                    ->with('detail', $detail)
                    ->with('SEO', 1);
    } 
    
    // public function job_detail(){
    //     $branch = DB::table('nganh_nghe')->orderBy('Ma_nganh_nghe')->get();
    //     $place = DB::table('dia_diem')->orderBy('Ma_dia_diem')->get();
    //     return view ('pages.home')
    //     ->with('branch', $branch)
    //     ->with('place', $place);
    // }
}