<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\Cart;
use App\Services\CartService;
use App\Libs\WebToPay;
use App\Libs\WebToPayException;

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

    public function buy(CartService $cart, Request $request)
    {
        $buyCart = $cart->getCart();
        $order = new Order;
        $order->customer_name = $request->name;
        $order->customer_email = $request->email;
        $order->customer_phone = $request->phone;
        $order->price = $buyCart['total'];
        $order->status = 1;
        $order->save();
        foreach($buyCart['cartProducts'] as $product){
            $orderCart = new Cart;
            $orderCart->product_id = $product->id;
            $orderCart->order_id = $order->id;
            $orderCart->save();
        }
        try {
            return redirect(WebToPay::redirectToPayment(array(
                'projectid'     => 181631,
                'sign_password' => '294c7c2361d650639e48f454d8d106d0',
                'orderid'       => $order->id,
                'amount'        => (int) $order->price * 100,
                'currency'      => 'EUR',
                'country'       => 'LT',
                'accepturl'     => route('paysera.accept'),
                'cancelurl'     => route('paysera.cancel'),
                'callbackurl'   => route('paysera.callback'),
                'test'          => 1,
            )));
        } catch (WebToPayException $e) {
            // handle exception
        } 
         
    }

    public function remove(CartService $cart){
       
        $cart->remove();

        return redirect()->back();

    }

   
}

