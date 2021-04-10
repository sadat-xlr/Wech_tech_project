<?php include '../include/header.php';?>

<?php include '../include/sidebar.php';?>
<?php require_once '../controllers/ProductController.php';?>



<div id="emp" style="background:radial-gradient(#fff,#197d4c); " onclick="">
	 
	
   <div class="account">
     <div class="container">
        <div class="row">
	  
	       <form action="" method="post">
			  
			<h2>Add Product Details</h2><br>
			<span class="spn">Product Name:</span> <input type="text" placeholder="Product name" name="name"> <span style="color: red; font-size: 12;" class="spn"> <?php echo $err_name;?></span><br>
			
			<span class="spn">Product Price:</span> <input type="text" placeholder="Product price" name="price"><span style="color: red; font-size: 12;" class="spn"><?php echo $err_price;?> </span><br>
		
			<span class="spn">Product Pic:</span> <input type="file"  name="product_pic"><span style="color: red; font-size: 12;" class="spn"><?php echo $err_pic;?> </span><br>
			
			<span class="spn">Categoy</span> 
			<select name="category">
				<option value=""></option>
				<option>Fish</option>
		        <option>Meat</option>
		        <option>Vegetable</option>
		     
		      
			</select><span style="color: red; font-size: 12;" class="spn"><?php echo $err_category;?></span><br>
			<span class="spn">Product Details:</span> <textarea placeholder="add Details" name="details" style="height: 60px;width: 120px;"></textarea> <span style="color: red; font-size: 12;" class="spn"> </span><br>
			
				
						
				<button type="submit" class="btn" name="btn_addProduct">save</button>
				
			  </form>
	    
			  
			 
			   
			   
			
		
	 
	 </div>
    
     </div>

</div>	
		
	
</div>


<?php include '../include/footer.php';?>



