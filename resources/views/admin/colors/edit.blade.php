@extends('layouts.admin');
@section('content')
<div class="box box-primary">
      <h1 class="box-title">Edit color</h1>

      @include('admin.notification')
      <br>

    <!-- form start -->
    <form class="update_form" role="form" method="POST" action="{{ action('ColorsController@update',$id) }}">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
  
        <div> id = {{ $id }}</div>
        <br><br>
  

    <div class="box-body">
        <div >
            <label >Name of color</label><br>
            <input type="text" name="name" placeholder="Enter name">
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