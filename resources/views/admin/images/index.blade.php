@extends('layouts.admin')
@section('content')

<div >
    <h1>Images</h1>

    @include('admin.notification')
    <br>


    <p><a href="{{ route('images.create') }}"  class="btn btn-success">Add new</a></p>

</div>
<div class="box">

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tbody>
        <tr>
          <th>id_images</th>
          <th>name</th>
          <th>src</th>
        </tr>

        @foreach ($list as $r)
        <tr>
          <td>{{$r->id_images}}</td>
          <td>{{$r->name}}</td>
          <td>{{$r->src}}</td>
          <td>
            <a  class="btn btn-info" href="{{ action('ImagesController@edit',$r->id_images) }}">Edit</a>
          </td>
          <td>
                <form class="delete_form" action="{{ action('ImagesController@destroy',$r->id_images) }} " method="POST">
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
