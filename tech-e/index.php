<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech-E Home</title>
    <link rel="stylesheet" href="../tech-e/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>
<body>
    <section id="header">
        <a href="../tech-e/index.php"><img src="../tech-e/images/tech-e-high-resolution-logo-transparent.png" id="logo"></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="../tech-e/index.php">Home</a></li>
                <li><a href="../tech-e/store.php">Store</a></li>
                <li><a href="../tech-e/about.php">About</a></li>
                <li><a href="../tech-e/cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a href="../tech-e/logout.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </section>
    
    <section style="background-image: url(../tech-e/images/idk.jpg);" id="filler">
        <h1 style="font-size: 40pt; padding-left: 20px; margin-bottom: 5px;">Your one-stop shop for all things electronic</h1>
        <h2 style="font-size: 30pt; padding-left: 20px; color: rgba(0, 255, 255, 0.789); margin-bottom: 5px;">Shop till you drop</h2>
        <h3 style="font-size: 20pt; padding-left: 20px; color: gold; margin-bottom: 50px;">The best deals</h3>
        <a href="../tech-e/store.php"><button>Shop Now</button></a>
    </section>

    <section id="product1" class="section-p1">
        <h1 style="font-size: 30pt; margin-bottom: 10px;">Featured Products</h1>
        <p style="font-size: larger;">The Latest In Tech</p>
        <div class="pro-container">
            <div class="pro">
                <img src="../tech-e/images/login_bg1.jpg" alt="">
                <div class="prodname">
                    <h3 style="margin-bottom: 5px;">Mechanical Keyboard</h3>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 style="margin-top: 5px; margin-bottom: 5px; font-size: 16pt; font-weight: 700; color: #007BFF;">$50</h4>
                </div>
            </div>
            
            <div class="pro">
                <img src="../tech-e/images/prod2.jpeg" alt="">
                <div class="prodname">
                    <h3 style="margin-bottom: 5px;">Airpods Pro</h3>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 style="margin-top: 5px; margin-bottom: 5px; font-size: 16pt; font-weight: 700; color: #007BFF;">$30</h4>
                </div>
            </div>

            <div class="pro">
                <img src="../tech-e/images/prod3.webp" alt="">
                <div class="prodname">
                    <h3 style="margin-bottom: 5px;">Bose Home Speaker</h3>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 style="margin-top: 5px; margin-bottom: 5px; font-size: 16pt; font-weight: 700; color: #007BFF;">$45</h4>
                </div>
            </div>

            <div class="pro">
                <img src="../tech-e/images/prod4.jpg" alt="">
                <div class="prodname">
                    <h3 style="margin-bottom: 5px;">HP Pavilion 15</h3>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 style="margin-top: 5px; margin-bottom: 5px; font-size: 16pt; font-weight: 700; color: #007BFF;">$96</h4>
                </div>
            </div>

            <div class="pro">
                <img src="../tech-e/images/prod5.jpg" alt="">
                <div class="prodname">
                    <h3 style="margin-bottom: 5px;">PlayStation 5</h3>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 style="margin-top: 5px; margin-bottom: 5px; font-size: 16pt; font-weight: 700; color: #007BFF;">$107</h4>
                </div>
            </div>

            <div class="pro">
                <img src="../tech-e/images/prod6.jpg" alt="">
                <div class="prodname">
                    <h3 style="margin-bottom: 5px;">Samsung S23 Ultra</h3>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 style="margin-top: 5px; margin-bottom: 5px; font-size: 16pt; font-weight: 700; color: #007BFF;">$100</h4>
                </div>
            </div>

            <div class="pro">
                <img src="../tech-e/images/prod7.jpg" alt="">
                <div class="prodname">
                    <h3 style="margin-bottom: 5px;">Wireless Gaming Mouse</h3>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 style="margin-top: 5px; margin-bottom: 5px; font-size: 16pt; font-weight: 700; color: #007BFF;">$37</h4>
                </div>
            </div>

            <div class="pro">
                <img src="../tech-e/images/prod8.webp" alt="">
                <div class="prodname">
                    <h3 style="margin-bottom: 5px;">Anker Portable Powerbank</h3>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 style="margin-top: 5px; margin-bottom: 5px; font-size: 16pt; font-weight: 700; color: #007BFF;">$40</h4>
                </div>
            </div>
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div style="background-image: url(../tech-e/images/login_bg2.jpg);" class="banner-box">
            <h4 style="color: white; margin-bottom: 5px;">crazy deals</h4>
            <h2 style="color: white; margin-bottom: 5px; margin-top: 5px;">buy 1 get 1 free</h2>
            <span style="color: white; margin-bottom: 20px;">The best gadgets on sale at Tech-E</span>
            <button class="white">Learn More</button>
        </div>

        <div style="background-image: url(../tech-e/images/banner1.webp);" class="banner-box2">
            <h4 style="color: white; margin-bottom: 5px;">crazy deals</h4>
            <h2 style="color: white; margin-bottom: 5px; margin-top: 5px;">buy 1 get 1 free</h2>
            <span style="color: white; margin-bottom: 20px;">The best classic dress is on sale at cara</span>
            <button class="white">Explore</button>
        </div>
    </section>

    <section id="banner3">
        <div style="background-image: url(../tech-e/images/banner3a.webp);" class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3 style="font-size: larger;">-50% OFF During Winter And Summer</h3>
        </div>

        <div style="background-image: url(../tech-e/images/banner3b.jpg);" class="banner-box banner-box2">
            <h2>SEASONAL SALES</h2>
            <h3 style="font-size: larger;">Create Your Own Network Of Devices</h3>
        </div>

        <div style="background-image: url(../tech-e/images/banner3c.webp);" class="banner-box banner-box3">
            <h2>The Fastest Devices Online</h2>
            <h3 style="font-size: larger;">At The Click of A Button</h3>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" style="height: 90px; width: 350px;" src="../tech-e/images/tech-e-high-resolution-logo-transparent.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address: </strong>P.O.BOX 42387, Kumasi</p>
            <p><strong>Phone: </strong>0246237238</p>
            <p><strong>Hours: </strong> 10:00 - 18:00, Mon - Sat</p>
            <div class="follow">
                <h4 style="margin-bottom: 0;">Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="colx">
            <h4>Tech-E Store</h4>
            <a href="#">Phones</a>
            <a href="#">Laptops</a>
            <a href="#">Accessories</a>
        </div>

        <div class="colx">
            <h4>About</h4>
            <a href="../tech-e/about.php">About Us</a>
            <a href="../tech-e/termsandcond.php">Terms & Conditions</a>
        </div>

        <div class="colx">
            <h4>My Account</h4>
            <a href="../tech-e/login.php">Sign In</a>
            <a href="../tech-e/cart.php">View Cart</a>
        </div>

        <div class="copyright">
            <p>Copyright © Tech-E All Rights Reserved</p>
        </div>
    </footer>

    <script src="homepage.js"></script>
</body>
</html>
