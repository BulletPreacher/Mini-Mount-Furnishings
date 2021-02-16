@extends('layouts.app')
@section('style')

@endsection

@section('content')
@if (Auth::user()->is_admin)
    <div class=" card">
        <div class="card-header">
            <div class="row" style="">
                <div class="col-lg-10">
                    <h3 style="text-align:left; float:left">Products</h3>
                </div>
                <div class="col-lg-2">
                    <a class= "btn btn-success" href="/products/create">Add Product</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="table-responsive">
                    <table id="products" class="display table-striped" style="width:100%">
                        <thread class="mdb-color lighten-4">
                         <tr>
                          <th>Image</th>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Description</th>
                          <th>Price</th>
                          <th>Stock</th>
                          <th>Actions</th>
                         </tr>
                        </thread>

                    <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td><img src="{{$product->image}}" style="height:50px"></td>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{Str::limit($product->description,100,$end=' . . . ')}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->stock}}</td>
                        <td><a class="btn btn-info" href="/products/{{$product->id}}/edit">Edit</a>
                        <a class="btn btn-danger" href="/products/{{$product->id}}/delete">Remove</a></td>



                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                    <div class="row" style="justify-content:center">
                        {{$products->appends($_GET)->links()}}
                    </div>
                </div>
            </div>
        </div>

        @else
            <h1>Error 401:Unauthorized Access</h1>
@endif
@endsection

@section('script')


@endsection
