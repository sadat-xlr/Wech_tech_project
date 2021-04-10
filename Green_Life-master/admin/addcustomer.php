<?php include '../include/header.php';?>

<?php include '../include/sidebar.php';?>
<?php require_once '../controllers/UserController.php';?>


<div id="emp"  style=" background:radial-gradient(#fff,#197d4c); height: 650px;">
	 
	

                  
					
					<div style="width: 500px; margin-left:  700px; margin-top:-40px;">
					<form action="" method="post">
			          <h2 style="font-family:cursive; ">Add Customer</h2>
			          <p><span style="font-family: roboto";><?php echo $regmsg;?></span><br>
			          
			          <span>Name:</span>
			          <input type="text" placeholder="Name" name="name" >
				      <p style="color:red"><?php echo $err_name; ?></p>
				      <span>Username:</span>
			          <input type="text" placeholder="Username" name="username">
				      <p style="color:red"><?php echo $err_username; ?></p>
				       <span>phone No:</span>
				      <input type="text" placeholder="phone no" name="phoneno" >
				      <p style="color:red"><?php echo $err_phoneno  ?></p>
				      <span>Email:</span>
				      <input type="text" placeholder="email" name="email" >
				      <p style="color:red"><?php echo $err_email; ?></p>
				      <span>Password:</span>
				      <input type="password" placeholder="Password" name="password">
				      <p style="color:red"><?php echo $err_password; ?></p>
			
				
				      <span>Date Of Birth</span>
				
								<select class="cmb" name="day">
									<option>Day</option>
									<?php for($i=0;$i<=30;$i++)
									 echo "<option>$i</option>"
									?>
									
								</select>
								<select class="cmb" name="month">
									
									<option>Month</option>
									<?php for($i=1;$i<=12;$i++)
									 echo "<option>$i</option>"
									?>
												
								</select>
				                <select class="cmb" name="year">
									<option>Year</option>
									<?php for($i=1950;$i<=2021;$i++)
									 echo "<option>$i</option>"
									?>
												
												
								</select>

								
				
				<p style="color:red"><?php echo $err_dob; ?></p>
			    <button type="submit" class="btn"  name="sign_up">Register</button><br>
				  
				<a style="text-decoration:none;color:green;" href="Login.html">Back To Login</a>
			
			      </form>

				</div>

				
		
	
</div>


<?php include '../include/footer.php';?>



