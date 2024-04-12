<?php

include '../tech-e/settings/connection.php';

function add_to_cart() {
    if (isset($_GET['add_to_cart'])) {
        global $conn;

        $get_IP = getIPAddress();
        $get_product_id = $_GET['add_to_cart'];

        $select_query = "SELECT * FROM cart WHERE ip_address = ? AND product_id = ?";
        $stmt = mysqli_prepare($conn, $select_query);
        mysqli_stmt_bind_param($stmt, "si", $get_IP, $get_product_id);
        mysqli_stmt_execute($stmt);
        $result_query = mysqli_stmt_get_result($stmt);

        $num_of_rows = mysqli_num_rows($result_query);

        if ($num_of_rows > 0) {
            echo "<script>alert('This item is already present inside cart')</script>";
            echo "<script>window.open('store.php', '_self')</script>";
        } else {
            $insert_query = "INSERT INTO cart (product_id, ip_address) VALUES (?, ?)";
            $stmt = mysqli_prepare($conn, $insert_query);
            mysqli_stmt_bind_param($stmt, "is", $get_product_id, $get_IP);
            $result_query = mysqli_stmt_execute($stmt);

            if ($result_query) {
                echo "<script>window.open('store.php', '_self')</script>";
            } else {
                echo "<script>alert('Error adding item to cart')</script>";
                echo "<script>window.open('store.php', '_self')</script>";
            }
        }
    }
}