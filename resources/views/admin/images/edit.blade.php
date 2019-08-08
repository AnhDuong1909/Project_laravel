@extends('layouts.admin')
@section('content')
<div class="box box-primary">
    <h1>Edit Images</h1>

    @include('admin.notification')
    <br>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="POST" action="{{ action('ImagesController@update',$id) }}">
      @csrf
      <input type="hidden" name="_method" value="PATCH">

      <div>Where id = {{ $id }}</div>
      <br><br>


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
