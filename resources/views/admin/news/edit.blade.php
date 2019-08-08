@extends('layouts.admin')
@section('content')
<div class="box box-primary">
      <h1 class="box-title">Edit News</h1>


      @include('admin.notification')


    <!-- /.box-header -->
    <!-- form start -->
    <form class="update_form" role="form" method="POST" action="{{ action('NewsController@update',$id) }}">
        @csrf

        <input type="hidden" name="_method" value="PATCH">

        <div> id = {{ $id }}</div>
        <br><br>


      <div class="box-body">
        <div class="form-group">
          <label >Title </label><br>
          <input type="text" name="title"  placeholder="Enter title ">
        </div>
        <div class="form-group">
            <label >content </label><br>
            <textarea name="content" id="" cols="90" rows="5" placeholder="Enter content"></textarea>
        </div>
        <div class="form-group">
            <label >Date </label><br>
            <input type="date" name="date" value="{{ date('Y-m-d') }}">
            </div>
        <div class="form-group">
            <label >Author </label><br>
            <input type="text" name="author" placeholder="Enter author">
        </div>
        <div class="form-group">
                <label >Images path </label><br>
                <input type="text" name="images" placeholder="Enter images path">
            </div>

      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
      $(document).ready(function () {
          $('.update_form').on('submit',function(){
              if(confirm('Update : Are you sure ? ')){
                  return true;
              }else {
                  return false;
              }
          });
      });
  </script>
@endsection
