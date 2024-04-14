<?php
include '../tech-e/settings/connection.php';
include '../tech-e/functions/getIP.php';
include '../tech-e/functions/get_cart_items.php'; 
include '../tech-e/settings/core.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="../tech-e/index.css">
    <link rel="stylesheet" href="../tech-e/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>
<body>
<section id="header">
        <a href="../tech-e/index.php"><img src="../tech-e/images/tech-e-high-resolution-logo-transparent.png" id="logo"></a>
        <div>
            <ul id="navbar">
                <li><a href="../tech-e/index.php">Home</a></li>
                <li><a class="active" href="../tech-e/store.php">Store</a></li>
                <li><a href="../tech-e/about.php">About</a></li>
                <?php
                include '../tech-e/functions/get_cart_price.php';
                ?>
                <li style="color: #007BFF;"><a href="../tech-e/cart.php"><i style="margin-right: 10px;" class="fa-solid fa-cart-shopping"></i></a>Total Price: $<?php getTotalPrice();?></li>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a href="../tech-e/logout.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </section>

    <h1 style="text-align:center">Your Cart</h1>
    <section id="product1" class="section-p1">
        <div class="pro-container">
            <?php displayCart(); ?>
        </div>
    </section>
    <a href="../tech-e/order.php" class="checkout"><button>Proceed to Checkout</button></a>
</body>
</html>