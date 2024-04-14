<?php

include '../tech-e/settings/connection.php';
function displayCart() {
    global $conn;
    $ip = getIPAddress();

    $select_query = "SELECT products.product_id, products.product_name, products.product_desc, products.product_image, products.product_price 
                     FROM cart 
                     INNER JOIN products ON cart.product_id = products.product_id 
                     WHERE cart.ip_address = ?";
    
    $stmt = mysqli_prepare($conn, $select_query);
    mysqli_stmt_bind_param($stmt, "s", $ip);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            displayProductInCart($row);
        }
    } else {
        echo "<p>Your cart is empty</p>";
    }
}

function displayProductInCart($row) {
    $product_id = $row['product_id'];
    $product_name = $row['product_name'];
    $description = $row['product_desc'];
    $product_image = $row['product_image'];
    $product_price = $row['product_price'];

    echo "<div class='pro'>
            <img src='../tech-e/admin/prod_images/$product_image' alt='$product_name'>
            <div class='prodname'>
                <h3>$product_name</h3>
                <p>$description</p>
                <h4 style='margin-top: 5px; margin-bottom: 5px; font-size: 16pt; font-weight: 700; color: #007BFF;'>$$product_price</h4>
            </div>
            <a style='color: #007BFF; font-size: 25pt' href='functions/remove_from_cart.php?remove_id=$product_id'><i class='fa-solid fa-circle-minus'></i></a>
          </div>";
}