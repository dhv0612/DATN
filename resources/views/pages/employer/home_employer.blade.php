@extends('layout_employer')
@section('employer_content')
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
                <a href="{{ URL::to('/dashboard-employer') }}" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Trang chủ
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/widgets.html" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Bài đăng tuyển dụng
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ URL::to('/list-job-employer') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Danh sách bài đăng</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ URL::to('/add-job-employer') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Thêm bài đăng</p>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Bài kiểm tra
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ URL::to('/list-exam-employer') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Danh sách bài kiểm tra</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ URL::to('/add-exam-employer') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Thêm bài kiểm tra</p>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-credit-card"></i>
                    <p>
                        Dịch vụ
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ URL::to('/history-payment-employer') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Lịch sử thanh toán</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ URL::to('/extend-time-employer') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Gia hạn thời gian</p>
                        </a>
                    </li>

                </ul>
            </li>


            <li class="nav-item ">
                <a href="{{ URL::to('/list-user-test') }}" class="nav-link">
                    <i class="nav-icon fas fa-user-friends"></i>
                    <p>
                        Danh sách ứng viên
                        {{-- <i class="fas fa-angle-left right"></i> --}}
                    </p>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ URL::to('/change-place-employer') }}" class="nav-link">
                    <i class="nav-icon fas fa-map-marker-alt"></i>
                    <p>
                        Thay đổi vị trí
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ URl::to('/logout-employer') }}" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i></i>
                    <p>
                        Đăng xuất
                    </p>
                </a>
            </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Trang chủ</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>150</h3>

                                <p>New Orders</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>53<sup style="font-size: 20px">%</sup></h3>

                                <p>Bounce Rate</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>44</h3>

                                <p>User Registrations</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>65</h3>
                                <p>Unique Visitors</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->

                </div>

                <div id="map" style=" height: 600px;"></div>

                <!-- /.row -->
                <!-- Main row -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->

        </section>
        <!-- /.content -->

    </div>



    <script>
        let map;

        function initMap() {
            // The location of Uluru
            const uluru = {
                lat: {{ $employer->Kinh_do }},
                lng: {{ $employer->Vi_do }}
            };
            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 18,
                center: uluru,
            });
            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
                position: uluru,
                map: map,
            });


        }

    </script>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtSvDoJ02Ig-m-Q_l5Na0T4yifdBNs8q4&callback=initMap&libraries=&v=weekly"
        async></script>

@endsection
