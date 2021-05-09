@extends('layout_employer')
@section('employer_content')
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
        data-accordion="false">
        <li class="nav-item ">
            <a href="{{ URL::to('/dashboard-employer') }}" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Trang chủ
                </p>
            </a>
        </li>
        <li class="nav-item ">
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
        <li class="nav-item ">
            <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Bài kiểm tra
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{URL::to('/list-exam-employer')}}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách bài kiểm tra</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{URL::to('/add-exam-employer')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Thêm bài kiểm tra</p>
                    </a>
                </li>

            </ul>
        </li>
        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
                <i class="nav-icon far fa-credit-card"></i>
                <p>
                    Dịch vụ
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{URL::to('/history-payment-employer')}}" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lịch sử thanh toán</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{URL::to('/extend-time-employer')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Gia hạn thời gian</p>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item ">
            <a href="{{URL::to('/list-user-test')}}" class="nav-link">
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
            <a href="{{URl::to('/logout-employer')}}" class="nav-link">
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
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Lịch sử thanh toán</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <?php
                            ?>
                            <div></div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Thời hạn</th>
                                            <th>Ngày thanh toán</th>
                                            <th>Hạn đăng bài</th>
                                                                               
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($list_history as  $key =>$lh)
                                        <tr>
                                            <td>{{$lh->Thoi_han}}</td>
                                            <?php 
                                            $datepay = date ('d-m-Y', strtotime($lh->Ngay_thanh_toan ));
                                            ?>
                                            <td>{{$datepay}}</td>
                                            <?php 
                                            $datelast = date ( 'd-m-Y' ,strtotime($lh->Han_dang_bai) );
                                            ?>
                                            <td>{{$datelast}}</td>                                          
                                        </tr>
                                        @endforeach                                 
                                    </tbody>
                                   
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
       
    </div>
@endsection