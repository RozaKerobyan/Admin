<?php
require 'db-connect.php';

if(isset($_POST["save-btn"])){
  $sku = $_POST["sku"];
  $name = $_POST["name"];
  $price = $_POST["price"];
  $productType = $_POST['ProductType'];
  if ($productType == 'dvd') {
    $size = $_POST['size'];
    // Do something with $size
  } else if ($productType == 'book') {
    $weight = $_POST['weight'];
    // Do something with $weight
  } else if ($productType == 'furniture') {
    $height = $_POST['height'];
    $width = $_POST['width'];
    $length = $_POST['length'];
    // Do something with $height, $width, and $length
  }

  $query = "INSERT INTO products VALUES('', '$sku', '$name', '$price','$productType','$size','$weight','$height','$width','$length')";
  $result = mysqli_query($conn,$query);
  if ($result) {
    header('location:your-website.php');
  }
}
?>