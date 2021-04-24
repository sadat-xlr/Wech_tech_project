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


  if(isset($_POST['btn_addProduct'])){
  	if(empty($_POST['name'])){
       
       $err_name="insert name";
      
  	}
    if(empty($_POST['price'])){
       
      
       $err_price="insert price";
      
    }
    if(empty($_POST['details'])){
       
       
       $err_details="insert details";
    }
    if(empty($_POST['product_pic'])){
    
      
       $err_pic="insert picture";
       
    }





  	if(is_numeric($_POST['name'])){
       
       $err_name="insert valid name";
      
  	}
    if(!is_numeric($_POST['price'])){
         
       $err_price="insert valid price";
      
      
    }
    if(is_numeric($_POST['details'])){
       
      
      
       $err_details="insert valid details";
    }



  	if($_POST['category']==""){
  		
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
    insertProduct($name,$price,$category,$details);
}


  }
}

if(isset($_POST['btn_updateProduct'])){

  editProduct($_POST['id'],$_POST['name'],$_POST['price'],$_POST['category'],$_POST['details']);
  header("location:allproducts.php");
}
if(isset($_POST["btn_delete_product"])){
  deleteProduct($_POST['id']);
  header("location:allproducts.php");
  

}


  function check_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
}
//insert product
function insertProduct($name,$price,$category,$details){
    $query="INSERT INTO products VALUES(NULL,'$name',$price,'$category','$details')";
    execute($query);
    return true;
   
   }

//update product 

   function editProduct($id,$name,$price,$category,$details){
    $query="update products set name='$name',price=$price,category='$category',details='$details' where id=$id";
    $result=execute($query);
    
   }
//list product
   function getAllproducts(){
    $query="SELECT * from products";
    $result=get_data($query);
    return $result;

   }
//delete productt
   function deleteProduct($id)
   {$query="DELETE FROM products where id=$id";
   execute($query);


   }
//get prodts
  function getProduct($id){
    $query="SELECT * from products WHERE id=$id";
    $result=get_data($query);
    if(count($result)>0 ){
      return $result[0];
    }
    return false;

  }


 

  
?>