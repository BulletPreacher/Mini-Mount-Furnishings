<?php

namespace App\Http\Controllers;

use App\OrderDetailsModel;
use App\OrderModel;
use Illuminate\Http\Request;

class OrderDetailsModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrderDetailsModel  $orderDetailsModel
     * @return \Illuminate\Http\Response
     */
    public function show(OrderDetailsModel $orderDetailsModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrderDetailsModel  $orderDetailsModel
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderDetailsModel $orderDetailsModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrderDetailsModel  $orderDetailsModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderDetailsModel $orderDetailsModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrderDetailsModel  $orderDetailsModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderDetailsModel $orderDetailsModel)
    {
        //
    }
}
