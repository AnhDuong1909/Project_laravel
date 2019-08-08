@extends('layouts.admin')
@section('content')
<div class="box box-primary">
    <h1>Create Images</h1>

    @include('admin.notification')
  <br>

    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="POST" action="{{ route('images.store') }}">
      @csrf
      <div class="box-body">

        <div >
          <label >name of image</label><br>
          <input type="text" name="name" placeholder="Enter name">
        </div>
        <br>
        <div >
            <label >images src</label><br>
            <input type="text" name="src" placeholder="Enter images path">
          </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection
