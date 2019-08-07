{{-- -------------------handing insert------------ --}}
{{-- @php
if(isset($_POST["classify"])){
    $classify = $_POST["classify"];
    $username = $_POST["username"];

    DB::table('users')->insert([
    ['classify' => "aa"
    ,'username' => "aa"
    ]
    ]);
}

@endphp --}}
{{-- -------------------end insert -------------- --}}

@extends('layouts.admin')
@section('content')
      <h1 class="box-title">Create new Users</h1>

    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{ url('addUsers') }}" method="POST">
    @csrf
        <div>
            <label><b>Classify = Role</b></label>
            <div class="form-check">
                      <input type="radio" class="form-check-input" name="classify" value="admin" disabled>admin
              </div>
            <div class="form-check">
                  <input type="radio" class="form-check-input" name="classify" value="users">users
              </div>
            <div class="form-check">
                  <input type="radio" class="form-check-input" name="classify" value="deliver" >deliver
              </div>
        </div>
        <br>
        <br>

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
            {{-- pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" --}}
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
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
@endsection
