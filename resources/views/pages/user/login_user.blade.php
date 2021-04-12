<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Đăng nhập</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ 'public/frontend/HomeProperty/img/favicon.ico'}}" type="image/x-icon">
  <!-- Font awesome -->
  <link href="{{ 'public/frontend/HomeProperty/css/font-awesome.css'}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap -->
  <link href="{{ 'public/frontend/HomeProperty/css/bootstrap.css'}}" rel="stylesheet">
  <!-- slick slider -->
  <link rel="stylesheet" type="text/css" href="{{ 'public/frontend/HomeProperty/css/slick.css'}}">
  <!-- price picker slider -->
  <link rel="stylesheet" type="text/css" href="{{ 'public/frontend/HomeProperty/css/nouislider.css'}}">
  <!-- Fancybox slider -->
  <link rel="stylesheet" href="{{ 'public/frontend/HomeProperty/css/jquery.fancybox.css'}}" type="text/css" media="screen" />
  <!-- Theme color -->
  <link id="switcher" href="{{ 'public/frontend/HomeProperty/css/theme-color/default-theme.css'}}" rel="stylesheet">

  <!-- Main style sheet -->
  <link href="{{ 'public/frontend/HomeProperty/css/style.css'}}" rel="stylesheet">
  <!-- Google Font -->
  <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

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
                <a class="aa-property-home" href="{{URL::to('/')}}">Trở về trang chủ</a>
                <h4>Đăng nhập bằng tài khoản ứng viên</h4>
              </div>
              <?php
              $noti = Session::get('notification');
              if ($noti)
              {?>
            <?php		 echo '<h5 class="noti-login">' . $noti . '</h5>'; 
              
            ?>
              <form class="contactform" method="POST" action="{{URL::to('check-login-user')}}" >
                {{ csrf_field() }}
                <div class="aa-single-field">
                  <label for="email">Tài khoản <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value="<?php $user = Session::get('username'); echo $user;?>" name="username">
                </div>
                <div class="aa-single-field">
                  <label for="password">Mật khẩu<span class="required">*</span></label>
                  <input type="password" name="password">
                </div>
                <?php
							Session::put('notification', null);
                			Session::put('username', null);
                			Session::put('password', null);
						}
						else
						{			
							$signup = Session::get('signupdone');
                			if($signup){
								?>
								   <script> alert ("Sign up sucssessfully")</script>       
								   <?php    
								   Session::put('signupdone', null); 
                			}	
					?>
          <div class="aa-single-field">
            <label for="email">Tài khoản <span class="required">*</span></label>
            <input type="text" required="required" aria-required="true" value="<?php $user = Session::get('username'); echo $user;?>" name="username">
          </div>
          <div class="aa-single-field">
            <label for="password">Mật khẩu<span class="required">*</span></label>
            <input type="password" name="password">
          </div>
          <?php
						}	
					
                							
					?>

                <div class="aa-single-submit">
                  <input type="submit" value="Đăng nhập" class="aa-browse-btn" name="submit">
                  <p>Bạn không có tài khoản <a href="{{URL::to('/signup-user')}}">Đăng ký ngay!</a></p>
                </div>
              </form>
          
              <div class="social-auth-links text-center">
                <p>- Hoặc -</p>
                <a href="#" class="btn btn-block btn-primary">
                  Đăng nhập bằng Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                  Đăng nhập bằng Google
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- jQuery library -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <script src="{{ 'public/frontend/HomeProperty/js/jquery.min.js'}}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ 'public/frontend/HomeProperty/js/bootstrap.js'}}"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="{{ 'public/frontend/HomeProperty/js/slick.js'}}"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="{{ 'public/frontend/HomeProperty/js/nouislider.js'}}"></script>
  <!-- mixit slider -->
  <script type="text/javascript" src="{{ 'public/frontend/HomeProperty/js/jquery.mixitup.js'}}"></script>
  <!-- Add fancyBox -->
  <script type="text/javascript" src="{{ 'public/frontend/HomeProperty/js/jquery.fancybox.pack.js'}}"></script>
  <!-- Custom js -->
  <script src="{{ 'public/frontend/HomeProperty/js/custom.js'}}"></script>

</body>

</html>