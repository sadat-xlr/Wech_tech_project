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
		<table border="1px" style="text-align: left; margin-top: 10px; " class="table">
			
			<tr>
		      
			   <th>Product Name</th>
			   <th>Price</th>
			   <th>Category</th>
			   <th>Details</th>
			 
			   <th>Action </th>
			  
			  
			   
			  
			</tr>
     <?php 
     
  
    	
        foreach ($products as $product) {
        	echo "<tr>";
         	
     	    echo "<td>".$product["name"]."</td>";
     	    echo "<td>".$product["price"]."</td>";
     	    echo "<td>".$product["category"]."</td>";
     	    echo "<td>".$product["details"]."</td>";
     	   
     	    echo '<td><span><a href="editproduct.php?id='.$product["id"].'">Edit</a> | <a href="deleteproduct.php?id='.$product["id"].'" >Delete</button></a></span></td>';
     	    echo "</tr>";
        }
    	
    	

    		
    	
     
     

     
		
     ?>
		   
		
	

		</table>
	</div>
	</div>
	
<?php include '../include/footer.php';?>
