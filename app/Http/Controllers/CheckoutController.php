<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartItems = session()->get('cart', []);

        if (empty($cartItems)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty!');
        }

        $total = 0;
        foreach ($cartItems as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return view('checkout', compact('cartItems', 'total'));
    }

    public function process(Request $request)
    {
        // Static checkout - just clear cart and show success
        session()->forget('cart');

        return redirect()->route('checkout.success');
    }

    public function success()
    {
        return view('checkout.success');
    }
}
