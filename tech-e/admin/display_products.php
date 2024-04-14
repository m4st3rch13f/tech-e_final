<?php
include '../settings/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">All Products</h1>
    <table class="table table-bordered mt-5">
        <thead class="bg-info">
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Product Image</th>
                <th>Product Price</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $get_products = "select * from `products`";
            $get_result = mysqli_query($conn, $get_products);
            while ($row = mysqli_fetch_assoc($get_result)) {
                $product_id = $row['product_id'];
                $product_title = $row['product_name'];
                $product_image = $row['product_image'];
                $product_price = $row['product_price'];
        
                echo "<tr>
                        <td>$product_id</td>
                        <td>$product_title</td>
                        <td><img src='../admin/prod_images/$product_image' alt='$product_title' style='width: 100px;'></td>
                        <td>$product_price</td>
                        <td><a href='admin_dashboard.php?edit_product=$product_id' class='text-light'><i class='fa-solid fa-pencil'></i></a></td>
                        <td><a href='admin_dashboard.php?delete_product=$product_id' class='text-light'><i class='fa-solid fa-trash-can'></i></a></td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>