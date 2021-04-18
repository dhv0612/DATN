@extends('layout')
@section('content')

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
                        <li class="active"><a href="{{URL::TO('/')}}">TRANG CHỦ</a></li>
                        <li><a href="#">VIỆC LÀM</a></li>
                        {{-- <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="properties.html">Các việc làm <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">                
                <li><a href="properties.html">PROPERTIES</a></li>
                <li><a href="properties-detail.html">PROPERTIES DETAIL</a></li>                                            
              </ul>
            </li> --}}
                        <li><a href="gallery.html">TTHÔNG TIN VỀ UTC2</a></li>
                        <!-- <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">BLOG <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">                
                            <li><a href="blog-archive.html">BLOG</a></li>
                            <li><a href="blog-single.html">BLOG DETAILS</a></li>                                            
                          </ul>
                        </li> -->
                        <li><a href="{{URL::TO('/employer')}}">NHÀ TUYỂN DỤNG</a></li>

                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </section>
    <!-- End menu section -->

    <!-- Start slider  -->
    <section id="aa-slider">
        <div class="aa-slider-area">
            <!-- Top slider -->
            <div class="aa-top-slider">
                <!-- Top slider single slide -->
                <div class="aa-top-slider-single">
                    <img src="{{ 'public/frontend/HomeProperty/img/slider/3.jpg' }}" alt="img">
                    <!-- Top slider content -->
                    <div class="aa-top-slider-content">
                        <span class="aa-top-slider-catg">UTC2</span>
                        <h2 class="aa-top-slider-title">TUYỂN DỤNG NHÂN SỰ</h2>
                        <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>450-451 Lê Văn Việt Quận 9 TP.HCM
                        </p>
                        <span class="aa-top-slider-off">Ngày cuối nhận hồ sơ: 14/02/2021</span>
                        <p class="aa-top-slider-price">20,000,000 VNĐ</p>
                        <a href="#" class="aa-top-slider-btn">XEM CHI TIẾT <span
                                class="fa fa-angle-double-right"></span></a>
                    </div>
                    <!-- / Top slider content -->
                </div>
                <!-- / Top slider single slide -->
                <!-- Top slider single slide -->
                <div class="aa-top-slider-single">
                    <img src="{{ 'public/frontend/HomeProperty/img/slider/2.jpg' }}" alt="img">
                    <!-- Top slider content -->
                    <div class="aa-top-slider-content">
                        <span class="aa-top-slider-catg">UTC2</span>
                        <h2 class="aa-top-slider-title">TUYỂN DỤNG NHÂN SỰ</h2>
                        <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>450-451 Lê Văn Việt Quận 9 TP.HCM
                        </p>
                        <span class="aa-top-slider-off"></span>
                        <p class="aa-top-slider-price">20,000,000 VNĐ</p>
                        <a href="#" class="aa-top-slider-btn">XEM CHI TIẾT <span
                                class="fa fa-angle-double-right"></span></a>
                    </div>
                    <!-- / Top slider content -->
                </div>
                <!-- / Top slider single slide -->
                <!-- Top slider single slide -->
                <div class="aa-top-slider-single">
                    <img src="{{ 'public/frontend/HomeProperty/img/slider/1.jpg' }}" alt="img">
                    <!-- Top slider content -->
                    <div class="aa-top-slider-content">
                        <span class="aa-top-slider-catg">UTC2</span>
                        <h2 class="aa-top-slider-title">TUYỂN DỤNG NHÂN SỰ</h2>
                        <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>450-451 Lê Văn Việt Quận 9 TP.HCM
                        </p>
                        <span class="aa-top-slider-off"></span>
                        <p class="aa-top-slider-price">20,000,000 VNĐ</p>
                        <a href="#" class="aa-top-slider-btn">XEM CHI TIẾT <span
                                class="fa fa-angle-double-right"></span></a>
                    </div>
                    <!-- / Top slider content -->
                </div>
                <!-- / Top slider single slide -->
                <!-- Top slider single slide -->
                <div class="aa-top-slider-single">
                    <img src="{{ 'public/frontend/HomeProperty/img/slider/5.jpg' }}" alt="img">
                    <!-- Top slider content -->
                    <div class="aa-top-slider-content">
                        <span class="aa-top-slider-catg">Duplex</span>
                        <h2 class="aa-top-slider-title">1560 Square Feet</h2>
                        <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
                        <span class="aa-top-slider-off">30% OFF</span>
                        <p class="aa-top-slider-price">$460,000</p>
                        <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
                    </div>
                    <!-- / Top slider content -->
                </div>
                <!-- / Top slider single slide -->
                <!-- Top slider single slide -->
                <div class="aa-top-slider-single">
                    <img src="{{ 'public/frontend/HomeProperty/img/slider/4.jpg' }}" alt="img">
                    <!-- Top slider content -->
                    <div class="aa-top-slider-content">
                        <span class="aa-top-slider-catg">Duplex</span>
                        <h2 class="aa-top-slider-title">1560 Square Feet</h2>
                        <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
                        <span class="aa-top-slider-off">30% OFF</span>
                        <p class="aa-top-slider-price">$460,000</p>
                        <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
                    </div>
                    <!-- / Top slider content -->
                </div>
                <!-- / Top slider single slide -->
                <!-- Top slider single slide -->
                <div class="aa-top-slider-single">
                    <img src="{{ 'public/frontend/HomeProperty/img/slider/6.jpg' }}" alt="img">
                    <!-- Top slider content -->
                    <div class="aa-top-slider-content">
                        <span class="aa-top-slider-catg">Duplex</span>
                        <h2 class="aa-top-slider-title">1560 Square Feet</h2>
                        <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
                        <span class="aa-top-slider-off">30% OFF</span>
                        <p class="aa-top-slider-price">$460,000</p>
                        <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
                    </div>
                    <!-- / Top slider content -->
                </div>
                <!-- / Top slider single slide -->
            </div>
        </div>
    </section>
    <!-- End slider  -->

    <!-- Advance Search -->
    <section id="aa-advance-search">
        <div class="container">
            <div class="aa-advance-search-area">
                <div class="form">
                    <form method="POST" action="{{URL::to('/jobs-list')}}">
                      {{ csrf_field() }}
                        <div class="aa-advance-search-top">
                            <div class="row">
                                <div class="col-md-6">  
                                    <div class="aa-single-advance-search">
                                        <input type="text" name="title" placeholder="Nhập vào công việc bạn muốn tìm">
                                    </div>
                                </div>
                                <div class="col-md-2">
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
                                </div>
                               
                                <div class="col-md-2">
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
                                </div>
                                <div class="col-md-2">
                                    <div class="aa-single-advance-search">
                                        <input id="submit-job" class="aa-search-btn" type="submit" value="Tìm kiếm">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="aa-advance-search-bottom">
                            <div class="row">
                                <div class="col-md-12">
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
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- / Advance Search -->

    <!-- About us -->
    <section id="aa-about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-about-us-area">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="aa-about-us-left">
                                    <img src="{{ 'public/frontend/HomeProperty/img/about-us.png' }}" alt="image">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="aa-about-us-right">
                                    <div class="aa-title">
                                        <h2>Thông tin về UTC2</h2>
                                        <span></span>
                                    </div>
                                    <p>PHÂN HIỆU TRƯỜNG ĐH GTVT TẠI TP. HỒ CHÍ MINH</p>
                                    <ul>
                                        <li>Địa chỉ: 450-451 Lê Văn Việt, Phường Tăng Nhơn Phú A <br>Tp. Thủ Đức (Quận 9
                                            cũ), TP. Hồ Chí Minh.</li>
                                        <li>Điện thoại: (028).3896.6798 - (028).7300.1155.</li>
                                        <li>Email: banbientap@utc2.edu.vn.</li>
                                        <li>Fax: (028).3896.4736.</li>
                                        <li>Website: http://utc2.edu.vn.</li>
                                        <!-- <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / About us -->

    <!-- Latest property -->
    <section id="aa-latest-property">
        <div class="container">
            <div class="aa-latest-property-area">
                <div class="aa-title">

                    <div class="col-md-12 col-sm-12">
                        <h2>Công việc nổi bật</h2>
                        <span></span>
                        <p>Danh sách các công việc được nhiều người quan tâm.</p>
                    </div>

                </div>
                <div class="aa-latest-properties-content">
                    <div class="row">
                        <div class="col-md-4">
                            <article class="aa-properties-item">
                                <a href="#" class="aa-properties-item-img">
                                    <img src="{{ 'public/frontend/HomeProperty/img/item/1.jpg' }}" alt="img">
                                </a>
                                <!-- <div class="aa-tag for-sale">
                          For Sale
                        </div> -->
                                <div class="aa-properties-item-content">
                                    <div class="aa-properties-info">
                                        <span>Nike</span><span></span>
                                        <span>Hà Nội</span><span></span>
                                        <span>2 người</span><span></span>
                                    </div>
                                    <div class="aa-properties-about">
                                        <h3><a href="#">Senior ASP.Net</a></h3>
                                        <p>Quản lý team lập trình viên. <br>Giao nhiệm vụ cho nhân viên, quản ly team<br>Có
                                            trách nhiệm</p>
                                    </div>
                                    <div class="aa-properties-detial">
                                        <span class="aa-price">
                                            50.000.000 VNĐ
                                        </span>
                                        <a href="#" class="aa-secondary-btn">View Details</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="aa-properties-item">
                                <a href="#" class="aa-properties-item-img">
                                    <img src="{{ 'public/frontend/HomeProperty/img/item/2.jpg' }}" alt="img">
                                </a>
                                <div class="aa-tag for-rent">
                                    For Rent
                                </div>
                                <div class="aa-properties-item-content">
                                    <div class="aa-properties-info">
                                        <span>5 Rooms</span>
                                        <span>2 Beds</span>
                                        <span>3 Baths</span>
                                        <span>1100 SQ FT</span>
                                    </div>
                                    <div class="aa-properties-about">
                                        <h3><a href="#">Appartment Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero
                                            ducimus quibusdam odit vitae.</p>
                                    </div>
                                    <div class="aa-properties-detial">
                                        <span class="aa-price">
                                            $11000
                                        </span>
                                        <a href="#" class="aa-secondary-btn">View Details</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="aa-properties-item">
                                <a href="#" class="aa-properties-item-img">
                                    <img src="{{ 'public/frontend/HomeProperty/img/item/3.jpg' }}" alt="img">
                                </a>
                                <div class="aa-tag sold-out">
                                    Sold Out
                                </div>
                                <div class="aa-properties-item-content">
                                    <div class="aa-properties-info">
                                        <span>5 Rooms</span>
                                        <span>2 Beds</span>
                                        <span>3 Baths</span>
                                        <span>1100 SQ FT</span>
                                    </div>
                                    <div class="aa-properties-about">
                                        <h3><a href="#">Appartment Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero
                                            ducimus quibusdam odit vitae.</p>
                                    </div>
                                    <div class="aa-properties-detial">
                                        <span class="aa-price">
                                            $15000
                                        </span>
                                        <a href="#" class="aa-secondary-btn">View Details</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="aa-properties-item">
                                <a href="#" class="aa-properties-item-img">
                                    <img src="{{ 'public/frontend/HomeProperty/img/item/4.jpg' }}" alt="img">
                                </a>
                                <div class="aa-tag for-sale">
                                    For Sale
                                </div>
                                <div class="aa-properties-item-content">
                                    <div class="aa-properties-info">
                                        <span>5 Rooms</span>
                                        <span>2 Beds</span>
                                        <span>3 Baths</span>
                                        <span>1100 SQ FT</span>
                                    </div>
                                    <div class="aa-properties-about">
                                        <h3><a href="#">Appartment Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero
                                            ducimus quibusdam odit vitae.</p>
                                    </div>
                                    <div class="aa-properties-detial">
                                        <span class="aa-price">
                                            $35000
                                        </span>
                                        <a href="#" class="aa-secondary-btn">View Details</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="aa-properties-item">
                                <a href="#" class="aa-properties-item-img">
                                    <img src="{{ 'public/frontend/HomeProperty/img/item/5.jpg' }}" alt="img">
                                </a>
                                <div class="aa-tag sold-out">
                                    Sold Out
                                </div>
                                <div class="aa-properties-item-content">
                                    <div class="aa-properties-info">
                                        <span>5 Rooms</span>
                                        <span>2 Beds</span>
                                        <span>3 Baths</span>
                                        <span>1100 SQ FT</span>
                                    </div>
                                    <div class="aa-properties-about">
                                        <h3><a href="#">Appartment Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero
                                            ducimus quibusdam odit vitae.</p>
                                    </div>
                                    <div class="aa-properties-detial">
                                        <span class="aa-price">
                                            $11000
                                        </span>
                                        <a href="#" class="aa-secondary-btn">View Details</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="aa-properties-item">
                                <a href="#" class="aa-properties-item-img">
                                    <img src="{{ 'public/frontend/HomeProperty/img/item/6.jpg' }}" alt="img">
                                </a>
                                <div class="aa-tag for-rent">
                                    For Rent
                                </div>
                                <div class="aa-properties-item-content">
                                    <div class="aa-properties-info">
                                        <span>5 Rooms</span>
                                        <span>2 Beds</span>
                                        <span>3 Baths</span>
                                        <span>1100 SQ FT</span>
                                    </div>
                                    <div class="aa-properties-about">
                                        <h3><a href="#">Appartment Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero
                                            ducimus quibusdam odit vitae.</p>
                                    </div>
                                    <div class="aa-properties-detial">
                                        <span class="aa-price">
                                            $15000
                                        </span>
                                        <a href="#" class="aa-secondary-btn">View Details</a>
                                    </div>
                                </div>
                            </article>
                        </div>

                    </div>
                </div>
                {{-- <div class="col-md-12">
                    <div class="aa-blog-related-post-area">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <article class="aa-blog-single" style="padding: 10px">
                                    <figure class="aa-blog-img">
                                        <div class="col-md-3 col-sm-3">
                                            <a href="#"><img src="{{ 'public/frontend/HomeProperty/img/blog-img-1.jpg' }}"
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
                                <article class="aa-blog-single" style="padding: 10px">
                                    <figure class="aa-blog-img">
                                        <div class="col-md-3 col-sm-3">
                                            <a href="#"><img src="{{ 'public/frontend/HomeProperty/img/blog-img-1.jpg' }}"
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
                </div> --}}

            </div>
        </div>
    </section>
    <!-- / Latest property -->

    <!-- Service section -->
    <section id="aa-service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-service-area">
                        <div class="aa-title">
                            <h2>Dịch vụ của chúng tôi</h2>
                            <span></span>
                            <p>Chúng tôi luôn mang lại những dịch vụ chất lượng tốt</p>
                        </div>
                        <!-- service content -->
                        <div class="aa-service-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="aa-single-service">
                                        <div class="aa-service-icon">
                                            <span class="fa fa-home"></span>
                                        </div>
                                        <div class="aa-single-service-content">
                                            <h4><a href="#">Hỗ trợ ứng viên</a></h4>
                                            <p>Chúng tôi hỗ trợ ứng viên có thể tìm kiếm các công việc dù ở nhà hay bất kỳ
                                                đâu.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="aa-single-service">
                                        <div class="aa-service-icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="aa-single-service-content">
                                            <h4><a href="#">Giúp đỡ nhà tuyển dụng</a></h4>
                                            <p>Nhà tuyển dụng không cần phải mất công sức để tìm ứng viên. Chúng tôi có thể
                                                lo chuyện này. Nhà tuyển dụng chỉ cần đăng bài và thanh toán.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-3">
                              <div class="aa-single-service">
                                <div class="aa-service-icon">
                                  <span class="fa fa-crosshairs"></span>
                                </div>
                                <div class="aa-single-service-content">
                                  <h4><a href="#">Tìm kiếm </a></h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                                </div>
                              </div>
                            </div> -->
                                <div class="col-md-4">
                                    <div class="aa-single-service">
                                        <div class="aa-service-icon">
                                            <span class="fa fa-bar-chart-o"></span>
                                        </div>
                                        <div class="aa-single-service-content">
                                            <h4><a href="#">Quản lý thông tin</a></h4>
                                            <p>Chúng tôi luôn lắng nghe và phát triển thêm về việc quản lý thông tin co các
                                                nhà tuyển dụng cũng như ứng cử viên.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Service section -->

    <!-- Promo Banner Section -->
    <section id="aa-promo-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-promo-banner-area">
                        <h3>UTC2 WORK - TÌM VIỆC LÀM TỐT NHẤT</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, ex illum corporis quibusdam
                            numquam quisquam optio explicabo. Officiis odit quia odio dignissimos eius repellat id!</p>
                        <a href="#" class="aa-view-btn">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <!-- / Promo Banner Section -->

    <!-- Our Agent Section-->
    <!-- <section id="aa-agents">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="aa-agents-area">
                        <div class="aa-title">
                          <h2>Our Agents</h2>
                          <span></span>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
                        </div>
                     
                        <div class="aa-agents-content">
                          <ul class="aa-agents-slider">
                            <li>
                              <div class="aa-single-agents">
                                <div class="aa-agents-img">
                                  <img src="img/agents/agent-1.png" alt="agent member image">
                                </div>
                                <div class="aa-agetns-info">
                                  <h4><a href="#">Philip Smith</a></h4>
                                  <span>Top Agent</span>
                                  <div class="aa-agent-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="aa-single-agents">
                                <div class="aa-agents-img">
                                  <img src="img/agents/agent-5.png" alt="agent member image">
                                </div>
                                <div class="aa-agetns-info">
                                  <h4><a href="#">Adam Barney</a></h4>
                                  <span>Expert Agent</span>
                                  <div class="aa-agent-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="aa-single-agents">
                                <div class="aa-agents-img">
                                  <img src="img/agents/agent-3.png" alt="agent member image">
                                </div>
                                <div class="aa-agetns-info">
                                  <h4><a href="#">Paul Walker</a></h4>
                                  <span>Director</span>
                                  <div class="aa-agent-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="aa-single-agents">
                                <div class="aa-agents-img">
                                  <img src="img/agents/agent-4.png" alt="agent member image">
                                </div>
                                <div class="aa-agetns-info">
                                  <h4><a href="#">John Smith</a></h4>
                                  <span>Jr. Agent</span>
                                  <div class="aa-agent-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                  </div>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="aa-single-agents">
                                <div class="aa-agents-img">
                                  <img src="img/agents/agent-1.png" alt="agent member image">
                                </div>
                                <div class="aa-agetns-info">
                                  <h4><a href="#">Philip Smith</a></h4>
                                  <span>Top Agent</span>
                                  <div class="aa-agent-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="aa-single-agents">
                                <div class="aa-agents-img">
                                  <img src="img/agents/agent-5.png" alt="agent member image">
                                </div>
                                <div class="aa-agetns-info">
                                  <h4><a href="#">Adam Barney</a></h4>
                                  <span>Expert Agent</span>
                                  <div class="aa-agent-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="aa-single-agents">
                                <div class="aa-agents-img">
                                  <img src="img/agents/agent-3.png" alt="agent member image">
                                </div>
                                <div class="aa-agetns-info">
                                  <h4><a href="#">Paul Walker</a></h4>
                                  <span>Director</span>
                                  <div class="aa-agent-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="aa-single-agents">
                                <div class="aa-agents-img">
                                  <img src="img/agents/agent-4.png" alt="agent member image">
                                </div>
                                <div class="aa-agetns-info">
                                  <h4><a href="#">John Smith</a></h4>
                                  <span>Jr. Agent</span>
                                  <div class="aa-agent-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section> -->
    <!-- / Our Agent Section-->

    <!-- Client Testimonial -->
    <!-- <section id="aa-client-testimonial">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="aa-client-testimonial-area">
                        <div class="aa-title">
                          <h2>What Client Say</h2>
                          <span></span>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus eaque quas debitis animi ipsum, veritatis!</p>
                        </div>
                
                        <div class="aa-testimonial-content">

                          <ul class="aa-testimonial-slider">
                            <li>
                              <div class="aa-testimonial-single">
                                <div class="aa-testimonial-img">
                                  <img src="img/testimonial-1.png" alt="testimonial img">
                                </div>
                                <div class="aa-testimonial-info">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                                </div>
                                <div class="aa-testimonial-bio">
                                  <p>David Muller</p>
                                  <span>Web Designer</span>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="aa-testimonial-single">
                                <div class="aa-testimonial-img">
                                  <img src="img/testimonial-3.png" alt="testimonial img">
                                </div>
                                <div class="aa-testimonial-info">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                                </div>
                                <div class="aa-testimonial-bio">
                                  <p>David Muller</p>
                                  <span>Web Designer</span>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="aa-testimonial-single">
                                <div class="aa-testimonial-img">
                                  <img src="img/testimonial-2.png" alt="testimonial img">
                                </div>
                                <div class="aa-testimonial-info">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                                </div>
                                <div class="aa-testimonial-bio">
                                  <p>David Muller</p>
                                  <span>Web Designer</span>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section> -->
    <!-- Client Testimonial -->

    <!-- Client brand -->
    <!-- <section id="aa-client-brand">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="aa-client-brand-area">
                        <ul class="aa-client-brand-slider">
                          <li>
                            <div class="aa-client-single-brand">
                              <img src="img/client-brand-1.png" alt="brand image">
                            </div>
                          </li>
                          <li>
                            <div class="aa-client-single-brand">
                              <img src="img/client-brand-2.png" alt="brand image">
                            </div>
                          </li>
                          <li>
                            <div class="aa-client-single-brand">
                              <img src="img/client-brand-3.png" alt="brand image">
                            </div>
                          </li>
                          <li>
                            <div class="aa-client-single-brand">
                              <img src="img/client-brand-5.png" alt="brand image">
                            </div>
                          </li>
                          <li>
                            <div class="aa-client-single-brand">
                              <img src="img/client-brand-4.png" alt="brand image">
                            </div>
                          </li>
                           <li>
                            <div class="aa-client-single-brand">
                              <img src="img/client-brand-1.png" alt="brand image">
                            </div>
                          </li>
                          <li>
                            <div class="aa-client-single-brand">
                              <img src="img/client-brand-2.png" alt="brand image">
                            </div>
                          </li>
                          <li>
                            <div class="aa-client-single-brand">
                              <img src="img/client-brand-3.png" alt="brand image">
                            </div>
                          </li>
                          <li>
                            <div class="aa-client-single-brand">
                              <img src="img/client-brand-5.png" alt="brand image">
                            </div>
                          </li>
                          <li>
                            <div class="aa-client-single-brand">
                              <img src="img/client-brand-4.png" alt="brand image">
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </section> -->
    <!-- / Client brand -->

    <!-- Latest blog -->
    <!-- <section id="aa-latest-blog">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="aa-latest-blog-area">
                        <div class="aa-title">
                          <h2>Latest News</h2>
                          <span></span>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe magni, est harum repellendus. Accusantium, nostrum!</p>
                        </div>
                        <div class="aa-latest-blog-content">
                          <div class="row">
               
                            <div class="col-md-4">
                              <article class="aa-blog-single">
                                <figure class="aa-blog-img">
                                  <a href="#"><img src="img/blog-img-1.jpg" alt="img"></a>
                                  <span class="aa-date-tag">15 April, 16</span>
                                </figure>
                                <div class="aa-blog-single-content">
                                  <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                                  <div class="aa-blog-single-bottom">
                                    <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                                    <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                                  </div>
                                </div>
                               
                              </article>
                            </div>

                            <div class="col-md-4">
                              <article class="aa-blog-single">
                                <figure class="aa-blog-img">
                                  <a href="#"><img src="img/blog-img-2.jpg" alt="img"></a>
                                  <span class="aa-date-tag">15 April, 16</span>
                                </figure>
                                <div class="aa-blog-single-content">
                                  <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                                  <div class="aa-blog-single-bottom">
                                    <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                                    <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                                  </div>
                                </div>                   
                              </article>
                            </div>
                
                            <div class="col-md-4">
                              <article class="aa-blog-single">
                                <figure class="aa-blog-img">
                                  <a href="#"><img src="img/blog-img-3.jpg" alt="img"></a>
                                  <span class="aa-date-tag">15 April, 16</span>
                                </figure>
                                <div class="aa-blog-single-content">
                                  <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                                  <div class="aa-blog-single-bottom">
                                    <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                                    <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                                  </div>
                                </div>                   
                              </article>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section> -->
    <!-- / Latest blog -->
@endsection
