@extends('layouts.admin')
@section('content')

<div>
    <h1>Colors</h1>
    <br>
    @include('admin.notification')
    <br>

    <p><a href="{{ url('admin/colors/create') }}"  class="btn btn-success">Add new</a></p>
</div>
<div class="box">

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tbody>
        <tr>
          <th>id_colors</th>
          <th>name</th>
        </tr>

        @foreach ($list as $r)
        <tr>
          <td>{{$r->id_colors}}</td>
          <td>{{$r->name}}</td>
          <td>
            <a  class="btn btn-info" href="{{ action('ColorsController@edit',$r->id_colors) }}">Edit</a>
          </td>
          <td>
            <form class="delete_form" action="{{ action('ColorsController@destroy',$r->id_colors) }} " method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger delete">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody></table>
    </div>
    <!-- /.box-body -->
  </div>

  {{$list->links()}}


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
      $(document).ready(function () {
          $(".delete_form").on('submit', function () {
              if(confirm("Delete : Are you sure ?")){
                  return true;
              } else{
                  return false;
              }
          });
      });
  </script>
  @endsection
