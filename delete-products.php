<?php
include 'db-connect.php';
include 'input.php';

if (isset($_POST['delete-products-btn'])) {
    $productIds = $_POST['product_id'];
    foreach ($productIds as $productId) {
        $sql = "DELETE FROM `products` WHERE `ID` = $productId";
        mysqli_query($conn, $sql);
    }
    header("Location: your-website.php");
    exit();
}
?>


