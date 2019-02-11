<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function checkout() {
        return view('front.checkout');
    }

    public function checkoutForm(Request $request) {

        $cart = Session::get('cart');

//        $order = new Order();
//
//        $order->save();

        Session::forget('cart');

        return redirect()->route('main.page');
    }
}
