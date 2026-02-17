<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crossfit - FitFusion</title>
    <link rel="stylesheet" href="css/crossfit.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="crossfit-page">
        <!-- Background Image -->
        <div class="page-background">
            <img src="images/bg3.png" alt="">
        </div>

        <!-- Hero Section -->
        <div class="hero-section">
            <div class="hero-title">
                <h1>Crossfit</h1>
            </div>
        </div>

        <!-- Workout Grid -->
        <div class="workout-container">
            <!-- Row 1 -->
            <div class="workout-row">
                <div class="workout-card">
                    <div class="workout-image">
                        <img src="images/crossfit-amrap.jpg" alt="12-Minute AMRAP">
                        <div class="workout-overlay">
                            <h2>12-Minute AMRAP</h2>
                        </div>
                    </div>
                </div>

                <div class="workout-card">
                    <div class="workout-image">
                        <img src="images/crossfit-fortime.jpg" alt="For Time">
                        <div class="workout-overlay">
                            <h2>For Time</h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="workout-row">
                <div class="workout-card">
                    <div class="workout-image">
                        <img src="images/crossfit-emom.jpg" alt="EMOM">
                        <div class="workout-overlay">
                            <h2>EMOM</h2>
                        </div>
                    </div>
                </div>

                <div class="workout-card">
                    <div class="workout-image">
                        <img src="images/crossfit-chipper.jpg" alt="Chipper">
                        <div class="workout-overlay">
                            <h2>Chipper</h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="workout-row">
                <div class="workout-card">
                    <div class="workout-image">
                        <img src="images/crossfit-partner.jpg" alt="Partner or Solo">
                        <div class="workout-overlay">
                            <h2>Partner (or Solo)</h2>
                        </div>
                    </div>
                </div>

                <div class="workout-card">
                    <div class="workout-image">
                        <img src="images/crossfit-sprint.jpg" alt="Sprint Intervals">
                        <div class="workout-overlay">
                            <h2>Sprint Intervals</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
