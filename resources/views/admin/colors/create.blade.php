@extends('layouts.admin')
@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Quick Example</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="POST" action="{{ route('colors.store') }}">
        @csrf 
      <div class="box-body">
          <label for="exampleInputEmail1">name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter name color">
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection