<?php
include '../settings/connection.php';

if (isset($_GET['remove_id'])) {
    $product_id = $_GET['remove_id'];
    $ip = $_SERVER['REMOTE_ADDR'];

    $delete_query = "DELETE FROM cart WHERE product_id = ? AND ip_address = ?";
    
    $stmt = mysqli_prepare($conn, $delete_query);
    mysqli_stmt_bind_param($stmt, "ss", $product_id, $ip);
    
    if (mysqli_stmt_execute($stmt)) {
        header("Location: ../cart.php");
        exit();
    } else {
        echo "<script>alert('Error removing product from cart')</script>";
        header("Location: ../cart.php");
        exit();
    }
}
