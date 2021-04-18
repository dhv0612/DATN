<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng ký ứng viên</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset( 'public/upload/logo.png') }}" type="image/x-icon">


    <!-- Font awesome -->
    <link href="{{ 'public/frontend/HomeProperty/css/font-awesome.css' }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ 'public/frontend/HomeProperty/css/bootstrap.css' }}" rel="stylesheet">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ 'public/frontend/HomeProperty/css/slick.css' }}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{ 'public/frontend/HomeProperty/css/nouislider.css' }}">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{ 'public/frontend/HomeProperty/css/jquery.fancybox.css' }}" type="text/css"
        media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="{{ 'public/frontend/HomeProperty/css/theme-color/default-theme.css' }}" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="{{ 'public/frontend/HomeProperty/css/style.css' }}" rel="stylesheet">


    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>
    <section id="aa-signin">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-signin-area">
                        <div class="aa-signin-form">
                            <div class="aa-signin-form-title">
                                <a class="aa-property-home" href="{{ URL::to('/') }}">Trở về trang chủ</a>
                                <h4>Tạo tài khoản để tìm kiếm công việc</h4>
                            </div>
                            <?php
                            $noti = Session::get('notification');
                            if ($noti) { ?>
                            <?php echo '<h5 class="noti-signup">' . $noti . '</h5>';   
                             Session::put('notification', null);}?>
                            <form class="contactform" action="{{ URL::to('save-user') }}" method="POST">
                              {{ csrf_field() }}
                                <div class="aa-single-field">
                                    <label for="fullname">Tên <span class="required">*</span></label>
                                    <input type="text" required="required" aria-required="true" value="" name="fullname">
                                </div>
                                <div class="aa-single-field">
                                    <label for="email">Email <span class="required">*</span></label>
                                    <input type="email" required="required" aria-required="true" value="" name="email">
                                </div>
                                <div class="aa-single-field">
                                  <label for="name">Tên đăng nhập <span class="required">*</span></label>
                                  <input type="text" required="required" aria-required="true" value="" name="username">
                                </div>
                                <div class="aa-single-field">
                                    <label for="password">Mật khẩu <span class="required">*</span></label>
                                    <input type="password" name="password" id="myInput">
                                    <input type="checkbox" style="width: 6%;height: 20px;" onclick="myFunction()"><strong style="font-size: 20px">Show Password</strong>
                                </div>
                                
                                {{-- <div class="aa-single-field">
                                    <label for="confirm-password">Xác nhận mật khẩu <span
                                            class="required">*</span></label>
                                    <input type="password" name="confirm-password">
                                </div> --}}
                                <div class="aa-single-field">
                                <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>
                                <br>
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="invalid-feedback" style="display:block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                              </div>
                                <div class="aa-single-submit">
                                    <input type="submit" value="Tạo tài khoản" name="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    <!-- jQuery library -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <script src="{{ 'public/frontend/HomeProperty/js/jquery.min.js' }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ 'public/frontend/HomeProperty/js/bootstrap.js' }}"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="{{ 'public/frontend/HomeProperty/js/slick.js' }}"></script>
    <!-- Price picker slider -->
    <script type="text/javascript" src="{{ 'public/frontend/HomeProperty/js/nouislider.js' }}"></script>
    <!-- mixit slider -->
    <script type="text/javascript" src="{{ 'public/frontend/HomeProperty/js/jquery.mixitup.js' }}"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="{{ 'public/frontend/HomeProperty/js/jquery.fancybox.pack.js' }}"></script>
    <!-- Custom js -->
    <script src="{{ 'public/frontend/HomeProperty/js/custom.js' }}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>
