<?php
include '../settings/connection.php';

$product_name = "";
$product_desc = "";
$category_id = "";
$product_price = "";

if (isset($_GET['edit_product'])) {
    $edit_id = $_GET['edit_product'];

    $get_data = "SELECT * FROM `products` WHERE product_id = ?";
    $stmt = mysqli_prepare($conn, $get_data);
    mysqli_stmt_bind_param($stmt, "i", $edit_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $product_name = $row['product_name'];
        $product_desc = $row['product_desc'];
        $category_id = $row['category_id'];
        $product_price = $row['product_price'];
    } else {
        echo "Product not found!";
        exit();
    }
}

if (isset($_POST['edit_prod'])) {
    $product_name = $_POST['product_name'];
    $product_desc = $_POST['product_desc'];
    $category_id = $_POST['product_category'];
    $product_price = $_POST['product_price'];

    $product_image = $_FILES['product_image']['name'];
    $product_image_temp = $_FILES['product_image']['tmp_name'];

    $file_parts = explode('.', $product_image);
    $file_ext = strtolower(end($file_parts));
    $extensions = array("jpeg", "jpg", "png", "webp");

    if (!empty($product_image)) {
        if (in_array($file_ext, $extensions) === false) {
            echo "<script>alert('File extension not allowed, please choose a JPEG, WEBP or PNG file.')</script>";
            exit();
        }

        $file_destination = "../admin/prod_images/" . $product_image;

        if (move_uploaded_file($product_image_temp, $file_destination)) {
            $update_query = "UPDATE `products` SET 
                             product_name = ?,
                             product_desc = ?,
                             category_id = ?,
                             product_image = ?,
                             product_price = ? 
                             WHERE product_id = ?";

            $stmt = mysqli_prepare($conn, $update_query);
            mysqli_stmt_bind_param($stmt, "sssdsi", $product_name, $product_desc, $category_id, $product_image, $product_price, $edit_id);
            
            if (mysqli_stmt_execute($stmt)) {
                header("Location: admin_dashboard.php");
                exit();
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            echo "<script>alert('Failed to upload image')</script>";
        }
    } else {
        $update_query = "UPDATE `products` SET 
                         product_name = ?,
                         product_desc = ?,
                         category_id = ?,
                         product_price = ? 
                         WHERE product_id = ?";

        $stmt = mysqli_prepare($conn, $update_query);
        mysqli_stmt_bind_param($stmt, "sssdi", $product_name, $product_desc, $category_id, $product_price, $edit_id);
        
        if (mysqli_stmt_execute($stmt)) {
            header("Location: admin_dashboard.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>
<body>
    <h1 style="text-align: center;">Edit Product</h1>

    <form style="margin: auto; width: 75%" action="" method="post" enctype="multipart/form-data">
        <div>
            <label for="product_name" class="form-label">Product Name</label>
            <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Product Name" required="required" value="<?php echo $product_name; ?>">
        </div>

        <div>
            <label for="product_desc" class="form-label">Product Description</label>
            <input type="text" name="product_desc" id="product_desc" class="form-control" placeholder="Product Description" required="required" value="<?php echo $product_desc; ?>">
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
                        echo "<option value='$category_id' " . ($category_id == $category_id ? 'selected' : '') . ">$category_name</option>";
                    }
                ?>
            </select>
        </div>

        <div>
            <label for="product_price" class="form-label">Product Price</label>
            <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required="required" value="<?php echo $product_price; ?>">
        </div>

        <div style="margin-top: 20px;">
            <input type="submit" name="edit_prod" class="btn btn-info" value="Edit Product">
        </div>
    </form>
</body>
</html>
