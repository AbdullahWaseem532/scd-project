

<?php $__env->startSection('title', 'CourseHub - Premium eBooks & Digital Courses'); ?>
<?php $__env->startSection('description', 'Discover thousands of premium eBooks and digital courses to advance your skills and knowledge.'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">Unlock Your Potential with Premium Courses</h1>
                    <p class="hero-description">
                        Access thousands of expert-curated eBooks and digital courses designed to help you master new
                        skills, advance your career, and achieve your goals.
                    </p>
                    <div class="hero-actions">
                        <a href="<?php echo e(route('products')); ?>" class="btn btn-primary btn-lg">Explore Courses</a>
                        <a href="<?php echo e(route('about')); ?>" class="btn btn-secondary btn-lg">Learn More</a>
                    </div>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number">10K+</span>
                            <span class="stat-label">Students</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Courses</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">50+</span>
                            <span class="stat-label">Instructors</span>
                        </div>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="hero-image-placeholder">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Categories -->
    <section class="categories-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Popular Categories</h2>
                <p class="section-subtitle">Explore our most sought-after course categories</p>
            </div>
            <div class="categories-grid">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="category-title">Web Development</h3>
                    <p class="category-count">120+ Courses</p>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="category-title">Data Science</h3>
                    <p class="category-count">85+ Courses</p>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3 class="category-title">Marketing</h3>
                    <p class="category-count">95+ Courses</p>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3 class="category-title">Design</h3>
                    <p class="category-count">110+ Courses</p>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3 class="category-title">Business</h3>
                    <p class="category-count">75+ Courses</p>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3 class="category-title">Personal Growth</h3>
                    <p class="category-count">60+ Courses</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="featured-products">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Featured eBooks</h2>
                <p class="section-subtitle">Hand-picked courses from our expert instructors</p>
            </div>
            <div class="products-grid">
                <?php $__currentLoopData = $featuredProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="product-card">
                        <a href="<?php echo e(route('products.show', $product['id'])); ?>">
                            <div class="product-image">
                                <span class="product-badge"><?php echo e($product['badge']); ?></span>
                                <img src="<?php echo e(asset('images' . $product['image'])); ?>" alt="">
                            </div>
                            <div class="product-info">
                                <span class="product-category"><?php echo e($product['category']); ?></span>
                                <h3 class="product-title"><?php echo e($product['title']); ?></h3>
                                <div class="product-author">
                                    <i class="fas fa-user"></i>
                                    <span><?php echo e($product['author']); ?></span>
                                </div>
                                <div class="product-rating">
                                    <div class="stars">
                                        <?php for($i = 0; $i < 5; $i++): ?>
                                            <i
                                                class="fas fa-star<?php echo e($i < floor($product['rating']) ? '' : ($i < $product['rating'] ? '-half-alt' : ' star-empty')); ?>"></i>
                                        <?php endfor; ?>
                                    </div>
                                    <span class="rating-count">(<?php echo e($product['reviews']); ?> reviews)</span>
                                </div>
                                <div class="product-footer">
                                    <span class="product-price">$<?php echo e(number_format($product['price'], 2)); ?></span>
                                    <button class="btn btn-primary btn-sm">Add to Cart</button>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="section-action">
                <a href="<?php echo e(route('products')); ?>" class="btn btn-secondary">View All Courses</a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="features-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Why Choose CourseHub?</h2>
                <p class="section-subtitle">Everything you need to succeed in your learning journey</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3 class="feature-title">Expert Instructors</h3>
                    <p class="feature-description">Learn from industry professionals with years of real-world experience</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-infinity"></i>
                    </div>
                    <h3 class="feature-title">Lifetime Access</h3>
                    <p class="feature-description">Purchase once and access your courses anytime, anywhere, forever</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3 class="feature-title">Certificates</h3>
                    <p class="feature-description">Earn recognized certificates upon course completion to boost your resume
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="feature-title">Mobile Learning</h3>
                    <p class="feature-description">Learn on the go with our mobile-optimized platform and apps</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-sync"></i>
                    </div>
                    <h3 class="feature-title">Regular Updates</h3>
                    <p class="feature-description">Content regularly updated to keep you current with industry trends</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="feature-title">24/7 Support</h3>
                    <p class="feature-description">Our dedicated support team is always here to help you succeed</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">What Our Students Say</h2>
                <p class="section-subtitle">Real feedback from real learners</p>
            </div>
            <div class="testimonials-grid">
                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">
                                <?php echo e(substr($testimonial['name'], 0, 1)); ?>

                            </div>
                            <div class="testimonial-author">
                                <h4 class="testimonial-name"><?php echo e($testimonial['name']); ?></h4>
                                <p class="testimonial-role"><?php echo e($testimonial['role']); ?></p>
                            </div>
                        </div>
                        <div class="testimonial-rating">
                            <?php for($i = 0; $i < 5; $i++): ?>
                                <i class="fas fa-star"></i>
                            <?php endfor; ?>
                        </div>
                        <p class="testimonial-text"><?php echo e($testimonial['text']); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Ready to Start Learning?</h2>
                <p class="cta-description">Join thousands of students already learning on CourseHub</p>
                <a href="<?php echo e(route('products')); ?>" class="btn btn-light btn-lg">Get Started Today</a>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\coursehub\resources\views/pages/home.blade.php ENDPATH**/ ?>