<?php include '../include/header.php';?>
<?php include '../include/sidebar.php';?>
<?php require_once '../controllers/ProductController.php';
     $products=getAllproducts();
?>
<title>All Users Details </title>

	<div style="background:radial-gradient(#fff,#197d4c);">
		<div style="width: 950px;margin-left: 600px; ">
			<form method="post"><input type="text" placeholder="Enter product name to search " name="cat_search">
              <input type="submit" style="width: 60px;background-color:#197d4d;  " name="search" value="search">
	          </form>
		<a style="color: #01661a;" href='addproduct.php' >Add New Product</a>
		<table border="1px" style="text-align: left; margin-top: 10px;" class="table" >
			
			<tr>
		      
			   <th>Product Name</th>
			   <th>Price</th>
			   <th>Category</th>
			   <th>Details</th>
			   <th>Picture</th>
			 
			   <th >Action </th>
			  
			  
			   
			  
			</tr>
     <?php 
     
  
    	
        foreach ($products as $product) {?>
        	<tr>
         	
     	    <td><?php echo $product["name"] ;?></td>
     	    <td><?php echo $product["price"];?></td>
     	    <td><?php echo $product["category"];?></td>
     	    <td><?php echo $product["details"];?></td>
     	    <td align="center"><img src="<?php echo  '../images/'.$product["filename"];?>" style="width: 90px;height: 90px;"></td>
     	    <?php $editlink="editproduct.php?id=".$product['id'];
                  $deletelink="deleteproduct.php?id=".$product['id']; 
     	    ?>
     	   
     	    <td><span><a href="<?php echo $editlink;?>">Edit</a> | <a href="<?php echo $deletelink;?>" >Delete</a></span></td>
     	    </tr>
     	    <?php }?>

        
     
    	
    	

    		
    	
     
     

     
	
		   
		
	

		</table>
	</div>
	</div>
	
<?php include '../include/footer.php';?>
