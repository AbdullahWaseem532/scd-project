<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cartItems = session('cart', []);

        $subtotal = collect($cartItems)->sum('price');
        $discount = $subtotal * 0.15; // 15% discount
        $tax = ($subtotal - $discount) * 0.08; // 8% tax
        $total = $subtotal - $discount + $tax;

        // Optional demo recommended items
        $recommendedCourses = [
            [
                'id' => 5,
                'title' => 'Python for Beginners',
                'author' => 'David Kumar',
                'category' => 'Programming',
                'price' => 34.99,
                'reviews' => 890,
                'image' => '/python.jpg'
            ],
            [
                'id' => 6,
                'title' => 'Advanced JavaScript Techniques',
                'author' => 'Lisa Wang',
                'category' => 'Web Development',
                'price' => 54.99,
                'reviews' => 654,
                'image' => '/javascript.jpg'
            ],
        ];

        return view('pages.cart', compact('cartItems', 'subtotal', 'discount', 'tax', 'total', 'recommendedCourses'));
    }

    // Add to cart
    public function add(Request $request)
    {
        $cart = session('cart', []);

        $id = $request->input('id');
        $title = $request->input('title');
        $price = $request->input('price');
        $author = $request->input('author', 'Unknown');
        $image = $request->input('image', '/default.jpg');

        // Prevent duplicates
        if (!isset($cart[$id])) {
            $cart[$id] = [
                'id' => $id,
                'title' => $title,
                'price' => (float) $price,
                'author' => $author,
                'image' => $image,
            ];
        }

        session(['cart' => $cart]);

        return response()->json([
            'success' => true,
            'message' => 'Item added to cart',
            'cartCount' => count($cart),
        ]);
    }

    // Remove a specific item
    public function remove($id)
    {
        $cart = session('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session(['cart' => $cart]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Item removed from cart',
            'cartCount' => count($cart),
        ]);
    }

    // Clear cart
    public function clear()
    {
        session()->forget('cart');
        return redirect()->route('cart')->with('success', 'Cart cleared successfully');
    }
}
