


@extends('layouts.admin')
@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Edit</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="" method="">
      <div class="box-body">
          <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Classify = role</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>...</option>
                <option value="admin">admin</option>
                <option value="users">users</option>
                <option value="deliver">deliver</option>
              </select>
            </div>
        <div class="form-group">
          <label >username</label>
          <input type="text" class="form-control" placeholder="username" name="username">
        </div>
        <div class="form-group">
            <label >pwd</label>
            <input type="password" class="form-control" placeholder="pwd" name="pwd">
        </div>
        <div class="form-group">
            <label >phone</label>
            <input type="tel" class="form-control" placeholder="phone" name="phone">
        </div>
        <div class="form-group">
            <label >email</label>
            <input type="email" class="form-control" placeholder="email" name="email">
        </div>
        <div class="form-group">
            <label >address</label>
            <input type="text" class="form-control" placeholder="address" name="address">
        </div>
        <div class="form-group">
            <label >fullname</label>
            <input type="text" class="form-control" placeholder="fullname" name="fullname">
        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection
