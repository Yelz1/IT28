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

/* About Section */
.about {
  display: flex;
  flex-wrap: wrap;
  padding: 30px 25px;
  gap: 30px;
}

.about-left, .about-right {
  flex: 1;
  min-width: 280px;
}

.about-right img {
  width: 100%;
  max-width: 300px;
  border-radius: 10px;
  margin-bottom: 10px;
}

/* CTA */
.cta {
  text-align: center;
  padding: 20px;
}
.cta button {
  background: #FFD700;
  color: black;
  font-weight: bold;
  padding: 12px 24px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* Guarantees */
.guarantees {
  text-align: center;
  padding: 40px 20px;
}
.guarantees h2 {
  color: #FFD700;
  margin-bottom: 20px;
}
.guarantee-icons {
  display: flex;
  justify-content: center;
  gap: 40px;
  flex-wrap: wrap;
}
.guarantee-icons div {
  max-width: 200px;
}
.guarantee-icons img {
  width: 50px;
  height: 50px;
}
.hero {
    background-image: url('./pictures/resizecom_just a simple jewelry background (1) (1).jpg'); /* Replace with your image path */
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

  
  /* About Section */
  .about-section {
    padding: 30px 20px;
  }
  .about-text, .about-images {
    margin-bottom: 20px;
  }
  .about-images img {
    width: 100%;
    max-width: 300px;
    display: block;
    margin: 10px auto;
  }
  
  /* CTA Button */
  .cta-section {
    text-align: center;
    padding: 20px;
  }
  .cta-button {
    background-color: #ffd700;
    color: #000;
    padding: 15px 30px;
    font-weight: bold;
    border: none;
    cursor: pointer;
  }
  
  /* Guarantee Section */
  .guarantee-section {
    background-color: #111;
    text-align: center;
    padding: 40px 20px;
  }
  .guarantee-section h2 {
    color: #ffd700;
    margin-bottom: 30px;
  }
  .guarantee-items {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
  }
  .guarantee-box {
    margin: 10px;
    max-width: 200px;
  }
  .guarantee-box p {
    margin-top: 10px;
    font-size: 14px;
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

  .about {
  padding: 60px 40px;
  background-color: #000;
  color: #fff;
}

.about-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 40px;
  margin-bottom: 60px;
}

.about-row.reverse {
  flex-direction: row-reverse;
}

.about-row .text {
  flex: 1;
  font-size: 18px;
  line-height: 1.6;
}

.about-row .image {
  flex: 1;
}

.about-row .image img {
  width: 50%;
  max-width: 500px;
  height: auto;
}


.about .image {
  flex: 1;
  display: flex;
  justify-content: center;
}

.about .image img {
  max-width: 100%;
  height: auto;
  border: 1px solid gold;
  padding: 5px;
  background-color: #111;
}

@media (max-width: 768px) {
  .about-row,
  .about-row.reverse {
    flex-direction: column;
    text-align: center;
  }

  .about .image,
  .about .text {
    width: 100%;
  }

  .about .image img {
    max-width: 90%;
  }
}


  .guarantees {
  background-color: #000;
  color: gold;
  padding: 30px 20px 10px;
  text-align: center;
  border-bottom: 1px solid gold;
}

.guarantees h2 {
  font-size: 22px;
  margin-bottom: 25px;
  color: gold;
  letter-spacing: 1px;
}

.guarantee-icons {
  display: flex;
  justify-content: space-around;
  align-items: flex-start;
  flex-wrap: wrap;
  max-width: 1000px;
  margin: 0 auto;
  gap: 20px;
}

.guarantee-item {
  flex: 1 1 200px;
  text-align: center;
  min-width: 180px;
}

.guarantee-item img {
  width: 80px;
  height: auto;
  margin-bottom: 8px;
}

.guarantee-item p {
  font-size: 14px;
  line-height: 1.5;
  color: gold;
  text-transform: uppercase;
  font-weight: 500;
  margin: 0;
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
    
    <section class="hero">
    <div class="hero-text">
      <h1>About Us</h1>
      <p>Welcome to Daurelio — Where Elegance Meets Timeless Craftsmanship.</p>
    </div>
  </section>

  <section class="about">
    <div class="about-row">
      <div class="text">
        <p> DUARELIO is a jewelry business that focuses on creating beautiful and personalized pieces for every style and occasion. We offer ready-made jewelry as well as customization options, so customers can design something meaningful and unique to them. 

          </p>
        <p>Whether it’s a gift, a special keepsake, or something to treat yourself, our goal is to make jewelry that tells a story. </p>
      </div>
      <div class="image">
        <img src="./pictures/resizecom_jewelry for a websites.jpg" alt="Jewelry 1">
      </div>
    </div>
  
    <div class="about-row reverse">
      <div class="image">
        <img src="./pictures/resizecom_just a simple jewelry background (1).jpg" alt="Jewelry 2">
      </div>
      <div class="text">
        <p> At DUARELIO, we believe everyone deserves to wear something that feels special and truly their own. With care, creativity, and a love for detail, we turn simple ideas into something you’ll love to wear every day.</p>
      </div>
    </div>
  </section>
  
  
  

  <section class="cta">
    <a href="./jewelry.php"><button>START SHOPPING</button></a>
  </section>
  

  <section class="guarantees">
    <h2>DAURELIO GUARANTEE</h2>
    <div class="guarantee-icons">
      <div class="guarantee-item">
        <img src="./pictures/money-back-guarantee.png" alt="100% Money Back" />
        <p><strong>100% MONEY BACK</strong><br>GUARANTEE</p>
      </div>
      <div class="guarantee-item">
        <img src="./pictures/time.png" alt="Lifetime Warranty" />
        <p><strong>LIFE TIME</strong><br>WARRANTY</p>
      </div>
      <div class="guarantee-item">
        <img src="./pictures/safe.png" alt="Shipping Guarantee" />
        <p><strong>SAFE & INSURED SHIPPING</strong><br>GUARANTEE</p>
      </div>
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