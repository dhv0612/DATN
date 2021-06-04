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
                <a href="#" class="nav-link ">
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
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Sửa câu hỏi</h1>
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
                            <form action="{{ URL::to('/update-question-employer/' . $question->Ma_cau_hoi) }}"
                                method="post">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tên câu hỏi</label>
                                        <textarea id="summernote" name="Ten_cau_hoi" required class="form-control">
                                                {{ $question->Ten_cau_hoi }}
                                                </textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-radio">
                                            <?php
                                                if ($question->Dap_an == 'A'){
                                                    echo ' <input class="custom-control-input" type="radio" name="Dap_an" checked value="A" id="customRadio1">';
                                                }else{
                                                    echo ' <input class="custom-control-input" type="radio" name="Dap_an" value="A" id="customRadio1">';
                                                }
                                                ?>
                                           
                                            <label for="customRadio1" class="custom-control-label" >Đáp án đúng</label><br>
                                        </div>
                                        <textarea id="summernote1" name="Lua_chon_a" required class="form-control">
                                            {{ $question->Lua_chon_a }}
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-radio">
                                            <?php
                                            if ($question->Dap_an == 'B'){
                                                echo ' <input class="custom-control-input" type="radio" name="Dap_an" checked value="B" id="customRadio1">';
                                            }else{
                                                echo ' <input class="custom-control-input" type="radio" name="Dap_an" value="B" id="customRadio1">';
                                            }
                                            ?>
                                            <input class="custom-control-input" type="radio" name="Dap_an" value="B" id="customRadio2">
                                            <label for="customRadio2" class="custom-control-label">Đáp án đúng</label><br>
                                        </div>
                                        <textarea id="summernote2" name="Lua_chon_b" required class="form-control">
                                            {{ $question->Lua_chon_b }}
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-radio">
                                            <?php
                                            if ($question->Dap_an == 'C'){
                                                echo ' <input class="custom-control-input" type="radio" name="Dap_an" checked value="C" id="customRadio3">';
                                            }else{
                                                echo ' <input class="custom-control-input" type="radio" name="Dap_an"  value="C" id="customRadio3">';
                                            }
                                            ?>
                                          
                                            <label for="customRadio3" class="custom-control-label">Đáp án đúng</label><br>
                                        </div>
                                        <textarea id="summernote3" name="Lua_chon_c" required class="form-control">
                                            {{ $question->Lua_chon_c }}
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-radio">
                                            <?php
                                            if ($question->Dap_an == 'D'){
                                                echo ' <input class="custom-control-input" type="radio" name="Dap_an" checked value="D" id="customRadio4">';
                                            }else{
                                                echo ' <input class="custom-control-input" type="radio" name="Dap_an" value="D" id="customRadio4">';
                                            }
                                            ?>
                                            
                                            <label for="customRadio4" class="custom-control-label">Đáp án đúng</label><br>
                                        </div>
                                        <textarea id="summernote4" name="Lua_chon_d" required class="form-control">
                                            {{ $question->Lua_chon_d }}
                                        </textarea>
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
