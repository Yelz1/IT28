<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DUARELIO Jewelry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>

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
    justify-content: right; /* Center the nav items */
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
    background-color: gold; /* Add a gold background */
    color: #000; /* Text color inside the button */
    padding: 10px 20px;
    border-radius: 5px; /* Rounded corners */
    text-transform: uppercase;
    font-size: 12px;
}

nav ul li.signup a:hover, nav ul li.signin a:hover {
    background-color: #fff; /* White background on hover */
    color: gold; /* Gold text color on hover */
}

nav ul li.signup, nav ul li.signin {
    margin-left: auto; /* Push these items to the right side */
}


.hero {
    background-image: url('./resizecom_create a jewelry website background.jpg'); /* Replace with your image path */
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;     /* Options: cover | contain | 100% 80% */
    height: 500px;              /* Adjust height as needed */
    padding: 100px 40px;
    text-align: center;
    color: #000;
    position: relative;
}

/* 🔁 Optionally use one of these background-size alternatives: */

/* background-size: contain;   // Keeps full image visible, may leave empty space */
/* background-size: 100% 80%;  // Custom width and height */

/* 📱 Responsive Adjustments */
@media (max-width: 768px) {
    .hero {
        background-size: cover;     /* You can change to contain or custom here */
        height: 300px;
        padding: 60px 20px;
    }
}

.hero-text {
    padding: 40px;
    display: inline-block;


}

.shop-btn {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: gold;
    color: #000;
    text-decoration: none;
    font-weight: bold;
}

/* Login Page Styling */
.login-page {
    text-align: center;
    padding: 40px 20px;
  }
  
  .login-page h1 {
    color: #d4af37;
    margin-bottom: 30px;
  }
  
  .login-form {
    max-width: 500px;
    margin: auto;
    border: 1px solid #d4af37;
    padding: 30px;
    background-color: #111;
    color: white;
    text-align: left;
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
    background-color: #d4af37;
    border: none;
    border-radius: 6px;
    color: black;
  }
  
  .login-form button {
    width: 100%;
    margin-top: 20px;
    padding: 12px;
    background-color: #d4af37;
    border: none;
    font-weight: bold;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .login-form .options {
    margin-top: 10px;
    font-size: 14px;
  }
  
  .login-form .links {
    margin-top: 20px;
    font-size: 14px;
    text-align: center;
  }
  
  .login-form .links a {
    color: #fff;
    text-decoration: underline;
  }


/* style.css */
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
  
  header {
    background-color: #000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 40px;
    border-bottom: 1px solid gold;
  }
  
  .logo {
    font-size: 24px;
    font-weight: bold;
    color: gold;
  }
  
  
  /* Title */
.page-title {
  padding: 30px 25px 10px;
}
.page-title h1 {
  font-size: 40px;
}

/* Grid Layout */
.ring-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
  padding: 20px 25px 50px;
  justify-items: center;
}

.ring-card {
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.ring-card img {
  width: 200%;
  max-width: 250px; /* Adjust width here */
  height: auto;
  border-radius: 8px;
  object-fit: cover;
}

.ring-card p {
  margin: 10px 0 5px;
  font-weight: bold;
}

.ring-card span {
  color: #ffd700;
  font-size: 14px;
}

/* Responsive Grid */
@media (max-width: 900px) {
  .ring-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 600px) {
  .ring-grid {
    grid-template-columns: 1fr;
  }
}

  
  footer {
    background-color: #111;
    color: #ccc;
    padding: 40px;
    text-align: center;
  }
  
  .footer-content {
    display: flex;
    justify-content: space-between;
    flex-wrap: nowrap;
    margin-bottom: 20px;
  }
  
  .footer-content > div {
    flex: 1;
    min-width: 200px;
    margin: 0 10px;
  }
  

/* Left-align first column (logo/contact) */
.footer-content > div:nth-child(1) {
    text-align: left;
    padding: 0 20px;
  }
  
  /* Icon spacing for first column */
  .footer-content > div:nth-child(1) i {
    margin-right: 8px;
  }
  
  /* Center the Shop column with balanced padding */
  .footer-content > div:nth-child(2) {
    text-align: center;
    padding: 0 40px;
  }
  
  /* Right-align the Visit Us column and adjust icon margin */
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
    .footer-content {
      flex-direction: column;
      align-items: center;
      text-align: center;
    }
  
    .footer-content > div {
      margin: 20px 0;
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
    
    <section class="page-title">
    <h1>Necklace</h1>
  </section>

  <section class="ring-grid">
    <div class="ring-card">
      <img src="./pictures/resizecom_just a simple necklase with a jewelry.jpg" alt="Diamond Radiance Ring">
      <p>Amethyst Glow Necklace</p>
      <span>₱ 10,800.00 PHP</span>
    </div>

    <div class="ring-card">
      <img src="./pictures/resizecom_a jewelry (3).jpg" alt="Twilight Diamonds Ring">
      <p>Empress Garnet Necklace</p>
      <span>₱ 15,700.00 PHP</span>
    </div>

    <div class="ring-card">
      <img src="./pictures/resizecom_just a simple necklase with a jewelry (1).jpg" alt="Solitaire Grace Ring">
      <p>Velinora Necklace</p>
      <span>₱ 10,700.00 PHP</span>
    </div>

    <div class="ring-card">
      <img src="./pictures/resizecom_a jewelry (2).jpg" alt="Minimal Radiance Ring">
      <p>Velvet Spark Necklace</p>
      <span>₱ 13,799.00 PHP</span>
    </div>

    <div class="ring-card">
      <img src="./pictures/resizecom_ab69deee-cd93-4c7e-8602-90c271374bde.jpg" alt="Golden Heirloom Ring">
      <p>Sapphire Light Necklace</p>
      <span>₱ 13,700.00 PHP</p>
    </div>

    <div class="ring-card">
      <img src="./pictures/necklase .jpg" alt="Clara Ring">
      <p>Crimson Glow Necklace</p>
      <span>₱ 13,700.00 PHP</span>
    </div>

    <div class="ring-card">
      <img src="./pictures/necklase that decent.jpg" alt="Couple Rings">
      <p>Moonviel Necklace </p>
      <span>₱ 8,800.00 PHP</span>
    </div>

    <div class="ring-card">
      <img src="./pictures/resizecom_necklase that decent (1).jpg" alt="Wedding Ring">
      <p>Silva Pendant Necklace</p>
      <span>₱ 7,700.00 PHP</span>
    </div>

    <div class="ring-card">
      <img src="./pictures/resizecom_a jewelry necklase.jpg" alt="Silvella Band">
      <p>Elara Lotus Necklace</p>
      <span>₱ 14,700.00 PHP</span>
    </div>
  </section>


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