<?php
	require_once 'models/db_config.php';
	//declare validation variables

	if(isset($_POST['edit_User'])){

		if(empty($_POST["username"])){
			
			$err_uname="insert username";
		}
		else{
	
			
	
		}
	
	}	

	if(isset($_POST["add_User"])){
		//do validation
		insertUser($_POST["name"],$_POST["username"],$_POST["password"],$_POST["email"],$_POST["phoneno"]);
	}
	if(isset($_POST["edit_User"])){
		echo "edit isset entered";
		editUser($_POST["id"],$_POST["name"],$_POST["username"],$_POST["password"],$_POST["email"],$_POST["phoneno"]);
	}

	if(isset($_POST["delete_User"])){
		deleteUser($_POST["id"]);
	}

	if(isset($_POST["search_User"])){
		searchUser($_POST["username"]);
	}

	
	function editUser($id,$name,$username,$password,$email,$phoneno){
		$query = "update users set name='$name' , username='$username', password='$password' ,email ='$email' ,phoneno='$phoneno' where id=$id";
		execute($query);
		header("Location: EmployeDasboard.php");
	}

    function deleteUser($id){
		$query = "delete from users where id=$id";
		execute($query);
		header("Location: EmployeDasboard.php");
	}
	function insertUser($name,$username,$password,$email,$phoneno){
		$query = "insert into users values(NULL,'$name','$username','$password','$email','$phoneno')";
		execute($query);
		//header("Location: EmployeDasboard.php");
		//header("Location: registration.php");
	}

	function searchUser($username){
		$query = "select * from users where username=$username";
		execute($query);
		header("Location: EmployeDasboard.php");
	}

	function getUser($id){
		$query = "select * from users where id=$id";
		$result = get($query);
		if(count($result) > 0){
			return $result[0];
		}
		return false;
	}
	function getAllusers(){
		$query = "select * from users";
		$result = get($query);
		return $result;
	}


	function checkUsernameValidity($username){
		if($username != "")
		{

			if(is_numeric($username))
			{
				$username = +$username;
				$query = "select * from users where id like '%$username%' or phoneno like '%$username%'";
			}
			else{
				//$query = "select * from users where username like %'$username'%";
				//$query = "select * from `users` where username like %'$username'%";
				//$query = "select * from users where username='$username' or id= '$username' or name='$username' or emaiil='$username' or phoneno='$username'";
				$query = "select * from users where username like '%$username%' or name like '%$username%' or email like '%$username%' or password like'%$username%'";
				//$query = "select * from users where username like '%$username%'";
				//$query = "select * from users where username='$username' or name='$username' or email='$username' or password='$username'";

			}

			$result=get($query);
			return $result;
		}
		else
		{
			$query = "select * from users";
			$result=get($query);
			return $result;
		}
	}