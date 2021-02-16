<?php

namespace App\Http\Controllers;

use App\ProductModel;
use App\ShopModel;
use Illuminate\Http\Request;

class ShopModelController extends Controller
{
    public function index()
    {
        $products = ProductModel::orderby('id', 'desc')->paginate(10);
        return view('shop.index',compact('products'));
    }

    function show($id)
    {
        $product = ProductModel::find($id);
        return view('shop.single',compact('product'));
    }

    function showContactPage()
    {
        return view('shop.contact');
    }

    function showCart()
    {
        return view('shop.cart');
    }

    function showTestPage()
    {
        return view('shop.test');
    }

    //if cart is empty, becomes first product
    public function addToCart(Request $request,$id)
    {
        $product = ProductModel::find($id);
        $cart= session()->get('cart');

        if (!$cart){
            $cart=[
                $id=>[
                    "id"=>$product->id,
                    "name"=>$product->name,
                    "quantity"=>1,
                    "price"=>$product->price,
                    "image"=>$product->image,
                ]
            ];
            session()->put('cart',$cart);
            return redirect()->back()->with('success','Product has been added to cart');
        }

       //increment already added item
        if(isset($cart[$id])){
            $cart[$id]['quantity']+=1;
            session()->put('cart',$cart);
            return redirect()->back()->with('success','Product has been added to cart');
        }

        //if item does not exist in cart, add to cart with a quantity of 1
        $cart[$id]= [
            "id"=>$product->id,
            "name"=>$product->name,
            "quantity"=>1,
            "price"=>$product->price,
            "image"=>$product->image,
        ];
        session()->put('cart',$cart);
        return redirect()->back()->with('success','Product has been added to cart');
    }

    public function update(Request $request){
     if($request->id and $request->quantity) {
         $cart= session()->get('cart');
         $cart[$request->id]['quantity']=$request->quantity;
         session()->put('cart',$cart);
     }
    }

    public function remove(Request $request){
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart',$cart);
            }
            session()->flash('success','Product has been removed from cart');
        }
    }

    public function checkout(){
        return view('shop.checkout');
    }

}
