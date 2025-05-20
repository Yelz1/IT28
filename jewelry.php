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
    background-image: url('./pictures/resizecom_create a jewelry website background.jpg'); /* Replace with your image path */
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;    /* Options: cover | contain | 100% 80% */
    height: 500px;             /* Adjust height as needed */
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
        background-size: cover;    /* You can change to contain or custom here */
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

/* Category Sections */
/* Category Sections */
.category {
    padding: 60px 40px;
    background-color: #000;
    text-align: center;
}
.category h2 {
    display: inline-block;
    padding: 10px 20px;
    color: gold;
    font-size: 2.5rem;
    border-top: 2px solid gold;
    border-bottom: 2px solid gold;
    margin-bottom: 40px;
}
.products {
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 30px;
    justify-items: center;
    margin-bottom: 20px;
}
.product {
    background-color: #111;
    border: 1px solid gold;
    padding: 20px;
    max-width: 300px;
    text-align: center;
    display: flex;
    flex-direction: column;
}

.product img {
    width: 100%;
    height: auto;
    max-height: 300px;
    object-fit: contain;
    margin-bottom: 20px;

}

 
.product h3 {
    margin-bottom: 10px;
    color: #fff;
    font-size: 1.1rem;
}
.product .price {
    color: gold;
    font-size: 1rem;
}
 
/* View More Button */
.view-more-wrap {
    text-align: center;
    margin-top: 20px;
}
.view-more-wrap .btn {
    padding: 10px 30px;
    font-size: 1rem;
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
  
  .main-nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex: 1;
    margin-left: 40px;
  }
  
  .nav-links,
  .auth-links {
    display: flex;
    list-style: none;
    gap: 20px;
  }
  
  .nav-links a,
  .auth-links a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
  }
  
  .auth-links a {
    background-color: gold;
    color: #000;
    padding: 8px 16px;
    border-radius: 5px;
    text-transform: uppercase;
    transition: 0.3s ease;
  }
  
  .auth-links a:hover {
    background-color: #fff;
    color: gold;
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
              <li><a href="./customization.php">Customization</a></li>
              <li class="signup"><a href="./signup.php">Sign up</a></li>
              <li class="signin"><a href="./signin.php">Sign in</a></li>
            </ul>
        </nav>
    </header>
    

    <section class="hero">
        <div class="hero-text">
            <h1>Wear Your Story</h1>
            <p><strong>DUARELIO</strong> is a jewelry business that focuses on creating beautiful and personalized pieces for every style and occasion.</p>
        </div>
    </section>

    <main>
    <section class="category">
      <h2>Rings</h2>
      <div class="products">
        <div class="product">
          <img src="./pictures/resizecom_a ring with some diamond.jpg" alt="Diamond Radiance Ring">
          <h3>Diamond Radiance Ring</h3>
          <p class="price">₱ 17,900.00 PHP</p>
        </div>
        <div class="product">
          <img src="./pictures/resizecom_ring (1).jpg" alt="Twilight Elegance Ring">
          <h3>Twilight Elegance Ring</h3>
          <p class="price">₱ 13,900.00 PHP</p>
        </div>
        <div class="product">
          <img src="./pictures/resizecom_a simple ring but elegant.jpg" alt="Solitaire Grace Ring">
          <h3>Solitaire Grace Ring</h3>
          <p class="price">₱ 10,900.00 PHP</p>
        </div>
      </div>
      <a class="btn" href="./ring.php">View More</a>
    </section>

    <section class="category">
      <h2>Earrings</h2>
      <div class="products">
        <div class="product">
          <img src="./pictures/resizecom_earrings (2).jpg" alt="Valeria Glow Earrings">
          <h3>Velvet Glow Earrings</h3>
          <p class="price">₱ 7,800.00 PHP</p>
        </div>
        <div class="product">
          <img src="./pictures/resizecom_a jewelry website background just a simple (1).jpg" alt="Florence Opulence Earrings">
          <h3>Florence Cushion Earrings</h3>
          <p class="price">₱ 9,800.00 PHP</p>
        </div>
        <div class="product">
          <img src="./pictures/resizecom_earrings.jpg" alt="Ethereal Elegance Earrings">
          <h3>Ethereal Elegance Earrings</h3>
          <p class="price">₱ 6,700.00 PHP</p>
        </div>
      </div>
      <a class="btn" href="./earrings.php">View More</a>
    </section>

    <section class="category">
      <h2>Necklaces</h2>
      <div class="products">
        <div class="product">
          <img src="./pictures/resizecom_just a simple necklase with a jewelry.jpg" alt="Amethyst Glow Necklace">
          <h3>Amethyst Glow Necklace</h3>
          <p class="price">₱ 10,800.00 PHP</p>
        </div>
        <div class="product">
          <img src="./pictures/resizecom_a jewelry necklase.jpg" alt="Emperor Garnet Necklace">
          <h3>Emperess Garnet Necklace</h3>
          <p class="price">₱ 10,700.00 PHP</p>
        </div>
        <div class="product">
          <img src="./pictures/resizecom_just a simple necklase with a jewelry (1).jpg" alt="Valencia Necklace">
          <h3>Valencia Necklace</h3>
          <p class="price">₱ 10,700.00 PHP</p>
        </div>
      </div>
      <a class="btn" href="./Necklase.php">View More</a>
    </section>
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