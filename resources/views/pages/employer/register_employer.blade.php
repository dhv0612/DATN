<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng ký - Nhà tuyển dụng</title>
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

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h1><b>Đăng ký</b></h1>
            </div>
            <div class="card-body">
                <form action="{{URL::to('/save-employer')}}" method="post" enctype="multipart/form-data">
                    
                    <div class="input-group mb-3">
                        <input type="text" name="Tai_khoan" class="form-control" placeholder="Tài khoản" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="Mat_khau" class="form-control" id="myInput" placeholder="Mật khẩu" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        
                            <div class="input-group">
                                
                                <input type="text" disabled value="Hiển thị mật khẩu" class="form-control">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <input type="checkbox" onclick="myFunction()">
                                    </span>
                                </div>
                            </div>
                            <!-- /input-group -->
                        
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="Email" class="form-control" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="Ten_cong_ty" class="form-control" placeholder="Tên công ty" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-building"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="Trang_web" class="form-control" placeholder="Trang web" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-link"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="Dia_chi" class="form-control" placeholder="Địa chỉ" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-address-card"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="tel"  name="So_dien_thoai" class="form-control" placeholder="Số điện thoại" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">                        
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file"  name="Hinh_anh" class="custom-file-input" id="exampleInputFile" required accept="image/gif, image/jpeg, image/png">
                                <label class="custom-file-label" for="exampleInputFile">Logo công ty</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <a href="{{ URL::TO('/employer') }}" class="btn btn-dark btn-block">Quay lại Đăng nhập</a>
                        </div>
                        <!-- /.col -->
                        <div class="col-5">
                            <button type="submit" class="btn btn-primary btn-block">Đăng ký</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
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
     <!-- bs-custom-file-input -->
     <script src="{{ asset('public/frontend/Pageadmin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
      <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('public/frontend/dist/js/demo.js') }}"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>
