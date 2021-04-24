@extends('layout_employer')
@section('employer_content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Sửa bài kiểm tra</h1>
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
                            <form action="{{URL::to('/update-exam-employer/'.$exam_detail->Ma_bai_kiem_tra)}}"  method="post">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên bài kiểm tra</label>
                                        <input type="text" required name="name" class="form-control"
                                            value="{{ $exam_detail->Ten_bai_kiem_tra }}" id="exampleInputEmail1"
                                            placeholder="Nhập tên bài kiểm tra">
                                    </div>
                                    <div class="form-group">
                                        <label>Thời gian làm (Phút)</label>
                                        <input type="number" required name="time" class="form-control"
                                            value="{{ $exam_detail->Thoi_gian_lam }}" id="exampleInputEmail1"
                                            placeholder="Nhập thời gian">
                                    </div>
                                    <div class="form-group">
                                        <label>Số câu</label>
                                        <input type="number" required name="number_ques" class="form-control"
                                            value="{{ $exam_detail->So_cau }}" id="exampleInputEmail1"
                                            placeholder="Nhập số câu">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Điểm tối thiểu</label>
                                        <input type="number" required name="mark" value="{{ $exam_detail->Diem_toi_thieu }}"
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
