<?php include '../include/header.php';?>

<?php include '../include/sidebar.php';?>
<?php require_once '../controllers/UserController.php';?>


<div id="emp"  style=" background:radial-gradient(#fff,#197d4c); height: 650px;">
	 
	

                  
					
					<div style="width: 500px; margin-left:  700px; margin-top:-40px;">
					<form action="" method="post" onsubmit="return validateCustomer()">
			          <h2 style="font-family:cursive; ">Add Customer</h2>
			          <p><span style="font-family: roboto";><?php echo $regmsg;?></span><br>
			          
			          <span>Name:</span>
			          <input id="name" type="text" placeholder="Name" name="name" >
				      <p style="color:red"><?php echo $err_name; ?></p>
				      <span id="err_name"></span><br>
				      <span>Username:</span>
			          <input id="username" type="text" placeholder="Username" name="username">
				      <p style="color:red"><?php echo $err_username; ?></p>
				      <span id="err_username"></span><br>
				       <span>phone No:</span>
				      <input id="phoneno" type="text" placeholder="phone no" name="phoneno" >
				      <p style="color:red"><?php echo $err_phoneno  ?></p>
				      <span id="err_phoneno"></span><br>
				      <span>Email:</span>
				      <input id="email" type="text" placeholder="email" name="email" >
				      <p style="color:red"><?php echo $err_email; ?></p>
				      <span id="err_email"></span><br>
				      <span>Password:</span>
				      <input id="password" type="password" placeholder="Password" name="password">
				      <p style="color:red"><?php echo $err_password; ?></p>
				      <span id="err_password"></span><br>
			
				
				      <span>Date Of Birth</span>
				
								<select  class="cmb" name="day" >
									<option id="day" value="Day">Day</option>
									
									 <?php for($i=1;$i<=30;$i++)
									 echo "<option value='$i' >$i</option>"
									?>
									 
									
									
								</select>
								<select class="cmb" name="month">
									
									<option id="month" value="0">Month</option>

									
									<?php for($i=1;$i<=12;$i++)
									 echo "<option value='1'>$i</option>"
									?>
												
								</select>
				                <select class="cmb" name="year">
									<option id="Year" value="0">Year</option>
									<?php for($i=1950;$i<=2021;$i++)
									 echo "<option value='1'>$i</option>"
									?>
												
												
								</select>

								
				
				<p style="color:red"><?php echo $err_dob; ?></p>
				<span id="err_dob"></span><br>
			    <button type="submit" class="btn"  name="sign_up">Register</button><br>
				  
				<a style="text-decoration:none;color:green;" href="">Back To Login</a>
			
			      </form>

				</div>

				
		
	
</div>



<script>
   function get_element(id){
		return document.getElementById(id);
	}

function validateCustomer(){
    
     clenup();
     var hasError=false;
     if(get_element("name").value==""){ 	

     	
     	get_element("err_name").innerHTML="Please Enter Name (From JS)";
     	
     	get_element("err_name").style.color="red";
     	hasError=true;
     	
     	
       	
     }
     if(get_element("username").value==""){
     	
     	get_element("err_username").innerHTML="Please Enter UserName (From JS)";
     	get_element("err_username").style.color="red";
     	hasError=true;
     	

     }
     if(get_element("phoneno").value==""){
     	
     	get_element("err_phoneno").innerHTML="Please Enter PhoneNo (From JS)";
     	get_element("err_phoneno").style.color="red";
     	hasError=true;
     	

     }
     if(get_element("email").value==""){
     	
     	get_element("err_email").innerHTML="Please Enter Email (From JS)";
     	get_element("err_email").style.color="red";
     	hasError=true;
     	

     }
     if(get_element("password").value==""){
     	
     	get_element("err_password").innerHTML="Please Enter Password (From JS)";
     	get_element("err_password").style.color="red";
     	hasError=true;
     	

     }
    

     if(!hasError){
     	return true;
     }
	
	return false;
	}
	

function clenup(){
		get_element("err_name").innerHTML="";
		get_element("err_username").innerHTML="";
		get_element("err_phoneno").innerHTML="";
		get_element("err_email").innerHTML="";
		get_element("err_password").innerHTML="";
		get_element("err_dob").innerHTML="";
		

	}

</script>



<?php include '../include/footer.php';?>



