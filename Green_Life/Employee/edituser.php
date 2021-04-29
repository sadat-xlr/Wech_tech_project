<?php
	  require 'controllers/UserController.php';
	  $id = $_GET["id"];
      //pre_r($id);
	  $user = getUser($id);
      //var_dump($user);

      // echo "<pre>";
	  //print_r($user);
	//  echo "</pre>";
?>
<!--edit user starts -->
<div>
	<form action="" method="post" onsubmit="return validateUser()" >
		
			
			<input type="hidden" name="id" value="<?php echo $user["id"];?>">
			<input type="text" name="name" value="<?php echo $user["name"];?>" >
            <input type="text" name="username" value="<?php echo $user["username"];?>" >
            <input type="text" name="password" value="<?php echo $user["password"];?>">
            <input type="text" name="email" value="<?php echo $user["email"];?>">
            <input type="text" name="phoneno" value="<?php echo $user["phoneno"];?>">
		
		
		<div>
			
			<input type="submit" name="edit_User" value="Update">
		</div>
	</form>
</div>

<script>
   function get_element(id){
		return document.getElementById(id);
	}

function validateUser(){
    
     clenup();
     if(get_element("username").value==""){
     	
     	err_uname="username Empty";
     	get_element("err_uname").innerHTML="Give username";
     	get_element("err_uname").style.color="red";
     	return false ;
       	
     }
/*
	 if(get_element("name").value==""){
     	
     	err_name="username Empty";
     	get_element("err_name").innerHTML="Give name";
     	get_element("err_name").style.color="red";
     	return false ;
       	
     }

	 if(get_element("password").value==""){
     	
     	err_pass="password Empty";
     	get_element("err_pass").innerHTML="Give password";
     	get_element("err_pass").style.color="red";
     	return false ;
       	
     }*/
	
	return true;
	}
	

function clenup(){
		get_element("err_name").innerHTML="";
	}

</script>