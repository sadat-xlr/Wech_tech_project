<?php
    require_once '../controllers/udProductController.php';
    $key= $_GET["key"];
    $products= searchProduct($key);

    foreach ($products as $product){
        echo "<a href='updateDeleteProduct.php?id=".$product["id"] ."'>".$product["product"]."<a><br>";
    }
?>