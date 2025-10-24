

<?php $__env->startSection('title', 'All Courses - CourseHub'); ?>
<?php $__env->startSection('description', 'Browse our complete collection of premium eBooks and digital courses across multiple categories.'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="breadcrumb">
                <a href="<?php echo e(route('home')); ?>">Home</a>
                <span class="separator">/</span>
                <span>Products</span>
            </div>
            <h1 class="page-title">All Courses</h1>
            <p class="page-description">Explore our comprehensive collection of expert-led courses</p>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products-section">
        <div class="container">
            <div class="products-layout">
                <!-- Sidebar Filters -->
                <button class="btn btn-primary" id="showFilters">Filters</button>
                <aside class="products-sidebar">
                    <div class="filter-section">
                        <h3 class="filter-title">Categories</h3>
                        <div class="filter-group">
                            <label class="filter-option">
                                <input type="checkbox" name="category[]" value="web-development">
                                <span>Web Development</span>
                                <span class="filter-count">(120)</span>
                            </label>
                            <label class="filter-option">
                                <input type="checkbox" name="category[]" value="data-science">
                                <span>Data Science</span>
                                <span class="filter-count">(85)</span>
                            </label>
                            <label class="filter-option">
                                <input type="checkbox" name="category[]" value="marketing">
                                <span>Marketing</span>
                                <span class="filter-count">(95)</span>
                            </label>
                            <label class="filter-option">
                                <input type="checkbox" name="category[]" value="design">
                                <span>Design</span>
                                <span class="filter-count">(110)</span>
                            </label>
                            <label class="filter-option">
                                <input type="checkbox" name="category[]" value="business">
                                <span>Business</span>
                                <span class="filter-count">(75)</span>
                            </label>
                            <label class="filter-option">
                                <input type="checkbox" name="category[]" value="personal">
                                <span>Personal Development</span>
                                <span class="filter-count">(60)</span>
                            </label>
                        </div>
                    </div>

                    <div class="filter-section">
                        <h3 class="filter-title">Price Range</h3>
                        <div class="filter-group">
                            <label class="filter-option">
                                <input type="radio" name="price" value="all" checked>
                                <span>All Prices</span>
                            </label>
                            <label class="filter-option">
                                <input type="radio" name="price" value="free">
                                <span>Free</span>
                            </label>
                            <label class="filter-option">
                                <input type="radio" name="price" value="0-25">
                                <span>Under $25</span>
                            </label>
                            <label class="filter-option">
                                <input type="radio" name="price" value="25-50">
                                <span>$25 - $50</span>
                            </label>
                            <label class="filter-option">
                                <input type="radio" name="price" value="50-100">
                                <span>$50 - $100</span>
                            </label>
                            <label class="filter-option">
                                <input type="radio" name="price" value="100+">
                                <span>$100+</span>
                            </label>
                        </div>
                    </div>

                    <div class="filter-section">
                        <h3 class="filter-title">Rating</h3>
                        <div class="filter-group">
                            <label class="filter-option">
                                <input type="checkbox" name="rating[]" value="5">
                                <span class="rating-filter">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                            </label>
                            <label class="filter-option">
                                <input type="checkbox" name="rating[]" value="4">
                                <span class="rating-filter">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>& up</span>
                                </span>
                            </label>
                            <label class="filter-option">
                                <input type="checkbox" name="rating[]" value="3">
                                <span class="rating-filter">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>& up</span>
                                </span>
                            </label>
                        </div>
                    </div>

                    <div class="filter-section">
                        <h3 class="filter-title">Level</h3>
                        <div class="filter-group">
                            <label class="filter-option">
                                <input type="checkbox" name="level[]" value="beginner">
                                <span>Beginner</span>
                            </label>
                            <label class="filter-option">
                                <input type="checkbox" name="level[]" value="intermediate">
                                <span>Intermediate</span>
                            </label>
                            <label class="filter-option">
                                <input type="checkbox" name="level[]" value="advanced">
                                <span>Advanced</span>
                            </label>
                        </div>
                    </div>

                    <button class="btn btn-secondary btn-block">Apply Filters</button>
                    <button class="btn-text">Clear All</button>
                </aside>

                <!-- Products Grid -->
                <div class="products-main">
                    <!-- Toolbar -->
                    <div class="products-toolbar">
                        <div class="toolbar-left">
                            <p class="results-count">Showing <?php echo e(count($products)); ?> of <?php echo e($totalProducts); ?> courses</p>
                        </div>
                    </div>

                    <!-- Products Grid -->
                    <div class="products-grid">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="product-card">
                                <a href="<?php echo e(route('products.show', $product['id'])); ?>">
                                    <div class="product-image">
                                        <?php if(isset($product['badge'])): ?>
                                            <span class="product-badge"><?php echo e($product['badge']); ?></span>
                                        <?php endif; ?>
                                        <img src="<?php echo e(asset('images' . $product['image'])); ?>" alt="">
                                    </div>
                                </a>
                                <div class="product-info">
                                    <a href="<?php echo e(route('products.show', $product['id'])); ?>">
                                        <span class="product-category"><?php echo e($product['category']); ?></span>
                                        <h3 class="product-title"><?php echo e($product['title']); ?></h3>
                                        <div class="product-author">
                                            <i class="fas fa-user"></i>
                                            <span><?php echo e($product['author']); ?></span>
                                        </div>
                                        <div class="product-meta">
                                            <span class="meta-item">
                                                <i class="fas fa-clock"></i>
                                                <?php echo e($product['duration']); ?>

                                            </span>
                                            <span class="meta-item">
                                                <i class="fas fa-signal"></i>
                                                <?php echo e($product['level']); ?>

                                            </span>
                                        </div>
                                        <div class="product-rating">
                                            <div class="stars">
                                                <?php for($i = 0; $i < 5; $i++): ?>
                                                    <i
                                                        class="fas fa-star<?php echo e($i < floor($product['rating']) ? '' : ($i < $product['rating'] ? '-half-alt' : ' star-empty')); ?>"></i>
                                                <?php endfor; ?>
                                            </div>
                                            <span class="rating-count">(<?php echo e($product['reviews']); ?>)</span>
                                        </div>
                                    </a>
                                    <div class="product-footer">
                                        <a href="<?php echo e(route('products.show', $product['id'])); ?>">
                                            <span class="product-price">$<?php echo e(number_format($product['price'], 2)); ?></span>
                                        </a>
                                        <button class="btn btn-primary btn-sm add-to-cart" data-id="<?php echo e($product['id']); ?>"
                                            data-title="<?php echo e($product['title']); ?>" data-price="<?php echo e($product['price']); ?>"
                                            data-author="<?php echo e($product['author']); ?>" data-image="<?php echo e($product['image']); ?>">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="pagination">
                    <button class="pagination-btn" disabled>
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="pagination-btn active">1</button>
                    <button class="pagination-btn">2</button>
                    <button class="pagination-btn">3</button>
                    <span class="pagination-dots">...</span>
                    <button class="pagination-btn">10</button>
                    <button class="pagination-btn">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
    <style>
        .products-sidebar {
            transition: transform 0.3s ease;
        }

        .products-sidebar.open {
            transform: translateX(0);
        }

        @media (max-width: 768px) {
            .products-sidebar {
                transform: translateX(-110%);
                position: fixed;
                top: 0;
                left: 0;
                background: #fff;
                height: 100%;
                width: 80%;
                z-index: 999;
                overflow-y: auto;
                box-shadow: 2px 0 8px rgba(0, 0, 0, 0.1);
            }
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const filterButton = document.querySelector("#showFilters");
            const sidebar = document.querySelector(".products-sidebar");
            const clearButton = document.querySelector(".btn-text");
            const applyButton = document.querySelector(".btn.btn-secondary");
            const products = document.querySelectorAll(".product-card");

            // ✅ Toggle Sidebar (for mobile)
            if (filterButton) {
                filterButton.addEventListener("click", () => {
                    sidebar.classList.toggle("open");
                });
            }

            // ✅ Apply Filters
            applyButton.addEventListener("click", () => {
                const selectedCategories = Array.from(document.querySelectorAll('input[name="category[]"]:checked')).map(el => el.value);
                const selectedLevels = Array.from(document.querySelectorAll('input[name="level[]"]:checked')).map(el => el.value);
                const selectedRatings = Array.from(document.querySelectorAll('input[name="rating[]"]:checked')).map(el => parseInt(el.value));
                const selectedPrice = document.querySelector('input[name="price"]:checked')?.value || "all";

                products.forEach(product => {
                    const category = product.querySelector(".product-category")?.textContent.toLowerCase().replace(/\s+/g, "-");
                    const level = product.querySelector(".meta-item:last-child")?.textContent.trim().toLowerCase();
                    const rating = product.querySelectorAll(".fa-star:not(.star-empty)").length;
                    const price = parseFloat(product.querySelector(".product-price")?.textContent.replace("$", "")) || 0;

                    let show = true;

                    // Filter by category
                    if (selectedCategories.length && !selectedCategories.includes(category)) {
                        show = false;
                    }

                    // Filter by level
                    if (selectedLevels.length && !selectedLevels.includes(level)) {
                        show = false;
                    }

                    // Filter by rating
                    if (selectedRatings.length && !selectedRatings.some(r => rating >= r)) {
                        show = false;
                    }

                    // Filter by price
                    if (selectedPrice !== "all") {
                        if (selectedPrice === "free" && price > 0) show = false;
                        else if (selectedPrice === "0-25" && !(price >= 0 && price <= 25)) show = false;
                        else if (selectedPrice === "25-50" && !(price >= 25 && price <= 50)) show = false;
                        else if (selectedPrice === "50-100" && !(price >= 50 && price <= 100)) show = false;
                        else if (selectedPrice === "100+" && !(price > 100)) show = false;
                    }

                    // Show/Hide product
                    product.style.display = show ? "block" : "none";
                });
            });

            // ✅ Clear Filters
            clearButton.addEventListener("click", () => {
                document.querySelectorAll('input[type="checkbox"], input[type="radio"]').forEach(el => {
                    if (el.type === "radio" && el.value === "all") {
                        el.checked = true;
                    } else {
                        el.checked = false;
                    }
                });

                products.forEach(p => (p.style.display = "block"));
            });
        });
    </script>

    <script>
        document.querySelectorAll('.add-to-cart').forEach(btn => {
            btn.addEventListener('click', function () {
                fetch('<?php echo e(route('cart.add')); ?>', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                    },
                    body: JSON.stringify({
                        id: this.dataset.id,
                        title: this.dataset.title,
                        price: this.dataset.price,
                        author: this.dataset.author,
                        image: this.dataset.image,
                    })
                })
                    .then(res => res.json())
                    .then(data => {
                        alert(data.message)
                        window.location.href = '<?php echo e(route('cart')); ?>';
                    });
            });
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\coursehub\resources\views/pages/products.blade.php ENDPATH**/ ?>