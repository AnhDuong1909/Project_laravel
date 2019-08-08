@php
    
@endphp

@extends('layouts.admin')
@section('content')
<div class="box box-primary">
    
    <h1>Edit Accessory</h1>


    @include('admin.notification')

    <!-- form start -->
    <form class="update_form" role="form" method="POST" action="{{ action('AccessoryController@update',$id) }}">
            @csrf
    
            <input type="hidden" name="_method" value="PATCH">
    
            <div> id = {{ $id }}</div>
            <br><br>
    
 


      <div class="box-body">
            <div>
                <label><b>Classify</b></label>
                <p><input type="text" name="classify" value="accessory" readonly></p>
            </div>
            <br>
            <br>
        <div class="form-group">
          <label >name</label>
          <input type="text" class="form-control" placeholder="name" name="name">
        </div>
        <div class="form-group">
            <label >manufacturer</label>
            <input type="text" class="form-control" placeholder="manufacturer" name="manufacturer">
        </div>
        <div class="form-group">
            <label >nsx</label>
            <input type="date" class="form-control" placeholder="" name="nsx" value="{{  date('Y-m-d') }}">
        </div>
        <div class="form-group">
            <label >price</label>
            <input type="number" class="form-control" placeholder="$" name="price">
        </div>
        <div class="input-group mb-3">
              <label class="input-group-text"  >status  </label>
              <br>
            <select class="custom-select"  name="status">
              <option value="on" selected>on</option>
              <option value="off" >off</option>
            </select>
          </div>
          <br>


        <h3>------------- Sale off ------------</h3>
        <br>
        <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupSelect01">sale_off_status</label>
              <br>
            <select class="custom-select" name="sale_off_status">
              <option value="on" >on</option>
              <option value="off"  selected>off</option>
            </select>
          </div>
        <div class="form-group">
            <label >sale_off_percent</label>
            <input type="number" class="form-control" placeholder="%" name="sale_off_percent">
        </div>

        <div class="form-group">
            <label >sale_off_start</label>
            <input type="date" class="form-control"  name="sale_off_start" value="{{  date('Y-m-d') }}">
        </div>
        <div class="form-group">
            <label >sale_off_end</label>
            <input type="date" class="form-control"  name="sale_off_end" value="{{  date('Y-m-d') }}">
        </div>

     {{-- --- introduce -- --}}
        <div class="form-group">
            <label >introduce</label>
            <br>
            <textarea name="introduce" cols="150"  rows="5"></textarea>        
        </div>
      </div>


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
