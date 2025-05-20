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


/* Product Section */
.product-container {
    display: flex;
    flex-wrap: wrap;
    padding: 40px 20px;
    justify-content: center;
  }
  .product-image img {
    max-width: 350px;
    width: 200%;
    border: 2px solid #444;
    border-radius: 10px;
  }
  .product-details {
    max-width: 400px;
    margin-left: 30px;
  }
  .product-details h2 {
    font-size: 28px;
  }
  .price {
    color: #ffd700;
    font-size: 20px;
    margin: 10px 0;
  }
  .quantity-control {
    display: flex;
    align-items: center;
    margin: 10px 0;
  }
  .quantity-control button {
    background-color: #ffd700;
    color: #000;
    border: none;
    padding: 5px 12px;
    font-weight: bold;
    cursor: pointer;
  }
  .quantity-control span {
    margin: 0 10px;
  }
  
  .btn-cart, .btn-buy {
    display: block;
    width: 100%;
    margin: 10px 0;
    padding: 12px;
    font-weight: bold;
    border: none;
    cursor: pointer;
  }
  .btn-cart {
    background-color: #ffd700;
    color: #000;
  }
  .btn-buy {
    background-color: white;
    color: #000;
  }
  
  .product-info {
    list-style: none;
    padding: 0;
    margin-top: 15px;
  }
  .product-info li {
    margin-bottom: 5px;
    font-size: 14px;
  }
  
  /* Recommendations */
  .recommendations {
    padding: 30px 20px;
  }
  .recommendations h3 {
    font-size: 22px;
    margin-bottom: 20px;
  }
  .items {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
  }
  .item {
    text-align: center;
    margin: 10px;
  }
  .item img {
    width: 250px;
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
  }
  .item p {
    margin: 10px 0 5px;
  }
  .item span {
    color: #ffd700;
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
    
    <main class="product-container">
    <div class="product-image">
      <img src="./pictures/resizecom_a ring with some diamond (1).jpg" alt="Diamond Radiance Ring" />
    </div>
    <div class="product-details">
      <h2>Diamond Radiance Ring</h2>
      <p class="price">₱ 17,900.00 PHP</p>

      <label>Quantity</label>
      <div class="quantity-control">
        <button>-</button>
        <span>1</span>
        <button>+</button>
      </div>

      <button class="btn-cart">Add to cart</button>
      <button class="btn-buy">Buy it now</button>

      <ul class="product-info">
        <li>14K</li>
        <li>APPROX .25ct Natural Diamond</li>
        <li>2.2 grams</li>
        <li>Size 6 Adjustable</li>
        <li>RG-037</li>
      </ul>
    </div>
  </main>

  <section class="recommendations">
    <h3>You may also like</h3>
    <div class="items">
      <div class="item">
        <img src="./pictures/resizecom_a simple ring but elegant (2).jpg" alt="Clara Ring"/>
        <p>Clara Ring</p>
        <span>₱ 9,599.00 PHP</span>
      </div>
      <div class="item">
        <img src="./pictures/resizecom_a jewelry necklase.jpg" alt="Elara Necklace"/>
        <p>Elara Lotus Necklace</p>
        <span>₱ 14,700.00 PHP</span>
      </div>
      <div class="item">
        <img src="./pictures/resizecom_resizecom_download (6).jpg" alt="Sterling Earrings"/>
        <p>Sterling Silver Earrings</p>
        <span>₱ 9,599.00 PHP</span>
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