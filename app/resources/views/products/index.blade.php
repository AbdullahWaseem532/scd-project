@extends('layouts.app')

@section('title', 'All Courses - CourseHub')

@section('styles')
<style>
    .courses-header {
        background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
        color: white;
        padding: 80px 0 60px;
        text-align: center;
    }
    
    .courses-title {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 15px;
    }
    
    .courses-subtitle {
        font-size: 1.2rem;
        opacity: 0.9;
        max-width: 600px;
        margin: 0 auto;
    }
    
    .courses-section {
        padding: 80px 0;
        background: #f8f9fa;
    }
    
    .courses-count {
        color: #6c757d;
        margin-bottom: 30px;
        font-size: 1.1rem;
    }
    
    .course-card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s ease;
        background: white;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        height: 100%;
        margin-bottom: 30px;
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
    
    .course-badge.popular {
        background: #e74a3b;
    }
    
    .course-badge.new {
        background: #1cc88a;
    }
    
    .course-body {
        padding: 25px;
    }
    
    .course-category {
        color: #4e73df;
        font-weight: 600;
        font-size: 0.9rem;
        margin-bottom: 8px;
        display: block;
    }
    
    .course-title {
        font-weight: 600;
        color: #2e3a59;
        margin-bottom: 12px;
        font-size: 1.3rem;
        line-height: 1.4;
        height: 60px;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }
    
    .course-description {
        color: #6c757d;
        margin-bottom: 15px;
        line-height: 1.5;
        height: 72px;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }
    
    .course-instructor {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }
    
    .instructor-avatar {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 10px;
    }
    
    .instructor-name {
        color: #6c757d;
        font-size: 0.9rem;
        font-weight: 500;
    }
    
    .course-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        padding-top: 15px;
        border-top: 1px solid #e3e6f0;
    }
    
    .meta-item {
        display: flex;
        align-items: center;
        color: #6c757d;
        font-size: 0.85rem;
    }
    
    .meta-item i {
        margin-right: 5px;
        color: #4e73df;
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
        font-size: 1.4rem;
    }
    
    .original-price {
        color: #6c757d;
        text-decoration: line-through;
        font-size: 1rem;
    }
    
    .discount-badge {
        background: #e74a3b;
        color: white;
        padding: 3px 8px;
        border-radius: 12px;
        font-size: 0.8rem;
        font-weight: 600;
    }
    
    .btn-course {
        background: #4e73df;
        color: white;
        border: none;
        border-radius: 8px;
        padding: 12px 20px;
        font-weight: 500;
        transition: all 0.3s ease;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .btn-course:hover {
        background: #224abe;
        transform: translateY(-2px);
    }
    
    .empty-state {
        text-align: center;
        padding: 60px 20px;
    }
    
    .empty-icon {
        font-size: 4rem;
        color: #e3e6f0;
        margin-bottom: 20px;
    }
    
    .empty-title {
        color: #6c757d;
        font-size: 1.5rem;
        margin-bottom: 10px;
    }
    
    .empty-text {
        color: #a0a7b8;
        margin-bottom: 30px;
    }
    
    .pagination-container {
        margin-top: 50px;
    }
    
    .page-link {
        color: #4e73df;
        border: 1px solid #e3e6f0;
        padding: 10px 18px;
    }
    
    .page-item.active .page-link {
        background-color: #4e73df;
        border-color: #4e73df;
    }
    
    .page-link:hover {
        color: #224abe;
        background-color: #f8f9fa;
        border-color: #e3e6f0;
    }
    
    @media (max-width: 768px) {
        .courses-title {
            font-size: 2.2rem;
        }
        
        .course-title {
            font-size: 1.2rem;
            height: auto;
        }
        
        .course-description {
            height: auto;
        }
    }
</style>
@endsection

@section('content')
<!-- Courses Header -->
<section class="courses-header">
    <div class="container">
        <h1 class="courses-title">All Courses</h1>
        <p class="courses-subtitle">Discover thousands of courses from industry experts and advance your career today</p>
    </div>
</section>

<!-- Courses Listing -->
<section class="courses-section">
    <div class="container">
        <div class="courses-count">
            Showing {{ $products->count() }} of {{ $products->total() }} courses
        </div>
        
        <div class="row">
            @if($products->count() > 0)
                @foreach($products as $product)
                <div class="col-lg-4 col-md-6">
                    <div class="course-card">
                        <div class="position-relative">
                            <img src="{{ $product->image ?? 'https://images.unsplash.com/photo-1501504905252-473c47e087f8?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&h=300&q=80' }}" 
                                 class="course-image" 
                                 alt="{{ $product->title }}">
                            
                            @if($product->is_popular)
                            <span class="course-badge popular">
                                <i class="fas fa-fire me-1"></i>Popular
                            </span>
                            @elseif($product->is_new)
                            <span class="course-badge new">
                                <i class="fas fa-star me-1"></i>New
                            </span>
                            @endif
                        </div>
                        
                        <div class="course-body">
                            <span class="course-category">
                                {{ $product->category->name ?? 'General' }}
                            </span>
                            
                            <h3 class="course-title">{{ $product->title }}</h3>
                            
                            <p class="course-description">
                                {{ Str::limit($product->description, 120) }}
                            </p>
                            
                            <div class="course-instructor">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&h=100&q=80" 
                                     alt="Instructor" 
                                     class="instructor-avatar">
                                <span class="instructor-name">
                                    {{ $product->instructor ?? 'Expert Instructor' }}
                                </span>
                            </div>
                            
                            <div class="course-meta">
                                <div class="meta-item">
                                    <i class="fas fa-play-circle"></i>
                                    {{ $product->lessons_count ?? 12 }} Lessons
                                </div>
                                <div class="meta-item">
                                    <i class="fas fa-clock"></i>
                                    {{ $product->duration ?? '6h 30m' }}
                                </div>
                                <div class="meta-item">
                                    <i class="fas fa-signal"></i>
                                    {{ $product->level ?? 'Intermediate' }}
                                </div>
                            </div>
                            
                            <div class="course-price">
                                <div>
                                    <span class="current-price">${{ $product->final_price }}</span>
                                    @if($product->discount_price)
                                    <span class="original-price ms-2">${{ $product->price }}</span>
                                    @endif
                                </div>
                                @if($product->discount_price)
                                <span class="discount-badge">
                                    Save {{ number_format((($product->price - $product->final_price) / $product->price) * 100) }}%
                                </span>
                                @endif
                            </div>
                            
                            <a href="{{ route('products.show', $product->slug) }}" class="btn btn-course">
                                <i class="fas fa-shopping-cart me-2"></i>Enroll Now
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
            <div class="col-12">
                <div class="empty-state">
                    <div class="empty-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3 class="empty-title">No Courses Available</h3>
                    <p class="empty-text">We're working on adding new courses. Please check back later.</p>
                    <a href="{{ route('home') }}" class="btn btn-primary">
                        <i class="fas fa-home me-2"></i>Back to Home
                    </a>
                </div>
            </div>
            @endif
        </div>
        
        <!-- Pagination -->
        @if($products->hasPages())
        <div class="pagination-container">
            <nav aria-label="Course pagination">
                <ul class="pagination justify-content-center">
                    {{-- Previous Page Link --}}
                    @if($products->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">
                            <i class="fas fa-chevron-left me-1"></i> Previous
                        </span>
                    </li>
                    @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $products->previousPageUrl() }}">
                            <i class="fas fa-chevron-left me-1"></i> Previous
                        </a>
                    </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $products->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                    @endforeach

                    {{-- Next Page Link --}}
                    @if($products->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $products->nextPageUrl() }}">
                            Next <i class="fas fa-chevron-right ms-1"></i>
                        </a>
                    </li>
                    @else
                    <li class="page-item disabled">
                        <span class="page-link">
                            Next <i class="fas fa-chevron-right ms-1"></i>
                        </span>
                    </li>
                    @endif
                </ul>
            </nav>
        </div>
        @endif
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Simple animation for course cards
    document.addEventListener('DOMContentLoaded', function() {
        const courseCards = document.querySelectorAll('.course-card');
        
        courseCards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            
            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 100 * index);
        });
    });
</script>
@endsection