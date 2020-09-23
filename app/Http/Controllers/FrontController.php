<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\Cart;
use App\Services\CartService;
use App\Services\PayseraService;

class FrontController extends Controller
{
    public function home(CartService $cart)
    {
        $products = Product::all();
        return view('front.home', array_merge(compact('products'),$cart->getCart()));//perduodam i bleidus
    }

    public function add(CartService $cart){
        
        $cart->add();
        return redirect()->back();

    }

    public function addJs(CartService $cart){
        $cart->add();
        $miniCartHtml = view('front.mini-cart', $cart->getCart())->render();
        
        return response()->json([
            'html' => $miniCartHtml,
            'cart' => 'OK',
        ]);
    }

    public function buy(CartService $cart, Request $request, PayseraService $paysera)
    {
        $buyCart = $cart->getCart();
        $order = new Order;
        $order= Order::makeOrder($request, $buyCart['total']);
        $cart->empty();

        Cart::makeCart($buyCart['cartProducts'],$order);
        return $paysera->buy($order);
    
    }

    public function payseraAccept(PayseraService $paysera){
        $paysera->allGood();
        return redirect()->route('all.good');
    }
    public function allGood(CartService $cart){
        return view('front.all-good',$cart->getCart());
    }

    public function remove(CartService $cart){
       
        $cart->remove();
        return redirect()->back();
    } 
    public function login_register(Request $request,CartService $cart){
        $products = Product::all();
        return view('front.login_register',array_merge(compact('products'),$cart->getCart()));
    }
}

