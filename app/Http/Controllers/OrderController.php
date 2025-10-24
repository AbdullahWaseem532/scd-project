<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function complete()
    {
        // Check if order data exists in session
        if (!session()->has('order_number')) {
            return redirect()->route('cart')->with('error', 'No order found');
        }

        // Get order data from session
        $orderNumber = session('order_number');
        $customerEmail = session('customer_email');
        $customerName = session('customer_name');
        $paymentMethod = session('payment_method');
        $billingInfo = session('billing_info');

        // Purchased courses (from order)
        $purchasedCourses = [
            [
                'id' => 1,
                'title' => 'Complete Web Development Bootcamp',
                'author' => 'John Anderson',
                'price' => 49.99,
                'duration' => '40 hours',
                'level' => 'Beginner',
                'image' => '/web-dev.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Data Science Master Class',
                'author' => 'Sarah Mitchell',
                'price' => 79.99,
                'duration' => '55 hours',
                'level' => 'Intermediate',
                'image' => '/data-science.jpg'
            ],
            [
                'id' => 4,
                'title' => 'UI/UX Design Principles',
                'author' => 'Emily Roberts',
                'price' => 59.99,
                'duration' => '35 hours',
                'level' => 'Intermediate',
                'image' => '/ui-ux.jpg'
            ]
        ];

        // Calculate pricing
        $subtotal = array_sum(array_column($purchasedCourses, 'price'));
        $discount = $subtotal * 0.15; // 15% discount
        $tax = ($subtotal - $discount) * 0.08; // 8% tax
        $total = $subtotal - $discount + $tax;

        // Additional order information
        $orderDate = now()->format('F j Y');
        $transactionId = 'TXN-' . strtoupper(substr(md5(time() . $orderNumber), 0, 12));

        // Clear order data from session (one-time view)
        // Commented out so users can refresh the page for demo purposes
        // session()->forget(['order_number', 'customer_email', 'customer_name', 'payment_method', 'billing_info']);

        return view('pages.order-complete', compact(
            'orderNumber',
            'customerEmail',
            'customerName',
            'paymentMethod',
            'billingInfo',
            'purchasedCourses',
            'subtotal',
            'discount',
            'tax',
            'total',
            'orderDate',
            'transactionId'
        ));
    }

    /**
     * Show order details
     * 
     * @param string $orderNumber
     * @return \Illuminate\View\View
     */
    public function show($orderNumber)
    {
        // In a real application, retrieve order from database
        // For demo purposes, redirect to cart if no session data
        if (!session()->has('order_number')) {
            return redirect()->route('cart')->with('error', 'Order not found');
        }

        return $this->complete();
    }

    /**
     * Download invoice
     * 
     * @param string $orderNumber
     * @return \Illuminate\Http\Response
     */
    public function downloadInvoice($orderNumber)
    {
        return response()->json([
            'success' => true,
            'message' => 'Invoice generation would happen here',
            'order_number' => $orderNumber
        ]);
    }

    
    public function resendConfirmation(Request $request)
    {
        // In a real application, resend confirmation email
        return response()->json([
            'success' => true,
            'message' => 'Confirmation email has been resent'
        ]);
    }
}
