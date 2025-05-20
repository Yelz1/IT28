<?php
session_start();
// Redirect to sign-in page if user is not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: sign-in.php"); // Assuming your sign-in page is sign-in.php
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DUARELIO - User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>
        /* General styles (from your existing CSS) */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            background-color: #000;
            color: #fff;
        }

        /* Header styles (from your existing CSS) */
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

        /* Dashboard specific styles */
        .dashboard-content {
            min-height: calc(100vh - 180px); /* Adjust height to push footer down */
            padding: 50px 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .dashboard-box {
            background-color: #111;
            border: 1px solid gold;
            border-radius: 8px;
            padding: 40px;
            max-width: 600px;
            width: 100%;
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.2); /* Gold glow */
        }

        .dashboard-box h1 {
            color: gold;
            margin-bottom: 25px;
            font-size: 2.5em;
        }

        .dashboard-box p {
            font-size: 1.1em;
            margin-bottom: 30px;
        }

        .dashboard-box a {
            display: inline-block;
            padding: 12px 25px;
            background-color: gold;
            color: #000;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .dashboard-box a:hover {
            background-color: #fff;
            color: gold;
        }

        /* Footer styles (from your existing CSS) */
        footer {
            background-color: #111;
            color: #ccc;
            padding: 40px;
            text-align: center;
            width: 100%; /* Ensure footer spans full width */
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }
        
        .footer-content > div {
            flex: 1;
            min-width: 200px;
            margin: 10px;
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
            justify-content: flex-end;
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
            .dashboard-content {
                padding: 30px 15px;
            }
            .dashboard-box {
                padding: 25px;
            }
            .dashboard-box h1 {
                font-size: 2em;
            }
            .footer-content {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            .footer-content > div {
                margin: 20px 0;
                text-align: center !important;
            }
            footer ul.socials li a {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <header>

    </header>

    <main class="dashboard-content">
        <div class="dashboard-box">
            <h1>Welcome, **<?= htmlspecialchars($_SESSION['full_name'] ?? 'Guest') ?>**!</h1>
            <p>You've logged into our DUARELIO website successfully.</p>
            <p>View our amazing jewelry collections.</p>
            <a href="logout.php">Logout</a>
        </div>
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