<?php

include '../tech-e/settings/connection.php';
include '../tech-e/functions/getIP.php';

function getTotalPrice() {
    global $conn;
    $get_IP = getIPAddress();
    $total_price = 0;

    $cart_query = "SELECT * FROM `cart` WHERE ip_address='$get_IP'";
    $result = mysqli_query($conn, $cart_query);

    while ($row = mysqli_fetch_array($result)) {
        $product_id = $row['product_id'];
        $select_products = "SELECT * FROM `products` WHERE product_id='$product_id'";
        $result_products = mysqli_query($conn, $select_products);

        while ($row_product_price = mysqli_fetch_array($result_products)) {
            $product_price = $row_product_price['product_price'];
            $total_price += $product_price;
        }
    }

    echo $total_price;
}