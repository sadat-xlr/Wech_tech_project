<?php
	  require 'controllers/UserController.php';
	 // $id = $_GET["id"];
      //pre_r($id);
	 // $user = getUser($id);
      //var_dump($user);

      // echo "<pre>";
	  //print_r($user);
	//  echo "</pre>";
?>
<!--edit user starts -->
<div>

<a href="EmployeDasboard.php">BACK</a>
	<form action="" method="post" onsubmit="return validate()" >
		
			<input type="text" name="name" id="name"><span id="err_name"></span><br>
            <input type="text" name="username" id="username"><span id="err_uname"></span><br>
            <input type="text" name="password"  id="password"><span id="err_password"></span><br>
            <input type="text" name="email"  id="email"><span id="err_email"></span><br>
            <input type="text" name="phoneno" id="phoneno"><span id="err_phoneno"></span><br>
		
		
		<div>
			
			<input type="submit" name="add_User">
		</div>
	</form>
</div>

<script>
   function get(id){
			return document.getElementById(id);
		}
		
		
		function validate(){
			cleanUp();
			var hasError=false;
			if(get("name").value == ""){
				
				get("err_name").innerHTML="Name Required";
				hasError=true;
				//err_msg += "*Name Required<br>";
			}
			if(get("username").value == ""){
				get("err_uname").innerHTML="Username Required";
				hasError=true;
				//err_msg += "*Username Required<br>";
			}
			if(get("password").value == ""){
				get("err_password").innerHTML="Password Required";
				hasError=true;
				//err_msg += "*Password Required<br>";
			}
            if(get("email").value == ""){
				
				get("err_email").innerHTML="Email Required";
				get("err_email;").style.color="red";
				hasError=true;
				//err_msg += "*Name Required<br>";
			}
            if(get("phoneno").value == ""){
				
				get("err_phoneno").innerHTML="Phone no Required";
				get("err_phoneno")
				hasError=true;
				//err_msg += "*Name Required<br>";
			}


			//alert(err_msg);
			if(!hasError){
				return true;
			}
			return false;
			
		}
		function cleanUp(){
			get("err_name").innerHTML = "";
			get("err_uname").innerHTML="";
			get("err_password").innerHTML="";
            get("err_email").innerHTML = "";
			get("err_phoneno").innerHTML="";
		}

</script>