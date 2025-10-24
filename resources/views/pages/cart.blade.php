@extends('layouts.app')

@section('title', 'Shopping Cart - CourseHub')
@section('description', 'Review your selected courses and proceed to checkout.')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span class="separator">/</span>
                <span>Cart</span>
            </div>
            <h1 class="page-title">Shopping Cart</h1>
            <p class="page-description">Review your selected courses</p>
        </div>
    </section>

    <!-- Cart Section -->
    <section class="cart-section">
        <div class="container">
            <div class="cart-layout">
                <!-- Cart Items -->
                <div class="cart-items">
                    <div class="cart-header">
                        <h2>Your Cart ({{ count($cartItems) }} items)</h2>

                        @if(count($cartItems) > 0)
                            <form action="{{ route('cart.clear') }}" method="POST" id="clearCartForm">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-text clear-cart">
                                    Clear All
                                </button>
                            </form>
                        @endif
                    </div>

                    @if(count($cartItems) > 0)
                        @foreach($cartItems as $item)
                            <div class="cart-item" data-item-id="{{ $item['id'] }}">
                                <div class="cart-item-image">
                                    <img src="{{ asset('images' . $item['image']) }}" alt="">
                                </div>
                                <div class="cart-item-details">
                                    <h3 class="cart-item-title">{{ $item['title'] }}</h3>
                                    <p class="cart-item-author">By {{ $item['author'] }}</p>
                                </div>
                                <div class="cart-item-actions">
                                    <div class="cart-item-price">
                                        <span class="price-label">Price:</span>
                                        <span class="price-value">${{ number_format($item['price'], 2) }}</span>
                                    </div>

                                    <form action="{{ route('cart.remove', $item['id']) }}" method="POST" class="removeItemForm">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-text">
                                            <i class="fas fa-trash-alt"></i> Remove
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="empty-cart">
                            <i class="fas fa-shopping-cart"></i>
                            <h3>Your cart is empty</h3>
                            <p>Start adding courses to your cart and they will appear here.</p>
                            <a href="{{ route('products') }}" class="btn btn-primary">Browse Courses</a>
                        </div>
                    @endif
                </div>

                <!-- Cart Summary -->
                <div class="cart-summary">
                    <div class="summary-card">
                        <h3 class="summary-title">Order Summary</h3>

                        <div class="summary-row">
                            <span>Subtotal ({{ count($cartItems) }} items)</span>
                            <span class="subtotal-amount">${{ number_format($subtotal, 2) }}</span>
                        </div>

                        <div class="summary-row">
                            <span>Discount</span>
                            <span class="discount-amount">-${{ number_format($discount, 2) }}</span>
                        </div>

                        <div class="summary-row">
                            <span>Tax (Est.)</span>
                            <span class="tax-amount">${{ number_format($tax, 2) }}</span>
                        </div>

                        <div class="summary-divider"></div>

                        <div class="summary-row summary-total">
                            <span>Total</span>
                            <span class="total-amount">${{ number_format($total, 2) }}</span>
                        </div>

                        @if(count($cartItems) > 0)
                            <a href="{{ route('checkout') }}" class="btn btn-primary btn-lg btn-block checkout-btn">
                                Proceed to Checkout
                            </a>
                        @else
                            <button class="btn btn-primary btn-lg btn-block" disabled>
                                Cart is Empty
                            </button>
                        @endif

                        <div class="coupon-section">
                            <p class="coupon-label">Have a coupon code?</p>
                            <div class="coupon-form">
                                <input type="text" placeholder="Enter code" class="coupon-input">
                                <button class="btn btn-secondary apply-coupon">Apply</button>
                            </div>
                        </div>
                    </div>

                    <!-- Promo Section -->
                    <div class="promo-card">
                        <div class="promo-icon">
                            <i class="fas fa-gift"></i>
                        </div>
                        <h4>Special Offer!</h4>
                        <p>Get 20% off when you purchase 3 or more courses</p>
                    </div>

                    <!-- Trust Badges -->
                    <div class="trust-badges">
                        <div class="trust-badge">
                            <i class="fas fa-lock"></i>
                            <span>Secure Payment</span>
                        </div>
                        <div class="trust-badge">
                            <i class="fas fa-undo"></i>
                            <span>30-Day Refund</span>
                        </div>
                        <div class="trust-badge">
                            <i class="fas fa-infinity"></i>
                            <span>Lifetime Access</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Continue Shopping -->
            @if(count($cartItems) > 0)
                <div class="continue-shopping">
                    <a href="{{ route('products') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Continue Shopping
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- Recommended Courses -->
    <section class="recommended-section">
        <div class="container">
            <h2 class="section-title">You May Also Like</h2>
            <div class="products-grid">
                @foreach($recommendedCourses as $course)
                    <div class="product-card">
                        <a href="{{ route('products.show', $course['id']) }}">
                            <div class="product-image">
                                <span class="product-badge">Popular</span>
                                <img src="{{ asset('images' . $course['image']) }}" alt="">
                            </div>
                        </a>

                        <div class="product-info">
                            <span class="product-category">{{ $course['category'] }}</span>
                            <h3 class="product-title">{{ $course['title'] }}</h3>
                            <div class="product-author">
                                <i class="fas fa-user"></i>
                                <span>{{ $course['author'] }}</span>
                            </div>
                            <div class="product-rating">
                                <div class="stars">
                                    @for($i = 0; $i < 5; $i++)
                                        <i class="fas fa-star"></i>
                                    @endfor
                                </div>
                                <span class="rating-count">({{ $course['reviews'] }})</span>
                            </div>
                            <div class="product-footer">
                                <span class="product-price">${{ number_format($course['price'], 2) }}</span>
                                <button class="btn btn-primary btn-sm add-to-cart" data-id="{{ $course['id'] }}"
                                    data-title="{{ $course['title'] }}" data-price="{{ $course['price'] }}"
                                    data-author="{{ $course['author'] }}" data-image="{{ $course['image'] }}">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <style>
        /* Cart Page Specific Styles */
        .cart-section {
            padding: 1rem 0;
            background-color: #f9fafb;
        }

        .cart-layout {
            display: grid;
            grid-template-columns: 1fr 400px;
            gap: 3rem;
            align-items: start;
        }

        /* Cart Items */
        .cart-items {
            background-color: #ffffff;
            border-radius: 0.75rem;
            padding: 3rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 3rem;
            padding-bottom: 1.5rem;
            border-bottom: 2px solid #e5e7eb;
        }

        .cart-header h2 {
            margin: 0;
            font-size: 1.5rem;
        }

        .clear-cart {
            color: #ef4444;
        }

        .clear-cart:hover {
            text-decoration: underline;
        }

        /* Cart Item */
        .cart-item {
            display: grid;
            grid-template-columns: 120px 1fr auto;
            gap: 1.5rem;
            padding: 2rem;
            border: 1px solid #e5e7eb;
            border-radius: 0.75rem;
            margin-bottom: 1.5rem;
            transition: box-shadow 150ms ease-in-out;
        }

        .cart-item:hover {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .cart-item-image {
            width: 120px;
            height: 80px;
        }

        .cart-item-image img {
            width: 100%;
        }

        .cart-image-placeholder {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #e5e7eb 0%, #d1d5db 100%);
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #9ca3af;
            font-size: 2rem;
        }

        .cart-item-details {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .cart-item-title {
            font-size: 1.125rem;
            margin: 0;
            color: #111827;
        }

        .cart-item-author {
            color: #4b5563;
            font-size: 0.875rem;
            margin: 0;
        }

        .cart-item-meta {
            display: flex;
            gap: 1.5rem;
            margin-top: 0.5rem;
        }

        .cart-item-rating {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .rating-text {
            font-size: 0.875rem;
            color: #4b5563;
        }

        .cart-item-actions {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 1rem;
        }

        .cart-item-price {
            text-align: right;
        }

        .price-label {
            display: block;
            font-size: 0.875rem;
            color: #4b5563;
            margin-bottom: 4px;
        }

        .price-value {
            font-size: 1.5rem;
            font-weight: 700;
            color: #111827;
        }

        .remove-item {
            color: #ef4444;
        }

        .save-later {
            color: #2563eb;
        }

        /* Empty Cart */
        .empty-cart {
            text-align: center;
            padding: 4rem;
        }

        .empty-cart i {
            font-size: 5rem;
            color: #d1d5db;
            margin-bottom: 1.5rem;
        }

        .empty-cart h3 {
            color: #374151;
            margin-bottom: 1rem;
        }

        .empty-cart p {
            color: #4b5563;
            margin-bottom: 2rem;
        }

        /* Cart Summary */
        .cart-summary {
            position: sticky;
            top: 100px;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .summary-card {
            background-color: #ffffff;
            border-radius: 0.75rem;
            padding: 3rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .summary-title {
            font-size: 1.25rem;
            margin-bottom: 2rem;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            color: #374151;
        }

        .discount-amount {
            color: #10b981;
            font-weight: 600;
        }

        .summary-divider {
            height: 1px;
            background-color: #e5e7eb;
            margin: 1.5rem 0;
        }

        .summary-total {
            font-size: 1.25rem;
            font-weight: 700;
            color: #111827;
            margin-bottom: 2rem;
        }

        .checkout-btn {
            margin-bottom: 1.5rem;
        }

        .coupon-section {
            padding-top: 1.5rem;
            border-top: 1px solid #e5e7eb;
        }

        .coupon-label {
            font-size: 0.875rem;
            color: #4b5563;
            margin-bottom: 1rem;
        }

        .coupon-form {
            display: flex;
            gap: 0.5rem;
        }

        .coupon-input {
            flex: 1;
            padding: 0.5rem 1rem;
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            font-size: 0.875rem;
        }

        .apply-coupon {
            padding: 0.5rem 1.5rem;
        }

        /* Promo Card */
        .promo-card {
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
            color: #ffffff;
            padding: 2rem;
            border-radius: 0.75rem;
            text-align: center;
        }

        .promo-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .promo-card h4 {
            color: #ffffff;
            margin-bottom: 0.5rem;
        }

        .promo-card p {
            color: #ffffff;
            opacity: 0.95;
            margin: 0;
            font-size: 0.875rem;
        }

        /* Trust Badges */
        .trust-badges {
            background-color: #f9fafb;
            padding: 1.5rem;
            border-radius: 0.75rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .trust-badge {
            display: flex;
            align-items: center;
            gap: 1rem;
            color: #374151;
            font-size: 0.875rem;
        }

        .trust-badge i {
            color: #10b981;
            font-size: 1.125rem;
        }

        /* Continue Shopping */
        .continue-shopping {
            margin-top: 3rem;
            text-align: center;
        }

        /* Recommended Section */
        .recommended-section {
            padding: 4rem 0;
            background-color: #ffffff;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .cart-layout {
                grid-template-columns: 1fr;
            }

            .cart-summary {
                position: static;
            }
        }

        @media (max-width: 768px) {
            .cart-item {
                grid-template-columns: 1fr;
            }

            .cart-item-actions {
                align-items: flex-start;
                flex-direction: row;
                justify-content: space-between;
            }

            .cart-item-image {
                display: none;
            }
        }
    </style>
@endsection


@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // AJAX remove single item
            document.querySelectorAll('.removeItemForm').forEach(form => {
                form.addEventListener('submit', function (e) {
                    e.preventDefault();
                    if (!confirm('Remove this item from cart?')) return;

                    fetch(this.action, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    })
                        .then(res => res.json())
                        .then(data => {
                            if (data.success) {
                                location.reload();
                            }
                        });
                });
            });

            // Clear all
            const clearForm = document.getElementById('clearCartForm');
            if (clearForm) {
                clearForm.addEventListener('submit', function (e) {
                    if (!confirm('Are you sure you want to clear all items?')) {
                        e.preventDefault();
                    }
                });
            }
        });
    </script>


    {{-- Add To Cart --}}
    <script>
        document.querySelectorAll('.add-to-cart').forEach(btn => {
            btn.addEventListener('click', function () {
                fetch('{{ route('cart.add') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        id: this.dataset.id,
                        title: this.dataset.title,
                        price: this.dataset.price,
                        author: this.dataset.author,
                        image: this.dataset.image,
                    })
                })
                    .then(res => res.json())
                    .then(data => {
                        alert(data.message)
                        window.location.href = '{{ route('cart') }}';
                    });
            });
        });
    </script>
@endsection