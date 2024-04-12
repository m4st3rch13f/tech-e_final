<?php
include '../settings/connection.php';

if (isset($_POST['add_cat_name'])) {
    $category_name = $_POST['cat_name'];

    $s_query = "SELECT * FROM `categories` WHERE category_name=?";
    $stmt = mysqli_prepare($conn, $s_query);

    mysqli_stmt_bind_param($stmt, "s", $category_name);

    mysqli_stmt_execute($stmt);
    $s_result = mysqli_stmt_get_result($stmt);

    $number = mysqli_num_rows($s_result);

    if ($number > 0) {
        echo "<script>alert('This category is already present in the database')</script>";
    } else {
        $i_query = "INSERT INTO `categories` (category_name) VALUES (?)";
        $stmt = mysqli_prepare($conn, $i_query);

        mysqli_stmt_bind_param($stmt, "s", $category_name);

        $i_result = mysqli_stmt_execute($stmt);

        if ($i_result) {
            echo "<script>alert('Category added successfully')</script>";
        } else {
            echo "<script>alert('Error adding category')</script>";
        }
    }
}
?>

<h2 style="text-align:center; margin-top: 10px;">Add New Category</h2>
<form action="" method="post" class="mb-2">
    <div style="width: 200px;" class="input-group">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_name" placeholder="New Category" aria-describedby="basic-addon1">
    </div>

    <div style="width: 10px;" class="input-group">
        <input style="background-color: blue; color: white;" type="submit" class="form-control" name="add_cat_name" value="Add Category" aria-describedby="basic-addon1">
    </div>
</form>