<?php

namespace App\Http\Controllers;

use App\OrderDetailsModel;
use App\OrderModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = OrderModel::orderby('id', 'desc')->paginate(10);
        return view('orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $cart = session()->get('cart');


        $order = new OrderModel();
        $order->user_id = Auth::user()->id;
        $order->save();

        foreach ($cart as $item) {
            $orderDetails = new OrderDetailsModel();
            $orderDetails->order_id = $order->id;
            $orderDetails->product_id = $item['id'];
            $orderDetails->quantity = $item['quantity'];
            $orderDetails->save();
        }
        session()->forget('cart');
        return redirect("/")->with('success', 'Your order has been placed successfully, your order number is ' . $order->id . ' you can review your order under your Dashboard');
    }


    /**
     * Display the specified resource.
     *
     * @param \App\OrderModel $orderModel
     * @return \Illuminate\Http\Response
     */
    public function show(OrderModel $orderModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\OrderModel $orderModel
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderModel $orderModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\OrderModel $orderModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderModel $orderModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\OrderModel $orderModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderModel $orderModel)
    {
        //
    }

    public function delete($id)
    {
        $order = OrderModel::find($id);
        $order::find($id)->delete();
        return redirect("/orders/index")->with('success','Order has been removed');

    }
}
