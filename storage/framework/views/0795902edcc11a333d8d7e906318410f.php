

<?php $__env->startSection('title', 'Checkout - CourseHub'); ?>
<?php $__env->startSection('description', 'Complete your purchase securely.'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="breadcrumb">
                <a href="<?php echo e(route('home')); ?>">Home</a>
                <span class="separator">/</span>
                <a href="<?php echo e(route('cart')); ?>">Cart</a>
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

            <form action="<?php echo e(route('checkout.process')); ?>" method="POST" class="checkout-form" id="checkoutForm">
                <?php echo csrf_field(); ?>
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
                                <?php $__currentLoopData = $orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="order-item">
                                        
                                        <img style="width: 100%;" src="<?php echo e(asset('images' . $item['image'])); ?>" alt="">

                                        <div class="order-item-details">
                                            <h4 class="order-item-title"><?php echo e($item['title']); ?></h4>
                                            <p class="order-item-author"><?php echo e($item['author']); ?></p>
                                        </div>
                                        <div class="order-item-price">
                                            $<?php echo e(number_format($item['price'], 2)); ?>

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                            <!-- Price Breakdown -->
                            <div class="price-breakdown">
                                <div class="price-row">
                                    <span>Subtotal</span>
                                    <span>$<?php echo e(number_format($subtotal, 2)); ?></span>
                                </div>
                                <div class="price-row">
                                    <span>Discount</span>
                                    <span class="discount-text">-$<?php echo e(number_format($discount, 2)); ?></span>
                                </div>
                                <div class="price-row">
                                    <span>Tax</span>
                                    <span>$<?php echo e(number_format($tax, 2)); ?></span>
                                </div>
                                <div class="price-divider"></div>
                                <div class="price-row price-total">
                                    <span>Total</span>
                                    <span>$<?php echo e(number_format($total, 2)); ?></span>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <style>
        .checkout-section {
            padding: 60px 0;
            background-color: #f9fafb;
        }

        /* Progress Steps */
        .checkout-progress {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 60px;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .progress-step {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
        }

        .step-number {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #ccc;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
            transition: 0.3s ease;
        }

        .progress-step.active .step-number {
            background-color: #2563eb;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.2);
        }

        .step-label {
            font-size: 0.9rem;
            color: #666;
        }

        .progress-step.active .step-label {
            color: #2563eb;
            font-weight: 600;
        }

        .progress-line {
            width: 100px;
            height: 2px;
            background-color: #ccc;
            margin: 0 10px;
        }

        /* Checkout Layout */
        .checkout-layout {
            display: grid;
            grid-template-columns: 1fr 400px;
            gap: 40px;
            align-items: start;
        }

        /* Section Cards */
        .checkout-section-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .section-card-title {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 25px;
            color: #111;
            font-size: 1.2rem;
        }

        .section-card-title i {
            color: #2563eb;
        }

        /* Payment Methods */
        .payment-methods {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 25px;
        }

        .payment-method-option {
            border: 2px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            cursor: pointer;
            transition: 0.3s;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .payment-method-option:hover {
            border-color: #2563eb;
            background-color: #f9fafb;
        }

        .payment-method-option input[type="radio"] {
            width: 20px;
            height: 20px;
            cursor: pointer;
        }

        .payment-method-option input[type="radio"]:checked~.payment-method-content {
            color: #2563eb;
        }

        .payment-method-option:has(input:checked) {
            border-color: #2563eb;
            background-color: rgba(37, 99, 235, 0.05);
        }

        .payment-method-content {
            flex: 1;
        }

        .payment-method-header {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .payment-icons {
            display: flex;
            gap: 6px;
            font-size: 1.3rem;
            color: #999;
        }

        .payment-method-name {
            font-weight: 600;
            font-size: 0.9rem;
            color: #111;
        }

        /* Card Details */
        .card-details-form {
            margin-top: 25px;
            padding-top: 25px;
            border-top: 2px solid #eee;
        }

        .security-note {
            display: flex;
            align-items: center;
            gap: 6px;
            color: #10b981;
            font-size: 0.9rem;
            margin-top: 20px;
            padding: 10px;
            background-color: rgba(16, 185, 129, 0.1);
            border-radius: 6px;
        }

        /* Checkbox Group */
        .checkbox-group {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .checkbox-label a {
            color: #2563eb;
            text-decoration: underline;
        }

        /* Order Summary */
        .checkout-sidebar {
            position: sticky;
            top: 100px;
        }

        .order-summary-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .order-summary-title {
            font-size: 1.25rem;
            margin-bottom: 25px;
        }

        /* Order Items */
        .order-items {
            margin-bottom: 25px;
        }

        .order-item {
            display: grid;
            grid-template-columns: 50px 1fr auto;
            gap: 10px;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .order-item:last-child {
            border-bottom: none;
        }

        .order-item-image {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #e5e7eb 0%, #d1d5db 100%);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #9ca3af;
        }

        .order-item-title {
            font-size: 0.9rem;
            color: #111;
            margin: 0;
        }

        .order-item-author {
            font-size: 0.8rem;
            color: #666;
        }

        .order-item-price {
            font-weight: 600;
            color: #111;
        }

        /* Price Breakdown */
        .price-breakdown {
            padding: 15px 0;
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            color: #555;
        }

        .discount-text {
            color: #10b981;
            font-weight: 600;
        }

        .price-divider {
            height: 1px;
            background-color: #eee;
            margin: 15px 0;
        }

        .price-total {
            font-size: 1.3rem;
            font-weight: 700;
            color: #111;
            margin-bottom: 25px;
        }

        .place-order-btn {
            margin-bottom: 15px;
        }

        /* Security Badges */
        .security-badges {
            display: flex;
            justify-content: space-around;
            padding: 15px;
            background-color: #f9fafb;
            border-radius: 6px;
            margin-bottom: 15px;
        }

        .security-badge {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
            color: #10b981;
            font-size: 0.8rem;
        }

        .security-badge i {
            font-size: 1.5rem;
        }

        /* Guarantee Badge */
        .guarantee-badge {
            display: flex;
            gap: 10px;
            padding: 15px;
            background-color: rgba(16, 185, 129, 0.1);
            border-radius: 6px;
            border: 1px solid #10b981;
        }

        .guarantee-badge i {
            font-size: 2rem;
            color: #10b981;
        }

        .guarantee-badge strong {
            display: block;
            color: #111;
            margin-bottom: 4px;
        }

        .guarantee-badge p {
            margin: 0;
            font-size: 0.9rem;
            color: #666;
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
                padding: 20px;
            }

            .step-number {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }

            .step-label {
                font-size: 0.8rem;
            }

            .progress-line {
                width: 40px;
            }

            .checkout-section-card {
                max-width: 100%;
            }

            .payment-method-header {
                flex-direction: column;
            }
        }
    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\coursehub\resources\views/pages/checkout.blade.php ENDPATH**/ ?>