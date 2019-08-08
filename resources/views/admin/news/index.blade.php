@extends('layouts.admin')
@section('content')

<div>
    <h1>News</h1>

    @include('admin.notification')
    <br>

    <p><a href="{{ url('admin/news/create') }}"  class="btn btn-primary">Add new</a></p>

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
            <a  class="btn btn-info" href="{{ action('NewsController@edit',$r->id_news) }}">Edit</a>
          </td>
          <td>
            <form class="delete_form" action="{{ action('NewsController@destroy',$r->id_news) }} " method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger ">Delete</button>
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
