<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Forgot Password (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('public/frontend/Pageadmin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('public/frontend/Pageadmin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('public/frontend/Pageadmin/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{{URL::to('/employer')}}" class="h1"><b>Nhà tuyển dụng</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Cập nhật mật khẩu</p>
      <form action="{{URL::to('/reset-pass-employer')}}"method="post">
          @csrf
        <div class="input-group mb-3">
            <?php
            $token = $_GET['token'];
            $email = $_GET['email'];
        ?>
        <input type="hidden" name="token"  value="<?php echo $token?>"> 
        <input  type="hidden" name="email"  value="<?php echo $email?>"> 
          <input type="password" name="password" id="myInput" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <input type="checkbox"  style="width: 6%;height: 20px;" onclick="myFunction()"><span style="font-size: 20px">Hiển thị mật khẩu</span>

        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Gửi</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mt-3 mb-1">
        <a href="{{URL::to('/employer')}}">Đăng nhập</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<script>
    function myFunction() {
      var x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>
<!-- jQuery -->
<script src="{{ asset('public/frontend/Pageadmin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('public/frontend/Pageadmin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/frontend/Pageadmin/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
