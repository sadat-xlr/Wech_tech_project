<?php

require_once '../models/db_config.php';

//php validation

$err_newCategory = "";
$newCategory = "";
$err_newProduct = "";
$newProduct = "";
$err_price = "";
$price = "";
$err_discount = "";
$discount = "";
$haserror = false;

//selectProduct($_GET["id"]);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST["update"])) {

        // Category Validation
        if (is_numeric($_POST["newCategory"])){
            $err_newCategory = "*** insert valid category name";
            $haserror = true;
        }

        // Product Validation
        if (is_numeric($_POST["newProduct"])){
            $err_newProduct = "*** insert valid product name";
            $haserror = true;
        }
        
        //Price validation
        // if (!empty($_POST["price"])){
        //     if(! is_numeric($_POST["price"])) {
        //         $haserror = true;
        //         $err_price = "*** Enter valid price";
        //     }
        // }
        
        else{
            $newCategory = $_POST["newCategory"];
            $newProduct = $_POST["newProduct"];
            $price = $_POST["price"];
            $discount = $_POST["discount"];
            $haserror=false;
        }
        
        
        
        if($haserror==false){

            updateProduct($_GET["id"], $newCategory, $newProduct,$price, $discount);
            header("Location: ../manager/viewAllProduct.php");
        }

    }

    if (isset($_POST["delete"])) {
        deleteProduct($_GET["id"]);
        header("Location: ../manager/viewAllProduct.php");

    }

}

//php validation ends



//functions

function getProduct($id){
    $query= "SELECT * FROM product WHERE id= $id";
    $result = get_data($query);
    if(count($result)>0){
        return $result [0];
    }
    return false;
}

function updateProduct($id, $newCategory, $newProduct,$price, $discount){
    $query = "update product set category='$newCategory', product= '$newProduct', price='$price', discount='$discount' where id=$id";
    execute($query);
}

function deleteProduct($id){
    $query = "DELETE FROM product WHERE id=$id";
    execute($query);
    
}

function searchProduct($key){
    $query= "SELECT category, product, id FROM product where product like '%$key%'";
    $result= get_data($query);
    return $result;
}
//functions end