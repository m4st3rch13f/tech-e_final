<?php
include '../tech-e/settings/connection.php';

function getCategories() {
    global $conn;

    $select_categories = "SELECT * FROM `categories`";
    $result_categories = mysqli_query($conn, $select_categories);

    while ($row_data = mysqli_fetch_assoc($result_categories)) {
        $category_name = $row_data['category_name'];
        $category_id = $row_data['category_id'];
        echo "<li class='cat_item'>
                <a href='store.php?category=$category_id' class='cat_display'>$category_name</a>
              </li>";
    }
}
