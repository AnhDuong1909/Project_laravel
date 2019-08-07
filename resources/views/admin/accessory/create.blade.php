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
                    <p><input type="text" name="classify" value="accessory" readonly></p>
                </div>
                <br>
                <br>
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
              <label class="input-group-text" for="inputGroupSelect01">status  </label>

            <select class="custom-select" id="inputGroupSelect01">
              <option value="on" selected>on</option>
              <option value="off">off</option>
            </select>
          </div>
        {{-- ---sale off -- --}}
        <br><br>
        <h3>--------- Sale off ----------</h3>
        <br>
        <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupSelect01">sale_off_status</label>

            <select class="custom-select" id="inputGroupSelect01">
              <option value="on">   on</option>
              <option value="off" selected>    off</option>
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
