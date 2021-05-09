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
            <li class="nav-item  ">
                <a href="#" class="nav-link ">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Bài kiểm tra
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item ">
                        <a href="{{ URL::to('/list-exam-employer') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Danh sách bài kiểm tra</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ URL::to('/add-exam-employer') }}" class="nav-link ">
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
                        <a href="{{ URL::to('/history-payment-employer') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Lịch sử thanh toán</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ URL::to('/extend-time-employer') }}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Gia hạn thời gian</p>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item">
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
    </div>
    <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <form action="pay-service" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-warning">
                                <div class="card-header">
                                    <h3 class="card-title">Danh sách các gói dịch vụ</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3>Chọn các gói đăng bài bạn muốn </h3>
                                            <div class="table-responsive">
                                                <table class="table" name="myForm">
                                                    @foreach ($sevice as $key => $sv)
                                                        <tr>
                                                            <th>
                                                                <input class="form-check-input" name="Thoihan"
                                                                    style=" margin-left: 30px;"
                                                                    value="{{ $sv->Ma_thoi_han }}" type="radio">
                                                                <label class="form-check-label"
                                                                    id="time{{ $sv->Ma_thoi_han }}"
                                                                    style="margin-left: 50px; ">{{ $sv->Thoi_han }}</label>
                                                            </th>
                                                            <?php $format_number =
                                                            number_format($sv->So_tien); ?>
                                                            <td style="font-weight: bold;"
                                                                id="gia{{ $sv->Ma_thoi_han }}">
                                                                {{ $format_number }} VND</td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                                {{-- <input type="hidden" id="goi" name="thoi_han"> --}}
                                             
                                                <button type="submit" id="btnsubmit" 
                                                    style="float: right; display: none; transition: 1s"
                                                    class="btn btn-primary" >
                                                    Xác nhận
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div><!-- /.col -->
                        {{-- <div class="col-6" id="text" style="display: none">
                            <div class="card card-warning">
                                <div class="card-header">
                                    <h3>
                                        <i class="fas fa-globe"></i> UTC2 Work
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                
                                <!-- /.card-body -->
                            </div>
                        </div> --}}
                    </div>
                </form>
            </div>

            <!-- /.invoice -->
    </div><!-- /.col -->

    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    </div>
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thông tin thanh toán</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th>Gói bài đăng:</th>
                                        <td id="packpost"></td>
                                    </tr>
                                    <tr>
                                        <th>Hạn đăng tuyển:</th>
                                        <td id="datelast"></td>
                                    </tr>
                                    <tr>
                                        <th>Tổng tiền:</th>
                                        <td id="quantity"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <form action="">
                        
                        <div id="paypal-button">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script>
        function myfunction(event) {
            var btn = document.getElementById('btnsubmit')
            var packpost = document.getElementById('packpost')
            var goi = document.getElementById('goi')
            btn.style.display = "block"
            var value = event.target.value
            goi.value = value
            var time = document.getElementById('time' + value).innerHTML
            var gia = document.getElementById('gia' + value).innerHTML
            var quantity = document.getElementById('quantity');
            var thanhtoan = document.getElementById('thanhtoan');

        }
        document.querySelectorAll("input[name='Thoihan']").forEach((input) => {
            input.addEventListener('change', myfunction);
        });
        var pay = 0

    </script>
@endsection
