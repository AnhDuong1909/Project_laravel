@extends('layouts.admin');
@section('content')
<div class="box box-primary">
      <h1>Create Color</h1>

      @include('admin.notification')
      <br>

    <!-- form start -->
    <form role="form" method="POST" action="{{ route('colors.store') }}">
        @csrf
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
@endsection