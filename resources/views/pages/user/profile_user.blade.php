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
                <li><a href="{{URL::TO('/')}}">TRANG CHỦ</a></li>
                <!-- <li class="dropdown active">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="properties.html">PROPERTIES <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">                
                    <li><a href="properties.html">PROPERTIES</a></li>
                    <li><a href="properties-detail.html">PROPERTIES DETAIL</a></li>                                            
                  </ul>
                </li> -->
                <li class=""><a href="#">VIỆC LÀM</a></li>
                <li><a href="gallery.html">THÔNG TIN VỀ UTC2</a></li>
       
                <li><a href="{{URL::TO('/employer')}}">NHÀ TUYỂN DỤNG</a></li>
    
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
                <h2>Thông tin cá nhân</h2>
                <ol class="breadcrumb">
                  <li><a href="{{URL::TO('/')}}">Trang chủ</a></li>
                  <li class="active">Thông tin cá nhân</li>
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
                        <div class="row">
                            <div class="col-md-4">
                                <aside class="aa-blog-sidebar" style="border: 6px solid white;">
                                    <!-- Start single sidebar -->
                                    <div class="aa-blog-sidebar-single">
                                        <div class="aa-blog-search">
                                            <img class="img-user" src="{{URL::to('public/upload/ung_vien/hinhanh/'.$user->Hinh_anh)}}">
                                        </div>

                                    </div>

                                    <!-- Start single sidebar -->
                                    <div class="aa-blog-sidebar-single">
                                        <h3 style="text-align: center; font-weight: bold;">{{$user->Ten_ung_vien}}</h3>
                                        <ul class="aa-blog-catg">
                                            <li>Email <span>{{$user->Email}}</span></li>
                                            <li>Số điện thoại <span>{{$user->So_dien_thoai}}</span></li>
                                            <li class="update-user">
                                                <a href="{{URL::to('/edit-profile-user')}}" class="aa-secondary-btn" style="font-size: 18px;">Cập nhật
                                                    thông tin</a>
                                            </li>
                                        </ul>

                                    </div>

                                    <!-- Start single sidebar -->

                                    <!-- Start single sidebar -->
                                    <!-- <div class="aa-blog-sidebar-single">
                                        <div class="aa-banner-ads">
                                            <a href="#">
                                                <img src="img/banner-ads.jpg" alt="banner img">
                                            </a>
                                        </div>
                                    </div> -->
                                </aside>
                                <aside class="aa-blog-sidebar" style="border: 6px solid white;">
                                    <!-- Start single sidebar -->
                                    <div class="aa-blog-sidebar-single" style="margin:0">
                                        <h3 style="text-align: center; font-weight: bold;">Hồ sơ đính kèm</h3>
                                        <div class="aa-blog-recent-post">
                                            <div class="media" style="padding: 0 !important;">
                                                <form action="{{ URL::to('/save-file-user') }}" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <label>Chọn file CV của bạn</label>
                                                    <p>Định dang file chỉ có thể là PDF</p>
                                         
                                                    <a href="{{ asset('public/upload/ung_vien/filecv/'.$user->File_CV) }}" target="_blank"> {{$user->File_CV}}</a>
                                                    <input type="file" name="file_cv" style="border: 1px solid; width: 100%;">
                                                    <!-- <input type="file" class="custom-file-input" id="exampleInputFile"> -->
                                                    <div class="col-md-12" style="padding: 0; padding-top: 20px;">
                                                        <div class="col-md-10" style="padding: 0;">
                                                            <label>Cho phép hồ sơ của bạn hiển thị cho nhà tuyển dụng
                                                            </label>
                                                        </div>
                                                        <div class="col-sm-2" style="padding: 0;">
                                                            <?php
                                                                if ($user->Trang_thai ==1){
                                                          
                                                                echo '<input type="checkbox" name="status" checked>';
                                                         
                                                                }else{
                                                        
                                                                echo '<input type="checkbox" name="status">';
                                                                }
                                                            ?>                                                        
                                                        </div>
                                                    </div>                                        
                                                    <input type="submit" name="submit" class="aa-secondary-btn" value="Xác nhận">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-md-8">
                                <div class="aa-blog-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-6" style="padding: 0 !important">
                                                <aside class="aa-blog-sidebar"
                                                    style="padding: 0 !important; border: 7px solid white;">
                                                    <!-- Start single sidebar -->
                                                    <div class="aa-blog-sidebar-single">
                                                        <div class="aa-blog-search">
                                                            <?php
                                                                $cv_ungtuyen = 0;
                                                                $cv_luu =0
                                                            ?> 
                                                            @foreach ($jobs_detail as $key=>$jd)
                                                                <?php
                                                                    if($jd->Trang_thai ==1){
                                                                        $cv_ungtuyen++;
                                                                    }else{
                                                                        $cv_luu++;
                                                                    }
                                                                ?>
                                                            @endforeach
                                                        
                                                            <p style="font-size: 50px; text-align: center;">{{ $cv_ungtuyen}}</p>
                                                        </div>

                                                    </div>

                                                    <!-- Start single sidebar -->
                                                    <div class="aa-blog-sidebar-single">
                                                        <h4 style="text-align: center; font-weight: bold;">Công việc bạn
                                                            ứng tuyển</h4>
                                                        <ul class="aa-blog-catg">
                                                            <!-- <li>Chức danh <span>Đang là sinh viên</span></li>
                                                            <li>Chức danh <span>Đang là sinh viên</span></li> -->
                                                            <li class="update-user">
                                                                <a href="{{URL::to('/jobs-candidates')}}" class="aa-secondary-btn"
                                                                    style="font-size: 18px;">Xem ngay</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </aside>
                                            </div>
                                            <div class="col-md-6" style="padding: 0 !important">
                                                <aside class="aa-blog-sidebar"
                                                    style="padding: 0 !important; border: 7px solid white;">
                                                    <!-- Start single sidebar -->
                                                    <div class="aa-blog-sidebar-single">
                                                        <div class="aa-blog-search">
                                                            <p style="font-size: 50px; text-align: center;">{{ $cv_luu}}</p>
                                                        </div>
                                                    </div>
                                                    <!-- Start single sidebar -->
                                                    <div class="aa-blog-sidebar-single">
                                                        <h4 style="text-align: center; font-weight: bold;">Công việc bạn
                                                            đã lưu</h4>
                                                        <ul class="aa-blog-catg">
                                                            <!-- <li>Chức danh <span>Đang là sinh viên</span></li>
                                                            <li>Chức danh <span>Đang là sinh viên</span></li> -->
                                                            <li class="update-user">
                                                                <a href="{{URL::to('/jobs-save')}}" class="aa-secondary-btn"
                                                                    style="font-size: 18px;">Xem ngay</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- Start single sidebar -->

                                                    <!-- Start single sidebar -->
                                                    <!-- <div class="aa-blog-sidebar-single">
                                                        <div class="aa-banner-ads">
                                                            <a href="#">
                                                                <img src="img/banner-ads.jpg" alt="banner img">
                                                            </a>
                                                        </div>
                                                    </div> -->
                                                </aside>
                                            </div>
                                            {{-- <div class="col-md-4" style="padding: 0 !important">
                                                <aside class="aa-blog-sidebar"
                                                    style="padding: 0 !important; border: 7px solid white;">
                                                    <!-- Start single sidebar -->
                                                    <div class="aa-blog-sidebar-single">
                                                        <div class="aa-blog-search">
                                                            <p style="font-size: 50px; text-align: center;">0</p>
                                                        </div>

                                                    </div>

                                                    <!-- Start single sidebar -->
                                                    <div class="aa-blog-sidebar-single">
                                                        <h4 style="text-align: center; font-weight: bold;">Công việc bạn
                                                            ứng tuyển</h4>
                                                        <ul class="aa-blog-catg">
                                                            <!-- <li>Chức danh <span>Đang là sinh viên</span></li>
                                                            <li>Chức danh <span>Đang là sinh viên</span></li> -->
                                                            <li class="update-user">
                                                                <a href="#" class="aa-secondary-btn"
                                                                    style="font-size: 18px;">Xem ngay</a>
                                                            </li>
                                                        </ul>

                                                    </div>

                                                    <!-- Start single sidebar -->

                                                    <!-- Start single sidebar -->
                                                    <!-- <div class="aa-blog-sidebar-single">
                                                        <div class="aa-banner-ads">
                                                            <a href="#">
                                                                <img src="img/banner-ads.jpg" alt="banner img">
                                                            </a>
                                                        </div>
                                                    </div> -->
                                                </aside>
                                            </div> --}}
                                        </div>

                                        <div class="col-md-12">
                                            <div class="aa-blog-related-post">
                                                <div class="aa-title">
                                                    <h2>Các việc làm có thể phù hợp với bạn</h2>
                                                    <span></span>
                                                </div>
                                                <div class="aa-blog-related-post-area">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12">
                                                            <article class="aa-blog-single">
                                                                <figure class="aa-blog-img">
                                                                    <div class="col-md-3 col-sm-3">
                                                                        <a href="#"><img src="img/blog-img-1.jpg"
                                                                                alt="img"></a>

                                                                    </div>
                                                                    <div class="col-md-9 col-sm-9">
                                                                        <h3><a href="#">Lorem ipsum dolor sit amet,
                                                                                consectetur.</a></h3>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit. Optio est quaerat magnam
                                                                            exercitationem voluptas, voluptatem sed quam
                                                                        </p>
                                                                    </div>
                                                                </figure>
                                                            </article>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12">
                                                            <article class="aa-blog-single">
                                                                <figure class="aa-blog-img">
                                                                    <div class="col-md-3 col-sm-3">
                                                                        <a href="#"><img src="img/blog-img-1.jpg"
                                                                                alt="img"></a>

                                                                    </div>
                                                                    <div class="col-md-9 col-sm-9">
                                                                        <h3><a href="#">Lorem ipsum dolor sit amet,
                                                                                consectetur.</a></h3>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit. Optio est quaerat magnam
                                                                            exercitationem voluptas, voluptatem sed quam
                                                                        </p>
                                                                    </div>
                                                                </figure>
                                                            </article>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12">
                                                            <article class="aa-blog-single">
                                                                <figure class="aa-blog-img">
                                                                    <div class="col-md-3 col-sm-3">
                                                                        <a href="#"><img src="img/blog-img-1.jpg"
                                                                                alt="img"></a>

                                                                    </div>
                                                                    <div class="col-md-9 col-sm-9">
                                                                        <h3><a href="#">Lorem ipsum dolor sit amet,
                                                                                consectetur.</a></h3>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit. Optio est quaerat magnam
                                                                            exercitationem voluptas, voluptatem sed quam
                                                                        </p>
                                                                    </div>
                                                                </figure>
                                                            </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Respond box -->
                                        <!-- <div class="col-md-12">
                                            <div id="respond">
                                                <h3 class="reply-title">Leave a Comment</h3>
                                                <form id="commentform">
                                                    <p class="comment-notes">
                                                        Your email address will not be published. Required fields are
                                                        marked <span class="required">*</span>
                                                    </p>
                                                    <p class="comment-form-author">
                                                        <label for="author">Name <span class="required">*</span></label>
                                                        <input type="text" required="required" size="30" value=""
                                                            name="author">
                                                    </p>
                                                    <p class="comment-form-email">
                                                        <label for="email">Email <span class="required">*</span></label>
                                                        <input type="email" required="required" aria-required="true"
                                                            value="" name="email">
                                                    </p>
                                                    <p class="comment-form-url">
                                                        <label for="url">Website</label>
                                                        <input type="url" value="" name="url">
                                                    </p>
                                                    <p class="comment-form-comment">
                                                        <label for="comment">Comment</label>
                                                        <textarea required="required" aria-required="true" rows="8"
                                                            cols="45" name="comment"></textarea>
                                                    </p>
                                                    <p class="form-submit">
                                                        <input type="submit" value="Post Comment" class="aa-browse-btn"
                                                            name="submit">
                                                    </p>
                                                </form>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                            <!-- Start blog sidebar -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Blog  -->
@endsection