

<?php $__env->startSection('title', 'About Us - CourseHub'); ?>
<?php $__env->startSection('description', 'Learn about CourseHub\'s mission to provide quality education and empower learners worldwide.'); ?>

<?php $__env->startSection('content'); ?>
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="breadcrumb">
            <a href="<?php echo e(route('home')); ?>">Home</a>
            <span class="separator">/</span>
            <span>About</span>
        </div>
        <h1 class="page-title">About CourseHub</h1>
        <p class="page-description">Empowering learners worldwide with quality education</p>
    </div>
</section>

<!-- Mission Section -->
<section class="about-mission">
    <div class="container">
        <div class="mission-content">
            <div class="mission-text">
                <h2 class="section-title">Our Mission</h2>
                <p class="mission-description">
                    At CourseHub, we believe that education is the key to unlocking human potential. Our mission is to make quality learning accessible to everyone, everywhere. We partner with the world's leading experts to create comprehensive, engaging, and practical courses that help learners achieve their personal and professional goals.
                </p>
                <p class="mission-description">
                    Founded in 2020, CourseHub has grown from a small startup to a global learning platform serving over 10,000 students across 150 countries. We're committed to continuously improving our platform and expanding our course catalog to meet the evolving needs of our learners.
                </p>
            </div>
            <div class="mission-image">
                <div class="mission-image-placeholder">
                    <i class="fas fa-rocket"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="values-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Core Values</h2>
            <p class="section-subtitle">The principles that guide everything we do</p>
        </div>
        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h3 class="value-title">Student-Centric</h3>
                <p class="value-description">Every decision we make is driven by what's best for our learners. Your success is our success.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-gem"></i>
                </div>
                <h3 class="value-title">Quality First</h3>
                <p class="value-description">We maintain the highest standards for course content, ensuring every lesson delivers real value.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="value-title">Inclusive Community</h3>
                <p class="value-description">We foster a diverse, welcoming environment where everyone can learn and grow together.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3 class="value-title">Innovation</h3>
                <p class="value-description">We continuously explore new technologies and methods to enhance the learning experience.</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <h3 class="about-stat-number">10,000+</h3>
                <p class="about-stat-label">Active Students</p>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <h3 class="about-stat-number">500+</h3>
                <p class="about-stat-label">Quality Courses</p>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3 class="about-stat-number">50+</h3>
                <p class="about-stat-label">Expert Instructors</p>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-globe"></i>
                </div>
                <h3 class="about-stat-number">150+</h3>
                <p class="about-stat-label">Countries Reached</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="team-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Meet Our Team</h2>
            <p class="section-subtitle">The passionate people behind CourseHub</p>
        </div>
        <div class="team-grid">
            <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="team-card">
                <div class="team-avatar">
                    <?php echo e(substr($member['name'], 0, 1)); ?>

                </div>
                <h3 class="team-name"><?php echo e($member['name']); ?></h3>
                <p class="team-role"><?php echo e($member['role']); ?></p>
                <p class="team-bio"><?php echo e($member['bio']); ?></p>
                <div class="team-social">
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- Timeline Section -->
<section class="timeline-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Journey</h2>
            <p class="section-subtitle">Key milestones in CourseHub's growth</p>
        </div>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <h3 class="timeline-year">2020</h3>
                    <h4 class="timeline-title">CourseHub Founded</h4>
                    <p class="timeline-description">Started with a vision to democratize quality education</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <h3 class="timeline-year">2021</h3>
                    <h4 class="timeline-title">Reached 1,000 Students</h4>
                    <p class="timeline-description">Celebrated our first thousand learners from 30 countries</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <h3 class="timeline-year">2022</h3>
                    <h4 class="timeline-title">Launched Mobile Apps</h4>
                    <p class="timeline-description">Made learning accessible on-the-go for iOS and Android</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <h3 class="timeline-year">2023</h3>
                    <h4 class="timeline-title">Partnership Program</h4>
                    <p class="timeline-description">Partnered with leading universities and corporations</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <h3 class="timeline-year">2024</h3>
                    <h4 class="timeline-title">Global Expansion</h4>
                    <p class="timeline-description">Now serving students in over 150 countries worldwide</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Join Our Learning Community</h2>
            <p class="about-cta-description">Start your journey with CourseHub today</p>
            <a href="<?php echo e(route('products')); ?>" class="btn btn-light btn-lg">Explore Courses</a>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\coursehub\resources\views/pages/about.blade.php ENDPATH**/ ?>