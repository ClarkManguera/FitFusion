<?php
include 'includes/db.php'; // database connection

$success = false;
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email address.";
    }
    // Validate required fields
    else if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $error = "All fields are required.";
    }
    else {

        $stmt = $conn->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $subject, $message);

        if ($stmt->execute()) {
            $success = true;

            // clear form
            $name = $email = $subject = $message = '';
        } else {
            $error = "Failed to save message to database.";
        }

        $stmt->close();
    }
}


$page_title = 'FitFusion - Contact Us';
include 'includes/header.php';
?>


    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Get In Touch</h1>
            <p class="hero-text">Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container-wide">
            <div class="contact-grid">
                <!-- Left Column - Contact Info -->
                <div class="contact-info">
                    <!-- Email Us -->
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h3 class="info-title">Email Us</h3>
                            <p class="info-text">support@fitfusion.com</p>
                        </div>
                    </div>

                    <!-- Call Us -->
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info-content">
                            <h3 class="info-title">Call Us</h3>
                            <p class="info-text">+1 (555) 123-4567</p>
                        </div>
                    </div>

                    <!-- Visit Us -->
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-content">
                            <h3 class="info-title">Visit Us</h3>
                            <p class="info-text">123 Wellness Street, Health City, HC 12345</p>
                        </div>
                    </div>

                    <!-- Hours -->
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info-content">
                            <h3 class="info-title">Hours</h3>
                            <p class="info-text">Mon-Fri: 6am - 10pm</p>
                            <p class="info-text">Sat-Sun: 8am - 8pm</p>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Contact Form -->
                <div class="contact-form-wrapper">
                    <h2 class="form-title">Send Us A Message</h2>
                    
                    <?php if ($success): ?>
                        <div class="alert alert-success">
                            ✓ Message sent successfully! We'll get back to you soon.
                        </div>
                    <?php endif; ?>
                    
                    <?php if ($error): ?>
                        <div class="alert alert-error">
                            ✗ <?php echo $error; ?>
                        </div>
                    <?php endif; ?>
                    
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="contact-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-input" placeholder="Your name" value="<?php echo isset($name) ? $name : ''; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-input" placeholder="your@email.com" value="<?php echo isset($email) ? $email : ''; ?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-input" placeholder="How can we help?" value="<?php echo isset($subject) ? $subject : ''; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="message" class="form-label">Message</label>
                            <textarea id="message" name="message" class="form-textarea" placeholder="Tell us more about your inquiry..." rows="6" required><?php echo isset($message) ? $message : ''; ?></textarea>
                        </div>

                        <button type="submit" class="btn-submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
