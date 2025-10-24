<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <!-- Footer Main -->
        <div class="footer-main">
            <div class="footer-column">
                <div class="footer-logo">
                    <i class="fas fa-book-reader"></i>
                    <span>CourseHub</span>
                </div>
                <p class="footer-description">
                    Your trusted source for premium eBooks and digital courses. Empowering learners worldwide with quality educational content.
                </p>
                <div class="social-links">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            
            <div class="footer-column">
                <h3 class="footer-title">Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li><a href="<?php echo e(route('products')); ?>">All Products</a></li>
                    <li><a href="<?php echo e(route('about')); ?>">About Us</a></li>
                    <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3 class="footer-title">Categories</h3>
                <ul class="footer-links">
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Data Science</a></li>
                    <li><a href="#">Business & Marketing</a></li>
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Personal Development</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3 class="footer-title">Support</h3>
                <ul class="footer-links">
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Refund Policy</a></li>
                    <li><a href="#">Affiliate Program</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3 class="footer-title">Newsletter</h3>
                <p class="newsletter-text">Subscribe to get special offers and updates</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Your email address" required>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>&copy; <?php echo e(date('Y')); ?> CourseHub. All rights reserved.</p>
            <div class="payment-methods">
                <i class="fab fa-cc-visa"></i>
                <i class="fab fa-cc-mastercard"></i>
                <i class="fab fa-cc-paypal"></i>
                <i class="fab fa-cc-amex"></i>
            </div>
        </div>
    </div>
</footer><?php /**PATH D:\coursehub\resources\views/partials/footer.blade.php ENDPATH**/ ?>