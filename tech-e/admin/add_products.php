<?php
include '../settings/connection.php';

if (isset($_POST['add_prod'])) {
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $product_category = $_POST['product_category'];
    $product_price = $_POST['product_price'];

    $file_name = $_FILES['product_image']['name'];
    $file_tmp = $_FILES['product_image']['tmp_name'];
    $file_type = $_FILES['product_image']['type'];
    
    $file_parts = explode('.', $file_name);
    $file_ext = strtolower(end($file_parts));
    $extensions = array("jpeg", "jpg", "png", "webp");

    if (in_array($file_ext, $extensions) === false) {
        echo "<script>alert('File extension not allowed, please choose a JPEG, WEBP or PNG file.')</script>";
        exit();
    }

    $file_destination = "../admin/prod_images/" . $file_name;

    if (move_uploaded_file($file_tmp, $file_destination)) {
        $insert_query = "INSERT INTO `products` (product_name, product_desc, category_id, product_image, product_price) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $insert_query);

        mysqli_stmt_bind_param($stmt, "ssisi", $product_name, $description, $product_category, $file_name, $product_price);

        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo "<script>alert('Product Added Successfully')</script>";
        } else {
            echo "<script>alert('There was a problem adding the product')</script>";
        }
    } else {
        echo "<script>alert('Failed to upload image')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>
<body>
    <h1 style="text-align: center;">Add Product</h1>

    <form style="margin: auto; width: 75%" action="" method="post" enctype="multipart/form-data">
        <div>
            <label for="product_name" class="form-label">Product Name</label>
            <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Product Name" required="required">
        </div>

        <div>
            <label for="description" class="form-label">Product Description</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="Product Description" required="required">
        </div>

        <div style="margin-top: 10px;">
            <select name="product_category" id="" class="form-select">
                <option value="">Select a Category</option>
                <?php

                    $select_query="Select * from `categories`";
                    $result_query=mysqli_query($conn,$select_query);
                    while($row=mysqli_fetch_assoc($result_query) ){
                        $category_name=$row['category_name'];
                        $category_id=$row['category_id'];
                        echo "<option value='$category_id'>$category_name</option>";
                    }
                ?>
            </select>
        </div>

        <div>
            <label for="product_image" class="form-label">Product Image</label>
            <input type="file" name="product_image" id="product_image" class="form-control" required="required">
        </div>

        <div>
            <label for="product_price" class="form-label">Product Price</label>
            <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required="required">
        </div>

        <div style="margin-top: 20px;">
            <input type="submit" name="add_prod" class="btn btn-info" value="Add Product">
        </div>
    </form>
</body>
</html>