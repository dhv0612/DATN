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
            <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Bài kiểm tra
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ URL::to('/list-exam-employer') }}" class="nav-link active">
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
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Danh sách câu hỏi</h1>
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

                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ URL::to('/import-question') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="file" required class="custom-file-input"
                                                    accept=".xlsx" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Chọn tệp câu
                                                    hỏi</label>
                                            </div>
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-primary col start">
                                                    <i class="fas fa-upload"></i>
                                                    <span>Tải lên</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Câu hỏi</th>
                                            <th>Lựa chọn A</th>
                                            <th>Lựa chọn B</th>
                                            <th>Lựa chọn C</th>
                                            <th>Lựa chọn D</th>
                                            <th>Đáp án</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($question_list as $key => $ql)
                                            <tr>
                                                <td> <?php
                                                    echo $i;
                                                    $i = $i + 1;
                                                    ?></td>
                                                <td>{{ $ql->Ten_cau_hoi }} .....</td>
                                                <td>{{ $ql->Lua_chon_a }}</td>
                                                <td>{{ $ql->Lua_chon_b }}</td>
                                                <td>{{ $ql->Lua_chon_c }}</td>
                                                <td>{{ $ql->Lua_chon_d }}</td>
                                                <td>{{ $ql->Dap_an }}</td>
                                                <td style="font-size: 20px">
                                                    <a href="{{ URL::to('/edit-question/' . $ql->Ma_cau_hoi) }}"> <i
                                                            class="fas fa-edit" style="color: blue; margin: 0 5px;"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <h2>Đinh dạng file Excel theo mẫu để thêm câu hỏi</h2>
                        <img src="{{ asset('public/backend/Sample_excel.png') }}">
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
