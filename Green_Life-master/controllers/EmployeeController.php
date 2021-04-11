<?php
  require_once '../models/db_config.php';
  $e_name="";
  $e_phone="";
  $e_email="";
  $e_type="";
  $e_bloodgrp="";
  $employee_pic="";
 
  $err_name="";
  $err_phone="";
  $err_email="";
  $err_type="";
  $err_bloodgrp="";
  $err_pic="";

  if(isset($_POST['btn_add_emp'])){
  	if(empty($_POST['e_name'])){
   
       $err_name="insert valid name";
       
      
  	}
    if(empty($_POST['e_phone'])){
     
        $err_phone="insert phone no";
    }
    if(empty($_POST['e_email'])){
     
        $err_email="insert valid email";
    }


     if(is_numeric($_POST['e_name'])){
       
       $err_name="Invalid name";
       
      
    }
    if(!is_numeric($_POST['e_phone'])){
      
        $err_phone="Invalid phone no";
    }
    if(is_numeric($_POST['e_email'])){
      
        $err_email="invalid email";
    }



    if(empty($_POST['employee_pic'])){
        
        $err_pic="insert image";
    }

  	if($_POST['e_type']==""){
  		
  		$err_type="type not selected";
  	}
  	if($_POST['e_bloodgrp']==""){
  		
  		$err_bloodgrp="slecet blood group";
  	}
  else{
  	$e_name=htmlspecialchars($_POST['e_name']);
    $e_phone=htmlspecialchars($_POST['e_phone']);
    $e_email=htmlspecialchars($_POST['e_email']);
    $e_type=htmlspecialchars($_POST['e_type']);
    $e_bloodgrp=htmlspecialchars($_POST['e_bloodgrp']);
    insertEmployee($e_name,$e_email,$e_phone,$e_type,$e_bloodgrp);
    

  }
  }
  
  if(isset($_POST['btn_deleteEmployee'])){
    
    deleteEmployee($_POST['id']);

  }
  
 
 function getAllEmployee(){
  $query="SELECT * FROM employee";
  $result=get_data($query);
  return $result;
 }

 function deleteEmployee($id){
    $query = "DELETE FROM employee WHERE id=$id";
    execute($query);
    
  }

  function insertEmployee($e_name,$e_email,$e_phone,$e_type,$e_bloodgrp){
  	$query="INSERT INTO employee VALUES(NULL,'$e_name','$e_email',$e_phone,'$e_type','$e_bloodgrp')";
  	execute($query);
  	return true;
   
   }
   //update category
function editEmployee($e_name,$e_email,$e_phone,$e_type,$e_bloodgrp){
    $query = "update categories set name='$name' where id=$id";
    execute($query);
    
  }
  function getEmployee($id){
  $query="SELECT * FROM employee where id=$id";
  $result=get_data($query);
  if(count($result)>0){
    return $result[0];
  }
  return false;

 }



   
  

  
?>