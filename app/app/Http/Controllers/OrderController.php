<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function complete()
    {
        // ✅ Ensure order exists
        if (!session()->has('order_number')) {
            return redirect()->route('cart')->with('error', 'No order found');
        }

        // ✅ Get order + customer data
        $orderNumber = session('order_number');
        $customerEmail = session('customer_email');
        $customerName = session('customer_name');
        $paymentMethod = session('payment_method');
        $billingInfo = session('billing_info');

        // ✅ Purchased courses from cart session
        $purchasedCourses = session('cart', []);

        if (empty($purchasedCourses)) {
            return redirect()->route('cart')->with('error', 'Your cart is empty.');
        }

        // ✅ Calculate totals
        $subtotal = collect($purchasedCourses)->sum('price');
        $discount = $subtotal * 0.15; // 15% discount
        $tax = ($subtotal - $discount) * 0.08; // 8% tax
        $total = $subtotal - $discount + $tax;

        // ✅ Order details
        $orderDate = now()->format('F j, Y');
        $transactionId = 'TXN-' . strtoupper(substr(md5(time() . $orderNumber), 0, 12));

        session()->forget('cart');

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
}
