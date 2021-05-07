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
        <li class="nav-item menu-open ">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Bài kiểm tra
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item ">
                    <a href="{{URL::to('/list-exam-employer')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách bài kiểm tra</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{URL::to('/add-exam-employer')}}" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Thêm bài kiểm tra</p>
                    </a>
                </li>

            </ul>
        </li>
        <li class="nav-item">
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
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Thêm bài kiểm tra</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Thông tin</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{URL::to('/save-exam-employer')}}"  method="post">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên bài kiểm tra</label>
                                        <input type="text" name="name" required class="form-control"
                                            id="exampleInputEmail1"
                                            placeholder="Nhập tên">
                                    </div>
                                    <div class="form-group">
                                        <label>Thời gian làm (Phút)</label>
                                        <input type="number" required name="time" class="form-control"
                                            id="exampleInputEmail1"
                                            placeholder="Nhập thời gian">
                                    </div>
                                    <div class="form-group">
                                        <label>Số câu</label>
                                        <input type="number" required name="number_ques" class="form-control"
                                           id="exampleInputEmail1"
                                            placeholder="Nhập số câu">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Điểm tối thiểu</label>
                                        <input type="number" required name="mark" 
                                            class="form-control" id="exampleInputPassword1" placeholder="Nhập điểm tối thiểu">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <!--/.col (left) -->

                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
