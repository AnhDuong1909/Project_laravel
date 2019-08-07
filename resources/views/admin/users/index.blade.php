{{-- ----------------------------Handle Delete------------------ --}}
@php
    if (isset($_GET["id_delete"])) {
        $id = $_GET["id_delete"];
        DB::table('users')->where('id_users',$id)->delete();
    }
@endphp
{{-- ----------------------------end delete ----------------------------- --}}

@extends('layouts.admin')
@section('content')

    <h1 class="box-title">Users</h1>
    <p><a  href="{{ route('users.create') }}" class="btn btn-success">Create new</a></p>
<div class="box">

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tbody>
        <tr>
          <th>id_users</th>
          <th>classify</th>
          <th>username</th>
          <th>pwd</th>
          <th>phone</th>
          <th>email</th>
          <th>address</th>
          <th>fullname</th>
        </tr>

        @foreach ($list as $r)
        <tr>
          <td>{{$r->id_users}}</td>
          <td>{{$r->classify}}</td>
          <td>{{$r->username}}</td>
          {{-- <td>{{ $r->pwd }}</td> --}}
          <td>...</td>
          <td>{{$r->phone}}</td>
          <td>{{$r->email}}</td>
          <td>{{$r->address}}</td>
          <td>{{$r->fullname}}</td>
          <td>
            <a  class="btn btn-danger" href="?id_delete={{ $r->id_users }}">Delete</a>
            <a  class="btn btn-info" href="{{ url('admin/users/edit') }}">Edit</a>
          </td>
        </tr>
        @endforeach
      </tbody></table>
    </div>
    <!-- /.box-body -->
  </div>



  {{$list->links()}}
@endsection
