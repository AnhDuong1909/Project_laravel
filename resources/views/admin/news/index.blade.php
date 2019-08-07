{{-- ----------------------------Handle Delete------------------ --}}
@php
    if (isset($_GET["id_delete"])) {
        $id = $_GET["id_delete"];
        DB::table('news')->where('id_news',$id)->delete();
    }
@endphp
{{-- ----------------------------end delete ----------------------------- --}}

@extends('layouts.admin')
@section('content')

<div class="box-header">
    <h1 class="box-title">list of News</h1>
    <p><a href="{{ url('admin/news/create') }}"  class="btn btn-success">Add new</a></p>

</div>
<div class="box">

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tbody>
        <tr>
          <th>id_news</th>
          <th>title</th>
          <th>content</th>
          <th>date</th>
          <th>author</th>
          <th>images</th>
        </tr>

        @foreach ($list as $r)
        <tr>
          <td>{{$r->id_news}}</td>
          <td>{{$r->title}}</td>
          <td>{{$r->content}}</td>
          <td>{{$r->date}}</td>
          <td>{{$r->author}}</td>
          <td>{{$r->images}}</td>
          <td>
            <a  class="btn btn-danger" href="?id_delete={{ $r->id_news }}">Delete</a>
            <a  class="btn btn-info" href="{{ url('admin/news/edit') }}">Edit</a>
          </td>
        </tr>
        @endforeach
      </tbody></table>
    </div>
    <!-- /.box-body -->
  </div>



  {{$list->links()}}
@endsection
