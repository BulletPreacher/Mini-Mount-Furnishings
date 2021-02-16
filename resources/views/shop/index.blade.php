@extends('layouts.app')
@section('style')

@endsection

@section('content')
    <div class="bannerdiv" style="width:100%; height: 50%">
        <div class=" banner"
             style="width:100%; height:100%; background-image:url({{url('images/Banner2.png') }}); background-size: cover; background-position: top; border-radius: 20px; ">

        </div>
    </div>
    <div class="card"
         style="border: 3px solid black; background-color: #ffeb3b; border-radius: 30px; font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;">
        <div class="card-header" style="background-color: #ffeb3b; border-radius: 30px; border-bottom: 0;">
            <div class="row" style="">
                <div class="heading" style="margin:auto">
                    <h3 style="font-size: 2.5rem">Products we offer...</h3>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="row" style="justify-content: space-evenly">
                @foreach($products as  $id =>$product)
                    <a href="/shop/{{$product->id}}/single" style="text-decoration:none; color:black;">
                        <div class="productdisplay"
                             style="width:300px; border: 4px solid black; border-radius: 30px; margin: 15px;">
                            <div class="productname" style=" width:100%; text-align: center">
                                <h1 style="font-weight: bold">{{$product->name}}</h1>
                            </div>
                            <div class="productimage" style="margin: auto; height:200px; text-align:center">
                                <img src="{{$product->image}}" style="height: 100%; border-radius:15%">
                            </div>
                            <div class="productprice" style="text-align: center">
                                <h2>R{{$product->price}}</h2>
                            </div>
                            <div class="productstock" style="text-align: center">
                                <h3>In Stock:{{$product->stock}}</h3>
                            </div>
                            <div class="productadd" style="text-align: center">
                                <a class="btn btn-info" href="/products/{{$product->id}}/Add"
                                   style="margin: 15px; font-weight: bold">Add To Cart</a>
                            </div>

                        </div>
                    </a>
                @endforeach
            </div>

            <div class="row" style="justify-content:center">
                {{$products->appends($_GET)->links()}}
            </div>
        </div>
    </div>

@endsection

@section('script')


@endsection
