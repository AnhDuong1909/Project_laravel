{{-- ----------------------------Handle Delete------------------ --}}
@php
    if (isset($_GET["id_delete"])) {
        $id = $_GET["id_delete"];
        DB::table('bills')->where('id_bills',$id)->delete();
    }
@endphp
{{-- ----------------------------end delete ----------------------------- --}}

@extends('layouts.admin')
@section('content')

<div class="box-header">
    <h1 class="box-title">list of Bills</h1>
    <p><a href="{{ url('admin/bills/create') }}"  class="btn btn-success">Add new</a></p>
</div>
<div class="box">

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tbody>
        <tr>
          <th>id_bills</th>
          <th>id_products</th>
          <th>id_users</th>
          <th>number</th>
          <th>date</th>
          <th>status</th>
          <th>vat</th>
        </tr>

        @foreach ($list as $r)
        <tr>
          <td>{{$r->id_bills}}</td>
          <td>{{$r->id_products}}</td>
          <td>{{$r->id_users}}</td>
          <td>{{$r->number}}</td>
          <td>{{$r->date}}</td>
          <td>{{$r->status}}</td>
          <td>{{$r->vat}}</td>
          <td>
            <a  class="btn btn-danger" href="?id_delete={{ $r->id_bills }}">Delete</a>
            <a  class="btn btn-info" href="{{ url('admin/bills/edit') }}">Edit</a>
          </td>
        </tr>
        @endforeach
      </tbody></table>
    </div>
    <!-- /.box-body -->
  </div>



  {{$list->links()}}
@endsection
