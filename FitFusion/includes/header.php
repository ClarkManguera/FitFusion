<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'FitFusion'; ?></title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
<header class="header">
    <div class="container header-container">
        <style>
    .logo .logo-img {
        width: 150px;
        height: auto;
    }
</style>


        <div class="logo">
            <a href="index.php">
                <img src="images/fitfusion-logo-5.png" alt="FitFusion Logo" class="logo-img">
            </a>
        </div>

            <nav class="nav">
                <a href="index.php" class="nav-link">Home</a>
                <a href="fitness.php" class="nav-link">Fitness</a>
                <a href="health.php" class="nav-link">Health</a>
                <a href="mhealth.php" class="nav-link">Mental Health</a>
                <a href="about.php" class="nav-link">About</a>
                <a href="contact.php" class="nav-link">Contact</a>
            </nav>

            <div class="auth-buttons">
                <a href="login.php" class="btn-auth">Log In</a>
                <a href="signup.php" class="btn-auth">Sign Up</a>
            </div>

        </div>
    </header>
