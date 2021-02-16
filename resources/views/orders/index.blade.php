@extends('layouts.app')
@section('style')

@endsection

@section('content')
    <div class=" card">
        <div class="card-header">
            <div class="row" style="">
                <div class="col-lg-10">
                    <h3 style="text-align:left; float:left">Orders</h3>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="table-responsive">
                    <table id="orders" class="display table-striped" style="width:100%">
                        <thread class="mdb-color lighten-4">
                            <tr>
                                <th>Order ID</th>
                                <th>Product Name</th>
                                <th>Total</th>
                            </tr>
                        </thread>

                        <tbody>
                        @if (Auth::user()->is_admin)
                            @foreach($orders as $order)
                                <tr>
                                    <td> {{$order->id}}</td>
                                    <td>
                                        @php($count=0)
                                        @foreach($order->OrderDetails as $detail)
                                            @php($count +=$detail->quantity * $detail->Product->price)
                                            {{$detail->Product->name}} x {{$detail->quantity}} <br/>
                                        @endforeach
                                    </td>
                                    <td>{{$count}}</td>
                                </tr>
                            @endforeach
                        @else
                            @foreach($orders as $order)
                                @if (Auth::user()==$order->user)
                                <tr>
                                    <td> {{$order->id}}</td>
                                    <td>
                                        @php($count=0)
                                        @foreach($order->OrderDetails as $id=>$detail)
                                            @php($count +=$detail->quantity * $detail->Product->price)
                                            {{$detail->Product->name}} x {{$detail->quantity}} <br/>
                                        @endforeach
                                    </td>
                                    <td>{{$count}}</td>
                                </tr>
                                @endif
                            @endforeach

                        @endif
                        </tbody>
                    </table>
                    <div class="row" style="justify-content:center">
                        {{$orders->appends($_GET)->links()}}
                    </div>
                </div>
            </div>
        </div>



@endsection

@section('script')


@endsection
