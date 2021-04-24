@extends('layout_employer')
@section('employer_content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Sửa bài đăng tuyển dụng</h1>
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
                            <form action="{{ URL::to('/update-job-employer/'.$job_detail->Ma_bai_dang) }}" method="post"  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tiêu đề</label>
                                        <input type="text" name="title" class="form-control"
                                            value="{{ $job_detail->Tieu_de }}" id="exampleInputEmail1"
                                            placeholder="Nhập tiêu đề">
                                    </div>
                                    <div class="form-group">
                                        <label>Ngành nghề</label>
                                        <select name="branch" class="form-control">
                                            @foreach ($branch as $key=>$bra )
                                             @if ($job_detail->Ma_nganh_nghe == $bra->Ma_nganh_nghe)
                                             <option value="{{$bra->Ma_nganh_nghe}}" selected>{{$bra->Ten_nganh_nghe}}</option>
                                             @else
                                             <option value="{{$bra->Ma_nganh_nghe}}" >{{$bra->Ten_nganh_nghe}}</option>
                                             @endif
                                            @endforeach                                         
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Địa điểm</label>
                                        <select name="place" class="form-control">
                                            @foreach ($place as $key=>$pla )
                                             @if ($job_detail->Ma_dia_diem == $pla->Ma_dia_diem)
                                             <option value="{{$pla->Ma_dia_diem}}" selected>{{$pla->Ten_dia_diem}}</option>
                                             @else
                                             <option value="{{$pla->Ma_dia_diem}}" >{{$pla->Ten_dia_diem}}</option>
                                             @endif
                                            @endforeach                                                                         
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Địa chỉ làm việc</label>
                                        <input type="text" name="address" value="{{$job_detail->Dia_diem_lam_viec}}" class="form-control" id="exampleInputPassword1" placeholder="Địa chỉ">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mức lương</label>
                                        <input type="number" name="salary"  value="{{$job_detail->Muc_luong}}" class="form-control" id="exampleInputPassword1" placeholder="Lương">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Hạn ứng tuyển</label>
                                        <input type="date" name="deadline"  value="{{$job_detail->Han_ung_tuyen}}" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Yêu cầu</label>
                                        <textarea id="summernote" name="res"  class="form-control">
                                            <?php echo  $job_detail->Yeu_cau?>
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mô tả công việc</label>
                                        <textarea id="summernote1" name="des" class="form-control">
                                            <?php echo  $job_detail->Mo_ta_cong_viec?>
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Thông tin khác</label>
                                        <textarea id="summernote2" name="info" class="form-control">
                                            <?php echo  $job_detail->Thong_tin_khac?>
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tiêu đề SEO</label>
                                        <input type="text" class="form-control" value="{{$job_detail->Tieu_de_SEO}}" name="tit_seo" id="exampleInputPassword1"
                                            placeholder="Tiêu đề SEO">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mô tả SEO</label>
                                        <input type="text" class="form-control" value="{{$job_detail->Mo_ta_SEO}}"  name="des_seo" id="exampleInputPassword1"
                                            placeholder="Lương">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Hình ảnh SEO</label>

                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="img_seo" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Chọn hình ảnh</label>
                                            </div>                                           
                                        </div>
                                        <img class="img" style="height: 100px; width: 200px" src="{{asset('public/upload/nhatuyendung/SEO/'.$job_detail->Hinh_anh_SEO )}}">

                                    </div>
                                    {{-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> --}}
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                        <!-- general form elements -->
                        {{-- <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Different Styles</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <h4>Input</h4>
                <div class="form-group">
                  <label for="exampleInputBorder">Bottom Border only <code>.form-control-border</code></label>
                  <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border">
                </div>
                <div class="form-group">
                  <label for="exampleInputBorderWidth2">Bottom Border only 2px Border <code>.form-control-border.border-width-2</code></label>
                  <input type="text" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder=".form-control-border.border-width-2">
                </div>
                <div class="form-group">
                  <label for="exampleInputRounded0">Flat <code>.rounded-0</code></label>
                  <input type="text" class="form-control rounded-0" id="exampleInputRounded0" placeholder=".rounded-0">
                </div>
                <h4>Custom Select</h4>
                <div class="form-group">
                  <label for="exampleSelectBorder">Bottom Border only <code>.form-control-border</code></label>
                  <select class="custom-select form-control-border" id="exampleSelectBorder">
                    <option>Value 1</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectBorderWidth2">Bottom Border only <code>.form-control-border.border-width-2</code></label>
                  <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2">
                    <option>Value 1</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectRounded0">Flat <code>.rounded-0</code></label>
                  <select class="custom-select rounded-0" id="exampleSelectRounded0">
                    <option>Value 1</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                  </select>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Input addon -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Input Addon</h3>
              </div>
              <div class="card-body">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Username">
                </div>

                <div class="input-group mb-3">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                  </div>
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                  </div>
                </div>

                <h4>With icons</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input type="email" class="form-control" placeholder="Email">
                </div>

                <div class="input-group mb-3">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-check"></i></span>
                  </div>
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-dollar-sign"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <div class="input-group-text"><i class="fas fa-ambulance"></i></div>
                  </div>
                </div>

                <h5 class="mt-4 mb-2">With checkbox and radio inputs</h5>

                <div class="row">
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <input type="checkbox">
                        </span>
                      </div>
                      <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                  </div>
                  <!-- /.col-lg-6 -->
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><input type="radio"></span>
                      </div>
                      <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                  </div>
                  <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->

                <h5 class="mt-4 mb-2">With buttons</h5>

                <p>Large: <code>.input-group.input-group-lg</code></p>

                <div class="input-group input-group-lg mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                      Action
                    </button>
                    <ul class="dropdown-menu">
                      <li class="dropdown-item"><a href="#">Action</a></li>
                      <li class="dropdown-item"><a href="#">Another action</a></li>
                      <li class="dropdown-item"><a href="#">Something else here</a></li>
                      <li class="dropdown-divider"></li>
                      <li class="dropdown-item"><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <!-- /btn-group -->
                  <input type="text" class="form-control">
                </div>
                <!-- /input-group -->

                <p>Normal</p>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-danger">Action</button>
                  </div>
                  <!-- /btn-group -->
                  <input type="text" class="form-control">
                </div>
                <!-- /input-group -->

                <p>Small <code>.input-group.input-group-sm</code></p>
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control">
                  <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat">Go!</button>
                  </span>
                </div>
                <!-- /input-group -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Remember me</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Sign in</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card --> --}}

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
