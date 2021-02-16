@extends('layouts.app')


@section('styles')

@endsection

@section('content')
    <div class="card">

        <div class="card-header">
            <h4>Order Details</h4>
        </div>
        <div class="card-body">


            <table id="cart" class="table table-hover table-condensed">
                <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
                </thead>
                <tbody>

                <?php $total = 0 ?>

                @if(session('cart'))
                    @foreach(session('cart') as $id => $details)

                        @php( $total += $details['price'] * $details['quantity'])

                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}"
                                                                         style="width: 100px"
                                                                         class="img-responsive"/></div>
                                    <div class="col-sm-9">
                                        <h4 class="nomargin">{{ $details['name'] }}</h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">R {{ $details['price'] }}</td>
                            <td data-th="Quantity">
                                 {{ $details['quantity'] }}
                            </td>
                            <td data-th="Subtotal" class="text-center">
                                R {{ $details['price'] * $details['quantity'] }}</td>
                        </tr>
                    @endforeach
                @endif

                </tbody>
                <tfoot>
                <tr class="visible-xs">
                    <td colspan="4" class="text-center"><strong>Total {{ $total }}</strong></td>
                </tr>

                </tfoot>
            </table>
        </div>
        <div class="card-footer">

            <h5>Payment Options</h5>
            <p>
                Cash On delivery
            </p>
            <p>
                Shipping: Free
            </p>
            <a class="btn btn-outline-primary" href="/order">Confirm Order</a>
        </div>
    </div>
@endsection

@section('script')

@endsection
