<?php
namespace App\Http\Controllers;
use App\Models\Employer;
use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use App\Rules\Captcha;
use App\Models\Social;
use Laravel\Socialite\Facades\Socialite;

session_start();
define( 'URL', 'https://dhv0612.com/DATN' );
class UserController extends Controller {
    public function check_login_user( Request $request ) {
        $data = array();
        $data['username'] = $request->username;
        $data['password'] = md5( $request->password );
        $check_user = User::where( 'Tai_khoan', $data['username'] )->where( 'Mat_khau', $data['password'] )->first();
        if ( $check_user ) {
            Session::put( 'userid', $check_user->Ma_ung_vien );
            Session::put( 'username', $check_user->Tai_khoan );
            Session::put( 'name', $check_user->Ten_ung_vien );
            Session::put( 'phone', $check_user->So_dien_thoai );
            Session::put( 'email_user', $check_user->Email );
            Session::put( 'filecv', $check_user->File_CV );
            // setcookie( 'userid', $check_user->userid, time() + ( 86400 * 30 *12 *100 ), '/' );
            // setcookie( 'username', $check_user->username, time() + ( 86400 * 30 *12 *100 ), '/' );

            // session( ['link' => url()->previous()] );

            return Redirect::to( session( 'link' ) );
        } else {
            Session::put( 'notification', 'Tài khoản hoặc mật khảu chưa đúng. Kiểm tra lại' );
            // $noti = 'Tài khoản hoặc mật khảu chưa đúng. Kiểm tra lại';
            return Redirect::to( 'login-user' );
        }

    }

    public function logout_user() {
        Session::put( 'userid', null );
        Session::put( 'username', null );
        session( ['link' => url()->previous()] );
        return redirect( session( 'link' ) );

    }

    public function user_save_job( $jobid ) {
        $userid = Session::get( 'userid' );

        $data = array();
        $data['Ma_bai_dang'] = $jobid;
        $data['Ma_ung_vien'] = $userid;
        $data['Trang_thai'] = 0;
        DB::table( 'chi_tiet_ung_cu' )->insert( $data );

        session( ['link' => url()->previous()] );

        return redirect( session( 'link' ) );
    }

    public function cancle_save_job( $jobid ) {
        $userid = Session::get( 'userid' );

        DB::table( 'chi_tiet_ung_cu' )->where( 'Ma_bai_dang', $jobid )->where( 'Ma_ung_vien', $userid )->delete();
        session( ['link' => url()->previous()] );

        return redirect( session( 'link' ) );
    }

    public function apply_job( $jobid ) {
        $userid = Session::get( 'userid' );
        $detail = DB::table( 'chi_tiet_ung_cu' )->where( 'Ma_bai_dang', $jobid )->where( 'Ma_ung_vien', $userid )->first();
        $data = array();
        $data['Ma_ung_vien'] = $userid;
        $data['Ma_bai_dang'] = $jobid;
        $data['Trang_thai'] = 1;
        if ( $detail ) {
            DB::table( 'chi_tiet_ung_cu' )->where( 'Ma_bai_dang', $jobid )->where( 'Ma_ung_vien', $userid )->update( $data );
        } else {
            DB::table( 'chi_tiet_ung_cu' )->insert( $data );
        }
        session( ['link' => url()->previous()] );
        return redirect( session( 'link' ) );
        // return response()->json( $data );
    }

    public function save_user( Request $request ) {
        $data = $request->validate( [
            'g-recaptcha-response'=>new Captcha(),
        ] );
        $data = array();
        $data['Tai_khoan'] = $request->username;
        $data['Mat_khau'] = md5( $request->password );
        $data['Ten_ung_vien'] = $request->fullname;
        $data['email'] = $request->email;

        $all_user = DB::table( 'ung_cu_vien' )->where( 'Tai_khoan', $data['Tai_khoan'] )->first();

        if ( $all_user ) {
            Session::put( 'notification', 'Tên người dùng đã tồn tại. Hãy thử tên khác' );
            return Redirect::to( 'signup-user' );
        } else {
            DB::table( 'ung_cu_vien' )->insert( $data );
            Session::put( 'signupdone', 'Đăng ký thành công' );
            return Redirect::to( 'login-user' );
        }

    }

    public function profile_user() {
        $userid = Session::get( 'userid' );
        if ( $userid ) {
            $user = User::where( 'Ma_ung_vien', $userid )->first();
            $jobs_detail = DB::table( 'chi_tiet_ung_cu' )->where( 'Ma_ung_vien', $userid )->get();
            return view ( 'pages.user.profile_user' )
            ->with( 'user', $user )
            ->with( 'jobs_detail', $jobs_detail )
            ;
        } else {
            return Redirect::to( 'login-user' );
        }
    }

    public function edit_profile_user() {
        $userid = Session::get( 'userid' );
        if ( $userid ) {
            $user = User::where( 'Ma_ung_vien', $userid )->first();
            $education = DB::table( 'hoc_van' )->get();
            return view ( 'pages.user.edit_profile_user' )
            ->with( 'user', $user )
            ->with( 'education', $education )
            ;
        } else {
            return Redirect::to( 'login-user' );
        }
    }

    public function save_file_user( Request $request ) {
        $userid = Session::get( 'userid' );
        if ( $userid ) {
            $data = array();
            if ( $request->status ) {
                $data['Trang_thai'] = 1;
            } else {
                $data['Trang_thai'] = 0;
            }

            $get_file = $request->file( 'file_cv' );
            if ( $get_file ) {
                date_default_timezone_set( 'Asia/Ho_Chi_Minh' );
                $date = date( 'd-m-Y--h-i-s' );
                $get_name_file = $get_file->getClientOriginalName();
                $name_file = current( explode( '.', $get_name_file ) );
                $new_file = $date.'-'.$name_file.'.'.$get_file->getClientOriginalExtension();
                $get_file->move( 'public/upload/ung_vien/filecv', $new_file );
                $data['File_CV'] = $new_file;
                DB::table( 'ung_cu_vien' )->where( 'Ma_ung_vien', $userid )->update( $data );
                Session::put( 'filecv',  $data['File_CV'] );
                return Redirect::to( 'profile-user' );
            } else {
                DB::table( 'ung_cu_vien' )->where( 'Ma_ung_vien', $userid )->update( $data );
                return Redirect::to( 'profile-user' );
            }
        } else {
            return Redirect::to( 'login-user' );
        }
    }

    public function jobs_candidates() {
        $userid = Session::get( 'userid' );
        if ( $userid ) {
            // $user = User::where( 'Ma_ung_vien', $userid )->first();
            $jobs_detail = DB::table( 'chi_tiet_ung_cu' )
            ->where( 'Ma_ung_vien', $userid )
            ->where( 'Trang_thai', 1 )
            ->orderByDesc( 'Ma_bai_dang' )
            ->get();
            $jobs = Jobs::all();
            $employer = Employer::all();
            return view ( 'pages.user.jobs_candidates' )
            ->with( 'jobs_detail', $jobs_detail )
            ->with( 'jobs', $jobs )
            ->with( 'employer', $employer );
            ;
            // return response()->json( $jobs_detail );
        } else {
            return Redirect::to( 'login-user' );
        }
    }

    public function jobs_save() {
        $userid = Session::get( 'userid' );
        if ( $userid ) {
            // $user = User::where( 'Ma_ung_vien', $userid )->first();
            $jobs_detail = DB::table( 'chi_tiet_ung_cu' )->where( 'Ma_ung_vien', $userid )->where( 'Trang_thai', 0 )->get();
            $jobs = Jobs::all();
            $employer = Employer::all();
            return view ( 'pages.user.jobs_save' )
            ->with( 'jobs_detail', $jobs_detail )
            ->with( 'jobs', $jobs )
            ->with( 'employer', $employer );
            ;
            // return response()->json( $jobs_detail );
        } else {
            return Redirect::to( 'login-user' );
        }
    }

    public function save_info_user( Request $request ) {
        $data = array();
        $data['Mat_khau'] = md5( $request->password );
        $data['Ten_ung_vien'] = $request->fullname;
        $data['Ngay_sinh'] = $request->birthday;
        $data['Gioi_tinh'] = $request->gender;
        $data['Email'] = $request->email;
        $data['So_dien_thoai'] = $request->phone;
        $data['Dia_chi'] = $request->place;
        $data['Hoc_van'] = $request->education;
    }

    public function apply_job_filecv( Request $request, $jobid ) {
        $userid = Session::get( 'userid' );
        $data = array();
        $data['Ma_ung_vien'] = $userid;
        $data ['Ma_bai_dang'] = $jobid;
        $data['Trang_thai'] = 1;
        $get_file = $request->file( 'file_cv' );
        $check_apply = DB::table( 'chi_tiet_ung_cu' )->where( 'Ma_ung_vien', $userid )->where( 'Ma_bai_dang', $jobid )->first();
        if ( $get_file ) {
            date_default_timezone_set( 'Asia/Ho_Chi_Minh' );
            $date = date( 'd-m-Y--h-i-s' );
            $get_name_file = $get_file->getClientOriginalName();
            $name_file = current( explode( '.', $get_name_file ) );
            $new_file = $date.'-'.$name_file.'.'.$get_file->getClientOriginalExtension();
            $get_file->move( 'public/upload/ung_vien/filecv', $new_file );
            $data['File_CV'] = $new_file;

            if ( $check_apply ) {
                DB::table( 'chi_tiet_ung_cu' )->where( 'Ma_ung_vien', $userid )->where( 'Ma_bai_dang', $jobid )->update( $data );
            } else {
                DB::table( 'chi_tiet_ung_cu' )->insert( $data );
            }
            session( ['link' => url()->previous()] );
            return redirect( session( 'link' ) );
        } else {
            if ( $check_apply ) {
                DB::table( 'chi_tiet_ung_cu' )->where( 'Ma_ung_vien', $userid )->where( 'Ma_bai_dang', $jobid )->update( $data );
            } else {
                DB::table( 'chi_tiet_ung_cu' )->insert( $data );
            }
            session( ['link' => url()->previous()] );
            return redirect( session( 'link' ) );
        }
    }

    public function login_facebook() {
        return Socialite::driver( 'facebook' )->redirect();
    }

    public function callback_facebook() {
        $provider = Socialite::driver( 'facebook' )->user();
        $account = Social::where( 'Mang_xa_hoi', 'facebook' )->where( 'Ma_ung_vien_mxh', $provider->getId() )->first();
        if ( $account ) {
            $account_name = User::where( 'Ma_ung_vien', $account->Ma_ung_vien )->first();
            Session::put( 'userid', $account_name->Ma_ung_vien );
            Session::put( 'name', $account_name->Ten_ung_vien );
            Session::put( 'phone', $account_name->So_dien_thoai );
            Session::put( 'email_user', $account_name->Email );
            Session::put( 'filecv', $account_name->File_CV );
            return redirect( '/' );
        } else {
            $new_user = new Social( [
                'Ma_ung_vien_mxh' => $provider->getId(),
                'Mang_xa_hoi' => 'Facebook'
            ] );
            $orang = User::where( 'Email', $provider->getEmail() )->first();
            if ( !$orang ) {
                $orang = User::create( [
                    'Ten_ung_vien' => $provider->getName(),
                    'Email' => $provider->getEmail(),
                    // 'nickname'=>$provider->getNickname(),
                    'avatar'=>$provider->getAvatar(),
                    'Tai_khoan'=>'',
                    'Mat_khau' => '',
                    'So_dien_thoai' => '',
                    'Trang_thai'=>0
                ] );
                // return $orang;
            }
            $new_user->login()->associate( $orang );
            $new_user->save();
            $account_name = User::where( 'Ma_ung_vien', $orang->Ma_ung_vien )->first();
            Session::put( 'userid', $account_name->Ma_ung_vien );
            Session::put( 'name', $account_name->Ten_ung_vien );
            Session::put( 'phone', $account_name->So_dien_thoai );
            Session::put( 'email_user', $account_name->Email );
            Session::put( 'filecv', $account_name->File_CV );
            return redirect( '/' );
        }
    }

    public function list_exam_user( $jobid ) {
        $userid = Session::get( 'userid' );
        // $userid = 1;
        $check_user = DB::table( 'chi_tiet_ung_cu' )
        ->where( 'Ma_ung_vien', $userid )
        ->where( 'Ma_bai_dang', $jobid )
        ->first();
        if ( isset( $check_user ) && $check_user->Kiem_tra == 1 ) {

            $job = Jobs::find( $jobid );
            $exam_detail = DB::table( 'chi_tiet_kiem_tra' )->where( 'Ma_ung_vien', $userid )->get();
            $info_exam = DB::table( 'thong_tin_kiem_tra' )->where( 'Ma_bai_dang', $jobid )->get();
            if ( count( $exam_detail ) < count( $info_exam ) ) {
                $data = array();
                $data['Ma_bai_kiem_tra'] = $userid;
                foreach ( $info_exam as $ie ) {
                    $data['Ma_bai_kiem_tra'] = $ie->Ma_bai_kiem_tra;
                    $check_isset = DB::table('chi_tiet_kiem_tra')->where('Ma_bai_kiem_tra',$data['Ma_bai_kiem_tra'])->where('Ma_ung_vien', $data['Ma_bai_kiem_tra'])->get();
                    if( !isset($check_isset) ){
                        DB::table( 'chi_tiet_kiem_tra' )->insert( $data );
                    }
                    
                }
            }
            $exam_list = DB::table( 'bai_kiem_tra' )
            ->join( 'thong_tin_kiem_tra', 'thong_tin_kiem_tra.Ma_bai_kiem_tra', '=', 'bai_kiem_tra.Ma_bai_kiem_tra' )
            ->where( 'thong_tin_kiem_tra.Ma_bai_dang', $jobid )
            ->where( 'thong_tin_kiem_tra.Trang_thai', 1 )
            ->where( 'bai_kiem_tra.Ma_nha_tuyen_dung', $job->Ma_nha_tuyen_dung )
            ->select( 'bai_kiem_tra.Ma_bai_kiem_tra'
            , 'bai_kiem_tra.Ten_bai_kiem_tra'
            , 'bai_kiem_tra.Thoi_gian_lam'
            , 'bai_kiem_tra.So_cau' )
            ->groupBy( 'bai_kiem_tra.Ma_bai_kiem_tra'
            , 'bai_kiem_tra.ten_bai_kiem_tra'
            , 'bai_kiem_tra.Thoi_gian_lam'
            , 'bai_kiem_tra.So_cau' )
            ->get();
            return view( 'pages.user.list_exam_user' )
            ->with( 'exam_list', $exam_list )
            ->with( 'exam_detail', $exam_detail )
            ;
        } else {
            return Redirect::to( '/' );
        }
        // return response()->json( $exam_list );
    }

    public function start_exam( $examid ) {
        $userid = Session::get( 'userid' );
        $exam_detail = DB::table( 'chi_tiet_kiem_tra' )->where( 'Ma_ung_vien', $userid )->where( 'Ma_bai_kiem_tra', $examid )->first();
        if ( isset( $exam_detail) && $exam_detail->Trang_thai == 0 ) {
            date_default_timezone_set( 'Asia/Ho_Chi_Minh' );
            $today = date( 'Y-m-d' );
            $data = array();
            $data['Ngay_lam_bai'] = $today;
            $data['Trang_thai'] = 1;
            DB::table( 'chi_tiet_kiem_tra' )->where( 'Ma_ung_vien', $userid )->where( 'Ma_bai_kiem_tra', $examid )->update( $data );
            $exam = DB::table( 'bai_kiem_tra' )->where( 'Ma_bai_kiem_tra', $examid )->first();
            $question_list = DB::table( 'cau_hoi' )
            ->where( 'Ma_bai_kiem_tra', $examid )
            ->select( 'Ma_cau_hoi', 'Ten_cau_hoi', 'Lua_chon_a', 'Lua_chon_b', 'Lua_chon_c', 'Lua_chon_d' )
            ->inRandomOrder()
            ->limit( $exam->So_cau )
            ->get();
            return view ( 'pages.user.start_exam' )
            ->with( 'question_list', $question_list )
            ->with( 'exam', $exam )
            ;
        } else {
            return Redirect::to( '/' );
        }
    }

    public function send_exam( $examid, Request $request ) {
        $userid = Session::get( 'userid' );
        $data = $request->all();
        // $name_list = array_keys( $data );
        $question_list = DB::table( 'cau_hoi' )->where( 'Ma_bai_kiem_tra', $examid )->get();
        $socaudung = 0;
        foreach ( $question_list as  $ql ) {
            foreach ( $data as $key=>$dt ) {
                if ( $ql->Ma_cau_hoi == $key && $key != '_token' ) {
                    $info = array();
                    $info['Ma_cau_hoi'] = $ql->Ma_cau_hoi;
                    $info['Ma_ung_vien'] = $userid;
                    $info['Cau_tra_loi'] = $dt; 
                    DB::table( 'chi_tiet_tra_loi' )->insert( $info );        
                    if( $info['Cau_tra_loi'] == $ql->Dap_an){
                        $socaudung++;
                    }
                }
            }
        }
        $exam = DB::table('bai_kiem_tra')->where('Ma_bai_kiem_tra', $examid)->first();
        $ctkt = array();
        $ctkt['So_diem'] = $socaudung * 10 / $exam->So_cau;
        DB::table('chi_tiet_kiem_tra')->where('Ma_bai_kiem_tra', $examid)->where('Ma_ung_vien', $userid)->update($ctkt);

        return Redirect::to( '/' );
        //     foreach ( $data as $dt ) {
        //         $a = 1;
        //         echo $a;
        //     }
        // return response()->json( $data );
    }
    
    public function start_exam_sample (){
        $check = DB::table('bai_kiem_tra')->where('Ma_bai_kiem_tra', 1)->first();
        if ($check  != null){
            $question_list = DB::table( 'cau_hoi' )
            ->where( 'Ma_bai_kiem_tra', 1 )
            ->select( 'Ma_cau_hoi', 'Ten_cau_hoi', 'Lua_chon_a', 'Lua_chon_b', 'Lua_chon_c', 'Lua_chon_d' )
            ->inRandomOrder()
            ->limit( $check->So_cau )
            ->get();
            return view ( 'pages.user.start_exam_sample' )
            ->with( 'question_list', $question_list )
            ->with( 'exam', $check )
            ;
        } else {
            return Redirect::to( '/' );
        }
       
    }

    public function send_exam_sample(){
        return Redirect::to( '/' );
    }

}