


@extends('layouts.admin')
@section('content')
<div class="box box-primary">
      <h1 class="box-title">Edit Users</h1>


      @include('admin.notification')

  
    <!-- form start -->
    <form class="update_form" role="form" method="POST" action="{{ action('UsersController@update',$id) }}">
            @csrf
    
            <input type="hidden" name="_method" value="PATCH">
    
            <div> id = {{ $id }}</div>
            <br><br>
    
    
         <div class="box-body">
            <div class="form-group">
                    <label >phone</label>
                    <input type="tel" class="form-control" placeholder="phone" name="phone">
                    {{-- pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" --}}
                </div>
        
                {{-- <div class="form-group">
                    <label >email</label>
                    <input type="email" class="form-control" placeholder="email" name="email">
                </div> --}}
        
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
