<?php
  require_once '../models/db_config.php';
  $name="";
  $category="";
  $price="";
  $product_pic="";
  $details="";
  $err_name="";
  $err_price="";
  $err_pic="";
  $err_category="";
  $err_details="";

  $hasError=false;
  if(isset($_POST['btn_addProduct'])){
  	if(empty($_POST['name'])||empty($_POST['price'])||empty($_POST['details'])||empty($_POST['product_pic'])){
       $hasError=true;
       $err_name="insert name";
       $err_price="insert phone no";
       $err_pic="insert picture";
       $err_detail="insert details";
  	}
  	if(is_numeric($_POST['name'])||!is_numeric($_POST['price'])||is_numeric($_POST['details'])){
       $hasError=true;
       $err_name="insert valid name";
       $err_price="insert valid price";
      
       $err_details="insert valid details";
  	}
  	if($_POST['category']==""){
  		$hasError=true;
  		$err_category="category not selected";
  	}
  	
  	else{
  	$name=htmlspecialchars($_POST['name']);
    $price=htmlspecialchars($_POST['price']);
    $category=htmlspecialchars($_POST['category']);
    $details=htmlspecialchars($_POST['details']);
    $product_pic = check_input($_POST['product_pic']);
    $allowed =  array('jpeg','jpg', "JPEG","JPG");
    $ext = pathinfo($product_pic, PATHINFO_EXTENSION);
    if(!in_array($ext,$allowed) ) {
    $err_pic = "jpeg only";
}


  }
}


  function check_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
return $data;
}

 

  
?>