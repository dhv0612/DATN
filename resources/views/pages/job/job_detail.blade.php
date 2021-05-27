@extends('layout')
@section('content')
    {{-- @foreach ($employer as $key => $emp)
@foreach ($job_detail as $key => $jdt) --}}

    {{-- @if ($jd->Ma_nha_tuyen_dung == $emp->Ma_nha_tuyen_dung) --}}



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
                        <li class="active"><a href="#">VIỆC LÀM</a></li>
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
                        <h2>Thông tin việc làm</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ URL::TO('/') }}">Trang chủ</a></li>
                            <li class="active">Chi tiết công việc</li>
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
                        <!-- Start properties content body -->
                        <div class="aa-properties-details">

                            <div class="aa-properties-info">
                                <div class="col-md-4" style="padding: 0">
                                    <img src="{{ URL::to('public/upload/nhatuyendung/' . $employer->Hinh_anh) }}"
                                        style="width: 100%" alt="img">
                                </div>
                                <div class="col-md-8" style="padding: 0">
                                    <h2>{{ $job_detail->Tieu_de }}</h2>
                                    <?php $format_number = number_format($job_detail->Muc_luong); ?>
                                    <h3>Mức lương : <strong>{{ $format_number }} VNĐ</strong> </h3>
                                    <h4 style="font-size: 18px">Địa điểm làm việc:
                                        <strong>{{ $place->Ten_dia_diem }}</strong>
                                    </h4>
                                    <a href="{{ $employer->Trang_web }}" style="color: blue;font-size: 18px;"
                                        target="_blank">Trang web công ty</a>
                                </div>

                            </div>
                            <h2>Yêu cầu</h2>
                            <?php echo $job_detail->Yeu_cau; ?>
                            <h2>Mô tả công việc</h2>
                            <?php echo $job_detail->Mo_ta_cong_viec; ?>
                            <?php if ($job_detail->Thong_tin_khac) {
                            echo '<h2>Thông tin khác</h2>';
                            echo $job_detail->Thong_tin_khac;
                            } ?>
                            <h2>Địa điểm làm việc</h2>
                            <p> {{ $job_detail->Dia_diem_lam_viec }}</p>


                            <div class="aa-properties-social">
                                <ul>
                                    <li>Share</li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>


                        </div>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target=".bd-example-modal-lg">Chọn phương tiện di chuyển</button>
                        <div id="map" style=" height: 600px; 
                            width: 100%;"></div>

                    </div>
                </div>
                <!-- Start properties sidebar -->
                <div class="col-md-4">
                    <aside class="aa-properties-sidebar" style="border-bottom: 1px solid;">
                        <!-- Start Single properties sidebar -->
                        <div class="aa-properties-single-sidebar">
                            <h3 style="text-align: center;font-weight: bold;">Thông tin</h3>
                            <div class="aa-single-advance-search">
                                <?php
                                $date_format_ngaydang = date('d-m-Y', strtotime($job_detail->Ngay_dang));
                                $date_format_hannop = date('d-m-Y', strtotime($job_detail->Han_ung_tuyen));
                                ?>
                                <p class="navbar-brand aa-logo">Ngày đăng:</p> <span class="navbar-brand aa-logo"
                                    style="float: right; font-weight: bold;">{{ $date_format_ngaydang }}</span>
                            </div>
                            <div class="aa-single-advance-search">
                                <p class="navbar-brand aa-logo">Hạn nộp:</p> <span class="navbar-brand aa-logo"
                                    style="float: right; font-weight: bold;">{{ $date_format_hannop }}</span>
                            </div>
                            <div class="aa-single-advance-search">
                                <p class="navbar-brand aa-logo">Ngành nghề:</p> <span class="navbar-brand aa-logo"
                                    style="float: right; font-weight: bold;">{{ $branch->Ten_nganh_nghe }}</span>
                            </div>
                            <div class="aa-single-advance-search">
                                <?php
                                date_default_timezone_set('Asia/Ho_Chi_Minh');
                                $today = date('Y-m-d');
                                $user = Session::get('userid');
                                if ($job_detail->Han_ung_tuyen < $today) { ?> <button type="button" disabled
                                    class="aa-search-btn col-md-12" data-toggle="modal" data-target="#exampleModalCenter"
                                    style="padding: 10px; text-align: center;">Quá hạn</button>
                                    <?php } elseif ($user) {
                                    if ($detail) {
                                    if ($detail->Trang_thai == 0) { ?>
                                    <button type="button" class="aa-search-btn col-md-12" data-toggle="modal"
                                        data-target="#exampleModalCenter" style="padding: 10px; text-align: center;">Ứng
                                        tuyển ngay</button>
                                    <a href="{{ URL::to('/cancle-save-job/' . $job_detail->Ma_bai_dang) }}" value=""
                                        class="aa-search-btn col-md-12" style="padding: 10px; text-align: center; ">Hủy lưu
                                        công việc này</a>
                                    <?php } else { ?>
                                    <button type="button" disabled class="aa-search-btn col-md-12" data-toggle="modal"
                                        data-target="#exampleModalCenter" style="padding: 10px; text-align: center;">Đã ứng
                                        tuyển</button>
                                    <?php }
                                    } else {
                                    ?>
                                    <button type="button" class="aa-search-btn col-md-12" data-toggle="modal"
                                        data-target="#exampleModalCenter" style="padding: 10px; text-align: center;">Ứng
                                        tuyển ngay</button>
                                    <a href="{{ URL::to('/user-save-job/' . $job_detail->Ma_bai_dang) }}" value=""
                                        class="aa-search-btn col-md-12" style="padding: 10px; text-align: center; ">Lưu lại
                                        công việc này</a>
                                    <?php
                                    }
                                    } else {
                                    ?>
                                    <a href="{{ URL::to('/login-user') }}" value="" class="aa-search-btn col-md-12"
                                        style="padding: 10px; text-align: center;">Ứng tuyển ngay</a>
                                    <a href="{{ URL::to('/login-user') }}" value="" class="aa-search-btn col-md-12"
                                        style="padding: 10px; text-align: center; ">Lưu lại công việc này</a>
                                    <?php
                                    }
                                    ?>
                            </div>
                    </aside>
                    <aside class="aa-properties-sidebar">
                        <div class="aa-properties-single-sidebar">
                            <h3 style="text-align: center;font-weight: bold;">Công việc liên quan</h3>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/item/1.jpg" alt="img">
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
                                        <img class="media-object" src="img/item/1.jpg" alt="img">
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
                                        <img class="media-object" src="img/item/1.jpg" alt="img">
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

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="" id="" style="font-size: 20px">Thông tin cá nhân</strong>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ URL::to('/apply-job-filecv/' . $job_detail->Ma_bai_dang) }}" method="post"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <strong style="font-size: 20px">Họ và tên</strong>
                        <p><?php echo Session::get('name'); ?> </p>
                        <hr>
                        <strong style="font-size: 20px">Số điện thoại</strong>
                        <p><?php echo Session::get('phone'); ?> </p>
                        <hr>
                        <strong style="font-size: 20px">Email</strong>
                        <p><?php echo Session::get('email_user'); ?> </p>
                        <hr>
                        <strong style="font-size: 20px">File CV: </strong><br>
                        <?php $filecv = Session::get('filecv'); ?>
                        <a href="{{ asset('public/upload/ung_vien/filecv/' . $filecv) }}" target="_blank"><?php echo $filecv; ?></a>
                        <h4>Chọn file CV từ máy</h4>
                        <input type="file" name="file_cv" style="border: none">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" value="Ứng tuyển" style="width: 16%; font-size: 14px;" class="btn btn-primary">
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div id="floating-panel">
                    <h2 style="margin: 22px 0;">Chọn phương tiện di chuyển: </h2>
                    <select id="mode" style="font-size: 25px; height: 50px;">
                        <option disabled selected>Chọn phương tiện</option>
                        <option value="DRIVING" style="font-size: 25px">Ô tô </option>
                        <option value="WALKING">Mô tô</option>
                        <option value="BICYCLING">Xe đạp</option>
                        <option value="TRANSIT">Xe khách</option>
                    </select>
                </div>
                <div class="modal-footer" style="border: none">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Xác nhận</button>

                </div>
            </div>

        </div>
    </div>


    </div>

    <script>
        // let map;
        // function initMap() {
        //     // The location of Uluru
        //     const uluru = {
        //         lat: {{ $employer->Kinh_do }},
        //         lng: {{ $employer->Vi_do }}
        //     };
        //     // The map, centered at Uluru
        //     const map = new google.maps.Map(document.getElementById("map"), {
        //         zoom: 18,
        //         center: uluru,
        //     });
        //     // The marker, positioned at Uluru
        //     const marker = new google.maps.Marker({
        //         position: uluru,
        //         map: map,
        //     });
        // }

        //let map, infoWindow;
        var kinhdo;
        var vido;

        function initMap() {
            const directionsRenderer = new google.maps.DirectionsRenderer();
            const directionsService = new google.maps.DirectionsService();
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
            });
            directionsRenderer.setMap(map);
            calculateAndDisplayRoute(directionsService, directionsRenderer);
            document.getElementById("mode").addEventListener("change", () => {
                calculateAndDisplayRoute(directionsService, directionsRenderer);
            });
            var infoWindow = new google.maps.InfoWindow();
            // current location
            var locate;
            var icon_marker = {
                url: "{{ asset('public/upload/1280x720.png') }}",
                scaledSize: new google.maps.Size(30, 40),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(0, 0)
            };
            map.controls[google.maps.ControlPosition.TOP_CENTER].push(locate);
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        const pos = {
                            lat: {{ $employer->Kinh_do }},
                            lng: {{ $employer->Vi_do }},
                        };
                        kinhdo = position.coords.latitude;
                        vido = position.coords.longitude;
                        infoWindow.setPosition(pos);
                        map.setCenter(pos);
                        var marker = new google.maps.Marker({
                            map: map,
                            position: pos,
                            // icon: icon_marker,
                        });
                        // marker.addListener('click', function() {
                        //     infoWindow.setContent("lat and lng : " + pos.lat + "------" + pos.lng);
                        //     infoWindow.open(map, marker);
                        // });
                        document.getElementById('lat_user').value = pos.lat;
                        document.getElementById('lng_user').value = pos.lng;
                        map.setCenter(pos);
                    },
                    () => {
                        handleLocationError(true, infoWindow, map.getCenter());
                    }
                );
            } else {
                handleLocationError(false, infoWindow, map.getCenter());
            }
            // //   });
            // }

            // function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            //   infoWindow.setPosition(pos);
            //   infoWindow.setContent(
            //     browserHasGeolocation
            //       ? "Error: The Geolocation service failed."
            //       : "Error: Your browser doesn't support geolocation."
            //   );
            //   infoWindow.open(map);

        }

        function calculateAndDisplayRoute(directionsService, directionsRenderer) {
            const selectedMode = document.getElementById("mode").value;
            directionsService.route({
                    // lat: {{ $employer->Kinh_do }},
                    //         lng: {{ $employer->Vi_do }}
                    destination: {
                        lat: {{ $employer->Kinh_do }},
                        lng: {{ $employer->Vi_do }}
                    },
                    origin: {
                        lat: kinhdo,
                        lng: vido
                    },


                    // Note that Javascript allows us to access the constant
                    // using square brackets and a string value as its
                    // "property."
                    travelMode: google.maps.TravelMode[selectedMode],
                },
                (response, status) => {
                    if (status == "OK") {
                        directionsRenderer.setDirections(response);
                        var leg = response.routes[0].legs[0];
                        var marker_star = new google.maps.Marker({

                        })
                        makeMarker(leg.start_location, icons.start, "title");
                        makeMarker(leg.end_location, icons.end, 'title');
                    } else {
                        window.alert("Đoạn đường không hỗ trợ với phương tiện này");
                    }
                }
            );
        }

    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJqpC7oo-YYJJ1pRVZJgf84qExlHZCWSc&callback=initMap&libraries=&v=weekly"
        async></script>
@endsection
