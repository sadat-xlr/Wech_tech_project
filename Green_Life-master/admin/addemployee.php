<?php include '../include/header.php';?>

<?php include '../include/sidebar.php';?>
<?php require_once '../controllers/EmployeeController.php';?>


<div id="emp" style="background:radial-gradient(#fff,#197d4c); " onclick="">
	 
	
   <div class="account">
     <div class="container">
        <div class="row">
	  
	       <form action="" method="post">
			  
			<h2>Add Employee Details</h2><br>
			<span class="spn">Name:</span> <input type="text" placeholder="Product name" name="e_name"> <span style="color: red; font-size: 12;" class="spn"> <?php echo $err_name;?></span><br>
			
			<span class="spn">Email:</span> <input type="text" placeholder="Product name" name="e_email"><span style="color: red; font-size: 12;" class="spn"> <?php echo $err_email;?></span><br>
		
			<span class="spn">Phone:</span> <input type="text" placeholder="Product name" name="e_phone"><span style="color: red; font-size: 12;" class="spn"><?php echo $err_phone;?></span><br>
			
			<span class="spn">Type:</span> 
			<select name="e_type">
				<option value=""></option>
				<option>Admin</option>
		        <option>Manager</option>
		        <option>Staff</option>
		     
		      
			</select><span style="color: red; font-size: 12;" class="spn"><?php echo $err_type;?></span><br>
			<span class="spn">Blood Group:</span>
			 <select name="e_bloodgrp">
				<option value=""></option>
				<option>A+</option>
		        <option>A-</option>
		        <option>B+</option>
		        <option>B-</option>
		        <option>O+</option>
		        <option>O-</option>
		        <option>AB+</option>
		        <option>AB-</option>
		       
			</select><span style="color: red; font-size: 12;" class="spn"><?php echo $err_bloodgrp;?></span><br>
			<span class="spn">Profile Pic:</span> 
			<input type="file"  name="employee_pic"><br><span style="color: red; font-size: 12;" class="spn"><?php echo $err_pic;?></span>	
						
				<button type="submit" class="btn" name="btn_add_emp">ADD</button>
				
			  </form>
	    
			  
			 
			   
			   
			
		
	 
	 </div>
    
     </div>

</div>	
		
	
</div>


<?php include '../include/footer.php';?>



