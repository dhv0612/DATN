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
                        <h1>Kết quả bài kiểm tra: {{ $name_exam->Ten_bai_kiem_tra }} </h1>
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
                                <div class="row">
                                    <?php $i = 0; ?>
                                    @foreach ($answer_list as $key => $al)
                                        <div class="col-sm-6">
                                            <!-- radio -->
                                            <label>Câu <?php
                                                $i++;
                                                echo $i;
                                                ?> <?php echo $al->Ten_cau_hoi; ?></label>
                                            <div class="form-group">
                                                @if ($al->Cau_tra_loi == $al->Dap_an)

                                                    @if ($al->Cau_tra_loi == 'A')
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" checked disabled
                                                                name="{{ $al->Ma_cau_hoi }}" value="A">
                                                            <label class="form-check-label" 
                                                                style="color: blue; font-weight: bold"> <?php
                                                                echo $al->Lua_chon_a; ?></label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" disabled
                                                                name="{{ $al->Ma_cau_hoi }}" value="B">
                                                            <label class="form-check-label"><?php echo
                                                                $al->Lua_chon_b; ?> </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" disabled
                                                                name="{{ $al->Ma_cau_hoi }}" value="C">
                                                            <label class="form-check-label"> <?php echo
                                                                $al->Lua_chon_c; ?></label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" disabled
                                                                name="{{ $al->Ma_cau_hoi }}" value="D">
                                                            <label class="form-check-label"><?php echo
                                                                $al->Lua_chon_d; ?> </label>
                                                        </div>

                                                    @elseif ($al->Cau_tra_loi == 'B')
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" selected disabled
                                                                name="{{ $al->Ma_cau_hoi }}" value="A">
                                                            <label class="form-check-label"> <?php echo
                                                                $al->Lua_chon_a; ?></label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" disabled
                                                                name="{{ $al->Ma_cau_hoi }}" value="B">
                                                            <label class="form-check-label"
                                                                style="color: blue; font-weight: bold"><?php
                                                                echo $al->Lua_chon_b; ?> </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" disabled
                                                                name="{{ $al->Ma_cau_hoi }}" value="C">
                                                            <label class="form-check-label"> <?php echo
                                                                $al->Lua_chon_c; ?></label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" disabled
                                                                name="{{ $al->Ma_cau_hoi }}" value="D">
                                                            <label class="form-check-label"><?php echo
                                                                $al->Lua_chon_d; ?> </label>
                                                        </div>

                                                    @elseif ($al->Cau_tra_loi == 'C')
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" selected disabled
                                                                name="{{ $al->Ma_cau_hoi }}" value="A">
                                                            <label class="form-check-label"> <?php echo
                                                                $al->Lua_chon_a; ?></label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" disabled
                                                                name="{{ $al->Ma_cau_hoi }}" value="B">
                                                            <label class="form-check-label"><?php echo
                                                                $al->Lua_chon_b; ?> </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" disabled
                                                                name="{{ $al->Ma_cau_hoi }}" value="C">
                                                            <label class="form-check-label"
                                                                style="color: blue; font-weight: bold"> <?php
                                                                echo $al->Lua_chon_c; ?></label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" disabled
                                                                name="{{ $al->Ma_cau_hoi }}" value="D">
                                                            <label class="form-check-label"><?php echo
                                                                $al->Lua_chon_d; ?> </label>
                                                        </div>

                                                    @elseif ($al->Cau_tra_loi == 'D')
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" selected disabled
                                                                name="{{ $al->Ma_cau_hoi }}" value="A">
                                                            <label class="form-check-label"> <?php echo
                                                                $al->Lua_chon_a; ?></label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" disabled
                                                                name="{{ $al->Ma_cau_hoi }}" value="B">
                                                            <label class="form-check-label"><?php echo
                                                                $al->Lua_chon_b; ?> </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" disabled
                                                                name="{{ $al->Ma_cau_hoi }}" value="C">
                                                            <label class="form-check-label"> <?php echo
                                                                $al->Lua_chon_c; ?></label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" disabled
                                                                name="{{ $al->Ma_cau_hoi }}" value="D">
                                                            <label class="form-check-label"
                                                                style="color: blue; font-weight: bold"><?php
                                                                echo $al->Lua_chon_d; ?> </label>
                                                        </div>
                                                    @endif

                                                @else
                                                    @if ($al->Dap_an == 'A')
                                                        @if ($al->Cau_tra_loi == 'B')
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="{{ $al->Ma_cau_hoi }}" value="A">
                                                                <label class="form-check-label"
                                                                    style="color: blue; font-weight: bold"> <?php echo $al->Lua_chon_a; ?></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" checked disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="B">
                                                                <label class="form-check-label"
                                                                    style="color: Red; font-weight: bold"><?php echo $al->Lua_chon_b; ?> </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="C">
                                                                <label class="form-check-label"> <?php echo
                                                                    $al->Lua_chon_c; ?></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="D">
                                                                <label class="form-check-label"><?php echo
                                                                    $al->Lua_chon_d; ?> </label>
                                                            </div>
                                                        @elseif($al->Cau_tra_loi== 'C')
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="A">
                                                                <label class="form-check-label"
                                                                    style="color: blue; font-weight: bold"> <?php echo $al->Lua_chon_a; ?></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="B">
                                                                <label class="form-check-label"><?php echo
                                                                    $al->Lua_chon_b; ?> </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" checked disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="C">
                                                                <label class="form-check-label"
                                                                    style="color: Red; font-weight: bold"> <?php echo $al->Lua_chon_c; ?></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="D">
                                                                <label class="form-check-label"><?php echo
                                                                    $al->Lua_chon_d; ?> </label>
                                                            </div>
                                                        @elseif($al->Cau_tra_loi== 'D')
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="A">
                                                                <label class="form-check-label"
                                                                    style="color: blue; font-weight: bold"> <?php echo $al->Lua_chon_a; ?></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="B">
                                                                <label class="form-check-label"><?php echo
                                                                    $al->Lua_chon_b; ?> </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="C">
                                                                <label class="form-check-label"> <?php echo
                                                                    $al->Lua_chon_c; ?></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" checked disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="D">
                                                                <label class="form-check-label"
                                                                    style="color: Red; font-weight: bold"><?php echo $al->Lua_chon_d; ?> </label>
                                                            </div>
                                                        @endif
                                                    @elseif ($al->Dap_an == 'B')
                                                        @if ($al->Cau_tra_loi == 'A')
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" checked disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="A">
                                                                <label class="form-check-label"
                                                                    style="color: Red; font-weight: bold"> <?php echo $al->Lua_chon_a; ?></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="B">
                                                                <label class="form-check-label"
                                                                    style="color: blue; font-weight: bold"><?php echo $al->Lua_chon_b; ?> </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="C">
                                                                <label class="form-check-label"> <?php echo
                                                                    $al->Lua_chon_c; ?></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="D">
                                                                <label class="form-check-label"><?php echo
                                                                    $al->Lua_chon_d; ?> </label>
                                                            </div>
                                                        @elseif($al->Cau_tra_loi== 'C')
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="A">
                                                                <label class="form-check-label"> <?php echo
                                                                    $al->Lua_chon_a; ?></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="B">
                                                                <label class="form-check-label"
                                                                    style="color: blue; font-weight: bold"><?php echo $al->Lua_chon_b; ?> </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" checked disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="C">
                                                                <label class="form-check-label"
                                                                    style="color: Red; font-weight: bold"> <?php echo $al->Lua_chon_c; ?></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="D">
                                                                <label class="form-check-label"><?php echo
                                                                    $al->Lua_chon_d; ?> </label>
                                                            </div>
                                                        @elseif($al->Cau_tra_loi== 'D')
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="A">
                                                                <label class="form-check-label"> <?php echo
                                                                    $al->Lua_chon_a; ?></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="B">
                                                                <label class="form-check-label"
                                                                    style="color: blue; font-weight: bold"><?php echo $al->Lua_chon_b; ?> </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="C">
                                                                <label class="form-check-label"> <?php echo
                                                                    $al->Lua_chon_c; ?></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" checked disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="D">
                                                                <label class="form-check-label"
                                                                    style="color: Red; font-weight: bold"><?php echo $al->Lua_chon_d; ?> </label>
                                                            </div>
                                                        @endif
                                                    @elseif ($al->Dap_an == 'C')
                                                        @if ($al->Cau_tra_loi == 'A')
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" checked disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="A">
                                                                <label class="form-check-label"
                                                                    style="color: Red; font-weight: bold"> <?php echo $al->Lua_chon_a; ?></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"  disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="B">
                                                                <label class="form-check-label"><?php echo
                                                                    $al->Lua_chon_b; ?> </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="C">
                                                                <label class="form-check-label"
                                                                    style="color: blue; font-weight: bold"> <?php echo $al->Lua_chon_c; ?></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="D">
                                                                <label class="form-check-label"><?php echo
                                                                    $al->Lua_chon_d; ?> </label>
                                                            </div>
                                                        @elseif($al->Cau_tra_loi== 'B')
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="A">
                                                                <label class="form-check-label"> <?php echo
                                                                    $al->Lua_chon_a; ?></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" checked disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="B">
                                                                <label class="form-check-label"
                                                                    style="color: Red; font-weight: bold"><?php echo $al->Lua_chon_b; ?> </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="C">
                                                                <label class="form-check-label"
                                                                    style="color: blue; font-weight: bold"> <?php echo $al->Lua_chon_c; ?></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="D">
                                                                <label class="form-check-label"><?php echo
                                                                    $al->Lua_chon_d; ?> </label>
                                                            </div>
                                                        @elseif($al->Cau_tra_loi== 'D')
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="A">
                                                                <label class="form-check-label"> <?php echo
                                                                    $al->Lua_chon_a; ?></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="B">
                                                                <label class="form-check-label"><?php echo
                                                                    $al->Lua_chon_b; ?> </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="C">
                                                                <label class="form-check-label"
                                                                    style="color: blue; font-weight: bold"> <?php echo $al->Lua_chon_c; ?></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" checked disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="D">
                                                                <label class="form-check-label"
                                                                    style="color: Red; font-weight: bold"><?php echo $al->Lua_chon_d; ?> </label>
                                                            </div>
                                                        @endif
                                                    @elseif ($al->Dap_an == 'D')
                                                        @if ($al->Cau_tra_loi == 'A')
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" checked disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="A">
                                                                <label class="form-check-label"
                                                                    style="color: Red; font-weight: bold"> <?php echo $al->Lua_chon_a; ?></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"  disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="B">
                                                                <label class="form-check-label"><?php echo
                                                                    $al->Lua_chon_b; ?> </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="C">
                                                                <label class="form-check-label"> <?php echo $al->Lua_chon_c; ?></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="D">
                                                                <label class="form-check-label"
                                                                style="color: blue; font-weight: bold"><?php echo
                                                                    $al->Lua_chon_d; ?> </label>
                                                            </div>
                                                        @elseif($al->Cau_tra_loi== 'B')
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="A">
                                                                <label class="form-check-label"> <?php echo
                                                                    $al->Lua_chon_a; ?></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" checked disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="B">
                                                                <label class="form-check-label"
                                                                    style="color: Red; font-weight: bold"><?php echo $al->Lua_chon_b; ?> </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="C">
                                                                <label class="form-check-label"> <?php echo $al->Lua_chon_c; ?></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="D">
                                                                <label class="form-check-label"
                                                                style="color: blue; font-weight: bold"><?php echo
                                                                    $al->Lua_chon_d; ?> </label>
                                                            </div>
                                                        @elseif($al->Cau_tra_loi== 'C')
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="A">
                                                                <label class="form-check-label"> <?php echo
                                                                    $al->Lua_chon_a; ?></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="B">
                                                                <label class="form-check-label"><?php echo
                                                                    $al->Lua_chon_b; ?> </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" checked  disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="C">
                                                                <label class="form-check-label"
                                                                style="color: Red; font-weight: bold"> <?php echo $al->Lua_chon_c; ?></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" disabled
                                                                    name="{{ $al->Ma_cau_hoi }}" value="D">
                                                                <label class="form-check-label"
                                                                style="color: blue; font-weight: bold"><?php echo $al->Lua_chon_d; ?> </label>
                                                            </div>
                                                        @endif
                                                    @endif

                                                @endif
                                                {{-- <input type="text" name="{{$ql->Ma_cau_hoi}}" value="{{$ql->Ma_cau_hoi}}"> --}}
                                            </div>

                                        </div>
                                    @endforeach
                                </div>
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
