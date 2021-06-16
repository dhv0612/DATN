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
                    <a class="navbar-brand aa-logo" href="{{ URL::TO('/') }}"> UTC2 <span>WORK</span></a>
                    <!-- Image based logo -->
                    <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
                        <li><a href="{{ URL::TO('/') }}">TRANG CHỦ</a></li>
                        <!-- <li class="dropdown active">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="properties.html">PROPERTIES <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">                
                        <li><a href="properties.html">PROPERTIES</a></li>
                        <li><a href="properties-detail.html">PROPERTIES DETAIL</a></li>                                            
                      </ul>
                    </li> -->
                        <li class=""><a href="#">VIỆC LÀM</a></li>
                        <li><a href="gallery.html">THÔNG TIN VỀ UTC2</a></li>
                        <li><a href="{{ URL::TO('/employer') }}">NHÀ TUYỂN DỤNG</a></li>
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
                        <h2>Các bài kiểm tra</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ URL::TO('/') }}">Trang chủ</a></li>
                            <li class="active">Bài kiểm tra</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Proerty header  -->
    <!-- Start Blog  -->
    <section id="aa-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-blog-area">
                        <p style=" font-size: 20px;
                       
                        font-weight: bold;">Hãy chắc chắn rằng kết nối mạng của bạn không có vấn đề và thời gian để làm bài sẽ không bị ảnh hưởng
                        <br>Khi bắt đầu làm bài bạn sẽ không thể làm lại
                        <br>Trong khi làm bài bạn không được chụp màn hình hoặc sửa mã nguồn 
                    </p>
                    <p style=" font-size: 40px;
                    color: red;
                    text-align: center;
                    font-weight: bold;">Nếu không bài kiểm tra sẽ bị hủy</p>
                        <div class="row">
                            @foreach ($exam_list as $key=>$el )
                            <div class="col-md-4">
                                <aside class="aa-blog-sidebar" style="border: 6px solid white;">                                
                                    <div class="aa-blog-sidebar-single">
                                        <h3 style="text-align: center; font-size:30px; font-weight: bold;">{{ $el->Ten_bai_kiem_tra }}</h3>
                                        <ul class="aa-blog-catg">
                                            <li style="font-size: 20px">Thời gian làm <span>{{ $el->Thoi_gian_lam }} Phút</span></li>
                                            <li style="font-size: 20px">Số câu <span>{{ $el->So_cau }}</span></li>                                            
                                        </ul>
                                        @foreach ($exam_detail as $key =>$ed )
                                            @if ($ed->Ma_bai_kiem_tra == $el->Ma_bai_kiem_tra)
                                            @if($ed->Trang_thai==0)
                                            <h3 style="text-align: center;"> <a style="font-size: 20px" class="btn btn-success" href="{{URL::to('/start-exam/'.$el->Ma_bai_kiem_tra)}}">Bắt đầu làm bài</a> 
                                            @else     
                                            <h3 style="text-align: center;font-size: 20px;width: 100%;}" class="btn-secondary "> Đã hoàn thành </h3> 
                                            @endif
                                            @endif
                                        @endforeach
                                        {{-- @foreach ($exam_detail as $key =>$ed )
                                            @if ($ed->Ma_bai_kiem_tra == $el->Ma_bai_kiem_tra)
                                            @endif
                                        @endforeach --}}

                                    </div>                        
                                </aside>                              
                            </div>
                            @endforeach
                            {{-- <div class="col-md-8">
                                <div class="aa-blog-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-6" style="padding: 0 !important">
                                                <aside class="aa-blog-sidebar"
                                                    style="padding: 0 !important; border: 7px solid white;">
                                                    
                                                    <div class="aa-blog-sidebar-single">
                                                        <div class="aa-blog-search">
                                                            <?php
                                                            $cv_ungtuyen = 0;
                                                            $cv_luu = 0;
                                                            ?>
                                                            @foreach ($jobs_detail as $key => $jd)
                                                                <?php if ($jd->Trang_thai == 1) {
                                                                $cv_ungtuyen++;
                                                                } else {
                                                                $cv_luu++;
                                                                } ?>
                                                            @endforeach

                                                            <p style="font-size: 50px; text-align: center;">
                                                                {{ $cv_ungtuyen }}</p>
                                                        </div>

                                                    </div>

                                                  
                                                    <div class="aa-blog-sidebar-single">
                                                        <h4 style="text-align: center; font-weight: bold;">Công việc bạn
                                                            ứng tuyển</h4>
                                                        <ul class="aa-blog-catg">
                                                         
                                                            <li class="update-user">
                                                                <a href="{{ URL::to('/jobs-candidates') }}"
                                                                    class="aa-secondary-btn" style="font-size: 18px;">Xem
                                                                    ngay</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </aside>
                                            </div>
                                            <div class="col-md-6" style="padding: 0 !important">
                                                <aside class="aa-blog-sidebar"
                                                    style="padding: 0 !important; border: 7px solid white;">
                                                  
                                                    <div class="aa-blog-sidebar-single">
                                                        <div class="aa-blog-search">
                                                            <p style="font-size: 50px; text-align: center;">
                                                                {{ $cv_luu }}</p>
                                                        </div>
                                                    </div>
                                                  
                                                    <div class="aa-blog-sidebar-single">
                                                        <h4 style="text-align: center; font-weight: bold;">Công việc bạn
                                                            đã lưu</h4>
                                                        <ul class="aa-blog-catg">
                                                           
                                                            <li class="update-user">
                                                                <a href="{{ URL::to('/jobs-save') }}"
                                                                    class="aa-secondary-btn" style="font-size: 18px;">Xem
                                                                    ngay</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                   
                                                </aside>
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Blog  -->
@endsection