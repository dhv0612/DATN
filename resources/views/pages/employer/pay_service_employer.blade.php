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
                <form>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    Thanh toán Paypal
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">                                         
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tr>
                                                        <th>Gói bài đăng:</th>
                                                        <td >{{$info_pay->Thoi_han}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Hạn đăng tuyển:</th>
                                                        <?php
                                                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                                                            $today = date('Y-m-d');
                                                            if($info_pay->Han_dang_bai ==null || $info_pay->Han_dang_bai < $today){
                                                                if ($info_pay->Ma_thoi_han ==1){
                                                                    $date = date('Y-m-j');
                                                                    $newdate = strtotime ( '+1 month' , strtotime ( $date ) ) ;
                                                                    Session::put('lasttime', $newdate);
                                                                    $newdate = date ( 'd-m-Y' , $newdate );
                                                                }else {
                                                                    $date = date('Y-m-j');
                                                                    $newdate = strtotime ( '+6 month' , strtotime ( $date ) ) ;
                                                                    Session::put('lasttime', $newdate);
                                                                    $newdate = date ( 'd-m-Y' , $newdate );
                                                                }

                                                            }else{
                                                                if ($info_pay->Ma_thoi_han ==1){                                                              
                                                                    $newdate = strtotime ( '+1 month' , strtotime ( $info_pay->Han_dang_bai) ) ;
                                                                    Session::put('lasttime', $newdate);
                                                                    $newdate = date ( 'd-m-Y' , $newdate );
                                                                }else {
                                                                    $date = date('Y-m-j');
                                                                    $newdate = strtotime ( '+6 month' , strtotime ( $info_pay->Han_dang_bai ) ) ;
                                                                    Session::put('lasttime', $newdate);
                                                                    $newdate = date ( 'd-m-Y' , $newdate );
                                                                }
                                                            }
                                                        ?>
                                                        <td>{{$newdate}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tổng tiền:</th>
                                                        <?php
                                                         $format_number = number_format($info_pay->So_tien);
                                                        ?>
                                                        <td >{{ $format_number}}</td>
                                                        <input type="hidden" id="total" value="{{$info_pay->So_tien}}">
                                                    </tr>
                                                </table>
                                                <?php
                                                Session::put('idpay', $info_pay->Ma_thanh_toan);
                                               
                                               
                                                ?>
                                              
                                            </div>
                                            <div id="paypal-button">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div><!-- /.col -->
                    </div>
                </form>
            </div>

            <!-- /.invoice -->
    </div><!-- /.col -->

    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    </div>
  
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script>
const URL= 'https://dhv0612.com/DATN';
        // function myfunction(event) {
        //     var btn = document.getElementById('btnsubmit')
        //     var packpost = document.getElementById('packpost')
        //     var goi = document.getElementById('goi')
        //     btn.style.display = "block"
        //     var value = event.target.value
        //     goi.value = value
        //     var time = document.getElementById('time' + value).innerHTML
        //     var gia = document.getElementById('gia' + value).innerHTML
        //     var quantity = document.getElementById('quantity');
        //     var thanhtoan = document.getElementById('thanhtoan');
        //     var res = gia.trim().replace(/ VND/g, "");
        //     for (let i = 0; i < res.length; i++) {
        //         var res = res.replace(/,/, "");
        //     }
        //     thanhtoan.value = Math.round((res / 23083) * 100) / 100
        //     quantity.innerHTML = gia;
        //     packpost.innerHTML = time
        // }
        // document.querySelectorAll("input[name='Thoihan']").forEach((input) => {
        //     input.addEventListener('change', myfunction);
        // });
        // var pay = 0

            var tong = document.getElementById('total').value
            var total = Math.round((tong / 23083) * 100) / 100
            total = parseFloat(total)
            paypal.Button.render({
                // Configure environment
                env: 'sandbox',
                client: {
                    sandbox: 'AQu-beodYlkaNDU-nfU9ijlro8VlUr8RLJFyRsCzpDhZTDRjf0xHJxOFseF3hH1gqGTdmo1dUrI_ibfo',
                    production: 'demo_production_client_id'
                },
                // Customize button (optional)
                locale: 'en_US',
                style: {
                    size: 'large',
                    color: 'gold',
                    shape: 'pill',
                },
                // Enable Pay Now checkout flow (optional)
                commit: true,
                // Set up a payment

                payment: function(data, actions) {
                    return actions.payment.create({
                        transactions: [{
                            amount: {
                                total: total,
                                currency: 'USD'
                            }
                        }]
                    });
                },
             
                // Execute the payment
                onAuthorize: function(data, actions) {
                    return actions.payment.execute().then(function() {
                        // Show a confirmation message to the buyer
                        window.alert('Cảm ơn bạn đã tin tưởng chúng tôi');
                        window.location.href= URL+'/pay-sucessfully';
                    });
                }
            }, '#paypal-button');
   

    </script>
@endsection
