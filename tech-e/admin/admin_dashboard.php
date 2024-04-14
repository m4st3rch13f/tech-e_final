<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: login_admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech-E Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

</head>
<body>
    <div style="padding: 0;" class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/tech-e-high-resolution-logo-transparent.png" id="logo">
            </div>
        </nav>

        <div class="bg-light">
            <h3 class="text-center">Manage Details</h3>
        </div>

        <div class="row">
            <div class="col-md-12 bg-secondary d-flex">
                <div class="button text-center">
                    <a href="../admin/add_products.php" class="nav-link text-light bg-info my-1"><button>Add Product</button></a>
                    <a href="../admin/admin_dashboard.php?display_products" class="nav-link text-light bg-info my-1"><button>View Products</button></a>
                    <a href="../admin/admin_dashboard.php?add_category" class="nav-link text-light bg-info my-1"><button>Add Category</button></a>
                    <?php if (isset($_SESSION['admin_id'])): ?>
                        <a href="../admin/logout_admin.php" class="nav-link text-light bg-info my-1"><button>Logout</button></a>
                    <?php endif?>
                </div>
            </div>
        </div>

        <hr>

        <div style="margin-top: 10px;" class="container">
            <?php
            if(isset($_GET['add_category'])) {
                include('add_categories.php');
            }
            if(isset($_GET['display_products'])) {
                include('display_products.php');
            }
            if(isset($_GET['edit_product'])) {
                include 'edit_product.php';
            }
            if(isset($_GET['delete_product'])) {
                include 'delete_product.php';
            }
            ?>
        </div>
    </div>
</body>
</html>