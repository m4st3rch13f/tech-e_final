<?php
include '../tech-e/settings/connection.php';
include '../tech-e/functions/get_cart_price.php';

if (isset($_POST['place_order'])) {
    $user_id = $_POST['user_id'];
    $total_price = $_POST['total_price'];

    if (!$user_id) {
        die("User ID cannot be null");
    }

    // Fetch products from cart
    $get_cart_products = "SELECT product_id FROM `cart` WHERE user_id = ?";
    $stmt_cart = mysqli_prepare($conn, $get_cart_products);

    if ($stmt_cart) {
        mysqli_stmt_bind_param($stmt_cart, "i", $user_id);
        mysqli_stmt_execute($stmt_cart);
        $result_cart = mysqli_stmt_get_result($stmt_cart);

        if (mysqli_num_rows($result_cart) > 0) {
            // Insert order into the database
            $insert_order = "INSERT INTO `orders` (user_id, total_price) VALUES (?, ?)";
            $stmt = mysqli_prepare($conn, $insert_order);

            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "id", $user_id, $total_price);

                if (mysqli_stmt_execute($stmt)) {
                    $order_id = mysqli_insert_id($conn);

                    while ($row = mysqli_fetch_assoc($result_cart)) {
                        $product_id = $row['product_id'];

                        // Insert order details into the database
                        $insert_order_details = "INSERT INTO `order_details` (order_id, product_id) VALUES (?, ?)";
                        $stmt_details = mysqli_prepare($conn, $insert_order_details);

                        if ($stmt_details) {
                            mysqli_stmt_bind_param($stmt_details, "ii", $order_id, $product_id);

                            if (!mysqli_stmt_execute($stmt_details)) {
                                echo "Error placing order details: " . mysqli_error($conn);
                            }
                        } else {
                            echo "Error preparing order details statement: " . mysqli_error($conn);
                        }
                    }

                    // Clear user's cart after placing order
                    $clear_cart = "DELETE FROM `cart` WHERE user_id = ?";
                    $stmt_clear = mysqli_prepare($conn, $clear_cart);
                    
                    if ($stmt_clear) {
                        mysqli_stmt_bind_param($stmt_clear, "i", $user_id);
                        mysqli_stmt_execute($stmt_clear);
                    }
                    
                    echo "<script>alert('Order placed successfully')</script>";
                    echo "<script>window.open('order_success.php','_self')</script>";
                    exit();
                } else {
                    echo "Error placing order: " . mysqli_error($conn);
                }
            } else {
                echo "Error preparing order statement: " . mysqli_error($conn);
            }
        } else {
            echo "Cart is empty";
        }
    } else {
        echo "Error preparing cart statement: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Order</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Place Order</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="total_price">Total Price: $<?php getTotalPrice();?></label>
            </div>
            <div class="form-group">
                <input style="background-color: #007BFF;" type="submit" name="place_order" class="btn btn-success" value="Place Order">
            </div>
        </form>

        <h3>Products in Cart:</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $get_products = "select * from `products`";
            $get_result = mysqli_query($conn, $get_products);
            while ($row = mysqli_fetch_assoc($get_result)) {
                $product_id = $row['product_id'];
                $product_title = $row['product_name'];
                $product_price = $row['product_price'];
        
                echo "<tr>
                        <td>$product_id</td>
                        <td>$product_title</td>
                        <td>$product_price</td>
                      </tr>";
            }
            ?>
        </tbody>
        </table>
    </div>
</body>
</html>
