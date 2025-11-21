@extends('layouts.app')

@section('title', 'Home - CourseHub')

@section('styles')
<style>
    /* Home Page Specific Styles */
    .hero-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.807), rgba(0, 0, 0, 0.5)), 
                              url('https://images.unsplash.com/photo-1504805572947-34fad45aed93?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            color: white;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }
        
        .hero-content {
            max-width: 700px;
        }
        
        .btn-hero {
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 30px;
            transition: all 0.3s ease;
        }
        
        .btn-hero:hover {
            color: #1a233a;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
    
    .categories-section {
        padding: 80px 0;
        background: #fff;
    }
    
    .category-card {
        border: none;
        border-radius: 15px;
        padding: 30px 20px;
        text-align: center;
        transition: all 0.3s ease;
        background: white;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        height: 100%;
        position: relative;
        overflow: hidden;
    }
    
    .category-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #4e73df, #224abe);
    }
    
    .category-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }
    
    .category-icon {
        width: 80px;
        height: 80px;
        background: #e8eefc;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        color: #4e73df;
        font-size: 2rem;
        transition: all 0.3s ease;
    }
    
    .category-card:hover .category-icon {
        background: #4e73df;
        color: white;
        transform: scale(1.1);
    }
    
    .category-title {
        font-weight: 600;
        color: #2e3a59;
        margin-bottom: 15px;
        font-size: 1.3rem;
    }
    
    .category-description {
        color: #6c757d;
        margin-bottom: 20px;
        line-height: 1.6;
    }
    
    .btn-category {
        background: transparent;
        color: #4e73df;
        border: 2px solid #4e73df;
        border-radius: 25px;
        padding: 8px 25px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .btn-category:hover {
        background: #4e73df;
        color: white;
        transform: translateY(-2px);
    }
    
    .courses-section {
        padding: 80px 0;
        background: #f8f9fa;
    }
    
    .course-card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s ease;
        background: white;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        height: 100%;
    }
    
    .course-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }
    
    .course-image {
        height: 200px;
        object-fit: cover;
        width: 100%;
    }
    
    .course-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        background: #4e73df;
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
    }
    
    .course-body {
        padding: 25px;
    }
    
    .course-title {
        font-weight: 600;
        color: #2e3a59;
        margin-bottom: 10px;
        font-size: 1.2rem;
        line-height: 1.4;
    }
    
    .course-description {
        color: #6c757d;
        margin-bottom: 15px;
        line-height: 1.5;
    }
    
    .course-price {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 15px;
    }
    
    .current-price {
        font-weight: 700;
        color: #4e73df;
        font-size: 1.3rem;
    }
    
    .original-price {
        color: #6c757d;
        text-decoration: line-through;
        font-size: 1rem;
    }
    
    .btn-course {
        background: #4e73df;
        color: white;
        border: none;
        border-radius: 8px;
        padding: 10px 20px;
        font-weight: 500;
        transition: all 0.3s ease;
        width: 100%;
    }
    
    .btn-course:hover {
        background: #224abe;
        transform: translateY(-2px);
    }
    
    .btn-view-all {
        background: transparent;
        color: #4e73df;
        border: 2px solid #4e73df;
        border-radius: 30px;
        padding: 12px 40px;
        font-weight: 600;
        transition: all 0.3s ease;
        font-size: 1.1rem;
    }
    
    .btn-view-all:hover {
        background: #4e73df;
        color: white;
        transform: translateY(-3px);
    }
    
    .stats-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #2e3a59 0%, #1a233a 100%);
        color: white;
    }
    
    .stat-item {
        text-align: center;
        padding: 20px;
    }
    
    .stat-number {
        font-size: 3rem;
        font-weight: 700;
        color: #4e73df;
        margin-bottom: 10px;
    }
    
    .stat-label {
        color: #a0a7b8;
        font-weight: 500;
        font-size: 1.1rem;
    }
    
    .testimonials-section {
        padding: 80px 0;
        background: white;
    }
    
    .testimonial-card {
        background: #f8f9fa;
        border-radius: 15px;
        padding: 30px;
        margin: 15px;
        position: relative;
    }
    
    .testimonial-card::before {
        content: '"';
        position: absolute;
        top: 20px;
        left: 25px;
        font-size: 4rem;
        color: #e8eefc;
        font-family: Georgia, serif;
        line-height: 1;
    }
    
    .testimonial-text {
        font-style: italic;
        color: #6c757d;
        margin-bottom: 20px;
        line-height: 1.6;
        position: relative;
        z-index: 2;
    }
    
    .testimonial-author {
        display: flex;
        align-items: center;
    }
    
    .author-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 15px;
    }
    
    .author-info h5 {
        font-weight: 600;
        color: #2e3a59;
        margin-bottom: 5px;
    }
    
    .author-info p {
        color: #6c757d;
        margin: 0;
        font-size: 0.9rem;
    }
    
    .section-title {
        font-weight: 700;
        margin-bottom: 50px;
        color: #2e3a59;
        position: relative;
        padding-bottom: 15px;
        text-align: center;
    }
    
    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: #4e73df;
        border-radius: 2px;
    }
    
    .section-title.light {
        color: white;
    }
    
    .section-title.light::after {
        background: white;
    }
    
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }
        
        .hero-subtitle {
            font-size: 1.1rem;
        }
        
        .stat-number {
            font-size: 2.5rem;
        }
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="hero-section">
        <div class="container">
            <div class="hero-content mx-auto text-center">
                <h1 class="display-3 fw-bold mb-4">Welcome to Our Amazing Platform</h1>
                <p class="lead mb-4">Discover innovative solutions that will transform your business and take it to the next level. Join thousands of satisfied customers today.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" class="btn btn-primary btn-lg btn-hero">
                        <a style="color: inherit; text-decoration: none;" href="{{ route('products.index') }}">
                            View Courses
                        </a>
                    </button>
                    <button type="button" class="btn btn-outline-light btn-lg btn-hero">
                        <a style="color: inherit; text-decoration: none;" href="{{ route('products.index') }}">
                            Contact Us
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <h2 class="section-title light">Why Learn With CourseHub?</h2>
        <div class="row">
            <div class="col-md-3 col-6 stat-item">
                <div class="stat-number">10,000+</div>
                <div class="stat-label">Online Courses</div>
            </div>
            <div class="col-md-3 col-6 stat-item">
                <div class="stat-number">2,500+</div>
                <div class="stat-label">Expert Instructors</div>
            </div>
            <div class="col-md-3 col-6 stat-item">
                <div class="stat-number">500,000+</div>
                <div class="stat-label">Happy Students</div>
            </div>
            <div class="col-md-3 col-6 stat-item">
                <div class="stat-number">Lifetime</div>
                <div class="stat-label">Access</div>
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="categories-section">
    <div class="container">
        <h2 class="section-title">Popular Categories</h2>
        <div class="row">
            @foreach($categories as $category)
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="category-card">
                    <div class="category-icon">
                        @if($category->name == 'Web Development')
                        <i class="fas fa-laptop-code"></i>
                        @elseif($category->name == 'Data Science')
                        <i class="fas fa-chart-bar"></i>
                        @elseif($category->name == 'Digital Marketing')
                        <i class="fas fa-bullhorn"></i>
                        @elseif($category->name == 'Business')
                        <i class="fas fa-briefcase"></i>
                        @else
                        <i class="fas fa-graduation-cap"></i>
                        @endif
                    </div>
                    <h3 class="category-title">{{ $category->name }}</h3>
                    <p class="category-description">{{ $category->description ?? 'Explore the latest courses in this field' }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Featured Courses -->
<section class="courses-section">
    <div class="container">
        <h2 class="section-title">Featured Courses</h2>
        <div class="row">
            @foreach($products as $product)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-card">
                    <div class="position-relative">
                        <img src="{{ $product->image ?? 'https://images.unsplash.com/photo-1501504905252-473c47e087f8?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&h=300&q=80' }}" class="course-image" alt="{{ $product->title }}">
                        @if($product->discount_price)
                        <span class="course-badge">Sale</span>
                        @endif
                    </div>
                    <div class="course-body">
                        <h3 class="course-title">{{ $product->title }}</h3>
                        <p class="course-description">{{ Str::limit($product->description, 100) }}</p>
                        <div class="course-price">
                            <span class="current-price">${{ $product->final_price }}</span>
                            @if($product->discount_price)
                            <span class="original-price">${{ $product->price }}</span>
                            @endif
                        </div>
                        <a href="{{ route('products.show', $product->slug) }}" class="btn btn-course">
                            <i class="fas fa-eye me-2"></i>View Course
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-5">
            <a href="{{ route('products.index') }}" class="btn btn-view-all">
                View All Courses <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section">
    <div class="container">
        <h2 class="section-title">What Our Students Say</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="testimonial-card">
                    <p class="testimonial-text">"CourseHub transformed my career. The courses are well-structured and the instructors are true experts in their fields."</p>
                    <div class="testimonial-author">
                        <img src="https://plus.unsplash.com/premium_photo-1664298528358-790433ba0815?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Sarah Johnson" class="author-avatar">
                        <div class="author-info">
                            <h5>Sarah Johnson</h5>
                            <p>Web Developer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-card">
                    <p class="testimonial-text">"The quality of courses on CourseHub is outstanding. I've gained practical skills that I use every day in my job."</p>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&h=100&q=80" alt="Michael Chen" class="author-avatar">
                        <div class="author-info">
                            <h5>Michael Chen</h5>
                            <p>Data Scientist</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-card">
                    <p class="testimonial-text">"As a busy professional, the flexible learning schedule was perfect for me. I could learn at my own pace."</p>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&h=100&q=80" alt="Emily Davis" class="author-avatar">
                        <div class="author-info">
                            <h5>Emily Davis</h5>
                            <p>Marketing Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection