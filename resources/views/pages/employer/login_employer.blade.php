<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập - Nhà tuyển dụng</title>
    <link rel="shortcut icon" href="{{asset( 'public/upload/logo.png') }}" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/frontend/Pageadmin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet"
        href="{{ asset('public/frontend/Pageadmin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('public/frontend/Pageadmin/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition login-page">
    <?php
    $message = Session::get('notification');
        if ($message)   {
            echo "<script> alert('$message') </script>";
            Session::put('notification', null);
        } 
    ?>
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
           
            <div class="card-header text-center">
                <h1 class="h1"><b>Nhà tuyển dụng</b></h1>
            </div>
            <div class="card-body">
                <form action="{{URL::to('/check-login-employer')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Tài khoản">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                        </div>
                        <div class="col-6">

                            <a href="{{URL::to('/forgot-password-employer')}}" class="btn btn-primary btn-block btn-danger">Quên mật khẩu</a>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="input-group mb-3" style="margin: 10px 0px">
                    <a href="#" class="btn btn-block btn-primary form-control">
                        Đăng ký tài khoản
                    </a>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="fas fa-address-card"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->
    <!-- jQuery -->
    <script src="{{ asset('public/frontend/Pageadmin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('public/frontend/Pageadmin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('public/frontend/Pageadmin/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
