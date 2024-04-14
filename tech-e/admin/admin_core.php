<?php

session_start();

function checkUserLogin() {
    if (!isset($_SESSION['user_id'])) {
        header("location: ..tech-e/admin/login_admin.php");
        die();
    }
}

checkUserLogin();