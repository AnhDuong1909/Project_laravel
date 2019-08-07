{{-- ----------------------------Handle Delete------------------ --}}
@php
    if (isset($_GET["id_delete"])) {
        $id = $_GET["id_delete"];
        DB::table('products')->where('id_products',$id)->delete();
    }
@endphp
{{-- ----------------------------end delete ----------------------------- --}}

@extends('layouts.admin')
@section('content')
      <table class="table table-hover">
                    {{-- ----------------------- phone---------------------------- --}}
                <h1>         Accessory               </h1>
                @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <p><a href="{{ url('admin/accessory/create') }}"  class="btn btn-success">Add new</a></p>

                <div>
                    @foreach ($list as $r)
                        @if ($r->classify == 'accessory')
                            <p>
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample{{$r->id_products}}" aria-expanded="false" aria-controls="collapseExample{{$r->id_products}}">
                                    <span class="product_column1">id_products</span>
                                    <span class="product_column2">{{$r->id_products}}</span>

                                    <span class="product_column1">name</span>
                                    <span class="product_column2">{{$r->name}}</span>
                                </button>
                                {{-- ------------------delete ----------------- --}}
                                <a  class="btn btn-info" href="{{ url('admin/accessory/edit') }}">Edit</a>
                                <a  class="btn btn-danger" href="?id_delete={{ $r->id_products }}">Delete</a>
                                {{-- <span>
                                    <form action="{{ action('AccessoryController@destroy',$r->id_products)}}" method="POST" class="delete_form">
                                        @csrf
                                        {{-- <input type="hidden" name="_method" value="DELETE"> --}}
                                        {{-- <input type="hidden" name="_method" value="DELETE"> --}}
                                        {{-- @method('DELETE'); --}}
                                        {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                                    {{-- </form> --}}
                                {{-- </span>  --}}
                            </p>
                            <div class="collapse" id="collapseExample{{$r->id_products}}">
                                <div class="card card-body">
                                    <span class="product_column1">id_products</span>
                                    <span class="product_column2">{{$r->id_products}}</span>
                                </div>
                                <div  class="card card-body">
                                    <span class="product_column1">classify</span>
                                    <span class="product_column2">{{$r->classify}}</span>
                                </div>
                                <div  class="card card-body">
                                    <span class="product_column1">name</span>
                                    <span class="product_column2">{{$r->name}}</span>
                                </div>
                                <div  class="card card-body">
                                    <span class="product_column1">manufacturer</span>
                                    <span class="product_column2">{{$r->manufacturer}}</span>
                                </div>
                                <div  class="card card-body">
                                    <span class="product_column1">nsx</span>
                                    <span class="product_column2">{{$r->nsx}}</span>
                                </div>
                                <div  class="card card-body">
                                    <span class="product_column1">price</span>
                                    <span class="product_column2">{{$r->price}}</span>
                                </div>
                                <div  class="card card-body">
                                    <span class="product_column1">status</span>
                                    <span class="product_column2">{{$r->status}}</span>
                                </div>
                                <div  class="card card-body">
                                    <span class="product_column1">sale_off_status</span>
                                    <span class="product_column2">{{$r->sale_off_status}}</span>
                                </div>
                                <div class="card card-body">
                                    <span class="product_column1">sale_off_percent</span>
                                    <span class="product_column2">{{$r->sale_off_percent}}</span>
                                </div>
                                <div class="card card-body">
                                    <span class="product_column1">sale_off_start</span>
                                    <span class="product_column2">{{$r->sale_off_start}}</span>
                                </div>
                                <div class="card card-body">
                                    <span class="product_column1">sale_off_end</span>
                                    <span class="product_column2">{{$r->sale_off_end}}</span>
                                </div>
                                <div class="card card-body">
                                    <span class="product_column1">introduce</span>
                                    <span class="product_column2">{{$r->introduce}}</span>
                                </div>
                            </div>
                            {{-- --------------else --------------- --}}
                            @else
                            <p>-----</p>
                        @endif

                    @endforeach
                </div>
                    {{-- ----------------------- end phone---------------------------- --}}
    </table>

    {{ $list->links() }}

    {{-- <script>
        $(document).ready(function(){
            $('.delete_form').on('submit',function(){
                if(confirm('Are you sure to delete id ??')){
                    return true;
                } else
                {
                    return false;
                }
            })
        })
    </script> --}}

@endsection
