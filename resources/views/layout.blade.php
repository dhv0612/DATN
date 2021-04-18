<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UTC2 Tìm kiếm việc làm</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset( 'public/upload/logo.png') }}" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Font awesome -->
    <link href="{{ asset('public/frontend/HomeProperty/css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset( 'public/frontend/HomeProperty/css/bootstrap.css') }}" rel="stylesheet">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset( 'public/frontend/HomeProperty/css/slick.css' )}}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset( 'public/frontend/HomeProperty/css/nouislider.css') }}">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{ asset( 'public/frontend/HomeProperty/css/jquery.fancybox.css') }}" type="text/css"
        media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="{{ asset( 'public/frontend/HomeProperty/css/theme-color/default-theme.css') }}"
        rel="stylesheet">

    <!-- Main style sheet -->
    <link href="{{ asset( 'public/frontend/HomeProperty/css/style.css') }}" rel="stylesheet">


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

<body class="aa-price-range">
    <!-- Pre Loader -->
    <div id="aa-preloader-area">
        <div class="pulse"></div>
    </div>
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!-- Start header section -->
    <header id="aa-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-area">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="aa-header-left">
                                    <div class="aa-telephone-no">
                                        <span class="fa fa-phone"></span>
                                        +84-900-523-3564
                                    </div>
                                    <div class="aa-email hidden-xs">
                                        <span class="fa fa-envelope-o"></span> info@utc2.edu.vn
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="aa-header-right">
                                    <?php
                                        $userid = Session::get('userid');
                                        $name = Session::get('name');                                          
                                        if ($userid){
                                    ?>
                                    <a href="{{URL::to('/profile-user')}}" class="aa-register"><?php echo $name;?></a>                                        
                                    <a href="{{URL::to('/logout-user')}}" class="aa-login">Đăng xuất</a>
                                    <?php
                                        }else{?>
                                     <a href="{{URL::to('/signup-user')}}" class="aa-register">Đăng ký</a>                                        
                                     <a href="{{URL::to('/login-user')}}" class="aa-login">Đăng nhập</a>                                   
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header section -->

        @yield('content')

    
    
      <!-- Footer -->
    <footer id="aa-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-footer-area">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="aa-footer-left">
                                    <p>Designed by <a rel="nofollow" href="http://www.markups.io/">MarkUps.io</a></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="aa-footer-middle">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="aa-footer-right">
                                    <a href="#">Trang chủ</a>
                                    <a href="#">Thông tin</a>
                                    <a href="#">Việc làm</a>
                                    <a href="#">Liên hệ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- / Footer -->



    <!-- jQuery library -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <script src="{{asset( 'public/frontend/HomeProperty/js/jquery.min.js' )}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset( 'public/frontend/HomeProperty/js/bootstrap.js') }}"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="{{asset( 'public/frontend/HomeProperty/js/slick.js') }}"></script>
    <!-- Price picker slider -->
    <script type="text/javascript" src="{{ asset('public/frontend/HomeProperty/js/nouislider.js' )}}"></script>
    <!-- mixit slider -->
    <script type="text/javascript" src="{{ asset('public/frontend/HomeProperty/js/jquery.mixitup.js') }}"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="{{ asset('public/frontend/HomeProperty/js/jquery.fancybox.pack.js') }}"></script>
    <!-- Custom js -->
    <script src="{{ asset('public/frontend/HomeProperty/js/custom.js') }}"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
</body>

</html>
