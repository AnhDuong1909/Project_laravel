@extends('layouts.admin')
@section('content')

    <h1 >Bills</h1>

    @include('admin.notification')
    <br><br>

    {{-- if want edit , you can open followed line --}}
    {{-- <a><a href="{{ url('admin/bills/create') }}"  class="btn btn-success">Add new</a></a> --}}
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
                <form class="delete_form" action="{{ action('BillsController@destroy',$r->id_bills) }} " method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger ">Delete</button>
                </form>
        </td>
          {{-- <td>
            {{-- if want edit , you can open followed line --}}
            {{-- <a  class="btn btn-info" href="{{ url('admin/bills/edit') }}">Edit</a> --}}
          {{-- </td>  --}}
        </tr>
        @endforeach
      </tbody></table>
    </div>
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
