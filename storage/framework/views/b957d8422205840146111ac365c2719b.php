

<?php $__env->startSection('title', 'Order Confirmation - CourseHub'); ?>
<?php $__env->startSection('description', 'Your order has been successfully placed.'); ?>

<?php $__env->startSection('content'); ?>
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
                    <span class="order-value">#<?php echo e($orderNumber); ?></span>
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
                                    <p>We've sent a confirmation email to <strong><?php echo e($customerEmail); ?></strong> with your
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
                            <?php $__currentLoopData = $purchasedCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="purchased-course">
                                    <div class="course-thumbnail">
                                        <img src="<?php echo e(asset('images' . $course['image'])); ?>" alt="">
                                    </div>
                                    <div class="course-details">
                                        <h3 class="course-title"><?php echo e($course['title']); ?></h3>
                                        <p class="course-instructor">By <?php echo e($course['author']); ?></p>
                                        <div class="course-meta">
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
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                <span><?php echo e($orderDate); ?></span>
                            </div>
                            <div class="summary-row">
                                <span>Payment Method:</span>
                                <span><?php echo e($paymentMethod); ?></span>
                            </div>
                            <div class="summary-row">
                                <span>Transaction ID:</span>
                                <span><?php echo e($transactionId); ?></span>
                            </div>
                            <div class="summary-divider"></div>
                            <div class="summary-row">
                                <span>Subtotal:</span>
                                <span>$<?php echo e(number_format($subtotal, 2)); ?></span>
                            </div>
                            <div class="summary-row">
                                <span>Discount:</span>
                                <span class="discount-text">-$<?php echo e(number_format($discount, 2)); ?></span>
                            </div>
                            <div class="summary-row">
                                <span>Tax:</span>
                                <span>$<?php echo e(number_format($tax, 2)); ?></span>
                            </div>
                            <div class="summary-divider"></div>
                            <div class="summary-row summary-total">
                                <span>Total Paid:</span>
                                <span>$<?php echo e(number_format($total, 2)); ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Billing Information -->
                    <div class="info-card">
                        <h2 class="info-card-title">
                            <i class="fas fa-map-marker-alt"></i> Billing Information
                        </h2>
                        <div class="billing-info">
                            <p><strong><?php echo e($billingInfo['name']); ?></strong></p>
                            <p><?php echo e($billingInfo['email']); ?></p>
                            <p><?php echo e($billingInfo['phone']); ?></p>
                            <p><?php echo e($billingInfo['address']); ?></p>
                            <p><?php echo e($billingInfo['city']); ?>, <?php echo e($billingInfo['state']); ?> <?php echo e($billingInfo['zip']); ?></p>
                            <p><?php echo e($billingInfo['country']); ?></p>
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
                            <a href="<?php echo e(route('products')); ?>" class="action-btn">
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
                                <a href="<?php echo e(route('contact')); ?>" class="support-link">
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <style>
        .confirmation-section {
            padding: 60px 0;
            background: linear-gradient(180deg, #f9fafb 0%, #ffffff 100%);
        }

        /* Hero Section */
        .confirmation-hero {
            text-align: center;
            padding: 60px;
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 60px;
        }

        .success-icon {
            font-size: 5rem;
            color: #10b981;
            margin-bottom: 20px;
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
            color: #111827;
            margin-bottom: 10px;
        }

        .confirmation-message {
            font-size: 1.125rem;
            color: #4b5563;
            margin-bottom: 30px;
        }

        .order-number {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 10px 30px;
            background-color: #f3f4f6;
            border-radius: 12px;
            font-size: 1.125rem;
        }

        .order-label {
            color: #4b5563;
        }

        .order-value {
            font-weight: 700;
            color: #2563eb;
            font-family: monospace;
        }

        /* Layout */
        .confirmation-layout {
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 40px;
            align-items: start;
        }

        /* Info Cards */
        .info-card {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 40px;
            margin-bottom: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .info-card-title {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.25rem;
            margin-bottom: 30px;
            color: #111827;
        }

        .info-card-title i {
            color: #2563eb;
        }

        /* Next Steps */
        .next-steps {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .next-step {
            display: flex;
            gap: 20px;
            padding: 20px;
            background-color: #f9fafb;
            border-radius: 12px;
            border-left: 4px solid #2563eb;
        }

        .step-icon {
            width: 50px;
            height: 50px;
            background-color: #2563eb;
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        .step-content h3 {
            font-size: 1.125rem;
            margin-bottom: 6px;
            color: #111827;
        }

        .step-content p {
            margin: 0;
            color: #4b5563;
            line-height: 1.6;
        }

        /* Purchased Courses */
        .purchased-courses {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .purchased-course {
            display: grid;
            grid-template-columns: 80px 1fr auto;
            gap: 20px;
            padding: 20px;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            transition: 0.3s;
        }

        .purchased-course:hover {
            border-color: #2563eb;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
        }

        .course-thumbnail {
            width: 80px;
            height: 80px;
            border-radius: 8px;
        }

        .course-thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .course-title {
            font-size: 1.125rem;
            margin-bottom: 6px;
            color: #111827;
        }

        .course-instructor {
            color: #4b5563;
            font-size: 0.875rem;
            margin-bottom: 10px;
        }

        .course-meta {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .meta-badge {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            padding: 4px 10px;
            background-color: #f3f4f6;
            border-radius: 4px;
            font-size: 0.75rem;
            color: #4b5563;
        }

        .course-action {
            display: flex;
            align-items: center;
        }

        /* Order Summary Details */
        .order-summary-details {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #374151;
        }

        .summary-divider {
            height: 1px;
            background-color: #e5e7eb;
            margin: 10px 0;
        }

        .summary-total {
            font-size: 1.25rem;
            font-weight: 700;
            color: #111827;
        }

        .discount-text {
            color: #10b981;
            font-weight: 600;
        }

        /* Billing Info */
        .billing-info {
            color: #374151;
            line-height: 1.8;
        }

        .billing-info p {
            margin-bottom: 6px;
        }

        /* Sidebar */
        .confirmation-sidebar {
            position: sticky;
            top: 100px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .sidebar-card {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .sidebar-title {
            font-size: 1.125rem;
            margin-bottom: 20px;
            color: #111827;
        }

        /* Quick Actions */
        .quick-actions {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .action-btn {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 15px;
            background-color: #f9fafb;
            border-radius: 8px;
            color: #374151;
            transition: 0.3s;
        }

        .action-btn:hover {
            background-color: #2563eb;
            color: #ffffff;
            transform: translateX(5px);
        }

        .action-btn i {
            font-size: 1.125rem;
        }

        /* Support Info */
        .support-info p {
            color: #4b5563;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .support-methods {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .support-link {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            color: #2563eb;
            font-weight: 500;
            transition: 0.3s;
        }

        .support-link:hover {
            background-color: #f9fafb;
            border-radius: 8px;
        }

        /* Referral Card */
        .referral-card {
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            color: #ffffff;
            text-align: center;
        }

        .referral-icon {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .referral-card .sidebar-title {
            color: #ffffff;
        }

        .referral-card p {
            color: #ffffff;
            opacity: 0.95;
            margin-bottom: 20px;
        }

        /* Social Share */
        .share-text {
            color: #4b5563;
            margin-bottom: 20px;
            font-size: 0.875rem;
        }

        .social-share-buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }

        .share-btn {
            width: 100%;
            aspect-ratio: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            color: #ffffff;
            font-size: 1.25rem;
            transition: 0.3s;
        }

        .share-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
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
            gap: 30px;
            margin-top: 60px;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .info-box {
            text-align: center;
            padding: 20px;
        }

        .info-box i {
            font-size: 2.5rem;
            color: #2563eb;
            margin-bottom: 10px;
        }

        .info-box h4 {
            font-size: 1.125rem;
            margin-bottom: 6px;
            color: #111827;
        }

        .info-box p {
            color: #4b5563;
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\coursehub\resources\views/pages/order-complete.blade.php ENDPATH**/ ?>