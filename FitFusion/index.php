<?php
$page_title = 'FitFusion - Home';
include 'includes/header.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<link rel="stylesheet" href="css/home.css">

<!-- Hero Section -->
<div class="hero">
    <div class="hero-content">
        <h1 class="hero-title">Start Your Wellness<br>Journey Today</h1>
        <p class="hero-text">
            Simple fitness routines, healthy habits, and mental wellness tips<br>
            to transform your life from the inside out
        </p>
        <button class="btn-explore">Explore Now</button>
    </div>
</div>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container-wide">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </div>
                <h3 class="stat-value">50K+</h3>
                <p class="stat-label">Active Members</p>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="8" r="6"></circle>
                        <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path>
                    </svg>
                </div>
                <h3 class="stat-value">500+</h3>
                <p class="stat-label">Success Stories</p>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                        <polyline points="16 7 22 7 22 13"></polyline>
                    </svg>
                </div>
                <h3 class="stat-value">95%</h3>
                <p class="stat-label">Goal Achievement</p>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                </div>
                <h3 class="stat-value">4.9/5</h3>
                <p class="stat-label">Average Rating</p>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="mission-section">
    <div class="container-wide">
        <div class="mission-grid">
            <div class="mission-card">
                <div class="mission-badge">About</div>
                <p class="mission-text">
                    We believe real wellbeing doesn't come from fixing just one part of your life. 
                    It comes from taking care of your body, your mind, and your ability to learn and grow, 
                    all at the same time. Our integrated approach addresses all three pillars simultaneously, 
                    creating lasting transformation through balanced, sustainable practices that fit your lifestyle.
                </p>
            </div>
            <div class="mission-card">
                <div class="mission-badge">Mission</div>
                <p class="mission-text">
                    To improve overall wellbeing by combining physical fitness, mental health, and education 
                    into one simple, structured journey supported by science and community. We're committed to 
                    making wellness accessible, sustainable, and effective for everyone, regardless of where 
                    they start their journey.
                </p>
            </div>
            <div class="mission-card">
                <div class="mission-badge">Vision</div>
                <p class="mission-text">
                    A world where everyone has access to the tools, guidance, and support needed to grow healthier, 
                    stronger, and more capable, no matter their situation. We envision communities where wellness 
                    is not a luxury but a fundamental right, supported by evidence-based practices and genuine 
                    human connection.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section">
    <div class="container-wide">
        <h2 class="section-title-center">Everything You Need for Complete Wellness</h2>
        
        <div class="feature-block">
            <div class="feature-image">
                <img src="images/Group fitness class.png" alt="Group Fitness Class">
            </div>
            <div class="feature-content">
                <h3 class="feature-title">Expert-Led Fitness Programs</h3>
                <p class="feature-text">
                    Our certified trainers design personalized workout plans that match your fitness level and goals. 
                    Whether you're just starting out or looking to level up your routine, we've got you covered with 
                    progressive training that delivers real results.
                </p>
                <p class="feature-text">
                    Join live classes, follow video tutorials, or create your own routine with our extensive exercise 
                    library. Track your progress, celebrate milestones, and stay motivated with our supportive community 
                    cheering you on every step of the way.
                </p>
            </div>
        </div>

        <div class="feature-block">
            <div class="feature-image">
                <img src="images/Outdoor running.png" alt="Outdoor Running">
            </div>
            <div class="feature-content">
                <h3 class="feature-title">Outdoor Activities & Adventures</h3>
                <p class="feature-text">
                    Take your fitness beyond the gym with our outdoor training programs. Running, hiking, cycling, 
                    and more - we help you discover the joy of moving your body in nature while building endurance 
                    and strength.
                </p>
                <p class="feature-text">
                    Our outdoor activity plans include GPS-tracked routes, safety tips, and seasonal recommendations. 
                    Connect with local groups for weekend adventures or follow solo training plans at your own pace.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Why Join Section -->
<section class="why-join-section">
    <div class="container-wide">
        <div class="why-join-content">
            <div class="mission-badge">Why Join Us?</div>
            <p class="why-join-text">
                Because we bring fitness, mental health, and learning together into one simple, science-based journey 
                with real support and real structure. You're not doing this alone, you're guided, supported, and part 
                of a community focused on steady, meaningful progress.
            </p>
            <p class="why-join-text">
                Unlike other platforms that focus on just one aspect of health, FitFusion recognizes that true wellness 
                comes from balance. Our integrated approach means you get better results faster, with less stress and 
                more sustainable habits that last a lifetime. Join us today and discover what complete wellness really 
                feels like.
            </p>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>