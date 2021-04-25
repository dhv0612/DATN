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
        <li class="nav-item menu-open">
            <a href="pages/widgets.html" class="nav-link active">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Bài đăng tuyển dụng
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item active">
                    <a href="{{ URL::to('/list-job-employer') }}" class="nav-link active">
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
                    <a href="{{URL::to('/list-exam-employer')}}" class="nav-link">
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
                        <h1>Danh sách bài đăng tuyển dụng</h1>
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
                                            <th>Tiêu đề</th>
                                            <th>Mức lương</th>
                                            <th>Ngày đăng</th>
                                            <th>Hạn ứng tuyển</th>
                                            <th>Hình ảnh SEO</th>
                                            <th>Tiêu đề SEO</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($job_list as  $key =>$jl)
                                        <tr>
                                            <td>{{$jl->Tieu_de}}</td>
                                            <?php
                                             $format_number = number_format($jl->Muc_luong);?>           
                                            <td>{{$format_number}}
                                            </td>
                                            <?php  
                                            $Ngay_dang = date("d-m-Y", strtotime($jl->Ngay_dang));
                                            $Han_ung_tuyen = date("d-m-Y", strtotime($jl->Han_ung_tuyen));
                                            ?>
                                            <td>{{$Ngay_dang}}</td>
                                            <td> {{$Han_ung_tuyen}}</td>
                                            <td>
                                                @if ($jl->Hinh_anh_SEO)
                                                <img style="width: 200px; height: 100px" src="{{asset('public/upload/nhatuyendung/SEO/'.$jl->Hinh_anh_SEO)}}">                            
                                                @endif
                                            </td>
                                            <td>{{$jl->Tieu_de_SEO}}</td>
                                            <td style="font-size: 20px">
                                                <a href="{{URL::to('/view-user-job/'.$jl->Ma_bai_dang)}}">  <i class="fas fa-eye" style="color: Green; margin: 0 5px;"></i></a>|| 
                                                <a href="{{URL::to('/edit-job/'.$jl->Ma_bai_dang)}}">  <i class="fas fa-edit" style="color: blue; margin: 0 5px;"></i></a>|| 
                                                <a href="{{URL::to('/delete-job/'.$jl->Ma_bai_dang)}}" onclick="return confirm('Do you want delete ?')">  <i class="fas fa-trash-alt" style="color: red;margin: 0 5px;"></i></a>
                                            </td>
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