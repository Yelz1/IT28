<?php
// signup.php
require 'db.php'; // this includes your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data and sanitize
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $state = $_POST['state'];
    $gender = $_POST['gender'];
    $zip = $_POST['zip']; // This corresponds to 'zip_code' in your DB
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Basic validation for demonstration. In a real app, do more robust validation.
    if (empty($first_name) || empty($last_name) || empty($email) || empty($country) || empty($username) || empty($password) || empty($confirm_password)) {
        echo "<script>alert('Please fill in all required fields.'); window.history.back();</script>";
        exit;
    }

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match.'); window.history.back();</script>";
        exit;
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare for database insertion
    // IMPORTANT: Make sure the column names here match your database exactly.
    // Your SQL uses `zip_code`, but your form input is `name="zip"`.
    // I'm using `zip_code` in the INSERT statement to match your provided SQL schema.
    $stmt = $conn->prepare("INSERT INTO users 
        (first_name, last_name, email, country, phone, state, gender, zip_code, username, password) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Check if the prepare statement failed
    if ($stmt === false) {
        echo "<script>alert('Database prepare failed: " . $conn->error . "'); window.history.back();</script>";
        exit;
    }

    // Bind parameters
    // "ssssssssss" corresponds to 10 string parameters.
    // If phone, state, gender, or zip_code can be NULL, you might need to adjust 's' to appropriate types (e.g., 'i' for integer if they were numbers).
    // For now, sticking with 's' as they are VARCHAR/ENUM.
    $stmt->bind_param("ssssssssss",
        $first_name, $last_name, $email, $country, $phone, $state, $gender, $zip, $username, $hashed_password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Account created successfully!'); window.location.href='signin.php';</script>"; // Changed to .php
    } else {
        // Check for duplicate entry errors (e.g., unique email/username)
        if ($conn->errno == 1062) { // MySQL error code for duplicate entry
            echo "<script>alert('Registration failed: Email or Username already exists.'); window.history.back();</script>";
        } else {
            echo "<script>alert('Registration failed: " . $stmt->error . "'); window.history.back();</script>";
        }
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>DUARELIO Jewelry - Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="./signup-style.css" /> 
</head>
<body>
    <header>
        <div class="logo">DUARELIO</div>
        <nav>
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./jewelry.php">Jewelry</a></li>
                <li><a href="./aboutus.php">About Us</a></li>
                
                <li class="signup"><a href="./signup.php">Sign up</a></li>
                <li class="signin"><a href="./signin.php">Sign in</a></li> </ul>
        </nav>
    </header>

    <main class="signup-page">
        <h1>Create An Account</h1>
        <form class="signup-form" action="signup.php" method="POST">
            <div class="form-row">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="first_name" required />
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="last_name" required />
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>User Email</label>
                    <input type="email" name="email" required />
                </div>
                <div class="form-group">
                    <label>Country</label>
                    <input type="text" name="country" required />
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" name="phone" />
                </div>
                <div class="form-group">
                    <label>State</label>
                    <input type="text" name="state" />
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Gender</label><br />
                    <label><input type="radio" name="gender" value="male" required /> Male</label><br />
                    <label><input type="radio" name="gender" value="female" /> Female</label><br />
                    <label><input type="radio" name="gender" value="other" /> Other</label>
                </div>
                <div class="form-group">
                    <label>Zip Code</label>
                    <input type="text" name="zip" /> </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" required />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" required />
                </div>
            </div>

            <div class="form-group single-row">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" required />
            </div>

            <button type="submit">SUBMIT</button>
        </form>
    </main>

    <footer>
        <div class="footer-content">
            <div>
                <div class="logo">DUARELIO</div>
                <p><i class="fas fa-envelope"></i> Duarelio@gmail.com</p>
                <p><i class="fas fa-map-marker-alt"></i> Manolo Fortich, Bukidnon</p>
            </div>
            <div>
                <p>Shop:</p>
                <ul>
                    <li><a href="#">Best Seller</a></li>
                    <li><a href="#">New Arrival</a></li>
                    <li><a href="#">Fine Jewelry</a></li>
                </ul>
            </div>
            <div>
                <p>Visit Us:</p>
                <ul class="socials">
                    <li><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i> Facebook</a></li>
                    <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i> Instagram</a></li>
                    <li><a href="https://www.tiktok.com/"><i class="fab fa-tiktok"></i> TikTok</a></li>
                </ul>
            </div>
        </div>
        <p class="copyright">©2025 DUARELIO All Rights Reserved</p>
    </footer>
</body>
</html>