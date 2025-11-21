@extends('layouts.app')

@section('title', $product->title . ' - CourseHub')

@section('styles')
    <style>
        .course-detail-header {
            background-color: #f8f9fa;
            color: #2e3a59;
            padding: 40px 0 30px;
            border-bottom: 1px solid #e3e6f0;
        }

        .course-breadcrumb {
            margin-bottom: 15px;
        }

        .breadcrumb-link {
            color: #6c757d;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .breadcrumb-link:hover {
            color: #4e73df;
        }

        .breadcrumb-separator {
            color: #6c757d;
            margin: 0 8px;
        }

        .course-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 10px;
            line-height: 1.3;
        }

        .course-subtitle {
            font-size: 1.1rem;
            color: #6c757d;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .course-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 20px;
        }

        .meta-item {
            display: flex;
            align-items: center;
            color: #6c757d;
        }

        .meta-item i {
            margin-right: 6px;
            font-size: 1rem;
        }

        .course-badge {
            background: #e8eefc;
            color: #4e73df;
            padding: 4px 12px;
            border-radius: 4px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-right: 8px;
        }

        .course-detail-section {
            padding: 40px 0;
        }

        .course-sidebar {
            position: sticky;
            top: 100px;
        }

        .course-preview-card {
            border: 1px solid #e3e6f0;
            border-radius: 8px;
            overflow: hidden;
            background: white;
            margin-bottom: 25px;
        }

        .course-preview-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .course-pricing {
            padding: 20px;
            border-bottom: 1px solid #e3e6f0;
        }

        .current-price {
            font-size: 1.8rem;
            font-weight: 700;
            color: #4e73df;
            margin-bottom: 5px;
        }

        .original-price {
            color: #6c757d;
            text-decoration: line-through;
            font-size: 1.1rem;
            margin-bottom: 8px;
        }

        .discount-badge {
            background: #e74a3b;
            color: white;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .course-actions {
            padding: 20px;
        }

        .btn-enroll {
            background: #4e73df;
            color: white;
            border: none;
            border-radius: 6px;
            padding: 12px 20px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            width: 100%;
            margin-bottom: 10px;
        }

        .btn-enroll:hover {
            background: #224abe;
        }

        .btn-wishlist {
            background: transparent;
            color: #4e73df;
            border: 1px solid #4e73df;
            border-radius: 6px;
            padding: 10px 20px;
            font-weight: 500;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn-wishlist:hover {
            background: #4e73df;
            color: white;
        }

        .course-features {
            padding: 0 20px 20px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #e3e6f0;
        }

        .feature-item:last-child {
            border-bottom: none;
        }

        .feature-icon {
            width: 36px;
            height: 36px;
            background: #e8eefc;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            color: #4e73df;
        }

        .feature-text {
            flex: 1;
        }

        .feature-label {
            color: #6c757d;
            font-size: 0.85rem;
        }

        .feature-value {
            color: #2e3a59;
            font-weight: 600;
        }

        .course-content {
            padding-right: 30px;
        }

        .section-title {
            font-weight: 700;
            color: #2e3a59;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #e3e6f0;
        }

        .instructor-card {
            background: white;
            border: 1px solid #e3e6f0;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 30px;
        }

        .instructor-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .instructor-avatar {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
        }

        .instructor-info h3 {
            font-weight: 700;
            color: #2e3a59;
            margin-bottom: 5px;
        }

        .instructor-title {
            color: #4e73df;
            font-weight: 600;
            margin-bottom: 6px;
        }

        .instructor-rating {
            color: #f39c12;
            margin-bottom: 5px;
            font-size: 0.9rem;
        }

        .instructor-stats {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
        }

        .stat {
            text-align: center;
        }

        .stat-number {
            font-weight: 700;
            color: #4e73df;
            font-size: 1.1rem;
            margin-bottom: 3px;
        }

        .stat-label {
            color: #6c757d;
            font-size: 0.85rem;
        }

        .instructor-bio {
            color: #6c757d;
            line-height: 1.6;
        }

        .curriculum-section {
            margin-bottom: 30px;
        }

        .chapter-card {
            background: white;
            border: 1px solid #e3e6f0;
            border-radius: 6px;
            margin-bottom: 10px;
            overflow: hidden;
        }

        .chapter-header {
            padding: 15px 20px;
            background: #f8f9fa;
            border-bottom: 1px solid #e3e6f0;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .chapter-title {
            font-weight: 600;
            color: #2e3a59;
            margin: 0;
            font-size: 1rem;
        }

        .chapter-meta {
            color: #6c757d;
            font-size: 0.85rem;
        }

        .lesson-list {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .lesson-item {
            padding: 12px 20px;
            border-bottom: 1px solid #e3e6f0;
            display: flex;
            align-items: center;
        }

        .lesson-item:last-child {
            border-bottom: none;
        }

        .lesson-icon {
            width: 28px;
            height: 28px;
            background: #e8eefc;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            color: #4e73df;
            font-size: 0.75rem;
        }

        .lesson-content {
            flex: 1;
        }

        .lesson-title {
            font-weight: 500;
            color: #2e3a59;
            margin-bottom: 3px;
            font-size: 0.95rem;
        }

        .lesson-duration {
            color: #6c757d;
            font-size: 0.8rem;
        }

        .requirements-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .requirements-list li {
            padding: 6px 0;
            color: #6c757d;
            position: relative;
            padding-left: 22px;
        }

        .requirements-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #1cc88a;
            font-weight: bold;
        }

        .testimonials-section {
            margin-top: 40px;
        }

        .testimonial-card {
            background: white;
            border: 1px solid #e3e6f0;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 15px;
        }

        .testimonial-rating {
            color: #f39c12;
            margin-bottom: 10px;
        }

        .testimonial-text {
            color: #6c757d;
            font-style: italic;
            line-height: 1.5;
            margin-bottom: 12px;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .author-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 12px;
        }

        .author-info h5 {
            font-weight: 600;
            color: #2e3a59;
            margin-bottom: 3px;
            font-size: 0.95rem;
        }

        .author-info p {
            color: #6c757d;
            margin: 0;
            font-size: 0.85rem;
        }

        @media (max-width: 768px) {
            .course-title {
                font-size: 1.7rem;
            }

            .course-content {
                padding-right: 0;
                margin-bottom: 30px;
            }

            .course-sidebar {
                position: static;
            }
        }

        /* Cart-specific styles */
        .btn-cart {
            background: #4e73df;
            color: white;
            border: none;
            border-radius: 6px;
            padding: 12px 20px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            width: 100%;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-cart:hover {
            background: #224abe;
        }

        .btn-cart.added {
            background: #1cc88a;
        }

        .btn-cart.added:hover {
            background: #17a673;
        }

        .cart-success-message {
            background: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            padding: 10px 12px;
            border-radius: 6px;
            margin-bottom: 15px;
            display: none;
        }
    </style>
@endsection

@section('content')
    <!-- Course Header -->
    <section class="course-detail-header">
        <div class="container">
            <div class="course-breadcrumb">
                <a href="{{ route('home') }}" class="breadcrumb-link">Home</a>
                <span class="breadcrumb-separator">/</span>
                <a href="{{ route('products.index') }}" class="breadcrumb-link">Courses</a>
                <span class="breadcrumb-separator">/</span>
                <span class="breadcrumb-link">{{ $product->category->name ?? 'General' }}</span>
            </div>

            <h1 class="course-title">{{ $product->title }}</h1>
            <p class="course-subtitle">
                {{ $product->subtitle ?? 'Master this skill with our comprehensive course designed for all levels' }}</p>

            <div class="course-meta">
                <div class="meta-item">
                    <i class="fas fa-star"></i>
                    <span>4.8 (1,245 reviews)</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-users"></i>
                    <span>12,450 students</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-signal"></i>
                    <span>{{ $product->level ?? 'Intermediate' }} Level</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-clock"></i>
                    <span>Last updated {{ $product->updated_at->format('M Y') }}</span>
                </div>
            </div>

            <div class="course-badges">
                <span class="course-badge">
                    <i class="fas fa-bolt me-1"></i>Bestseller
                </span>
                @if ($product->discount_price)
                    <span class="course-badge">
                        <i class="fas fa-tag me-1"></i>Limited Time Offer
                    </span>
                @endif
            </div>
        </div>
    </section>

    <!-- Course Detail -->
    <section class="course-detail-section">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="course-content">
                        <div class="cart-success-message" id="cartSuccessMessage">
                            <i class="fas fa-check-circle me-2"></i>
                            <span id="successMessageText">Course added to cart successfully!</span>
                        </div>

                        <div class="mb-4">
                            <h2 class="section-title">Course Description</h2>
                            <div style="line-height: 1.6; color: #6c757d;">
                                {!! nl2br(e($product->description)) !!}
                            </div>
                        </div>

                        <!-- Curriculum -->
                        <div class="curriculum-section">
                            <h2 class="section-title">Course Content</h2>
                            <div class="chapter-card">
                                <div class="chapter-header">
                                    <h3 class="chapter-title">Getting Started</h3>
                                    <div class="chapter-meta">5 lectures • 45 min</div>
                                </div>
                                <ul class="lesson-list">
                                    <li class="lesson-item">
                                        <div class="lesson-icon">
                                            <i class="fas fa-play"></i>
                                        </div>
                                        <div class="lesson-content">
                                            <div class="lesson-title">Welcome to the Course</div>
                                            <div class="lesson-duration">10:25</div>
                                        </div>
                                    </li>
                                    <li class="lesson-item">
                                        <div class="lesson-icon">
                                            <i class="fas fa-play"></i>
                                        </div>
                                        <div class="lesson-content">
                                            <div class="lesson-title">Course Overview & Objectives</div>
                                            <div class="lesson-duration">15:30</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="chapter-card">
                                <div class="chapter-header">
                                    <h3 class="chapter-title">Core Concepts</h3>
                                    <div class="chapter-meta">12 lectures • 3h 20min</div>
                                </div>
                            </div>

                            <div class="chapter-card">
                                <div class="chapter-header">
                                    <h3 class="chapter-title">Advanced Topics</h3>
                                    <div class="chapter-meta">8 lectures • 2h 15min</div>
                                </div>
                            </div>
                        </div>

                        <!-- Requirements -->
                        <div class="mb-4">
                            <h2 class="section-title">Requirements</h2>
                            <ul class="requirements-list">
                                <li>Basic computer skills</li>
                                <li>No prior experience required</li>
                                <li>Willingness to learn and practice</li>
                                <li>Computer with internet connection</li>
                            </ul>
                        </div>

                        <!-- Instructor -->
                        <div class="instructor-card">
                            <h2 class="section-title">Instructor</h2>
                            <div class="instructor-header">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&h=200&q=80"
                                    alt="John Smith" class="instructor-avatar">
                                <div class="instructor-info">
                                    <h3>John Smith</h3>
                                    <div class="instructor-title">Senior Developer & Instructor</div>
                                    <div class="instructor-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        4.8 Instructor Rating
                                    </div>
                                </div>
                            </div>
                            <div class="instructor-stats mb-3">
                                <div class="stat">
                                    <div class="stat-number">45,289</div>
                                    <div class="stat-label">Students</div>
                                </div>
                                <div class="stat">
                                    <div class="stat-number">12</div>
                                    <div class="stat-label">Courses</div>
                                </div>
                                <div class="stat">
                                    <div class="stat-number">8,245</div>
                                    <div class="stat-label">Reviews</div>
                                </div>
                            </div>
                            <p class="instructor-bio">
                                John is a senior developer with over 10 years of experience in the industry.
                                He has worked with major tech companies and startups, helping them build
                                scalable applications. His passion for teaching has helped thousands of
                                students launch their tech careers.
                            </p>
                        </div>

                        <!-- Testimonials -->
                        <div class="testimonials-section">
                            <h2 class="section-title">Student Testimonials</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="testimonial-card">
                                        <div class="testimonial-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="testimonial-text">
                                            "This course completely transformed my understanding of the subject. The
                                            instructor explains complex topics in a very simple way."
                                        </p>
                                        <div class="testimonial-author">
                                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&h=100&q=80"
                                                alt="Sarah Johnson" class="author-avatar">
                                            <div class="author-info">
                                                <h5>Sarah Johnson</h5>
                                                <p>Web Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-card">
                                        <div class="testimonial-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="testimonial-text">
                                            "The hands-on projects were incredibly valuable. I was able to apply what I
                                            learned immediately in my job."
                                        </p>
                                        <div class="testimonial-author">
                                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&h=100&q=80"
                                                alt="Mike Chen" class="author-avatar">
                                            <div class="author-info">
                                                <h5>Mike Chen</h5>
                                                <p>Software Engineer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="course-sidebar">
                        <div class="course-preview-card">
                            <img src="{{ $product->image ?? 'https://images.unsplash.com/photo-1501504905252-473c47e087f8?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&h=300&q=80' }}"
                                alt="{{ $product->title }}" class="course-preview-image">

                            <div class="course-pricing">
                                <div class="current-price">${{ $product->final_price }}</div>
                                @if ($product->discount_price)
                                    <div class="original-price">${{ $product->price }}</div>
                                    <span class="discount-badge">
                                        Save ${{ number_format($product->price - $product->final_price, 2) }}
                                    </span>
                                @endif
                            </div>

                            <div class="course-actions">
                                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-cart" id="addToCartBtn">
                                        <i class="fas fa-shopping-cart me-2"></i>Add to Cart
                                    </button>
                                </form>
                                <button class="btn btn-wishlist">
                                    <i class="fas fa-heart me-2"></i>Add to Wishlist
                                </button>
                            </div>
                            <div class="course-features">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-play-circle"></i>
                                    </div>
                                    <div class="feature-text">
                                        <div class="feature-label">Total Lessons</div>
                                        <div class="feature-value">25 lectures</div>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="feature-text">
                                        <div class="feature-label">Duration</div>
                                        <div class="feature-value">6.5 hours</div>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-signal"></i>
                                    </div>
                                    <div class="feature-text">
                                        <div class="feature-label">Level</div>
                                        <div class="feature-value">{{ $product->level ?? 'Intermediate' }}</div>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-certificate"></i>
                                    </div>
                                    <div class="feature-text">
                                        <div class="feature-label">Certificate</div>
                                        <div class="feature-value">Yes</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection