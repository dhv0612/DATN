@extends('layout_employer')
@section('employer_content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Danh sách bài kiểm tra</h1>
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
                                            <th>Tên bài kiểm tra</th>
                                            <th>Thời gian làm</th>
                                            <th>Số câu</th>
                                            <th>Số điểm tối thiểu</th>      
                                            <th>Thao tác</th>                                      
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($exam_list as  $key =>$el)
                                        <tr>
                                            <td>{{$el->Ten_bai_kiem_tra}}</td>
                                  
                                            <td>{{$el->Thoi_gian_lam}}
                                            </td>
                                            
                                            <td>{{$el->So_cau}}</td>
                                            <td> {{$el->Diem_toi_thieu}}</td>
                                           
                                            <td style="font-size: 20px">
                                                <a href="{{URL::to('/view-question-exam/'.$el->Ma_bai_kiem_tra)}}">  <i class="fas fa-eye" style="color: Green; margin: 0 5px;"></i></a>|| 
                                                <a href="{{URL::to('/edit-exam/'.$el->Ma_bai_kiem_tra)}}">  <i class="fas fa-edit" style="color: blue; margin: 0 5px;"></i></a>|| 
                                                <a href="{{URL::to('/delete-exam/'.$el->Ma_bai_kiem_tra)}}" onclick="return confirm('Do you want delete ?')">  <i class="fas fa-trash-alt" style="color: red;margin: 0 5px;"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach                                 
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Tên bài kiểm tra</th>
                                            <th>Thời gian làm</th>
                                            <th>Số câu</th>
                                            <th>Số điểm tối thiểu</th>   
                                            <th>Thao tác</th>       
                                        </tr>
                                    </tfoot>
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