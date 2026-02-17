<?php
include 'includes/db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name  = $_POST['name'];
    $email = $_POST['email'];
    $pass  = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    if ($pass !== $confirm) {
        $message = "Passwords do not match.";
    } else {

        $hashed = password_hash($pass, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (name, email, password)
                VALUES ('$name', '$email', '$hashed')";

        if ($conn->query($sql) === TRUE) {
            header("Location: login.php");
            exit();
        } else {
            $message = "Email already exists.";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - FitFusion</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;700&family=Saira+Condensed:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="auth-page">
        <div class="auth-background">
            <img src="images/bg2.png" alt="">
        </div>
        
        <div class="auth-overlay"></div>
        
        <div class="auth-logo-watermark">
            <img src="images/fitfusion-logo.png" alt="FitFusion Logo">
        </div>

        <div class="auth-container">
            <div class="auth-form">
                <h1>Sign up</h1>
                
                <form method="POST">
                    <div class="form-field">
                        <input type="text" name="name" placeholder="Name" required>
                    </div>

                    <div class="form-field">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="form-field">
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        <button type="button" class="password-toggle" onclick="togglePassword('password')">
                            <svg width="20" height="19" viewBox="0 0 20 19" fill="none">
                                <path d="M1.66675 9.48651C1.66675 9.48651 4.16675 4.48651 10.0001 4.48651C15.8334 4.48651 18.3334 9.48651 18.3334 9.48651C18.3334 9.48651 15.8334 14.4865 10.0001 14.4865C4.16675 14.4865 1.66675 9.48651 1.66675 9.48651Z" stroke="black" stroke-opacity="0.5" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10 11.9865C11.3807 11.9865 12.5 10.8672 12.5 9.48651C12.5 8.10579 11.3807 6.98651 10 6.98651C8.61929 6.98651 7.5 8.10579 7.5 9.48651C7.5 10.8672 8.61929 11.9865 10 11.9865Z" stroke="black" stroke-opacity="0.5" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>

                    <div class="form-field">
                        <input type="password" id="confirm-password" name="confirm_password" placeholder="Confirm Password" required>
                        <button type="button" class="password-toggle" onclick="togglePassword('confirm-password')">
                            <svg width="20" height="19" viewBox="0 0 20 19" fill="none">
                                <path d="M1.66675 9.48651C1.66675 9.48651 4.16675 4.48651 10.0001 4.48651C15.8334 4.48651 18.3334 9.48651 18.3334 9.48651C18.3334 9.48651 15.8334 14.4865 10.0001 14.4865C4.16675 14.4865 1.66675 9.48651 1.66675 9.48651Z" stroke="black" stroke-opacity="0.5" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10 11.9865C11.3807 11.9865 12.5 10.8672 12.5 9.48651C12.5 8.10579 11.3807 6.98651 10 6.98651C8.61929 6.98651 7.5 8.10579 7.5 9.48651C7.5 10.8672 8.61929 11.9865 10 11.9865Z" stroke="black" stroke-opacity="0.5" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>

                    <button type="submit" class="submit-btn">Sign up</button>

                    <div class="auth-link">
                        Already have an account? <a href="login.php">Log in</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <script>
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            if (input.type === 'password') {
                input.type = 'text';
            } else {
                input.type = 'password';
            }
        }
    </script>
</body>
</html>
