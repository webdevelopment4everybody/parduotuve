<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;

class FrontController extends Controller
{
    public function home()
    {
        
        // print_r(Session::get('cart'));

        $cart = Session::get('cart');
        $count = 0;
        $total = 0;
        $cartProducts = [];
        if(!empty($cart)){
        foreach ($cart as $key => $value) {
            $count += $value['count'];
            $total += $value['price'];
            $cartProducts[$key] = Product::where('id', $value['id'])->first();
        }}

        $products = Product::all();
        return view('front.home', compact('products', 'count', 'total','cartProducts','cart'));//perduodam i bleidus
        // return view('front.home',['products'=>$products]);
    }

    public function add(Request $request)
    {
        $count = (int) $request->count;
        $product = Product::where('id', $request->product_id)->first();
        $cart = Session::get('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id] = 
            [
                'count' => $cart[$product->id]['count'] + $count,
                'id' => $product->id,
                'price'=> $cart[$product->id]['price'] + $product->price * $count
            ];
        }
        else {
            $cart[$product->id] = ['count' => $count, 'id' => $product->id, 'price' => $product->price * $count];
        }
        if($cart[$product->id]['count']>0){
            Session::put('cart', $cart);
            return redirect()->back();

        }else{
            return redirect()->back();
        }
    }

    public function remove(Request $request)
    {
        $cart = Session::get('cart', []);

        if (isset($cart[$request->product_id])) {
            unset($cart[$request->product_id]);
        }

        Session::put('cart', $cart);
        return redirect()->back();

    }
}
