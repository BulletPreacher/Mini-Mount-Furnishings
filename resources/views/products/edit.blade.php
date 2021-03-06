@extends('layouts.app')

@section('style')

@endsection

@section('content')
    @if (Auth::user()->is_admin)
        <div class=" card">
            <div class="card-header">
                <div class="row" style="">
                    <div class="col-lg-10">
                        <h3 style="text-align:left; float:left">Edit Product #{{$product->id}}</h3>
                    </div>
                    <div class="col-lg-2">
                        <a class="btn btn-danger" href="/products/index">Back</a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                {!! Form::open(['url'=>'products/'.$product->id.'/update', 'files'=>true]) !!}
                {!! Form::label('name', 'name') !!}
                {!! Form::text('name',$product->name,['class'=>'form-control', 'placeholder'=>'','required']) !!}
                {!! Form::label('description', 'description') !!}
                {!! Form::textarea('description', $product->description,['Class'=>'form-control', 'placeholder'=>'','required']) !!}
                {!! Form::label('price', 'Price') !!}
                {!! Form::number('price', $product->price,['Class'=>'form-control', 'min'=>'0','required'=>'required']) !!}
                {!! Form::label('stock', 'Stock') !!}
                {!! Form::number('stock', $product->stock,['Class'=>'form-control', 'min'=>'0','required'=>'required']) !!}
                {!! Form::label('image', 'Image') !!}
                {!! Form::file('image',['class'=>'form-control','required']) !!}
                <br/>
                {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
            @else
                <h1>Error 401:Unauthorized Access</h1>
    @endif
@endsection

@section('script')


@endsection
