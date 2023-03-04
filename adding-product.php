<?php
require 'input.php';
if (isset($_POST['cancel-btn'])) {
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
     <link rel="stylesheet" href="adding-product.css">
     <title>Product Add</title>
</head>
<body>
     <h1>Product Add</h1>
        <form action="" method="POST" autocomplete="off">
          <div class="save-cancel-btns">
          <button type="submit" id="save-btn" name="save-btn" value="save-btn" >Save</button> 
          <button  id="cancel-btn" name="cancel-btn">Cancel</button>
          </div>
          <hr>
          <div class="input-style">
          <label for="">SKU</label>
          <input type="text" id="sku" name="sku"><br><br>
        
          <label for="">Name</label>
          <input type="text" id="name" name="name"><br><br>
        
          <label for="">Price($)</label>
          <input type="number" id="price" name="price"><br><br>

          <label for="ProductType">Type Switcher</label>
          <select id="ProductType" name="ProductType">
          <option value="typesw">Type Switcher</option>
          <option value="dvd">DVD</option>
          <option value="book">Book</option>
          <option value="furniture">Furniture</option>
          </select><br><br>
          <script src="function.js"></script>
           <div id="type-specific-attributes"></div>
          </div>
       </form>
</body>
</html>