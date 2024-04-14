<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="../tech-e/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

</head>
<body>
    <section id="header">
        <a href="../tech-e/index.php"><img src="../tech-e/images/tech-e-high-resolution-logo-transparent.png" id="logo"></a>
        <div>
            <ul id="navbar">
                <li><a href="../tech-e/index.php">Home</a></li>
                <li><a href="../tech-e/store.php">Store</a></li>
                <li><a class="active" href="../tech-e/about.php">About</a></li>
                <?php
                include '../tech-e/functions/get_cart_price.php';
                ?>
                <li style="color: #007BFF;"><a href="../tech-e/cart.php"><i style="margin-right: 10px;" class="fa-solid fa-cart-shopping"></i></a>Total Price: $<?php getTotalPrice();?></li>
            </ul>
        </div>
    </section>

    <section class="about-section">
        <div class="container">
            <h1>About Us</h1>
            <p>
                Tech-E is your one-stop destination for all tech-related products. 
                We provide a wide range of gadgets, accessories, and more to tech enthusiasts all over the world.
            </p>
            <p>
                Our mission is to provide high-quality products with excellent customer service.
            </p>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Tech-E. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>
