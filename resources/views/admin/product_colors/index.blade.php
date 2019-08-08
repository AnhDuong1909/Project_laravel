@extends('layouts.admin')
@section('content')

<div>
    <h1 >Product - Colors</h1>
    <p><a href="{{ url('admin/product_colors/create') }}"  class="btn btn-success">Add new</a></p>

</div>
<div class="box">

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tbody>
        <tr>
          <th>id_products</th>
          <th>id_colors</th>
        </tr>

        @foreach ($list as $r)
        <tr>
          <td>{{$r->id_products}}</td>
          <td>{{$r->id_colors}}</td>
          <td>
            <a  class="btn btn-danger" href="?id_delete={{ $r->id_products }}">Delete</a>
            <a  class="btn btn-info" href="{{ url('admin/product_colors/edit') }}">Edit</a>
          </td>
        </tr>
        @endforeach
      </tbody></table>
    </div>
    <!-- /.box-body -->
  </div>



  {{$list->links()}}
@endsection
