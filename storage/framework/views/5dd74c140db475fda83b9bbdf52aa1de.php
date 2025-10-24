<!-- Navigation Header -->
<header class="site-header">
    <nav class="navbar">
        <div class="container">
            <div class="nav-wrapper">
                <!-- Logo -->
                <div class="logo">
                    <a href="<?php echo e(route('home')); ?>">
                        <i class="fas fa-book-reader"></i>
                        <span class="logo-text">CourseHub</span>
                    </a>
                </div>

                <!-- Mobile Menu Toggle -->
                <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle Menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <!-- Navigation Links -->
                <ul class="nav-menu" id="navMenu">
                    <li><a href="<?php echo e(route('home')); ?>" class="<?php echo e(request()->routeIs('home') ? 'active' : ''); ?>">Home</a>
                    </li>
                    <li><a href="<?php echo e(route('products')); ?>"
                            class="<?php echo e(request()->routeIs('products') ? 'active' : ''); ?>">Products</a></li>
                    <li><a href="<?php echo e(route('about')); ?>"
                            class="<?php echo e(request()->routeIs('about') ? 'active' : ''); ?>">About</a></li>
                    <li><a href="<?php echo e(route('contact')); ?>"
                            class="<?php echo e(request()->routeIs('contact') ? 'active' : ''); ?>">Contact</a></li>
                </ul>

                <!-- User Actions -->
                <div class="nav-actions">
                    <button class="search-btn" aria-label="Search">
                        <i class="fas fa-search"></i>
                    </button>
                    <a href="/cart" class="cart-btn">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-count"><?php echo e(count(session('cart', []))); ?>

                        </span>
                    </a>
                    <a href="#" class="btn btn-primary">Sign In</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Search Modal (Hidden by default) -->
    <div class="search-modal" id="searchModal">
        <div class="search-modal-content">
            <button class="search-close" id="searchClose">&times;</button>
            <form action="<?php echo e(route('products')); ?>" method="GET" class="search-form">
                <input type="text" name="search" placeholder="Search for eBooks and courses..." class="search-input">
                <button type="submit" class="search-submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>
</header><?php /**PATH D:\coursehub\resources\views/partials/header.blade.php ENDPATH**/ ?>