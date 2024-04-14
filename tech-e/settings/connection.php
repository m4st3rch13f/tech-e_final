<?php
$servername = "20.117.171.245";
$username = "masterchief";
$password = "";
$dbname = "tech_e";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}