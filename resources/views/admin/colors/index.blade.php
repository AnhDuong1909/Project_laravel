{{-- ----------------------------Handle Delete------------------ --}}
@php
    if (isset($_GET["id_delete"])) {
        $id = $_GET["id_delete"];
        DB::table('colors')->where('id_colors',$id)->delete();
    }
@endphp
{{-- ----------------------------end delete ----------------------------- --}}


@extends('layouts.admin')
@section('content')

<div class="box-header">
    <h1 class="box-title">list of Colors</h1>
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
            <a  class="btn btn-danger" href="?id_delete={{ $r->id_colors }}">Delete</a>
            <a  class="btn btn-info" href="{{ url('admin/colors/edit') }}">Edit</a>
          </td>
        </tr>
        @endforeach
      </tbody></table>
    </div>
    <!-- /.box-body -->
  </div>



  {{$list->links()}}
@endsection
