<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
                <!-- <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Admin</a>
                        </li>
                    </ul>
                </nav> -->
            </div>
        </nav>

        <div class="bg-light">
            <h3 class="text-center">Manage Details</h3>
        </div>

        <div class="row">
            <div class="col-md-12 bg-secondary d-flex">
                <div class="button text-center">
                    <a href="../admin/add_products.php" class="nav-link text-light bg-info my-1"><button>Add Product</button></a>
                    <button><a href="" class="nav-link text-light bg-info my-1"></a>View Product</button>
                    <a href="../admin/admin_dashboard.php?add_category" class="nav-link text-light bg-info my-1"><button>Add Category</button></a>
                    <button><a href="" class="nav-link text-light bg-info my-1"></a>View Categories</button>
                    <button><a href="" class="nav-link text-light bg-info my-1"></a>Orders</button>
                    <button><a href="" class="nav-link text-light bg-info my-1"></a>Payments</button>
                    <button><a href="" class="nav-link text-light bg-info my-1"></a>Users</button>
                    <button><a href="" class="nav-link text-light bg-info my-1"></a>Logout</button>
                </div>
            </div>
        </div>

        <hr>

        <div style="margin-top: 10px;" class="container">
            <?php
            if(isset($_GET['add_category'])) {
                include('add_categories.php');
            }
            ?>
        </div>
    </div>
</body>
</html>