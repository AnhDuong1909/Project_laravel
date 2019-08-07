@extends('layouts.admin');
@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add new</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="" method="">
      <div class="box-body">
          <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Classify : phone / accessories  </label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>...</option>
                <option value="phone">phone</option>
                <option value="accessories">accessories</option>
              </select>
            </div>
        <div class="form-group">
          <label >name</label>
          <input type="text" class="form-control" placeholder="name" name="username">
        </div>
        <div class="form-group">
            <label >manufacturer</label>
            <input type="text" class="form-control" placeholder="" name="manufacturer">
        </div>
        <div class="form-group">
            <label >nsx</label>
            <input type="date" class="form-control" placeholder="" name="nsx">
        </div>
        <div class="form-group">
            <label >price</label>
            <input type="number" class="form-control" placeholder="" name="">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">status  </label>
            </div>
            <select class="custom-select" id="inputGroupSelect01">
              <option selected>...</option>
              <option value="on">on</option>
              <option value="off">off</option>
            </select>
          </div>
        <div class="form-group">
            <label >man_hinh</label>
            <input type="text" class="form-control" placeholder="" name="">
        </div>
        <div class="form-group">
            <label >he_dieu_hanh</label>
            <input type="text" class="form-control" placeholder="" name="">
        </div>
        <div class="form-group">
            <label >camera_truoc</label>
            <input type="text" class="form-control" placeholder="" name="">
        </div>
        <div class="form-group">
            <label >camera_sau</label>
            <input type="text" class="form-control" placeholder="" name="">
        </div>
        <div class="form-group">
            <label >ram</label>
            <input type="text" class="form-control" placeholder="" name="">
        </div>
        <div class="form-group">
            <label >bo_nho_trong</label>
            <input type="text" class="form-control" placeholder="" name="">
        </div>
        <div class="form-group">
            <label >dung_luong_pin</label>
            <input type="text" class="form-control" placeholder="" name="">
        </div>

        {{-- ---sale off -- --}}
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">sale_off_status</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01">
              <option selected>...</option>
              <option value="on">on</option>
              <option value="off">off</option>
            </select>
          </div>
        <div class="form-group">
            <label >sale_off_percent</label>
            <input type="number" class="form-control" placeholder="" name="">
        </div>

        <div class="form-group">
            <label >sale_off_start</label>
            <input type="date" class="form-control" placeholder="" name="">
        </div>
        <div class="form-group">
            <label >sale_off_end</label>
            <input type="date" class="form-control" placeholder="" name="">
        </div>

     {{-- --- introduce -- --}}
        <div class="form-group">
            <label >introduce</label>
            <input type="text" class="form-control" placeholder="" name="">
        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection
