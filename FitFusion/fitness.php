<?php
$page_title = 'FitFusion - Fitness';
include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> - FitFusion</title>
    <link rel="stylesheet" href="css/fitness-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="animated-bg">
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
        <div class="blob blob-3"></div>
        <div class="grid-pattern"></div>
    </div>

    <!-- Main Content -->
<main class="fitness-main">
    <div class="fitness-container">
 
            <!-- Boxing Card -->
            <a href="boxing.php" class="fitness-card">
            <div class="fitness-card">
                <div class="card-overlay"></div>
                <img 
                    src="images/boxing.png" 
                    alt="Boxing Training"
                    class="card-image"
                >
                <div class="card-content">
                    <h2 class="card-title">Boxing</h2>
                    <p class="card-description">
                        A comprehensive boxing workout combines jump rope for cardio, shadowboxing for technique, and heavy bag work for power, structured in 3-minute rounds with 30-60 second rest periods to simulate a fight. Key exercises include jab-cross-hook combinations, squats, lunges, and plyometric pushups for total body endurance.
                    </p>
                </div>
                <div class="card-arrow">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                    </svg>
                </div>
            </div>
            </a>

            <!-- Gym/Workout Card -->
            <a href="workout.php" class="fitness-card">
            <div class="fitness-card">
                <div class="card-overlay"></div>
                <img 
                    src="images/gymworkout.png" 
                    alt="Gym Workout"
                    class="card-image"
                >
                <div class="card-content">
                    <h2 class="card-title">Gym/Workout</h2>
                    <p class="card-description">
                        A comprehensive gym workout typically combines compound strength training exercises like squats, deadlifts, and bench presses with cardiovascular, machine-based, or HIIT, aimed at targeting major muscle groups for improved health and fitness. Beginners should focus on full-body routines 3 days a week, performing 3 sets of 10-12 repetitions, while advanced users often use 5-day split routines (Push/Pull/Legs) to maximize muscle growth.
                    </p>
                </div>
                <div class="card-arrow">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                    </svg>
                </div>
            </div>
            </a>

            <!-- Crossfit Card -->
            <div class="fitness-card">
                <div class="card-overlay"></div>
                <img 
                    src="images/crossfit.png" 
                    alt="Crossfit Training"
                    class="card-image"
                >
                <div class="card-content">
                    <h2 class="card-title">Crossfit</h2>
                    <p class="card-description">
                        CrossFit is a branded fitness regimen that emphasizes constantly varied, high-intensity, functional movements. It is designed to improve overall fitness defined as increased work capacity across broad time and modal domains by combining elements from Olympic weightlifting, gymnastics, and cardiovascular conditioning.
                    </p>
                </div>
                <div class="card-arrow">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                    </svg>
                </div>
            </div>

        </div>
    </main>

<?php include 'includes/footer.php'; ?>


    <script src="js/fitness.js"></script>
</body>
</html>