<?php

namespace App\Http\Controllers;

use App\ProductModel;
use Illuminate\Http\Request;

class ProductModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = ProductModel::orderby('id', 'desc')->paginate(10);
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new ProductModel();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $product->image = "/images/".$imageName;
        $product->save();

        return redirect("/products/index")->with('success','New product has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductModel  $productModel
     * @return \Illuminate\Http\Response
     */
    public function show(ProductModel $productModel)
    {
        //must be done
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductModel  $productModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = ProductModel::find($id);
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductModel  $productModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = ProductModel::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;

        if($request->image!=null){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $product->image = "/images/".$imageName;
        }
        $product->save();
        return redirect("/products/index")->with('success','Product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductModel  $productModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductModel $productModel)
    {
        //
    }

    public function delete($id)
    {
        $product = ProductModel::find($id);
        $product::find($id)->delete();

        return redirect("/products/index")->with('success','Product has been removed');

    }
}
