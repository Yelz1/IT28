<?php
session_start(); // Start the session to manage user login status
require 'db.php'; // Include your database connection file

$error_message = ''; // Initialize an empty error message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize
    $username_or_email = $_POST['username_or_email']; // This will be used for both username and email
    $password = $_POST['password'];

    // Prepare SQL to check if the user exists by username or email
    // Using `username` OR `email` for login flexibility
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username_or_email, $username_or_email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        // Verify the hashed password
        if (password_verify($password, $user['password'])) {
            // Password is correct, set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            // Redirect to a dashboard or homepage after successful login
            echo "<script>alert('Login successful!'); window.location.href='dashboard.php';</script>";
            exit;
        } else {
            $error_message = "Invalid username/email or password.";
        }
    } else {
        $error_message = "Invalid username/email or password.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DUARELIO Jewelry - Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>
        /* General styles */
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            background-color: #000;
            color: #fff;
        }

        /* Header styles */
        header {
            background-color: #000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            border-bottom: 1px solid gold;
        }

        header .logo {
            font-size: 24px;
            font-weight: bold;
            color: gold;
        }

        nav {
            flex-grow: 1;
            display: flex;
            justify-content: right;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li.signup a, nav ul li.signin a {
            background-color: gold;
            color: #000;
            padding: 10px 20px;
            border-radius: 5px;
            text-transform: uppercase;
            font-size: 12px;
        }

        nav ul li.signup a:hover, nav ul li.signin a:hover {
            background-color: #fff;
            color: gold;
        }

        nav ul li.signup, nav ul li.signin {
            margin-left: auto;
        }

        /* Login Page Styling */
        .login-page {
            text-align: center;
            padding: 40px 20px;
            min-height: calc(100vh - 180px); /* Adjust height to push footer down */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .login-page h1 {
            color: gold; /* Changed from #d4af37 for consistency with logo */
            margin-bottom: 30px;
        }
        
        .login-form {
            max-width: 500px;
            width: 100%; /* Ensure form takes full width up to max-width */
            margin: auto;
            border: 1px solid gold; /* Changed from #d4af37 */
            padding: 30px;
            background-color: #111;
            color: white;
            text-align: left;
            border-radius: 8px; /* Added border-radius for softer edges */
        }
        
        .login-form label {
            display: block;
            margin: 15px 0 5px;
            font-size: 13px;
            text-transform: uppercase;
        }
        
        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            background-color: #333; /* Darker input background */
            border: 1px solid #555; /* Slightly visible border */
            border-radius: 6px;
            color: white; /* White text for input */
        }

        .login-form input[type="text"]::placeholder,
        .login-form input[type="password"]::placeholder {
            color: #aaa; /* Placeholder color */
        }
        
        .login-form button {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            background-color: gold; /* Gold button */
            border: none;
            font-weight: bold;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            color: #000; /* Black text for button */
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .login-form button:hover {
            background-color: #fff; /* White on hover */
            color: gold; /* Gold text on hover */
        }
        
        .login-form .options {
            margin-top: 10px;
            font-size: 14px;
            text-align: center; /* Center the checkbox */
        }
        
        .login-form .links {
            margin-top: 20px;
            font-size: 14px;
            text-align: center;
        }
        
        .login-form .links a {
            color: gold; /* Gold links */
            text-decoration: none; /* No underline by default */
            transition: color 0.3s ease, text-decoration 0.3s ease;
        }

        .login-form .links a:hover {
            color: #fff; /* White on hover */
            text-decoration: underline; /* Underline on hover */
        }

        .error-message {
            color: #ff4d4d; /* Red color for error messages */
            margin-top: 15px;
            font-size: 14px;
        }

        /* Footer styles */
        footer {
            background-color: #111;
            color: #ccc;
            padding: 40px;
            text-align: center;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap; /* Allow wrapping on smaller screens */
            margin-bottom: 20px;
        }
        
        .footer-content > div {
            flex: 1;
            min-width: 200px;
            margin: 10px; /* Adjusted margin for better spacing */
        }
        
        .footer-content > div:nth-child(1) {
            text-align: left;
            padding: 0 20px;
        }
        
        .footer-content > div:nth-child(1) i {
            margin-right: 8px;
        }
        
        .footer-content > div:nth-child(2) {
            text-align: center;
            padding: 0 40px;
        }
        
        .footer-content > div:nth-child(3) {
            text-align: right;
            margin-left: auto;
            padding: 0 20px;
        }
        
        footer ul {
            list-style: none;
            padding: 0;
        }
        
        footer ul li a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        footer ul li a:hover {
            color: gold;
        }
        
        footer ul.socials li a {
            display: flex;
            align-items: center;
            justify-content: flex-end; /* Right align for social icons */
            margin-bottom: 10px;
        }
        
        footer i {
            margin-right: 8px;
        }
        
        footer p {
            margin: 10px 0;
        }
        
        .copyright {
            color: #888;
            font-size: 14px;
            margin-top: 20px;
        }
        
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                padding: 15px 20px;
            }

            nav {
                justify-content: center;
                margin-top: 10px;
            }

            nav ul {
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px;
            }

            nav ul li.signup, nav ul li.signin {
                margin-left: 0;
                width: 100%;
                text-align: center;
            }

            nav ul li.signup a, nav ul li.signin a {
                display: block;
            }

            .login-page {
                padding: 20px 15px;
            }
            
            .login-form {
                padding: 20px;
            }

            .footer-content {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
        
            .footer-content > div {
                margin: 20px 0;
                text-align: center !important; /* Override specific alignment */
            }

            footer ul.socials li a {
                justify-content: center; /* Center social icons on small screens */
            }
        }
    </style>
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
                <li class="signin"><a href="./signin.php">Sign in</a></li>
            </ul>
        </nav>
    </header>
    
    <main class="login-page">
        <h1>Sign in to DUARELIO</h1>
        <form class="login-form" action="signin.php" method="POST">
            <?php if ($error_message): ?>
                <p class="error-message"><?php echo $error_message; ?></p>
            <?php endif; ?>
            <label for="username_or_email">USER NAME OR EMAIL</label>
            <input type="text" id="username_or_email" name="username_or_email" required />
    
            <label for="password">PASSWORD</label>
            <input type="password" id="password" name="password" required />
    
            <button type="submit">Log in</button>
    
            <div class="options">
                <label><input type="checkbox" /> Remember me</label>
            </div>
    
            <div class="links">
                <p>Don’t have an account? <a href="./signup.php">Sign up</a></p>
                <p><a href="#">Forgot Password?</a></p>
            </div>
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