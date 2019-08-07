@php
    
@endphp

@extends('layouts.admin')
@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add new</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="" method="">
      <div class="box-body">
            <div>
                <label><b>Classify</b></label>
                <p><input type="text" name="classify" value="phone" readonly></p>
            </div>
            <br>
            <br>
        <div class="form-group">
          <label >name</label>
          <input type="text" class="form-control" placeholder="name" name="name">
        </div>
        <div class="form-group">
            <label >manufacturer</label>
            <input type="text" class="form-control" placeholder="manufacturer" name="manufacturer">
        </div>
        <div class="form-group">
            <label >nsx</label>
            <input type="date" class="form-control" placeholder="" name="nsx">
        </div>
        <div class="form-group">
            <label >price</label>
            <input type="number" class="form-control" placeholder="$" name="price">
        </div>
        <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupSelect01">status  </label>
            <select class="custom-select" id="inputGroupSelect01">
              <option value="on" name="status" selected>on</option>
              <option value="off" name="status">off</option>
            </select>
          </div>
          <br>
        <h4>---------- imformation -----------</h4>
        <div class="form-group">
            <label >man_hinh</label>
            <input type="text" class="form-control" placeholder="man hinh" name="man_hinh">
        </div>
        <div class="form-group">
            <label >he_dieu_hanh</label>
            <input type="text" class="form-control" placeholder="he dieu hanh" name="he_dieu_hanh">
        </div>
        <div class="form-group">
            <label >camera_truoc</label>
            <input type="text" class="form-control" placeholder="camera truoc" name="camera_truoc">
        </div>
        <div class="form-group">
            <label >camera_sau</label>
            <input type="text" class="form-control" placeholder="cemera sau" name="camera_sau">
        </div>
        <div class="form-group">
            <label >ram</label>
            <input type="text" class="form-control" placeholder="ram" name="ram">
        </div>
        <div class="form-group">
            <label >bo_nho_trong</label>
            <input type="text" class="form-control" placeholder="bo nho trong" name="bo_nho_trong">
        </div>
        <div class="form-group">
            <label >dung_luong_pin</label>
            <input type="text" class="form-control" placeholder="dung luong pin" name="dung_luong_pin">
        </div>

        <br><br>
        <h3>------------- Sale off ------------</h3>
        <br>
        <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupSelect01">sale_off_status</label>
            <select class="custom-select" id="inputGroupSelect01">
              <option value="on">on</option>
              <option value="off" selected>off</option>
            </select>
          </div>
        <div class="form-group">
            <label >sale_off_percent</label>
            <input type="number" class="form-control" placeholder="%" name="sale_off_percent">
        </div>

        <div class="form-group">
            <label >sale_off_start</label>
            <input type="date" class="form-control" placeholder="" name="sale_off_start">
        </div>
        <div class="form-group">
            <label >sale_off_end</label>
            <input type="date" class="form-control" placeholder="" name="sale_off_end">
        </div>

     {{-- --- introduce -- --}}
        <div class="form-group">
            <label >introduce</label>
            <input type="text" class="form-control" placeholder="introduce" name="introduce">
        </div>
      </div>


      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection
