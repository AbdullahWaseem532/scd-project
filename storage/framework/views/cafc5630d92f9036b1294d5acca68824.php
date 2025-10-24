

<?php $__env->startSection('title', 'Contact Us - CourseHub'); ?>
<?php $__env->startSection('description', 'Get in touch with the CourseHub team. We\'re here to help with any questions or concerns.'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="breadcrumb">
                <a href="<?php echo e(route('home')); ?>">Home</a>
                <span class="separator">/</span>
                <span>Contact</span>
            </div>
            <h1 class="page-title">Contact Us</h1>
            <p class="page-description">We'd love to hear from you</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-layout">
                <!-- Contact Form -->
                <div class="contact-form-wrapper">
                    <h2 class="form-title">Send Us a Message</h2>
                    <p class="form-description">Fill out the form below and we'll get back to you within 24 hours</p>

                    <form class="contact-form" action="#" method="POST">
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

                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <select id="subject" name="subject" class="form-control" required>
                                <option value="">Select a subject</option>
                                <option value="general">General Inquiry</option>
                                <option value="technical">Technical Support</option>
                                <option value="billing">Billing Question</option>
                                <option value="partnership">Partnership Opportunity</option>
                                <option value="feedback">Feedback</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" class="form-control" rows="6" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="newsletter">
                                <span>Subscribe to our newsletter for updates and special offers</span>
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block">Send Message</button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="contact-info-wrapper">
                    <h2 class="info-title">Get in Touch</h2>
                    <p class="info-description">Have questions? We're here to help!</p>

                    <div class="contact-info-cards">
                        <div class="contact-info-card">
                            <div class="info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h3 class="info-card-title">Visit Us</h3>
                            <p class="info-card-text">
                                123 Learning Street<br>
                                Education District<br>
                                San Francisco, CA 94102
                            </p>
                        </div>

                        <div class="contact-info-card">
                            <div class="info-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <h3 class="info-card-title">Call Us</h3>
                            <p class="info-card-text">
                                <a href="tel:+15551234567">+1 (555) 123-4567</a><br>
                                Mon-Fri: 9am - 6pm PST
                            </p>
                        </div>

                        <div class="contact-info-card">
                            <div class="info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h3 class="info-card-title">Email Us</h3>
                            <p class="info-card-text">
                                <a href="mailto:support@coursehub.com">support@coursehub.com</a><br>
                                <a href="mailto:info@coursehub.com">info@coursehub.com</a>
                            </p>
                        </div>

                        <div class="contact-info-card">
                            <div class="info-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h3 class="info-card-title">Business Hours</h3>
                            <p class="info-card-text">
                                Monday - Friday: 9am - 6pm<br>
                                Saturday - Sunday: Closed
                            </p>
                        </div>
                    </div>

                    <div class="social-connect">
                        <h3 class="social-title">Connect With Us</h3>
                        <div class="social-links-large">
                            <a href="#" class="social-link">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-subtitle">Quick answers to common questions</p>
            </div>
            <div class="faq-grid">
                <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3><?php echo e($faq['question']); ?></h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p><?php echo e($faq['answer']); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- Map Section (Placeholder) -->
    <section class="map-section">
        <div class="container">
            <iframe style="width: 100%"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d924247.1421842298!2d66.49600131631566!3d25.191740591840333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Pakistan!5e0!3m2!1sen!2s!4v1761266642437!5m2!1sen!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

            
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        // FAQ Accordion functionality
        document.addEventListener('DOMContentLoaded', function () {
            const faqItems = document.querySelectorAll('.faq-item');

            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');

                question.addEventListener('click', () => {
                    const isActive = item.classList.contains('active');

                    // Close all FAQ items
                    faqItems.forEach(i => i.classList.remove('active'));

                    // Open clicked item if it wasn't active
                    if (!isActive) {
                        item.classList.add('active');
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\coursehub\resources\views/pages/contact.blade.php ENDPATH**/ ?>