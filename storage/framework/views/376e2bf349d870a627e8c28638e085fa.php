

<?php $__env->startSection('title', $product['title'] . ' - CourseHub'); ?>
<?php $__env->startSection('description', $product['description']); ?>

<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb">
                <a href="<?php echo e(route('home')); ?>">Home</a>
                <span class="separator">/</span>
                <a href="<?php echo e(route('products')); ?>">Courses</a>
                <span class="separator">/</span>
                <a href="#"><?php echo e($product['category']); ?></a>
                <span class="separator">/</span>
                <span><?php echo e($product['title']); ?></span>
            </div>
        </div>
    </section>

    <!-- Product Hero -->
    <section class="product-hero">
        <div class="container">
            <div class="product-hero-layout">
                <!-- Left Content -->
                <div class="product-hero-content">
                    <div class="product-category-badge"><?php echo e($product['category']); ?></div>
                    <h1 class="product-hero-title"><?php echo e($product['title']); ?></h1>
                    <p class="product-hero-description"><?php echo e($product['description']); ?></p>

                    <!-- Meta Information -->
                    <div class="product-meta-bar">
                        <div class="meta-item">
                            <span class="meta-label">Created by</span>
                            <a href="#" class="meta-value instructor-link"><?php echo e($product['author']); ?></a>
                        </div>
                        <div class="meta-item">
                            <div class="rating-display">
                                <span class="rating-number"><?php echo e($product['rating']); ?></span>
                                <div class="stars">
                                    <?php for($i = 0; $i < 5; $i++): ?>
                                        <i
                                            class="fas fa-star<?php echo e($i < floor($product['rating']) ? '' : ($i < $product['rating'] ? '-half-alt' : ' star-empty')); ?>"></i>
                                    <?php endfor; ?>
                                </div>
                                <span class="rating-count">(<?php echo e(number_format($product['reviews'])); ?> reviews)</span>
                            </div>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-user-graduate"></i>
                            <span class="meta-value"><?php echo e(number_format($product['students'])); ?> students</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-clock"></i>
                            <span class="meta-value"><?php echo e($product['duration']); ?></span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-globe"></i>
                            <span class="meta-value"><?php echo e($product['language']); ?></span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-closed-captioning"></i>
                            <span class="meta-value">Subtitles</span>
                        </div>
                    </div>

                    <!-- Last Updated -->
                    <div class="last-updated">
                        <i class="fas fa-sync-alt"></i>
                        Last updated <?php echo e($product['updated']); ?>

                    </div>
                </div>

                <!-- Right Sidebar - Preview Card (Desktop Only) -->
                <div class="product-preview-card desktop-only">
                    <div class="preview-image">
                        <div class="preview-image-placeholder">
                            <i class="fas fa-play-circle play-icon"></i>
                            <span class="preview-text">Preview this course</span>
                        </div>
                        <?php if(isset($product['badge'])): ?>
                            <span class="preview-badge"><?php echo e($product['badge']); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="preview-content">
                        <div class="price-section">
                            <?php if(isset($product['original_price'])): ?>
                                <span class="original-price">$<?php echo e(number_format($product['original_price'], 2)); ?></span>
                            <?php endif; ?>
                            <span class="current-price">$<?php echo e(number_format($product['price'], 2)); ?></span>
                            <?php if(isset($product['discount'])): ?>
                                <span class="discount-badge"><?php echo e($product['discount']); ?>% OFF</span>
                            <?php endif; ?>
                        </div>
                        <?php if(isset($product['discount_expires'])): ?>
                            <div class="discount-timer">
                                <i class="fas fa-clock"></i>
                                <span class="timer-text"><?php echo e($product['discount_expires']); ?> left at this price!</span>
                            </div>
                        <?php endif; ?>
                        <button class="btn btn-primary btn-lg btn-block add-to-cart-btn">
                            <i class="fas fa-shopping-cart"></i> Add to Cart
                        </button>
                        <button class="btn btn-secondary btn-lg btn-block">
                            Buy Now
                        </button>
                        <div class="money-back">
                            <i class="fas fa-undo"></i>
                            30-Day Money-Back Guarantee
                        </div>
                        <div class="includes-section">
                            <h4>This course includes:</h4>
                            <ul class="includes-list">
                                <li><i class="fas fa-video"></i> <?php echo e($product['video_hours']); ?> hours on-demand video</li>
                                <li><i class="fas fa-file-alt"></i> <?php echo e($product['articles']); ?> articles</li>
                                <li><i class="fas fa-download"></i> <?php echo e($product['resources']); ?> downloadable resources</li>
                                <li><i class="fas fa-infinity"></i> Full lifetime access</li>
                                <li><i class="fas fa-mobile-alt"></i> Access on mobile and TV</li>
                                <li><i class="fas fa-certificate"></i> Certificate of completion</li>
                            </ul>
                        </div>
                        <div class="share-section">
                            <button class="btn-text"><i class="fas fa-share"></i> Share</button>
                            <button class="btn-text"><i class="fas fa-gift"></i> Gift this course</button>
                            <button class="btn-text wishlist-btn"><i class="far fa-heart"></i> Wishlist</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="product-main-section">
        <div class="container">
            <div class="product-layout">
                <!-- Main Content -->
                <div class="product-main-content">
                    <!-- What You'll Learn -->
                    <div class="content-card">
                        <h2 class="content-title">What you'll learn</h2>
                        <div class="learning-objectives">
                            <?php $__currentLoopData = $product['learning_objectives']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $objective): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="objective-item">
                                    <i class="fas fa-check"></i>
                                    <span><?php echo e($objective); ?></span>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <!-- Course Content / Curriculum -->
                    <div class="content-card">
                        <h2 class="content-title">Course Content</h2>
                        <div class="course-stats">
                            <span><?php echo e($product['sections']); ?> sections</span>
                            <span>•</span>
                            <span><?php echo e($product['lectures']); ?> lectures</span>
                            <span>•</span>
                            <span><?php echo e($product['duration']); ?> total length</span>
                        </div>
                        <div class="curriculum">
                            <?php $__currentLoopData = $product['curriculum']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="curriculum-section">
                                    <div class="section-header-prod" onclick="toggleSection(<?php echo e($index); ?>)">
                                        <div class="section-title-area">
                                            <h3 class="section-title"><?php echo e($section['title']); ?></h3>
                                        </div>
                                        <div class="section-meta">
                                            <span><?php echo e($section['lectures']); ?> lectures</span>
                                            <span>•</span>
                                            <span><?php echo e($section['duration']); ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="content-card">
                        <h2 class="content-title">Description</h2>
                        <div class="description-content">
                            <?php echo nl2br(e($product['full_description'])); ?>

                        </div>
                    </div>

                    <!-- Instructor -->
                    <div class="content-card">
                        <h2 class="content-title">Instructor</h2>
                        <div class="instructor-card">
                            <div class="instructor-header">
                                <div class="instructor-avatar">
                                    <?php echo e(substr($product['author'], 0, 1)); ?>

                                </div>
                                <div class="instructor-info">
                                    <h3 class="instructor-name"><?php echo e($product['author']); ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Student Feedback -->
                    <div class="content-card">
                        <h2 class="content-title">Student feedback</h2>
                        <div class="feedback-summary">
                            <div class="rating-overview">
                                <div class="rating-number-large"><?php echo e($product['rating']); ?></div>
                                <div class="rating-stars-large">
                                    <?php for($i = 0; $i < 5; $i++): ?>
                                        <i class="fas fa-star"></i>
                                    <?php endfor; ?>
                                </div>
                                <div class="rating-text">Course Rating</div>
                            </div>
                        </div>
                    </div>

                    <!-- Reviews -->
                    <div class="content-card">
                        <h2 class="content-title">Reviews</h2>
                        <div class="reviews-list">
                            <?php $__currentLoopData = $product['reviewsDetailed']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="review-item">
                                    <div class="review-header">
                                        <div class="reviewer-avatar">
                                            <?php echo e(substr($review['name'], 0, 1)); ?>

                                        </div>
                                        <div class="reviewer-info">
                                            <h4 class="reviewer-name"><?php echo e($review['name']); ?></h4>
                                            <div class="review-meta">
                                                <div class="review-stars">
                                                    <?php for($i = 0; $i < 5; $i++): ?>
                                                        <i class="fas fa-star<?php echo e($i < $review['rating'] ? '' : ' star-empty'); ?>"></i>
                                                    <?php endfor; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-content">
                                        <p><?php echo e($review['comment']); ?></p>
                                    </div>
                                    <div class="review-helpful">
                                        <span>Was this review helpful?</span>
                                        <button class="helpful-btn"><i class="fas fa-thumbs-up"></i> Yes</button>
                                        <button class="helpful-btn"><i class="fas fa-thumbs-down"></i> No</button>
                                        <button class="btn-text"><i class="fas fa-flag"></i> Report</button>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>

                <!-- Sticky Sidebar (Mobile) -->
                <div class="product-sidebar mobile-sticky">
                    <div class="sidebar-card sticky-purchase-card">
                        <div class="price-section">
                            <?php if(isset($product['original_price'])): ?>
                                <span class="original-price">$<?php echo e(number_format($product['original_price'], 2)); ?></span>
                            <?php endif; ?>
                            <span class="current-price">$<?php echo e(number_format($product['price'], 2)); ?></span>
                        </div>
                        <button class="btn btn-primary btn-block add-to-cart-btn">
                            <i class="fas fa-shopping-cart"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Courses -->
    <section class="related-courses-section">
        <div class="container">
            <h2 class="content-title">Students also bought</h2>
            <div class="products-grid">
                <?php $__currentLoopData = $relatedCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="product-card">
                        <div class="product-image">
                            <a href="<?php echo e(route('products.show', $course['id'])); ?>">
                                <img src="<?php echo e(asset('images' . $course['image'])); ?>" alt="">
                            </a>
                        </div>
                        <div class="product-info">
                            <span class="product-category"><?php echo e($course['category']); ?></span>
                            <h3 class="product-title">
                                <a href=" <?php echo e(route('products.show', $course['id'])); ?>"><?php echo e($course['title']); ?></a>
                            </h3>
                            <div class="product-author">
                                <i class="fas fa-user"></i>
                                <span><?php echo e($course['author']); ?></span>
                            </div>
                            <div class="product-rating">
                                <div class="stars">
                                    <?php for($i = 0; $i < 5; $i++): ?> <i class="fas fa-star"></i>
                                    <?php endfor; ?>
                                </div>
                                <span class="rating-count">(<?php echo e($course['reviews']); ?>)</span>
                            </div>
                            <div class="product-footer">
                                <span class="product-price">$<?php echo e(number_format($course['price'], 2)); ?></span>
                                <button class="btn btn-primary btn-sm">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- Mobile Bottom Bar -->
    <div class="mobile-bottom-bar">
        <div class="bottom-bar-content">
            <div class="bottom-bar-price">
                <span class="current-price">$<?php echo e(number_format($product['price'], 2)); ?></span>
                <?php if(isset($product['original_price'])): ?>
                    <span class="original-price">$<?php echo e(number_format($product['original_price'], 2)); ?></span>
                <?php endif; ?>
            </div>
            <button class="btn btn-primary add-to-cart-btn">
                <i class="fas fa-shopping-cart"></i> Add to Cart
            </button>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <style>
        /* Product Detail Page Styles */
        .breadcrumb-section {
            padding: 1.5rem 0;
            background-color: #f9fafb;
            border-bottom: 1px solid #e5e7eb;
        }

        /* Product Hero */
        .product-hero {
            background-color: #111827;
            color: #ffffff;
            padding: 4rem 0;
        }

        .product-hero-layout {
            display: grid;
            grid-template-columns: 1fr 400px;
            gap: 4rem;
        }

        .product-category-badge {
            display: inline-block;
            padding: 0.5rem 1.5rem;
            background-color: #f59e0b;
            color: #ffffff;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .product-hero-title {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #ffffff;
        }

        .product-hero-description {
            font-size: 1.125rem;
            color: #d1d5db;
            margin-bottom: 2rem;
            line-height: 1.7;
        }

        .product-meta-bar {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #d1d5db;
            font-size: 0.875rem;
        }

        .meta-label {
            color: #9ca3af;
        }

        .meta-value {
            color: #ffffff;
            font-weight: 500;
        }

        .instructor-link {
            color: #f59e0b;
            text-decoration: underline;
        }

        .rating-display {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .rating-number {
            font-weight: 700;
            color: #f59e0b;
        }

        .last-updated {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #9ca3af;
            font-size: 0.875rem;
        }

        /* Preview Card */
        .product-preview-card {
            background-color: #ffffff;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 20px;
        }

        .preview-image {
            position: relative;
            aspect-ratio: 16/9;
            background: linear-gradient(135deg, #e5e7eb 0%, #d1d5db 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 300ms ease-in-out;
        }

        .preview-image:hover {
            transform: scale(1.02);
        }

        .preview-image-placeholder {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            color: #4b5563;
        }

        .play-icon {
            font-size: 4rem;
            color: #2563eb;
        }

        .preview-text {
            font-weight: 600;
        }

        .preview-badge {
            position: absolute;
            top: 1.5rem;
            left: 1.5rem;
            background-color: #f59e0b;
            color: #ffffff;
            padding: 0.5rem 1.5rem;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            font-weight: 600;
        }

        .preview-content {
            padding: 3rem;
        }

        .price-section {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .original-price {
            font-size: 1.125rem;
            color: #6b7280;
            text-decoration: line-through;
        }

        .current-price {
            font-size: 2rem;
            font-weight: 700;
            color: #111827;
        }

        .discount-badge {
            padding: 4px 1rem;
            background-color: #10b981;
            color: #ffffff;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            font-weight: 600;
        }

        .discount-timer {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 1rem;
            background-color: rgba(239, 68, 68, 0.1);
            border-radius: 0.5rem;
            color: #ef4444;
            font-size: 0.875rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .add-to-cart-btn {
            margin-bottom: 1rem;
        }

        .money-back {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 1.5rem 0;
            color: #4b5563;
            font-size: 0.875rem;
            border-bottom: 1px solid #e5e7eb;
        }

        .includes-section {
            padding: 1.5rem 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .includes-section h4 {
            font-size: 1rem;
            margin-bottom: 1.5rem;
            color: #111827;
        }

        .includes-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .includes-list li {
            display: flex;
            align-items: center;
            gap: 1rem;
            color: #374151;
            font-size: 0.875rem;
        }

        .includes-list i {
            color: #6b7280;
        }

        .share-section {
            padding-top: 1.5rem;
            display: flex;
            justify-content: space-between;
        }

        .wishlist-btn:hover i {
            color: #ef4444;
        }

        /* Main Content */
        .product-main-section {
            padding: 4rem 0;
            background-color: #ffffff;
        }

        .product-layout {
            display: grid;
            grid-template-columns: 1fr;
            gap: 3rem;
        }

        .content-card {
            background-color: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 0.75rem;
            padding: 3rem;
            margin-bottom: 2rem;
        }

        .content-title {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            color: #111827;
        }

        /* Learning Objectives */
        .learning-objectives {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        .objective-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
        }

        .objective-item i {
            color: #10b981;
            margin-top: 4px;
        }

        /* Curriculum */
        .course-stats {
            color: #4b5563;
            margin-bottom: 2rem;
            font-size: 0.875rem;
        }

        .curriculum {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .curriculum-section {
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            overflow: hidden;
        }

        .section-header-prod {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background-color: #f9fafb;
            cursor: pointer;
            transition: background-color 150ms ease-in-out;
        }

        .section-header-prod:hover {
            background-color: #f3f4f6;
        }

        .section-title-area {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .section-toggle {
            transition: transform 150ms ease-in-out;
            color: #4b5563;
        }

        .curriculum-section.active .section-toggle {
            transform: rotate(180deg);
        }

        .section-title {
            font-size: 1rem;
            margin: 0;
            color: #111827;
        }

        .section-meta {
            color: #4b5563;
            font-size: 0.875rem;
        }

        .section-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 300ms ease-in-out;
        }

        .curriculum-section.active .section-content {
            max-height: 2000px;
        }

        .lecture-list {
            list-style: none;
            padding: 1rem 0;
        }

        .lecture-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            transition: background-color 150ms ease-in-out;
        }

        .lecture-item:hover {
            background-color: #f9fafb;
        }

        .lecture-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .lecture-info i {
            color: #6b7280;
        }

        .lecture-title {
            color: #374151;
        }

        .preview-label {
            padding: 2px 0.5rem;
            background-color: #2563eb;
            color: #ffffff;
            border-radius: 0.25rem;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .lecture-duration {
            color: #6b7280;
            font-size: 0.875rem;
        }

        /* Requirements & Audience */
        .requirements-list,
        .audience-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .requirements-list li,
        .audience-list li {
            padding-left: 2rem;
            position: relative;
        }

        .requirements-list li::before,
        .audience-list li::before {
            content: "•";
            position: absolute;
            left: 0;
            color: #2563eb;
            font-weight: 700;
        }

        /* Description */
        .description-content {
            line-height: 1.8;
            color: #374151;
        }

        /* Instructor */
        .instructor-card {
            border: 1px solid #e5e7eb;
            border-radius: 0.75rem;
            padding: 1rem;
            background-color: #f9fafb;
        }

        .instructor-header {
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }

        .instructor-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: #2563eb;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            font-weight: 700;
        }

        .instructor-name {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
            color: #111827;
        }

        .instructor-title {
            color: #4b5563;
            margin: 0;
        }

        .instructor-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #374151;
            font-size: 0.875rem;
        }

        .stat-item i {
            color: #6b7280;
        }

        .instructor-bio {
            color: #374151;
            line-height: 1.7;
        }

        /* Feedback & Reviews */
        .feedback-summary {
            display: grid;
            grid-template-columns: 200px 1fr;
            gap: 4rem;
            margin-bottom: 3rem;
        }

        .rating-overview {
            text-align: center;
        }

        .rating-number-large {
            font-size: 4rem;
            font-weight: 700;
            color: #f59e0b;
        }

        .rating-stars-large {
            font-size: 1.5rem;
            color: #f59e0b;
            margin-bottom: 0.5rem;
        }

        .rating-text {
            color: #4b5563;
        }

        .rating-breakdown {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .rating-bar-item {
            display: grid;
            grid-template-columns: 80px 1fr 60px;
            gap: 1rem;
            align-items: center;
        }

        .rating-bar {
            height: 8px;
            background-color: #e5e7eb;
            border-radius: 0.75rem;
            overflow: hidden;
        }

        .rating-bar-fill {
            height: 100%;
            background-color: #f59e0b;
        }

        .rating-bar-percentage {
            text-align: right;
            color: #4b5563;
            font-size: 0.875rem;
        }

        /* Reviews */
        .reviews-list {
            display: flex;
            flex-direction: column;
            gap: 3rem;
            margin-bottom: 2rem;
        }

        .review-item {
            padding-bottom: 3rem;
            border-bottom: 1px solid #e5e7eb;
        }

        .review-item:last-child {
            border-bottom: none;
        }

        .review-header {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .reviewer-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #374151;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            font-weight: 600;
        }

        .reviewer-name {
            font-size: 1rem;
            margin-bottom: 0.5rem;
            color: #111827;
        }

        .review-meta {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .review-stars {
            color: #f59e0b;
        }

        .review-date {
            color: #6b7280;
            font-size: 0.875rem;
        }

        .review-content p {
            color: #374151;
            line-height: 1.7;
        }

        .review-helpful {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            margin-top: 1.5rem;
            color: #4b5563;
            font-size: 0.875rem;
        }

        .helpful-btn {
            background: none;
            border: 1px solid #d1d5db;
            padding: 0.5rem 1.5rem;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: all 150ms ease-in-out;
        }

        .helpful-btn:hover {
            border-color: #2563eb;
            color: #2563eb;
        }

        .show-more-reviews {
            width: 100%;
        }

        /* Related Courses */
        .related-courses-section {
            padding: 4rem 0;
            background-color: #f9fafb;
        }

        /* Mobile Bottom Bar */
        .mobile-bottom-bar {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #ffffff;
            border-top: 1px solid #e5e7eb;
            padding: 1.5rem;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1030;
        }

        .bottom-bar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 600px;
            margin: 0 auto;
        }

        .bottom-bar-price {
            display: flex;
            flex-direction: column;
        }

        .desktop-only {
            display: block;
        }

        .mobile-sticky {
            display: none;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .product-hero-layout {
                grid-template-columns: 1fr;
            }

            .desktop-only {
                display: none;
            }

            .mobile-bottom-bar {
                display: block;
            }

            .learning-objectives {
                grid-template-columns: 1fr;
            }

            .feedback-summary {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .product-hero-title {
                font-size: 2rem;
            }

            .product-meta-bar {
                flex-direction: column;
                gap: 1rem;
            }

            .instructor-stats {
                grid-template-columns: 1fr;
            }
        }
    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        // Product detail page JavaScript
        function toggleSection(index) {
            const section = document.querySelector(`#section-${index}`).parentElement;
            section.classList.toggle('active');
        }

        document.addEventListener('DOMContentLoaded', function () {
            // Add to cart functionality
            const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
            addToCartButtons.forEach(button => {
                button.addEventListener('click', function () {
                    // Simulate adding to cart
                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class="fas fa-check"></i> Added!';
                    this.style.backgroundColor = 'var(--success)';

                    setTimeout(() => {
                        this.innerHTML = originalText;
                        this.style.backgroundColor = '';
                    }, 2000);

                    // Update cart counter in header
                    const cartCount = document.querySelector('.cart-count');
                    if (cartCount) {
                        const currentCount = parseInt(cartCount.textContent);
                        cartCount.textContent = currentCount + 1;
                    }
                });
            });

            // Wishlist toggle
            const wishlistButtons = document.querySelectorAll('.wishlist-btn');
            wishlistButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const icon = this.querySelector('i');
                    if (icon.classList.contains('far')) {
                        icon.classList.remove('far');
                        icon.classList.add('fas');
                        this.style.color = 'var(--error)';
                    } else {
                        icon.classList.remove('fas');
                        icon.classList.add('far');
                        this.style.color = '';
                    }
                });
            });

            // Helpful review buttons
            const helpfulButtons = document.querySelectorAll('.helpful-btn');
            helpfulButtons.forEach(button => {
                button.addEventListener('click', function () {
                    this.style.backgroundColor = 'var(--primary-color)';
                    this.style.color = 'var(--white)';
                    this.style.borderColor = 'var(--primary-color)';
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\coursehub\resources\views/pages/product-detail.blade.php ENDPATH**/ ?>