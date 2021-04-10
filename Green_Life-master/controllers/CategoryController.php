
<?php
require_once '../models/db_config.php';
$name="";
$err_name="";
$hasError=false;
if(isset($_POST['btn_addCategory'])){
	if(empty($_POST['name'])){
		$hasError=true;
		$err_name="insert category name";
	}
	if(is_numeric($_POST['name'])){
		$hasError=true;
		$err_name="insert valid category name";
	}
	else{

		$name=htmlspecialchars($_POST['name']);

	}
}
if(!$hasError){
	    insertCategory($name);
	  
	  }




//update category

 function insertCategory($name){
 	$query="insert into categories values(NULL,'$name')";
 	execute($query);
 	

 }
  function getCategory($id){
 	$query="SELECT * FROM 'categories' where id=$id)";
 	$result=get_data($query);
 	if(count($result)>0){
 		return $result[0];
 	}
 	return false;

 }
 function getAllCategory(){
 	$query="SELECT * FROM categories";
 	$result=get_data($query);
 
 	return $result;
 	


 }
   


?>