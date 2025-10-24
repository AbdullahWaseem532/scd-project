@extends('layouts.app')

@section('title', 'Order Confirmation - CourseHub')
@section('description', 'Your order has been successfully placed.')

@section('content')
    <!-- Order Confirmation Section -->
    <section class="confirmation-section">
        <div class="container">
            <!-- Success Message -->
            <div class="confirmation-hero">
                <div class="success-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h1 class="confirmation-title">Order Confirmed!</h1>
                <p class="confirmation-message">
                    Thank you for your purchase! Your order has been successfully processed.
                </p>
                <div class="order-number">
                    <span class="order-label">Order Number:</span>
                    <span class="order-value">#{{ $orderNumber }}</span>
                </div>
            </div>

            <!-- Order Details -->
            <div class="confirmation-layout">
                <!-- Order Information -->
                <div class="confirmation-main">
                    <!-- What's Next -->
                    <div class="info-card">
                        <h2 class="info-card-title">
                            <i class="fas fa-info-circle"></i> What Happens Next?
                        </h2>
                        <div class="next-steps">
                            <div class="next-step">
                                <div class="step-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="step-content">
                                    <h3>Check Your Email</h3>
                                    <p>We've sent a confirmation email to <strong>{{ $customerEmail }}</strong> with your
                                        order details and access instructions.</p>
                                </div>
                            </div>
                            <div class="next-step">
                                <div class="step-icon">
                                    <i class="fas fa-user-circle"></i>
                                </div>
                                <div class="step-content">
                                    <h3>Access Your Account</h3>
                                    <p>Log in to your account to access your purchased courses immediately. Start learning
                                        right away!</p>
                                </div>
                            </div>
                            <div class="next-step">
                                <div class="step-icon">
                                    <i class="fas fa-play-circle"></i>
                                </div>
                                <div class="step-content">
                                    <h3>Start Learning</h3>
                                    <p>Your courses are now available in your dashboard. Begin your learning journey today!
                                    </p>
                                </div>
                            </div>
                            <div class="next-step">
                                <div class="step-icon">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <div class="step-content">
                                    <h3>Earn Certificates</h3>
                                    <p>Complete your courses and earn certificates to showcase your new skills and
                                        knowledge.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Purchased Courses -->
                    <div class="info-card">
                        <h2 class="info-card-title">
                            <i class="fas fa-book"></i> Your Purchased Courses
                        </h2>
                        <div class="purchased-courses">
                            @foreach($purchasedCourses as $course)
                                <div class="purchased-course">
                                    <div class="course-thumbnail">
                                        <img src="{{ asset('images' . $course['image']) }}" alt="">
                                    </div>
                                    <div class="course-details">
                                        <h3 class="course-title">{{ $course['title'] }}</h3>
                                        <p class="course-instructor">By {{ $course['author'] }}</p>
                                        <div class="course-meta">
                                            <span class="meta-badge">
                                                <i class="fas fa-clock"></i>
                                                {{ $course['duration'] }}
                                            </span>
                                            <span class="meta-badge">
                                                <i class="fas fa-signal"></i>
                                                {{ $course['level'] }}
                                            </span>
                                            <span class="meta-badge">
                                                <i class="fas fa-infinity"></i>
                                                Lifetime Access
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-action">
                                        <a href="#" class="btn btn-primary">
                                            <i class="fas fa-play"></i> Start Course
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Order Summary -->
                    <div class="info-card">
                        <h2 class="info-card-title">
                            <i class="fas fa-receipt"></i> Order Summary
                        </h2>
                        <div class="order-summary-details">
                            <div class="summary-row">
                                <span>Order Date:</span>
                                <span>{{ $orderDate }}</span>
                            </div>
                            <div class="summary-row">
                                <span>Payment Method:</span>
                                <span>{{ $paymentMethod }}</span>
                            </div>
                            <div class="summary-row">
                                <span>Transaction ID:</span>
                                <span>{{ $transactionId }}</span>
                            </div>
                            <div class="summary-divider"></div>
                            <div class="summary-row">
                                <span>Subtotal:</span>
                                <span>${{ number_format($subtotal, 2) }}</span>
                            </div>
                            <div class="summary-row">
                                <span>Discount:</span>
                                <span class="discount-text">-${{ number_format($discount, 2) }}</span>
                            </div>
                            <div class="summary-row">
                                <span>Tax:</span>
                                <span>${{ number_format($tax, 2) }}</span>
                            </div>
                            <div class="summary-divider"></div>
                            <div class="summary-row summary-total">
                                <span>Total Paid:</span>
                                <span>${{ number_format($total, 2) }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Billing Information -->
                    <div class="info-card">
                        <h2 class="info-card-title">
                            <i class="fas fa-map-marker-alt"></i> Billing Information
                        </h2>
                        <div class="billing-info">
                            <p><strong>{{ $billingInfo['name'] }}</strong></p>
                            <p>{{ $billingInfo['email'] }}</p>
                            <p>{{ $billingInfo['phone'] }}</p>
                            <p>{{ $billingInfo['address'] }}</p>
                            <p>{{ $billingInfo['city'] }}, {{ $billingInfo['state'] }} {{ $billingInfo['zip'] }}</p>
                            <p>{{ $billingInfo['country'] }}</p>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="confirmation-sidebar">
                    <!-- Quick Actions -->
                    <div class="sidebar-card">
                        <h3 class="sidebar-title">Quick Actions</h3>
                        <div class="quick-actions">
                            <a href="#" class="action-btn">
                                <i class="fas fa-th-large"></i>
                                <span>Go to Dashboard</span>
                            </a>
                            <a href="{{ route('products') }}" class="action-btn">
                                <i class="fas fa-shopping-bag"></i>
                                <span>Browse More Courses</span>
                            </a>
                            <a href="#" class="action-btn">
                                <i class="fas fa-download"></i>
                                <span>Download Invoice</span>
                            </a>
                            <a href="#" class="action-btn">
                                <i class="fas fa-print"></i>
                                <span>Print Receipt</span>
                            </a>
                        </div>
                    </div>

                    <!-- Support -->
                    <div class="sidebar-card">
                        <h3 class="sidebar-title">Need Help?</h3>
                        <div class="support-info">
                            <p>If you have any questions about your order, please contact our support team.</p>
                            <div class="support-methods">
                                <a href="{{ route('contact') }}" class="support-link">
                                    <i class="fas fa-envelope"></i>
                                    <span>Contact Support</span>
                                </a>
                                <a href="#" class="support-link">
                                    <i class="fas fa-comments"></i>
                                    <span>Live Chat</span>
                                </a>
                                <a href="tel:+15551234567" class="support-link">
                                    <i class="fas fa-phone"></i>
                                    <span>+1 (555) 123-4567</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Referral Program -->
                    <div class="sidebar-card referral-card">
                        <div class="referral-icon">
                            <i class="fas fa-gift"></i>
                        </div>
                        <h3 class="sidebar-title">Refer & Earn</h3>
                        <p>Share CourseHub with friends and earn 20% commission on their purchases!</p>
                        <a href="#" class="btn btn-secondary btn-block">Get Referral Link</a>
                    </div>

                    <!-- Social Share -->
                    <div class="sidebar-card">
                        <h3 class="sidebar-title">Share Your Achievement</h3>
                        <p class="share-text">Tell your friends about your learning journey!</p>
                        <div class="social-share-buttons">
                            <a href="#" class="share-btn facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="share-btn twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="share-btn linkedin">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="share-btn whatsapp">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Information -->
            <div class="additional-info">
                <div class="info-box">
                    <i class="fas fa-shield-alt"></i>
                    <h4>30-Day Money-Back Guarantee</h4>
                    <p>Not satisfied? Get a full refund within 30 days, no questions asked.</p>
                </div>
                <div class="info-box">
                    <i class="fas fa-infinity"></i>
                    <h4>Lifetime Access</h4>
                    <p>Access your courses anytime, anywhere, forever. Learn at your own pace.</p>
                </div>
                <div class="info-box">
                    <i class="fas fa-certificate"></i>
                    <h4>Certificate of Completion</h4>
                    <p>Earn certificates upon completion to showcase your new skills.</p>
                </div>
                <div class="info-box">
                    <i class="fas fa-headset"></i>
                    <h4>24/7 Support</h4>
                    <p>Our support team is always here to help you succeed in your learning.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <style>
        /* Confirmation Page Styles */
        .confirmation-section {
            padding: var(--spacing-2xl) 0;
            background: linear-gradient(180deg, var(--gray-50) 0%, var(--white) 100%);
        }

        /* Hero Section */
        .confirmation-hero {
            text-align: center;
            padding: var(--spacing-2xl);
            background-color: var(--white);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-lg);
            margin-bottom: var(--spacing-2xl);
        }

        .success-icon {
            font-size: 5rem;
            color: var(--success);
            margin-bottom: var(--spacing-md);
            animation: scaleIn 0.5s ease-out;
        }

        @keyframes scaleIn {
            from {
                transform: scale(0);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .confirmation-title {
            font-size: 2.5rem;
            color: var(--gray-900);
            margin-bottom: var(--spacing-sm);
        }

        .confirmation-message {
            font-size: 1.125rem;
            color: var(--gray-600);
            margin-bottom: var(--spacing-lg);
        }

        .order-number {
            display: inline-flex;
            align-items: center;
            gap: var(--spacing-sm);
            padding: var(--spacing-sm) var(--spacing-lg);
            background-color: var(--gray-100);
            border-radius: var(--radius-lg);
            font-size: 1.125rem;
        }

        .order-label {
            color: var(--gray-600);
        }

        .order-value {
            font-weight: 700;
            color: var(--primary-color);
            font-family: monospace;
        }

        /* Layout */
        .confirmation-layout {
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: var(--spacing-xl);
            align-items: start;
        }

        /* Info Cards */
        .info-card {
            background-color: var(--white);
            border-radius: var(--radius-lg);
            padding: var(--spacing-xl);
            margin-bottom: var(--spacing-md);
            box-shadow: var(--shadow-md);
        }

        .info-card-title {
            display: flex;
            align-items: center;
            gap: var(--spacing-sm);
            font-size: 1.25rem;
            margin-bottom: var(--spacing-lg);
            color: var(--gray-900);
        }

        .info-card-title i {
            color: var(--primary-color);
        }

        /* Next Steps */
        .next-steps {
            display: flex;
            flex-direction: column;
            gap: var(--spacing-lg);
        }

        .next-step {
            display: flex;
            gap: var(--spacing-md);
            padding: var(--spacing-md);
            background-color: var(--gray-50);
            border-radius: var(--radius-lg);
            border-left: 4px solid var(--primary-color);
        }

        .step-icon {
            width: 50px;
            height: 50px;
            background-color: var(--primary-color);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        .step-content h3 {
            font-size: 1.125rem;
            margin-bottom: var(--spacing-xs);
            color: var(--gray-900);
        }

        .step-content p {
            margin: 0;
            color: var(--gray-600);
            line-height: 1.6;
        }

        /* Purchased Courses */
        .purchased-courses {
            display: flex;
            flex-direction: column;
            gap: var(--spacing-md);
        }

        .purchased-course {
            display: grid;
            grid-template-columns: 80px 1fr auto;
            gap: var(--spacing-md);
            padding: var(--spacing-md);
            border: 2px solid var(--gray-200);
            border-radius: var(--radius-lg);
            transition: all var(--transition-fast);
        }

        .purchased-course:hover {
            border-color: var(--primary-color);
            box-shadow: var(--shadow-md);
        }

        .course-thumbnail {
            width: 80px;
            height: 80px;
            border-radius: var(--radius-md);
        }

        .course-thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .course-title {
            font-size: 1.125rem;
            margin-bottom: var(--spacing-xs);
            color: var(--gray-900);
        }

        .course-instructor {
            color: var(--gray-600);
            font-size: 0.875rem;
            margin-bottom: var(--spacing-sm);
        }

        .course-meta {
            display: flex;
            gap: var(--spacing-sm);
            flex-wrap: wrap;
        }

        .meta-badge {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            padding: 4px var(--spacing-sm);
            background-color: var(--gray-100);
            border-radius: var(--radius-sm);
            font-size: 0.75rem;
            color: var(--gray-600);
        }

        .course-action {
            display: flex;
            align-items: center;
        }

        /* Order Summary Details */
        .order-summary-details {
            display: flex;
            flex-direction: column;
            gap: var(--spacing-sm);
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--gray-700);
        }

        .summary-divider {
            height: 1px;
            background-color: var(--gray-200);
            margin: var(--spacing-sm) 0;
        }

        .summary-total {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--gray-900);
        }

        .discount-text {
            color: var(--success);
            font-weight: 600;
        }

        /* Billing Info */
        .billing-info {
            color: var(--gray-700);
            line-height: 1.8;
        }

        .billing-info p {
            margin-bottom: var(--spacing-xs);
        }

        /* Sidebar */
        .confirmation-sidebar {
            position: sticky;
            top: 100px;
            display: flex;
            flex-direction: column;
            gap: var(--spacing-md);
        }

        .sidebar-card {
            background-color: var(--white);
            border-radius: var(--radius-lg);
            padding: var(--spacing-lg);
            box-shadow: var(--shadow-md);
        }

        .sidebar-title {
            font-size: 1.125rem;
            margin-bottom: var(--spacing-md);
            color: var(--gray-900);
        }

        /* Quick Actions */
        .quick-actions {
            display: flex;
            flex-direction: column;
            gap: var(--spacing-xs);
        }

        .action-btn {
            display: flex;
            align-items: center;
            gap: var(--spacing-sm);
            padding: var(--spacing-sm) var(--spacing-md);
            background-color: var(--gray-50);
            border-radius: var(--radius-md);
            color: var(--gray-700);
            transition: all var(--transition-fast);
        }

        .action-btn:hover {
            background-color: var(--primary-color);
            color: var(--white);
            transform: translateX(5px);
        }

        .action-btn i {
            font-size: 1.125rem;
        }

        /* Support Info */
        .support-info p {
            color: var(--gray-600);
            margin-bottom: var(--spacing-md);
            line-height: 1.6;
        }

        .support-methods {
            display: flex;
            flex-direction: column;
            gap: var(--spacing-sm);
        }

        .support-link {
            display: flex;
            align-items: center;
            gap: var(--spacing-sm);
            padding: var(--spacing-sm);
            color: var(--primary-color);
            font-weight: 500;
            transition: all var(--transition-fast);
        }

        .support-link:hover {
            background-color: var(--gray-50);
            border-radius: var(--radius-md);
        }

        /* Referral Card */
        .referral-card {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            color: var(--white);
            text-align: center;
        }

        .referral-icon {
            font-size: 2.5rem;
            margin-bottom: var(--spacing-sm);
        }

        .referral-card .sidebar-title {
            color: var(--white);
        }

        .referral-card p {
            color: var(--white);
            opacity: 0.95;
            margin-bottom: var(--spacing-md);
        }

        /* Social Share */
        .share-text {
            color: var(--gray-600);
            margin-bottom: var(--spacing-md);
            font-size: 0.875rem;
        }

        .social-share-buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: var(--spacing-sm);
        }

        .share-btn {
            width: 100%;
            aspect-ratio: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: var(--radius-md);
            color: var(--white);
            font-size: 1.25rem;
            transition: all var(--transition-fast);
        }

        .share-btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-md);
        }

        .share-btn.facebook {
            background-color: #1877f2;
        }

        .share-btn.twitter {
            background-color: #1da1f2;
        }

        .share-btn.linkedin {
            background-color: #0a66c2;
        }

        .share-btn.whatsapp {
            background-color: #25d366;
        }

        /* Additional Info */
        .additional-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: var(--spacing-lg);
            margin-top: var(--spacing-2xl);
            padding: var(--spacing-xl);
            background-color: var(--white);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-md);
        }

        .info-box {
            text-align: center;
            padding: var(--spacing-md);
        }

        .info-box i {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: var(--spacing-sm);
        }

        .info-box h4 {
            font-size: 1.125rem;
            margin-bottom: var(--spacing-xs);
            color: var(--gray-900);
        }

        .info-box p {
            color: var(--gray-600);
            font-size: 0.875rem;
            margin: 0;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .confirmation-layout {
                grid-template-columns: 1fr;
            }

            .confirmation-sidebar {
                position: static;
            }
        }

        @media (max-width: 768px) {
            .confirmation-title {
                font-size: 2rem;
            }

            .purchased-course {
                grid-template-columns: 1fr;
            }

            .course-action {
                justify-content: stretch;
            }

            .course-action .btn {
                width: 100%;
            }

            .additional-info {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endsection

@section('scripts')
    <script>
        // Confirmation page JavaScript
        document.addEventListener('DOMContentLoaded', function () {
            // Print receipt
            const printButtons = document.querySelectorAll('[href="#"]');
            printButtons.forEach(button => {
                if (button.textContent.includes('Print')) {
                    button.addEventListener('click', function (e) {
                        e.preventDefault();
                        window.print();
                    });
                }
            });

            // Download invoice
            printButtons.forEach(button => {
                if (button.textContent.includes('Download Invoice')) {
                    button.addEventListener('click', function (e) {
                        e.preventDefault();
                        alert('Invoice download will start shortly! (This is a demo)');
                    });
                }
            });

            // Celebrate animation
            const successIcon = document.querySelector('.success-icon');
            if (successIcon) {
                setTimeout(() => {
                    successIcon.style.transform = 'scale(1.1)';
                    setTimeout(() => {
                        successIcon.style.transform = 'scale(1)';
                    }, 200);
                }, 500);
            }
        });
    </script>
@endsection