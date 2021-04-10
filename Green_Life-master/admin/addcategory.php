<?php include '../include/header.php';?>

<?php include '../include/sidebar.php';?>
<?php require_once '../controllers/CategoryController.php';?>



<div id="cat"  style=" background:radial-gradient(#fff,#197d4c); height: 650px;">
	 
	

                 
			
					
					<div style="width: 500px; margin-left:  700px; margin-top:-40px;">

					<form action="" method="post" >
			          <h2 style="font-family:cursive; ">Add Category</h2><br><br>

			         
			          <span>Category Name:</span>
			          <input type="text" placeholder=" Category Name" name="name" >
				      <p style="color:red"><?php echo $err_name; ?></p>				      				
				  								
				      <button type="submit" class="btn"  name="btn_addCategory">Add Category</button><br>
				  
				       <a style="text-decoration:none;color:green;" href="dashboard.php">Home</a><span> | </span> <a style="text-decoration:none;color:green;" href="allcategories.php">All categories</a>
			
			      </form>

				</div>

				
		
	
</div>


<?php include '../include/footer.php';?>



