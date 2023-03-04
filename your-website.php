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
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="your-website.css">
     <title>Product List</title>
</head>
<body>
     <h1>Product List</h1>
     <div class="product-lists-btns">
          <button onclick="window.location.href = '/adding-product.php' ;" id="add-product-btn">ADD</button>
          <form action="delete-products.php" method="POST" id="delete-products-form">
          <button type="submit" id="delete-product-btn" name="delete-products-btn">MASS DELETE</button>
     </div>
     <hr>
     <?php
        $sql = "SELECT * FROM `products`";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
               echo '
               <div class="card">
                    <div class="delete-checkbox">
                    <input type="checkbox" name="product_id[]" value="'.$row['ID'].'">
                         <div class="card-text">
                              <p>'.$row['SKU'].'</p>
                              <p>'.$row['Name'].'</p>
                              <p>'.$row['Price'].'</p>';
                              $productType = $row['Type Switcher'];
                              if ($productType == 'dvd') {
                                   echo '<p>DVD: '.$row['DVD Size']. ' MB </p>' ;
                              } else if ($productType == 'book') {
                                   echo '<p>Weight: '.$row['Weight'].' KG</p>';
                              } else if ($productType == 'furniture') {
                                     echo ' <p>'.$row['Height'].' x '.$row['Width'].' x '.$row['Length'].' </p>';
                              }
                              
                    echo '</div>
                    </div>
               </div>
          ';
            }
        }
     ?>
     </form>
</body>
</html>



