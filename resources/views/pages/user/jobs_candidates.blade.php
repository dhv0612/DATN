@extends('layout')
@section('content')

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
                        <h2>Thông tin cá nhân</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Trang chủ</a></li>
                            <li class="active">Việc làm đã ứng tuyển</li>
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
                            <div class="aa-blog-content">
                                <div class="aa-blog-related-post">
                                    <div class="aa-title">
                                        <h2>Các việc làm bạn đã ứng tuyển</h2>
                                        <span></span>
                                    </div>
                                    <div class="aa-blog-related-post-area">
                                        <div class="row">
                                            @foreach ($jobs_detail as $key => $jd)
                                                @foreach ($jobs as $key => $js)
                                                    @if ($jd->Ma_bai_dang == $js->Ma_bai_dang)
                                                        @foreach ($employer as $key => $emp)
                                                            @if ($emp->Ma_nha_tuyen_dung == $js->Ma_nha_tuyen_dung)
                                                                <div class="col-md-12 col-sm-12">
                                                                    <article class="aa-blog-single">
                                                                        <figure class="aa-blog-img">
                                                                            <div class="col-md-2 col-sm-2"
                                                                                style="padding: 0; ">

                                                                                <a href="#"><img
                                                                                        style="max-width: 70%;border: 1px solid #ddd"
                                                                                        src="{{ asset('public/upload/nhatuyendung/' . $emp->Hinh_anh) }}"
                                                                                        alt="img"></a>
                                                                            </div>
                                                                            <div class="col-md-5 col-sm-5">
                                                                                <h3><strong><a
                                                                                            href="#">{{ $js->Tieu_de }}</a></strong>
                                                                                </h3>
                                                                                <h4>Công ty:
                                                                                    <strong>{{ $emp->Ten_cong_ty }}</strong>
                                                                                </h4>

                                                                                <h3><strong>
                                                                                        <?php
                                                                                        $format_number =
                                                                                        number_format($js->Muc_luong);
                                                                                        echo $format_number;
                                                                                        ?> VNĐ</strong></h3>
                                                                            </div>
                                                                            <div class="col-md-3 col-sm-3"
                                                                                style="padding: 18px 0px;">

                                                                                <h3><a href="#">Ngày hết hạn</a></h3>
                                                                                <?php $date_format =
                                                                                date('d-m-Y',
                                                                                strtotime($js->Han_ung_tuyen)); ?>
                                                                                <h3><strong>{{ $date_format }}</strong>
                                                                                </h3>
                                                                            </div>
                                                                            @if ($jd->Kiem_tra == 1)
                                                                                <div class="col-md-2 col-sm-2" style="padding: 48px 0px;
                                                                                text-align: center;">
                                                                                    <a href="{{URL::to('/list-exam-user/'.$js->Ma_bai_dang)}}" class="btn btn-primary">Làm
                                                                                        kiểm tra</a>
                                                                                </div>
                                                                            @elseif (!isset($jd->Kiem_tra))
                                                                            <div class="col-md-2 col-sm-2" style="padding: 48px 0px;
                                                                            text-align: center;">
                                                                                <a href="#" class="btn btn-primary">Đang xem xét</a>
                                                                            </div>
                                                                               
                                                                            @else
                                                                            <div class="col-md-2 col-sm-2" style="padding: 48px 0px;
                                                                                text-align: center;">
                                                                                    <a href="#" class="btn btn-primary">Chưa phù hợp</a>
                                                                                </div>
                                                                            @endif
                                                                        </figure>
                                                                    </article>
                                                                </div>
                                                            @endif
                                                        @endforeach


                                                    @endif
                                                @endforeach
                                            @endforeach


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


                                <!-- Start blog sidebar -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- / Blog  -->

@endsection
