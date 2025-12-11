<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CourseHub - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Custom CSS */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            color: #4e73df !important;
        }
        
        .hero-section {
            background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
            color: white;
            padding: 100px 0;
            margin-bottom: 50px;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .hero-subtitle {
            font-size: 1.3rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }
        
        .btn-hero {
            background-color: #f8f9fa;
            color: #4e73df;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 30px;
            transition: all 0.3s;
        }
        
        .btn-hero:hover {
            background-color: #e2e6ea;
            transform: translateY(-2px);
        }
        
        .section-title {
            font-weight: 700;
            margin-bottom: 40px;
            color: #2e3a59;
            position: relative;
            padding-bottom: 15px;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: #4e73df;
            border-radius: 2px;
        }
        
        .card-course {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            height: 100%;
        }
        
        .card-course:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .card-img-top {
            height: 180px;
            object-fit: cover;
        }
        
        .card-body {
            padding: 25px;
        }
        
        .card-title {
            font-weight: 600;
            color: #2e3a59;
            margin-bottom: 10px;
        }
        
        .card-text {
            color: #6c757d;
            margin-bottom: 15px;
        }
        
        .price-tag {
            font-weight: 700;
            color: #4e73df;
            font-size: 1.2rem;
        }
        
        .badge-category {
            background-color: #e8eefc;
            color: #4e73df;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .footer {
            background-color: #2e3a59 !important;
            padding: 50px 0 20px;
        }
        
        .footer-heading {
            font-weight: 600;
            margin-bottom: 20px;
            color: #fff;
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #a0a7b8;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: #fff;
        }
        
        .copyright {
            border-top: 1px solid #3a486b;
            padding-top: 20px;
            margin-top: 40px;
            color: #a0a7b8;
        }
        
        .navbar {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 15px 0;
        }
        
        .nav-link {
            font-weight: 500;
            margin: 0 5px;
            border-radius: 5px;
            transition: all 0.3s;
        }
        
        .nav-link:hover {
            background-color: rgba(255,255,255,0.1);
        }
        
        .hover-bg-light:hover {
            background-color: #f8f9fa;
        }
        
        .search-container {
            max-width: 300px;
            width: 100%;
        }
        
        @media (max-width: 991px) {
            .search-container {
                max-width: 100%;
                margin: 10px 0 !important;
            }
        }
        
        .cart-badge {
            position: relative;
            top: -8px;
            left: 2px;
        }
        
        .feature-icon {
            width: 70px;
            height: 70px;
            background: #e8eefc;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: #4e73df;
            font-size: 1.8rem;
        }
        
        .stats-section {
            background-color: #f0f3f9;
            padding: 70px 0;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #4e73df;
            margin-bottom: 10px;
        }
        
        .stat-label {
            color: #6c757d;
            font-weight: 500;
        }
        
        .testimonial-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin: 15px 0;
        }
        
        .testimonial-text {
            font-style: italic;
            color: #6c757d;
            margin-bottom: 20px;
        }
        
        .testimonial-author {
            font-weight: 600;
            color: #2e3a59;
            margin-bottom: 5px;
        }
        
        .testimonial-role {
            color: #a0a7b8;
            font-size: 0.9rem;
        }
        
        .avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
        }
    </style>
    @yield('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                CourseHub
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                            <i class="fas fa-home me-1"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">
                            <i class="fas fa-book me-1"></i> Courses
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">
                            <i class="fas fa-envelope me-1"></i> Contact
                        </a>
                    </li>
                </ul>
                <div class="me-3 position-relative search-container">
                    <input type="text" 
                           class="form-control" 
                           id="searchInput" 
                           placeholder="Search courses or categories..."
                           autocomplete="off">
                    <div id="searchResults" class="position-absolute bg-white border rounded shadow-lg mt-1 w-100" style="display: none; max-height: 400px; overflow-y: auto; z-index: 1000; top: 100%;">
                    </div>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="{{ route('cart.index') }}">
                            <i class="fas fa-shopping-cart me-1"></i> Cart
                            @if(count(session('cart', [])) > 0)
                                <span class="badge bg-primary cart-badge">{{ count(session('cart', [])) }}</span>
                            @endif
                        </a>
                    </li>
                    @auth
                        @if(Auth::user()->is_admin)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                                    <i class="fas fa-cog me-1"></i> Admin
                                </a>
                            </li>
                        @endif
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-user me-1"></i> {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                {{-- <li><a class="dropdown-item" href="#"><i class="fas fa-user-circle me-2"></i> Profile</a></li> --}}
                                {{-- <li><a class="dropdown-item" href="#"><i class="fas fa-bookmark me-2"></i> My Courses</a></li> --}}
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                <i class="fas fa-sign-in-alt me-1"></i> Login
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="footer-heading">
                        <i class="fas fa-graduation-cap me-2"></i>CourseHub
                    </h5>
                    <p>Your premier destination for high-quality online courses. Learn from industry experts and advance your career.</p>
                    <div class="mt-4">
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="footer-heading">Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('products.index') }}">Courses</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="footer-heading">Categories</h5>
                    <ul class="footer-links">
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Data Science</a></li>
                        <li><a href="#">Digital Marketing</a></li>
                        <li><a href="#">Business</a></li>
                        <li><a href="#">Design</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="footer-heading">Newsletter</h5>
                    <p>Subscribe to get updates on new courses and offers.</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Your email">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center copyright">
                    <p>&copy; 2025 CourseHub. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple AJAX Search
        let searchTimeout;
        const searchInput = document.getElementById('searchInput');
        const searchResults = document.getElementById('searchResults');

        searchInput.addEventListener('input', function() {
            const query = this.value.trim();
            
            clearTimeout(searchTimeout);
            
            if (query.length < 2) {
                searchResults.style.display = 'none';
                return;
            }

            searchTimeout = setTimeout(() => {
                fetch(`/search?q=${encodeURIComponent(query)}`)
                    .then(response => response.json())
                    .then(data => {
                        displayResults(data);
                    })
                    .catch(error => {
                        console.error('Search error:', error);
                    });
            }, 300);
        });

        function displayResults(data) {
            if (data.products.length === 0 && data.categories.length === 0) {
                searchResults.innerHTML = '<div class="p-3 text-muted">No results found</div>';
                searchResults.style.display = 'block';
                return;
            }

            let html = '';
            
            if (data.categories.length > 0) {
                html += '<div class="p-2 border-bottom"><strong class="text-muted small">CATEGORIES</strong></div>';
                data.categories.forEach(category => {
                    html += `<a href="/courses?category=${category.slug}" class="d-block p-2 text-decoration-none text-dark hover-bg-light">
                        <i class="fas fa-folder me-2 text-primary"></i>${category.name}
                    </a>`;
                });
            }

            if (data.products.length > 0) {
                html += '<div class="p-2 border-bottom"><strong class="text-muted small">COURSES</strong></div>';
                data.products.forEach(product => {
                    const price = product.discount_price ? 
                        `<span class="text-muted text-decoration-line-through me-2">$${product.price}</span><span class="text-primary fw-bold">$${product.discount_price}</span>` :
                        `<span class="text-primary fw-bold">$${product.price}</span>`;
                    
                    html += `<a href="/courses/${product.slug}" class="d-block p-2 text-decoration-none text-dark hover-bg-light border-bottom">
                        <div class="d-flex align-items-center">
                            <img src="${product.image || 'https://via.placeholder.com/50'}" 
                                 class="me-2" 
                                 style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;">
                            <div class="flex-grow-1">
                                <div class="fw-semibold">${product.title}</div>
                                <small class="text-muted">${product.category}</small>
                                <div class="mt-1">${price}</div>
                            </div>
                        </div>
                    </a>`;
                });
            }

            searchResults.innerHTML = html;
            searchResults.style.display = 'block';
        }

        // Hide results when clicking outside
        document.addEventListener('click', function(e) {
            if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
                searchResults.style.display = 'none';
            }
        });
    </script>
    @yield('scripts')
</body>
</html>