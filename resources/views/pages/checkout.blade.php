@extends('layouts.app')

@section('title', 'Checkout - CourseHub')
@section('description', 'Complete your purchase securely.')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span class="separator">/</span>
                <a href="{{ route('cart') }}">Cart</a>
                <span class="separator">/</span>
                <span>Checkout</span>
            </div>
            <h1 class="page-title">Secure Checkout</h1>
            <p class="page-description">Complete your purchase in a few simple steps</p>
        </div>
    </section>

    <!-- Checkout Section -->
    <section class="checkout-section">
        <div class="container">
            <!-- Progress Steps -->
            <div class="checkout-progress">
                <div class="progress-step active">
                    <div class="step-number">1</div>
                    <div class="step-label">Billing Info</div>
                </div>
                <div class="progress-line"></div>
                <div class="progress-step">
                    <div class="step-number">2</div>
                    <div class="step-label">Payment</div>
                </div>
                <div class="progress-line"></div>
                <div class="progress-step">
                    <div class="step-number">3</div>
                    <div class="step-label">Confirmation</div>
                </div>
            </div>

            <form action="{{ route('checkout.process') }}" method="POST" class="checkout-form" id="checkoutForm">
                @csrf
                <div class="checkout-layout">
                    <!-- Left Column - Forms -->
                    <div class="checkout-main">
                        <!-- Billing Information -->
                        <div class="checkout-section-card">
                            <h2 class="section-card-title">
                                <i class="fas fa-user"></i> Billing Information
                            </h2>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="firstName">First Name *</label>
                                    <input type="text" id="firstName" name="first_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Last Name *</label>
                                    <input type="text" id="lastName" name="last_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                                <small class="form-hint">Order confirmation will be sent to this email</small>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number *</label>
                                <input type="tel" id="phone" name="phone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Street Address *</label>
                                <input type="text" id="address" name="address" class="form-control" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="city">City *</label>
                                    <input type="text" id="city" name="city" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="state">State/Province *</label>
                                    <input type="text" id="state" name="state" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="zip">ZIP/Postal Code *</label>
                                    <input type="text" id="zip" name="zip" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="country">Country *</label>
                                    <select id="country" name="country" class="form-control" required>
                                        <option value="">Select Country</option>
                                        <option value="US">United States</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="CA">Canada</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="AU">Australia</option>
                                        <option value="DE">Germany</option>
                                        <option value="FR">France</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Payment Method -->
                        <div class="checkout-section-card">
                            <h2 class="section-card-title">
                                <i class="fas fa-credit-card"></i> Payment Method
                            </h2>

                            <div class="payment-methods">
                                <!-- Credit Card -->
                                <label class="payment-method-option">
                                    <input type="radio" name="payment_method" value="credit_card" checked>
                                    <div class="payment-method-content">
                                        <div class="payment-method-header">
                                            <div class="payment-icons">
                                                <i class="fab fa-cc-visa"></i>
                                                <i class="fab fa-cc-mastercard"></i>
                                                <i class="fab fa-cc-amex"></i>
                                            </div>
                                            <span class="payment-method-name">Credit/Debit Card</span>
                                        </div>
                                    </div>
                                </label>

                                <!-- PayPal -->
                                <label class="payment-method-option">
                                    <input type="radio" name="payment_method" value="paypal">
                                    <div class="payment-method-content">
                                        <div class="payment-method-header">
                                            <div class="payment-icons">
                                                <i class="fab fa-cc-paypal"></i>
                                            </div>
                                            <span class="payment-method-name">PayPal</span>
                                        </div>
                                    </div>
                                </label>

                                <!-- Google Pay -->
                                <label class="payment-method-option">
                                    <input type="radio" name="payment_method" value="google_pay">
                                    <div class="payment-method-content">
                                        <div class="payment-method-header">
                                            <div class="payment-icons">
                                                <i class="fab fa-google-pay"></i>
                                            </div>
                                            <span class="payment-method-name">Google Pay</span>
                                        </div>
                                    </div>
                                </label>

                                <!-- Apple Pay -->
                                <label class="payment-method-option">
                                    <input type="radio" name="payment_method" value="apple_pay">
                                    <div class="payment-method-content">
                                        <div class="payment-method-header">
                                            <div class="payment-icons">
                                                <i class="fab fa-apple-pay"></i>
                                            </div>
                                            <span class="payment-method-name">Apple Pay</span>
                                        </div>
                                    </div>
                                </label>

                                <!-- Bank Transfer -->
                                <label class="payment-method-option">
                                    <input type="radio" name="payment_method" value="bank_transfer">
                                    <div class="payment-method-content">
                                        <div class="payment-method-header">
                                            <div class="payment-icons">
                                                <i class="fas fa-university"></i>
                                            </div>
                                            <span class="payment-method-name">Bank Transfer</span>
                                        </div>
                                    </div>
                                </label>
                            </div>

                            <!-- Card Details Form (shown when credit card selected) -->
                            <div id="cardDetailsForm" class="card-details-form">
                                <div class="form-group">
                                    <label for="cardNumber">Card Number *</label>
                                    <input type="text" id="cardNumber" name="card_number" class="form-control"
                                        placeholder="1234 5678 9012 3456" maxlength="19">
                                </div>
                                <div class="form-group">
                                    <label for="cardName">Cardholder Name *</label>
                                    <input type="text" id="cardName" name="card_name" class="form-control"
                                        placeholder="John Doe">
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="cardExpiry">Expiry Date *</label>
                                        <input type="text" id="cardExpiry" name="card_expiry" class="form-control"
                                            placeholder="MM/YY" maxlength="5">
                                    </div>
                                    <div class="form-group">
                                        <label for="cardCvv">CVV *</label>
                                        <input type="text" id="cardCvv" name="card_cvv" class="form-control"
                                            placeholder="123" maxlength="4">
                                    </div>
                                </div>
                                <div class="security-note">
                                    <i class="fas fa-lock"></i>
                                    <span>Your payment information is encrypted and secure</span>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Options -->
                        <div class="checkout-section-card">
                            <h2 class="section-card-title">
                                <i class="fas fa-cog"></i> Additional Options
                            </h2>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="save_info">
                                    <span>Save billing information for future purchases</span>
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="newsletter">
                                    <span>Subscribe to our newsletter for updates and offers</span>
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="terms" required>
                                    <span>I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                                        *</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Order Summary -->
                    <div class="checkout-sidebar">
                        <div class="order-summary-card">
                            <h3 class="order-summary-title">Order Summary</h3>

                            <!-- Order Items -->
                            <div class="order-items">
                                @foreach($orderItems as $item)
                                    <div class="order-item">
                                        {{-- <div class="order-item-image">
                                            <i class="fas fa-book"></i>
                                        </div> --}}
                                        <img style="width: 100%;" src="{{ asset('images' . $item['image']) }}" alt="">

                                        <div class="order-item-details">
                                            <h4 class="order-item-title">{{ $item['title'] }}</h4>
                                            <p class="order-item-author">{{ $item['author'] }}</p>
                                        </div>
                                        <div class="order-item-price">
                                            ${{ number_format($item['price'], 2) }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Price Breakdown -->
                            <div class="price-breakdown">
                                <div class="price-row">
                                    <span>Subtotal</span>
                                    <span>${{ number_format($subtotal, 2) }}</span>
                                </div>
                                <div class="price-row">
                                    <span>Discount</span>
                                    <span class="discount-text">-${{ number_format($discount, 2) }}</span>
                                </div>
                                <div class="price-row">
                                    <span>Tax</span>
                                    <span>${{ number_format($tax, 2) }}</span>
                                </div>
                                <div class="price-divider"></div>
                                <div class="price-row price-total">
                                    <span>Total</span>
                                    <span>${{ number_format($total, 2) }}</span>
                                </div>
                            </div>

                            <!-- Place Order Button -->
                            <button type="submit" class="btn btn-primary btn-lg btn-block place-order-btn">
                                <i class="fas fa-lock"></i> Place Order
                            </button>

                            <!-- Security Badges -->
                            <div class="security-badges">
                                <div class="security-badge">
                                    <i class="fas fa-shield-alt"></i>
                                    <span>SSL Secure</span>
                                </div>
                                <div class="security-badge">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Verified</span>
                                </div>
                                <div class="security-badge">
                                    <i class="fas fa-lock"></i>
                                    <span>Encrypted</span>
                                </div>
                            </div>

                            <!-- Money Back Guarantee -->
                            <div class="guarantee-badge">
                                <i class="fas fa-undo"></i>
                                <div>
                                    <strong>30-Day Money-Back Guarantee</strong>
                                    <p>Not satisfied? Get a full refund within 30 days</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('styles')
    <style>
        /* Checkout Page Styles */
        .checkout-section {
            padding: var(--spacing-2xl) 0;
            background-color: var(--gray-50);
        }

        /* Progress Steps */
        .checkout-progress {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: var(--spacing-2xl);
            padding: var(--spacing-xl);
            background-color: var(--white);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
        }

        .progress-step {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: var(--spacing-xs);
        }

        .step-number {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--gray-300);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.25rem;
            transition: all var(--transition-base);
        }

        .progress-step.active .step-number {
            background-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.2);
        }

        .step-label {
            font-size: 0.875rem;
            color: var(--gray-600);
            font-weight: 500;
        }

        .progress-step.active .step-label {
            color: var(--primary-color);
            font-weight: 600;
        }

        .progress-line {
            width: 100px;
            height: 2px;
            background-color: var(--gray-300);
            margin: 0 var(--spacing-sm);
        }

        /* Checkout Layout */
        .checkout-layout {
            display: grid;
            grid-template-columns: 1fr 400px;
            gap: var(--spacing-xl);
            align-items: start;
        }

        /* Section Cards */
        .checkout-section-card {
            background-color: var(--white);
            border-radius: var(--radius-lg);
            padding: var(--spacing-xl);
            margin-bottom: var(--spacing-md);
            box-shadow: var(--shadow-md);
        }

        .section-card-title {
            display: flex;
            align-items: center;
            gap: var(--spacing-sm);
            margin-bottom: var(--spacing-lg);
            color: var(--gray-900);
            font-size: 1.25rem;
        }

        .section-card-title i {
            color: var(--primary-color);
        }

        /* Payment Methods */
        .payment-methods {
            display: flex;
            flex-direction: column;
            gap: var(--spacing-sm);
            margin-bottom: var(--spacing-lg);
        }

        .payment-method-option {
            border: 2px solid var(--gray-300);
            border-radius: var(--radius-md);
            padding: var(--spacing-md);
            cursor: pointer;
            transition: all var(--transition-fast);
            display: flex;
            align-items: center;
            gap: var(--spacing-md);
        }

        .payment-method-option:hover {
            border-color: var(--primary-color);
            background-color: var(--gray-50);
        }

        .payment-method-option input[type="radio"] {
            width: 20px;
            height: 20px;
            cursor: pointer;
        }

        .payment-method-option input[type="radio"]:checked~.payment-method-content {
            color: var(--primary-color);
        }

        .payment-method-option:has(input:checked) {
            border-color: var(--primary-color);
            background-color: rgba(37, 99, 235, 0.05);
        }

        .payment-method-content {
            flex: 1;
        }

        .payment-method-header {
            display: flex;
            align-items: center;
            gap: var(--spacing-md);
        }

        .payment-icons {
            display: flex;
            gap: var(--spacing-xs);
            font-size: 1.5rem;
            color: var(--gray-400);
        }

        .payment-method-name {
            font-weight: 600;
            font-size: 0.6em;
            color: var(--gray-900);
        }

        /* Card Details Form */
        .card-details-form {
            margin-top: var(--spacing-lg);
            padding-top: var(--spacing-lg);
            border-top: 2px solid var(--gray-200);
        }

        .security-note {
            display: flex;
            align-items: center;
            gap: var(--spacing-xs);
            color: var(--success);
            font-size: 0.875rem;
            margin-top: var(--spacing-md);
            padding: var(--spacing-sm);
            background-color: rgba(16, 185, 129, 0.1);
            border-radius: var(--radius-md);
        }

        /* Checkbox Group */
        .checkbox-group {
            display: flex;
            flex-direction: column;
            gap: var(--spacing-md);
        }

        .checkbox-label a {
            color: var(--primary-color);
            text-decoration: underline;
        }

        /* Order Summary */
        .checkout-sidebar {
            position: sticky;
            top: 100px;
        }

        .order-summary-card {
            background-color: var(--white);
            border-radius: var(--radius-lg);
            padding: var(--spacing-xl);
            box-shadow: var(--shadow-md);
        }

        .order-summary-title {
            font-size: 1.25rem;
            margin-bottom: var(--spacing-lg);
        }

        /* Order Items */
        .order-items {
            margin-bottom: var(--spacing-lg);
        }

        .order-item {
            display: grid;
            grid-template-columns: 50px 1fr auto;
            gap: var(--spacing-sm);
            padding: var(--spacing-sm) 0;
            border-bottom: 1px solid var(--gray-200);
        }

        .order-item:last-child {
            border-bottom: none;
        }

        .order-item-image {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--gray-200) 0%, var(--gray-300) 100%);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gray-400);
        }

        .order-item-title {
            font-size: 0.875rem;
            margin: 0;
            color: var(--gray-900);
        }

        .order-item-author {
            font-size: 0.75rem;
            color: var(--gray-600);
            margin: 0;
        }

        .order-item-price {
            font-weight: 600;
            color: var(--gray-900);
        }

        /* Price Breakdown */
        .price-breakdown {
            padding: var(--spacing-md) 0;
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: var(--spacing-sm);
            color: var(--gray-700);
        }

        .discount-text {
            color: var(--success);
            font-weight: 600;
        }

        .price-divider {
            height: 1px;
            background-color: var(--gray-200);
            margin: var(--spacing-md) 0;
        }

        .price-total {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--gray-900);
            margin-bottom: var(--spacing-lg);
        }

        .place-order-btn {
            margin-bottom: var(--spacing-md);
        }

        /* Security Badges */
        .security-badges {
            display: flex;
            justify-content: space-around;
            padding: var(--spacing-md);
            background-color: var(--gray-50);
            border-radius: var(--radius-md);
            margin-bottom: var(--spacing-md);
        }

        .security-badge {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: var(--spacing-xs);
            color: var(--success);
            font-size: 0.75rem;
        }

        .security-badge i {
            font-size: 1.5rem;
        }

        /* Guarantee Badge */
        .guarantee-badge {
            display: flex;
            gap: var(--spacing-sm);
            padding: var(--spacing-md);
            background-color: rgba(16, 185, 129, 0.1);
            border-radius: var(--radius-md);
            border: 1px solid var(--success);
        }

        .guarantee-badge i {
            font-size: 2rem;
            color: var(--success);
        }

        .guarantee-badge strong {
            display: block;
            color: var(--gray-900);
            margin-bottom: 4px;
        }

        .guarantee-badge p {
            margin: 0;
            font-size: 0.875rem;
            color: var(--gray-600);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .checkout-layout {
                grid-template-columns: 1fr;
            }

            .checkout-sidebar {
                position: static;
            }

            .progress-line {
                width: 60px;
            }
        }

        @media (max-width: 768px) {
            .checkout-progress {
                padding: var(--spacing-md);
            }

            .step-number {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }

            .step-label {
                font-size: 0.75rem;
            }

            .progress-line {
                width: 40px;
            }

            .checkout-section-card {
                max-width: 100%;
            }
            .payment-method-header{
                flex-direction: column
            }
        }
    </style>
@endsection

@section('scripts')
    <script>
        // Checkout page JavaScript
        document.addEventListener('DOMContentLoaded', function () {
            // Payment method toggle
            const paymentMethods = document.querySelectorAll('input[name="payment_method"]');
            const cardDetailsForm = document.getElementById('cardDetailsForm');

            paymentMethods.forEach(method => {
                method.addEventListener('change', function () {
                    if (this.value === 'credit_card') {
                        cardDetailsForm.style.display = 'block';
                    } else {
                        cardDetailsForm.style.display = 'none';
                    }
                });
            });

            // Card number formatting
            const cardNumberInput = document.getElementById('cardNumber');
            if (cardNumberInput) {
                cardNumberInput.addEventListener('input', function (e) {
                    let value = e.target.value.replace(/\s/g, '');
                    let formattedValue = value.match(/.{1,4}/g)?.join(' ') || value;
                    e.target.value = formattedValue;
                });
            }

            // Expiry date formatting
            const cardExpiryInput = document.getElementById('cardExpiry');
            if (cardExpiryInput) {
                cardExpiryInput.addEventListener('input', function (e) {
                    let value = e.target.value.replace(/\D/g, '');
                    if (value.length >= 2) {
                        value = value.slice(0, 2) + '/' + value.slice(2, 4);
                    }
                    e.target.value = value;
                });
            }

            // Form submission
            const checkoutForm = document.getElementById('checkoutForm');
            if (checkoutForm) {
                checkoutForm.addEventListener('submit', function (e) {
                    e.preventDefault();

                    // Show loading state
                    const submitBtn = this.querySelector('button[type="submit"]');
                    const originalText = submitBtn.innerHTML;
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
                    submitBtn.disabled = true;

                    // Simulate payment processing
                    setTimeout(() => {
                        // In a real application, this would submit to the server
                        this.submit();
                    }, 2000);
                });
            }
        });
    </script>
@endsection