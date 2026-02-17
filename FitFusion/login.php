<?php
session_start();
include 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];

            echo "<script>
                    alert('Login successful!');
                    window.location='index.php';
                  </script>";
        } else {
            echo "<script>alert('Wrong password');</script>";
        }

    } else {
        echo "<script>alert('User not found');</script>";
    }
}


$page_title = 'FitFusion - Log In';
include 'includes/header.php';
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login - FitFusion</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <!-- Login Form -->
    <div class="auth-page">
        <div class="auth-background">
            <img src="images/backroung.png" alt="">
        </div>
        <div class="auth-overlay"></div>
        <div class="auth-container">
            <div class="auth-form">
                <h1>Log in</h1>
                        <form method="POST">
                    <div class="form-field">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-field">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="forgot-password">
                        <a href="forgot-password.php">Forgot password?</a>
                    </div>
                    <button type="submit" class="submit-btn">Log in</button>
                    <p class="auth-link">
                        Don't have an account? <a href="signup.php">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php include 'includes/footer.php'; ?>
