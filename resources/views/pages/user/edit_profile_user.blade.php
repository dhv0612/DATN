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
                        <h2>Thông tin</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Trang chủ</a></li>
                            <li class="active">Cập nhật thông tin cá nhân</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Proerty header  -->

    <section id="aa-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-contact-area">
                        <div class="aa-contact-top">
                            <div class="aa-contact-top-left">
                                <!-- <iframe width="100%" height="450" frameborder="0" allowfullscreen="" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6851.201919469417!2d-86.11773906635584!3d33.47324776828677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x888bdb60cc49c571%3A0x40451ca6baf275c7!2s36008+AL-77%2C+Talladega%2C+AL+35160%2C+USA!5e0!3m2!1sbn!2sbd!4v1460452919256"></iframe> -->
                            </div>
                            <!-- <div class="aa-contact-top-right">
                    <h2>Contact</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae placeat aspernatur aperiam, quisquam voluptas enim tempore ab itaque nam modi eos corrupti distinctio nobis labore dolorum quae tenetur. Sapiente, sequi.</p>
                    <ul class="contact-info-list">
                      <li> <i class="fa fa-phone"></i> 1-700-564-6321</li>
                      <li> <i class="fa fa-envelope-o"></i> info@homeproperty.com</li>
                      <li> <i class="fa fa-map-marker"></i> 36008 AL-77, Talladega, AL 35160, USA</li>
                    </ul>
                  </div> -->
                        </div>
                        <div class="aa-contact-bottom" >
                            <div class="aa-title">
                                <h2>Cập nhật thông tin cá nhân</h2>
                                <span></span>

                            </div>
                            <div class="aa-contact-form">
                                <form class="contactform" action="{{ URL::to('/save-profile-user') }}" method="post"  enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <p class="comment-form-author">
                                        <label for="author">Xác nhận mật khẩu <span class="required">*</span></label>
                                        <input type="password" name="password" value="" size="30" required="required"
                                            placeholder="Nhập vào mật khẩu">
                                    </p>

                                    <p class="comment-form-url">
                                        <label for="subject">Tên<span class="required">*</span></label>
                                        <input type="text" name="fullname" value="{{ $user->Ten_ung_vien }}"
                                            aria-required="true" required="required" placeholder="Nhập vào tên">
                                    </p>
                                    <p class="comment-form-url">
                                        <label for="subject">Ngày sinh<span class="required">*</span></label>
                                        <input type="date" name="birthday" value="{{ $user->Ngay_sinh }}"
                                            aria-required="true" required="required" placeholder="Chọn ngày sinh">
                                    </p>
                                    <p class="comment-form-url">
                                        <label for="subject">Giới tính<span class="required">*</span></label>
                                        <select name="gender" id="local_user">
                                            <?php if ($user->Gioi_tinh = 1) {
                                            echo ' <option disabled>Chọn giới tính của bạn</option>
                                            <option value="1" selected>Nam</option>
                                            <option value="0">Nữ</option>';
                                            } elseif ($user->Gioi_tinh = 0) {
                                            echo ' <option disabled>Chọn giới tính của bạn</option>
                                            <option value="1">Nam</option>
                                            <option value="0" selected>Nữ</option>';
                                            } else {
                                            echo ' <option disabled selected>Chọn giới tính của bạn</option>
                                            <option value="1">Nam</option>
                                            <option value="0">Nữ</option>';
                                            } ?>
                                        </select>
                                    </p>
                                    <p class="comment-form-url">
                                        <label for="subject">Email<span class="required">*</span></label>
                                        <input type="text" name="email" value="{{ $user->Email }}" aria-required="true"
                                            required="required" placeholder="Nhập vào Email">
                                    </p>
                                    <p class="comment-form-url">
                                        <label for="subject">Số điện thoại<span class="required">*</span></label>
                                        <input type="text" name="phone" value="{{ $user->So_dien_thoai }}"
                                            aria-required="true" required="required" placeholder="Nhập vào số điện thoại">
                                    </p>
                                    <p class="comment-form-url">
                                        <label for="subject">Địa chỉ<span class="required">*</span></label>
                                        <input type="text" name="place" value="{{ $user->Dia_chi }}" aria-required="true"
                                            required="required" placeholder="Nhập vào địa chỉ">
                                    </p>
                                    <p class="comment-form-url">
                                        <label for="subject">Học vấn<span class="required">*</span></label>
                                        <select name="education" id="local_user">
                                            <option disabled selected>Chọn học vấn của bạn</option>
                                            @foreach ($education as $key => $edu)
                                                @if ($edu->Ma_hoc_van == $user->Ma_hoc_van)
                                                    {
                                                    <option value="{{ $edu->Ma_hoc_van }}" selected>{{ $edu->Ten_hoc_van }}
                                                    </option>
                                                    }
                                                @else{
                                                    <option value="{{ $edu->Ma_hoc_van }}">{{ $edu->Ten_hoc_van }}</option>
                                                    }
                                                @endif
                                            @endforeach
                                        </select>
                                    </p>                        
                                    <!-- <p class="comment-form-comment">
                        <label for="comment">Message</label>
                        <textarea name="comment" cols="45" rows="8" aria-required="true" required="required"></textarea>
                      </p>                 -->
                                    <p class="form-submit">
                                        <input type="submit" name="submit" class="aa-browse-btn" value="Xác nhận">
                                    </p>
                                </form>
                                <hr class="space">
                            </div>
                            <div class="aa-title">
                                <h2>Đổi mật khẩu</h2>
                                <span></span>
                            </div>
                            <div class="aa-contact-form">
                                <form class="contactform">
                                    <p class="comment-form-author">
                                        <label for="author">Xác nhận mật khẩu cũ <span class="required">*</span></label>
                                        <input type="password" name="author" value="" size="30" required="required"
                                            placeholder="Nhập vào mật khẩu cũ">
                                    </p>
                                    <p class="comment-form-author">
                                        <label for="author">Mật khẩu mới <span class="required">*</span></label>
                                        <input type="password" name="author" value="" size="30" required="required"
                                            placeholder="Nhập vào mật khẩu mới">
                                    </p>
                                    <p class="comment-form-author">
                                        <label for="author">Xác nhận mật khẩu mới <span class="required">*</span></label>
                                        <input type="password" name="author" value="" size="30" required="required"
                                            placeholder="Nhập vào mật khẩu mói">
                                    </p>

                                    <p class="form-submit">
                                        <input type="submit" name="submit" class="aa-browse-btn" value="Xác nhận">
                                    </p>
                                </form>
                                <hr class="space">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->

    <!-- / Footer -->

@endsection
