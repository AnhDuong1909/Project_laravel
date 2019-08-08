@extends('layouts.admin')
@section('content')
      <table class="table table-hover">
                    {{-- ----------------------- phone---------------------------- --}}
                <h1>         Accessory               </h1>
                
                @include('admin.notification')


                <p><a href="{{ url('admin/accessory/create') }}"  class="btn btn-success">Add new</a></p>

                <div>
                    @foreach ($list as $r)
                        @if ($r->classify == 'accessory')
                            <p>
                                <button class="btn btn-primary abc" type="button" data-toggle="collapse" data-target="#collapseExample{{$r->id_products}}" aria-expanded="false" aria-controls="collapseExample{{$r->id_products}}">
                                    <div>id :  
                                        <span >{{$r->id_products}}</span>
                                        / 
                                        <span >{{ $r->name }}</span>
                                    </div>
                                </button>
                                {{-- ------------------ ----------------- --}}
                              
                                <a  class="btn btn-info" href="{{ action('AccessoryController@edit',$r->id_products) }}">Edit</a>
                                                               
                                <form class="delete_form " action="{{ action('AccessoryController@destroy',$r->id_products) }} " method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger delete">Delete</button>
                                </form> 
                          
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
