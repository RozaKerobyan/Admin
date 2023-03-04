<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "products_db";

$conn = mysqli_connect ($servername, $username, $password, $database);

if(!$conn) {
    die("connected failed:" . mysqli_connect_error());
}

?>

