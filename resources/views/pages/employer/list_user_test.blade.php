@extends('layout_employer')
@section('employer_content')

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item ">
                <a href="{{ URL::to('/dashboard-employer') }}" class="nav-link ">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Trang chủ
                    </p>
                </a>
            </li>
            <li class="nav-item ">
                <a href="pages/widgets.html" class="nav-link ">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Bài đăng tuyển dụng
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item ">
                        <a href="{{ URL::to('/list-job-employer') }}" class="nav-link ">
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
            <li class="nav-item ">
                <a href="{{ URL::to('/list-user-test') }}" class="nav-link active">
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
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Danh sách ứng viên đã kiểm tra</h1>
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
                            <?php ?>
                            <div></div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Họ và tên ứng viên</th>
                                            <th>Bài tuyển dụng</th>
                                            <th>Bài kiểm tra</th>
                                            <th>Số điểm</th>
                                            <th>Ngày làm bài</th>
                                            <th>Trạng thái</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($exam_detail as $key => $ed)
                                            @foreach ($user as $key => $us)
                                                @foreach ($info_exam as $key => $ie)
                                                    @foreach ($exam as $key => $ex)
                                                        @foreach ($job as $key => $jb)
                                                            @if (
                                                            $ed->Ma_ung_vien == $us->Ma_ung_vien 
                                                            && $ie->Ma_bai_kiem_tra == $ex->Ma_bai_kiem_tra 
                                                            && $ed->Ma_bai_kiem_tra == $ex->Ma_bai_kiem_tra                                                      
                                                            && $jb->Ma_bai_dang == $ie->Ma_bai_dang
                                                            ) 
                                                                <tr>
                                                                    <td>{{ $us->Ten_ung_vien }}</td>
                                                                    <td>{{ $jb->Tieu_de }}</td>
                                                                    <td>{{ $ex->Ten_bai_kiem_tra }}</td>
                                                                    <td>{{ $ed->So_diem }}</td>
                                                                    <td>{{ $ed->Ngay_lam_bai }}</td>
                                                                    @if($ex->Diem_toi_thieu > $ed->So_diem)
                                                                    <td>Trượt</td>
                                                                    @else
                                                                    <td>Đạt</td>
                                                                    @endif
                                                                </tr>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                @endforeach 
                                            @endforeach
                                        @endforeach --}}

                                        @foreach ($list_user as $key =>$lu)
                                            <tr>
                                                <td>{{$lu->Ten_ung_vien}}</td>
                                                <td>{{$lu->Tieu_de}}</td>
                                                <td>{{$lu->Ten_bai_kiem_tra}}</td>
                                          
                                                <td>{{$lu->So_diem}}</td>
                                                <td>{{$lu->Ngay_lam_bai}}</td>
                                                @if($lu->Diem_toi_thieu > $lu->So_diem)
                                                <td>Trượt</td>
                                                @else
                                                <td>Đạt</td>
                                                @endif
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
