@extends('layouts.app')
@section('style')

@endsection

@section('content')
    <div class="ProductDisplay"
         style=" display:flex; background-color: white; border: 4px solid black; border-bottom-left-radius: 30px;border-top-right-radius: 30px; margin: auto; margin-top: 15px; margin-bottom: 15px">

        <div class="ProductImageBox" style="max-height: 500px; max-width: 500px; margin:15px ">
                <div class="ProductImage" style="display: flex; max-width:100%; max-height:inherit" >
                    <img src="{{$product->image}} " style=" max-width:100%; max-height:100%; object-fit: contain;">
                </div>
        </div>

        <div class="ProductInfoBox" style="font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif; margin:15px">
            <div class="productname" style="margin-top: 15px; height:fit-content;">
                <h1 style="font-weight: bold">{{$product->name}} -R{{$product->price}}</h1>
            </div>
            <div class="productstock" style="">
                <h3>In Stock:{{$product->stock}}</h3>
            </div>
            <div class="productstock" style="">
                <h3>{{$product->description}}</h3>
            </div>
            <div class="productadd" style="text-align: left">
                <a class="btn btn-info" href="/products/{{$product->id}}/Add"
                   style=" font-weight: bold">Add To Cart</a>
            </div>
    </div>
    </div>





@endsection

@section('script')


@endsection
