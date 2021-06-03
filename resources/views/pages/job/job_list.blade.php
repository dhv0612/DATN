@extends('layout')
@section('content')
    <!-- End header section -->
    <!-- Start menu section -->
    <section id="aa-menu-area">
        <nav class="navbar navbar-default main-navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- LOGO -->
                    <!-- Text based logo -->
                    <a class="navbar-brand aa-logo" href="{{URL::TO('/')}}"> UTC2 <span>WORK</span></a>
                    <!-- Image based logo -->
                    <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
                        <li><a href="{{ URL::to('/') }}">TRANG CHỦ</a></li>
                        <!-- <li class="dropdown active">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="properties.html">PROPERTIES <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">                
                            <li><a href="properties.html">PROPERTIES</a></li>
                            <li><a href="properties-detail.html">PROPERTIES DETAIL</a></li>                                            
                          </ul>
                        </li> -->
                        <li class="active"><a href="{{ URL::to('/jobs-list') }}">VIỆC LÀM</a></li>
                        <li><a href="">TTHÔNG TIN VỀ UTC2</a></li>
                        <li>
                            <a  href="{{URL::TO('/employer')}}">NHÀ TUYỂN DỤNG </a>
                        </li>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </section>
    <!-- End menu section -->

    <!-- Start Proerty header  -->

    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>Thông tin các công việc</h2>
                        <ol class="breadcrumb">
                            <li><a href="/">Trang chủ</a></li>
                            <li class="active">Danh sách công việc</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Proerty header  -->

    <!-- Start Properties  -->
    <section id="aa-properties">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="aa-properties-content">
                        <!-- start properties content head -->
                        <div class="aa-properties-content-head">
                            <div class="aa-properties-content-head-left">
                               
                                <!-- <form action="" class="aa-show-form">
                              <label for="">Show</label>
                              <select name="">
                                <option value="1" selected="12">6</option>
                                <option value="2">12</option>
                                <option value="3">24</option>
                              </select>
                            </form> -->
                            </div>
                            <div class="aa-properties-content-head-right">
                                <a id="aa-grid-properties" href="#"><span class="fa fa-th"></span></a>
                                <a id="aa-list-properties" href="#"><span class="fa fa-list"></span></a>
                            </div>
                        </div>
                        <!-- Start properties content body -->
                        <div class="aa-properties-content-body">
                            <ul class="aa-properties-nav aa-list-view">
                                <?php     date_default_timezone_set('Asia/Ho_Chi_Minh');
                                $today = date('Y-m-d');
                                ?>
                                @foreach ($jobs_list as $key => $jl)
                                    @foreach ($employer as $key => $emp)
                                        @if ($emp->Ma_nha_tuyen_dung == $jl->Ma_nha_tuyen_dung && $jl->Han_ung_tuyen >= $today)

                                            <li>
                                                <article class="aa-properties-item" style="border:1px solid #ddd">
                                                    <a class="aa-properties-item-img" style="width: 30%; " href="{{ URL::to('jobs-details/' . $jl->Ma_bai_dang) }}">
                                                        <img alt="img"
                                                            src="{{asset('public/upload/nhatuyendung/'.$emp->Hinh_anh) }}">
                                                    </a>

                                                    <div class="aa-properties-item-content" style="width: 70%; border: none; border-left: 1px solid #ddd;">
                                                        {{-- <div class="aa-properties-info">
                                                            <span>{{$emp->Ten_cong_ty}}</span>
                                                            @foreach ($place as $key => $pla)
                                                            @if ($jl->Ma_dia_diem == $pla->Ma_dia_diem)
                                                            <span>{{$pla->Ten_dia_diem}}</span>
                                                            @endif
                                                            @endforeach                
                                                            @foreach ($branch as $key => $bra)
                                                            @if ($jl->Ma_nganh_nghe == $bra->Ma_nganh_nghe)
                                                            <span>{{$bra->Ten_nganh_nghe}}</span>
                                                            @endif
                                                            @endforeach                                  
                                                         
                                                        </div> --}}
                                                        <div class="aa-properties-about">
                                                            <h3><a
                                                                    href="{{ URL::to('jobs-details/' . $jl->Ma_bai_dang) }}">{{ $jl->Tieu_de }}</a>
                                                            </h3>
                                                            {{-- <p>Quản lý team lập trình viên. <br>Giao nhiệm vụ cho nhân viên,
                                                                quản ly
                                                                team<br>Có trách nhiệm</p> --}}
                                                            <h4>Công ty: {{ $emp->Ten_cong_ty }}</h4>
                                                            

                                                            @foreach ($place as $key => $pla)
                                                                @if ($jl->Ma_dia_diem == $pla->Ma_dia_diem)
                                                                    <p>
                                                                        Địa điểm: {{ $pla->Ten_dia_diem }}
                                                                    </p>
                                                                    <?php  
                                                                    $date_format = date("d-m-Y", strtotime($jl->Ngay_dang));?>
                                                                    <p>
                                                                        Ngày đăng tuyển: <strong>{{$date_format}}</strong>
                                                                    </p>
                                                                    <?php  
                                                                    $date_format_deadline = date("d-m-Y", strtotime($jl->Han_ung_tuyen));?>
                                                                    <p>
                                                                        Hạn ứng tuyển: <strong>{{$date_format_deadline}}</strong>
                                                                    </p>
                                                                @endif
                                                            @endforeach</p>

                                                        </div>
                                                        <div class="aa-properties-detial" style="padding: 7.5px;">
                                                            <span class="aa-price" style="font-weight: bold">
                                                                <?php
                                                                    $format_number = number_format($jl->Muc_luong);
                                                                    echo $format_number;
                                                                ?>
                                                                VNĐ
                                                            </span>
                                              
                                                            <a class="aa-secondary-btn" style="border: 1px solid;"  href="{{URL::to('jobs-details/'.$jl->Ma_bai_dang)}}">Xem </a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </li>
                                        @endif
                                    @endforeach
                                @endforeach
                            </ul>
                        </div>
              
                        <!-- Start properties content bottom -->
                        <div class="aa-properties-content-bottom">
                            <nav>
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li  class="active" ><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li ><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                    {{-- {{$jobs_list->.links()}} --}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Start properties sidebar -->
                <div class="col-md-4">
                    <aside class="aa-properties-sidebar">
                        <!-- Start Single properties sidebar -->
                        <div class="aa-properties-single-sidebar">
                            <h3>Thông tin tìm kiếm</h3>
                            <form method="get" action="{{URL::to('/jobs-list')}}">
                           
                                <div class="aa-single-advance-search">
                                    <input type="text" name="title" placeholder="Nhập vào công việc bạn muốn tìm">
                                </div>
                                <div class="aa-single-advance-search">
                                    <select id="" name="branch">                      
                                        @foreach ($branch as $key => $bra)
                                            <option
                                                value="<?php echo $bra->Ma_nganh_nghe; ?>">
                                                <?php echo $bra->Ten_nganh_nghe; ?>
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="aa-single-advance-search">
                                    <select id="" name="place">
                                        @foreach ($place as $key => $pla)
                                            <option
                                                value="<?php echo $pla->Ma_dia_diem; ?>">
                                                <?php echo $pla->Ten_dia_diem; ?>
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="aa-single-filter-search" id="salary">
                                    <span>MỨC LƯƠNG TỪ</span>
                                    <span id="skip-value-lower" class="example-val"></span>
                                    <span>TRIỆU VNĐ </span><span>ĐẾN</span>
                                    <span id="skip-value-upper" class="example-val"></span>
                                    <span>TRIỆU VNĐ</span>
                                    <div id="aa-sqrfeet-range"
                                        class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                    </div>
                                    <input type="hidden" id="salary_from" name="salary_from">
                                    <input type="hidden" id="salary_to" name="salary_to">
                                </div>
                                <div class="aa-single-advance-search">
                                    <input id="submit-job" type="submit" value="Tìm kiếm" class="aa-search-btn">
                                </div>
                            </form>
                        </div>
                        <!-- Start Single properties sidebar -->
                        <div class="aa-properties-single-sidebar">
                            <h3>Công việc liên quan</h3>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object"
                                            src="{{ 'public/frontend/HomeProperty/img/item/1.jpg' }}" alt="img">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">This is Title</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <span>$65000</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object"
                                            src="{{ 'public/frontend/HomeProperty/img/item/1.jpg' }}" alt="img">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">This is Title</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <span>$65000</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object"
                                            src="{{ 'public/frontend/HomeProperty/img/item/1.jpg' }}" alt="img">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">This is Title</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <span>$65000</span>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- / Properties  -->
    <script>
        // document.getElementById("skip-value-lower").addEventListener("change", salaryfrom);

        // function salaryfrom() {
        // var x = document.getElementById("skip-value-lower").innerHTML;
        // document.getElementById('salary_from').value = x;
        document.getElementById("submit-job").addEventListener("click", salary);

        function salary() {
            var from = document.getElementById("skip-value-lower").outerText;
            var to = document.getElementById("skip-value-upper").outerText;
            document.getElementById("salary_from").value = from;
            document.getElementById("salary_to").value = to;
        }

    </script>

@endsection
