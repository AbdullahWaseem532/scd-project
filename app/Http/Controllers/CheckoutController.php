<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        // Order items (from cart)
        $orderItems = [
            [
                'id' => 1,
                'title' => 'Complete Web Development Bootcamp',
                'author' => 'John Anderson',
                'price' => 49.99,
                'image' => '/web-dev.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Data Science Master Class',
                'author' => 'Sarah Mitchell',
                'price' => 79.99,
                'image' => '/data-science.jpg'
            ],
            [
                'id' => 4,
                'title' => 'UI/UX Design Principles',
                'author' => 'Emily Roberts',
                'price' => 59.99,
                'image' => '/ui-ux.jpg'
            ]
        ];

        // Calculate pricing
        $subtotal = array_sum(array_column($orderItems, 'price'));
        $discount = $subtotal * 0.15; // 15% discount
        $tax = ($subtotal - $discount) * 0.08; // 8% tax
        $total = $subtotal - $discount + $tax;

        return view('pages.checkout', compact(
            'orderItems',
            'subtotal',
            'discount',
            'tax',
            'total'
        ));
    }

   
    public function process(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip' => 'required|string',
            'country' => 'required|string',
            'payment_method' => 'required|string',
            'terms' => 'accepted'
        ]);

        // Generate dummy order number
        $orderNumber = 'CH-' . strtoupper(substr(md5(time()), 0, 8));

        // Store order data in session for confirmation page
        session([
            'order_number' => $orderNumber,
            'customer_email' => $validated['email'],
            'customer_name' => $validated['first_name'] . ' ' . $validated['last_name'],
            'payment_method' => $this->formatPaymentMethod($validated['payment_method']),
            'billing_info' => [
                'name' => $validated['first_name'] . ' ' . $validated['last_name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'address' => $validated['address'],
                'city' => $validated['city'],
                'state' => $validated['state'],
                'zip' => $validated['zip'],
                'country' => $validated['country']
            ]
        ]);

        // Redirect to order confirmation page
        return redirect()->route('order.complete');
    }

    private function formatPaymentMethod($method)
    {
        $methods = [
            'credit_card' => 'Credit/Debit Card',
            'paypal' => 'PayPal',
            'google_pay' => 'Google Pay',
            'apple_pay' => 'Apple Pay',
            'bank_transfer' => 'Bank Transfer'
        ];

        return $methods[$method] ?? 'Credit Card';
    }
}
