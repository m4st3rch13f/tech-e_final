<?php
include '../tech-e/settings/connection.php';

function getProducts() {
    global $conn;

    $select_products = "SELECT * FROM `products`";
    $result_products = mysqli_query($conn, $select_products);

    while ($row = mysqli_fetch_assoc($result_products)) {
        displayProduct($row);
    }
}

function getProductsByCategory($category_id) {
    global $conn;

    $select_products = "SELECT * FROM `products` WHERE `category_id` = $category_id";
    $result_products = mysqli_query($conn, $select_products);

    while ($row = mysqli_fetch_assoc($result_products)) {
        displayProduct($row);
    }
}

function displayProduct($row) {
    $product_id = $row['product_id'];
    $product_name = $row['product_name'];
    $description = $row['product_desc'];
    $product_image = $row['product_image'];
    $product_price = $row['product_price'];

    echo "<div class='pro'>
            <img src='../tech-e/admin/prod_images/$product_image' alt='$product_name'>
            <div class='prodname'>
                <h3 style='margin-bottom: 5px;'>$product_name</h3>
                <p>$description</p>
                <h4 style='margin-top: 5px; margin-bottom: 5px; font-size: 16pt; font-weight: 700; color: #007BFF;'>$$product_price</h4>
            </div>
            <a style='color: #007BFF;' href='store.php?add_to_cart=$product_id'><i style='background-color: #e8f6ea; color: #088178; border-radius: 50px; width: 40px; height: 40px; line-height: 40px; border: 1px solid #cce7d0;' class='fa-solid fa-cart-shopping'></i></a>
          </div>";
}
