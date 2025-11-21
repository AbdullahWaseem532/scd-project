<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        $total = 0;

        foreach ($cart as $item) {
            $total += $item['price'];
        }

        return view('cart.index', compact('cart', 'total'));
    }

    public function add($id, Request $request)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        // Check if product already in cart - increase quantity
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += 1;
        } else {
            // Add product to cart
            $cart[$id] = [
                "id" => $product->id,
                "title" => $product->title,
                "price" => $product->final_price,
                "image" => $product->image,
                "instructor" => $product->instructor,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product removed from cart!');
    }

    public function clear()
    {
        session()->forget('cart');
        return redirect()->back()->with('success', 'Cart cleared successfully!');
    }


    public function checkout()
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty!');
        }

        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'];
        }

        return view('checkout', compact('cart', 'total'));
    }

    public function processCheckout(Request $request)
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty!');
        }

        // Validate form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:500',
        ]);

        // Here you would typically:
        // 1. Process payment
        // 2. Create order in database
        // 3. Send confirmation email
        // 4. Clear cart

        // For now, just clear cart and show success
        session()->forget('cart');

        return redirect()->route('checkout.success')->with('success', 'Order placed successfully!');
    }

    public function checkoutSuccess()
    {
        return view('checkout-success');
    }
}