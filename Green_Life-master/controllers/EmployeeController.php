<?php
  require_once '../models/db_config.php';
  $e_name="";
  $e_phone="";
  $e_email="";
  $e_type="";
  $e_bloodgrp="";
  $err_name="";
  $err_phone="";
  $err_email="";
  $err_type="";
  $err_bloodgrp="";

  $hasError=false;
  if(isset($_POST['btn_add_emp'])){
  	if(empty($_POST['e_name'])||empty($_POST['e_phone'])||empty($_POST['e_email'])){
       $hasError=true;
       $err_name="insert name";
       $err_phone="insert phone no";
       $err_email="insert email";
  	}
  	if(is_numeric($_POST['e_name'])||!is_numeric($_POST['e_phone'])||is_numeric($_POST['e_email'])){
       $hasError=true;
       $err_name="name can not be number ";
       $err_phone="invalid phone no";
       $err_email="invalid email";
  	}
  	if($_POST['e_type']==""){
  		$hasError=true;
  		$err_type="type not selected";
  	}
  	if($_POST['e_bloodgrp']==""){
  		$hasError=true;
  		$err_bloodgrp="slecer blood group";
  	}
  	else{
  	$e_name=htmlspecialchars($_POST['e_name']);
    $e_phone=htmlspecialchars($_POST['e_phone']);
    $e_email=htmlspecialchars($_POST['e_email']);
    $e_type=htmlspecialchars($_POST['e_type']);
    $e_bloodgrp=htmlspecialchars($_POST['e_bloodgrp']);

  }
  }
  
  if(!$hasError){
  insertEmployee($e_name,$e_email,$e_phone,$e_type,$e_bloodgrp);
    
  }

  function insertEmployee($e_name,$e_email,$e_phone,$e_type,$e_bloodgrp){
  	$query="INSERT INTO employee VALUES(NULL,'$e_name','$e_email',$e_phone,'$e_type','$e_bloodgrp')";
  	execute($query);
  	return true;
   
   }
  

  
?>