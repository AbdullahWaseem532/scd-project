<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        // Cart items (static for demonstration)
        $cartItems = [
            [
                'id' => 1,
                'title' => 'Complete Web Development Bootcamp',
                'author' => 'John Anderson',
                'price' => 49.99,
                'rating' => 4.8,
                'reviews' => 1250,
                'duration' => '40 hours',
                'level' => 'Beginner',
                'image' => '/web-dev.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Data Science Master Class',
                'author' => 'Sarah Mitchell',
                'price' => 79.99,
                'rating' => 4.9,
                'reviews' => 980,
                'duration' => '55 hours',
                'level' => 'Intermediate',
                'image' => '/data-science.jpg'
            ],
            [
                'id' => 4,
                'title' => 'UI/UX Design Principles',
                'author' => 'Emily Roberts',
                'price' => 59.99,
                'rating' => 4.9,
                'reviews' => 1120,
                'duration' => '35 hours',
                'level' => 'Intermediate',
                'image' => '/ui-ux.jpg'
            ]
        ];

        // Recommended courses
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
            [
                'id' => 8,
                'title' => 'Social Media Marketing Strategy',
                'author' => 'Jessica Taylor',
                'category' => 'Marketing',
                'price' => 44.99,
                'reviews' => 567,
                'image' => '/smm.jpg'
            ],
            [
                'id' => 10,
                'title' => 'Graphic Design Masterclass',
                'author' => 'Sophie Anderson',
                'category' => 'Design',
                'price' => 52.99,
                'reviews' => 723,
                'image' => '/graphic.jpg'
            ]
        ];

        // Calculate pricing
        // array_sum: sum that array
        // array_column: creates new array
        $subtotal = array_sum(array_column($cartItems, 'price'));
        $discount = $subtotal * 0.15; // 15% discount
        $tax = ($subtotal - $discount) * 0.08; // 8% tax
        $total = $subtotal - $discount + $tax;

        return view('pages.cart', compact(
            'cartItems',
            'recommendedCourses',
            'subtotal',
            'discount',
            'tax',
            'total'
        ));
    }

    public function add(Request $request)
    {
        return response()->json([
            'success' => true,
            'message' => 'Item added to cart',
            'cartCount' => 4
        ]);
    }

    public function remove($id)
    {
        return response()->json([
            'success' => true,
            'message' => 'Item removed from cart',
            'cartCount' => 2
        ]);
    }

    public function clear()
    {
        return redirect()->route('cart')->with('success', 'Cart cleared successfully');
    }
}
