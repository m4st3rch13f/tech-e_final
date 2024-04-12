<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>

    <link rel="stylesheet" href="../tech-e/index.css">
    <link rel="stylesheet" href="../tech-e/store.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>
<body>
<section id="header">
        <a href="../tech-e/index.php"><img src="../tech-e/images/tech-e-high-resolution-logo-transparent.png" id="logo"></a>
        <div>
            <ul id="navbar">
                <li><a href="../tech-e/index.php">Home</a></li>
                <li><a class="active" href="../tech-e/store.php">Store</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
        </div>
    </section>

    <div style="display: flex;">
        <div class="sidebar">
            <h2>Menu</h2>
            <ul>
                <li><a class="cat_display" href="../tech-e/store.php">Categories</a></li>

                <?php
                include '../tech-e/functions/get_categories.php';
                getCategories();
                ?>
            </ul>
        </div>

        <section id="product1" class="section-p1">
        <h2 style="font-size: 28pt; text-align: center; margin-top: 0px; margin-bottom: 75px;">Products</h2>
            <div style="margin-left: 200px;" class="pro-container">
            <?php
            include '../tech-e/functions/get_products.php';

            if (isset($_GET['category'])) {
                $category_id = $_GET['category'];
                getProductsByCategory($category_id);
            } else {
                getProducts();
            }
            ?>
            </div>
        </section>
    </div>

    <?php
    include '../tech-e/functions/getIP.php';
    $ip = getIPAddress();
    echo 'User Real IP Address - '.$ip;

    include '../tech-e/functions/add_to_cart.php';
    add_to_cart();
    ?>
</body>
</html>