@extends('layouts.admin')
@section('content')

    <h1>Users</h1>

    @include('admin.notification')
    <br><br>


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
            <a class="btn btn-info" href="{{ action('UsersController@edit',$r->id_users) }}">Edit</a>
          </td>
          <td>
             <form class="delete_form" action="{{ action('UsersController@destroy',$r->id_users) }} " method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger delete">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody></table>
    </div>

</div>
{{ $list->links() }}


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
