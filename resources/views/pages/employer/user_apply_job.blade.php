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
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-credit-card"></i>
                <p>
                    Dịch vụ
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{URL::to('/history-payment-employer')}}" class="nav-link">
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

        <li class="nav-item active ">
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
                        <h1>Danh sách ứng viên ứng cử {{$title_job->Tieu_de}}</h1>
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
                                            <th>Tên ứng viên</th>
                                            <th>File CV</th>
                                            <th>Email</th>
                                            <th>Số điện thoại</th>
                                            <th>Học vấn</th>
                                        
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($job_detail as  $key =>$jd)
                                        @foreach ($user as $key=>$us )
                                  
                                        
                                        @if($jd->Ma_ung_vien == $us->Ma_ung_vien)
                                      
                                        <tr>
                                            <td>{{$us->Ten_ung_vien}}</td>
                                                @if ($jd->File_CV)
                                                <td><a target="_blank" style="color: black" href="{{asset('public/upload/ung_vien/filecv/'.$jd->File_CV)}}">{{$jd->File_CV}}</a>
                                                @else
                                                <td><a target="_blank" style="color: black" href="{{asset('public/upload/ung_vien/filecv/'.$us->File_CV)}}">{{$us->File_CV}}</a>
                                                @endif
                                            </td>                    
                                            <td>{{$us->Email}}</td>
                                            <td> {{$us->So_dien_thoai}}</td>
                                            <td>
                                            @foreach ($education as $key =>$edu )                                         
                                            @if ($edu->Ma_hoc_van == $us->Ma_hoc_van)                                  
                                              {{$edu->Ten_hoc_van}}                                     
                                            @endif                                     
                                            @endforeach
                                            </td> 

                                            <td style="font-size: 20px">
                                                {{-- <a href="{{URL::to('/user-apply-job/')}}">  <i class="fas fa-eye" style="color: Green; margin: 0 5px;"></i></a>|| 
                                                <a href="{{URL::to('/edit-job/')}}">  <i class="fas fa-edit" style="color: blue; margin: 0 5px;"></i></a>|| 
                                                <a href="{{URL::to('/delete-job/')}}" onclick="return confirm('Do you want delete ?')">  <i class="fas fa-trash-alt" style="color: red;margin: 0 5px;"></i></a> --}}
                                                @if (!isset($jd->Kiem_tra))
                                                    <a href="{{URL::to('/cancle-user/'.$us->Ma_ung_vien)}}" onclick="return confirm('Bạn có muốn hủy ứng viên này ?')">  <i class="fas fa-times" style="color: red;margin: 0 5px;"></i></a> ||
                                                    <a href="{{URL::to('/accept-user/'.$us->Ma_ung_vien)}}"onclick="return confirm('Bạn có muốn chấp nhận ứng viên này ?')"><i class="fas fa-check" style="color: Green; margin: 0 5px;"></i></a>
                                                @elseif ($jd->Kiem_tra==1)
                                                   <i class="fas fa-check" style="color: Green; margin: 0 5px;"></i>
                                                @elseif ($jd->Kiem_tra==0)
                                                    <i class="fas fa-times" style="color: red;margin: 0 5px;"></i>
                                                @endif
                                            </td> 
                                        </tr>
                                     
                           
                                        @endif
                             
                                        @endforeach
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