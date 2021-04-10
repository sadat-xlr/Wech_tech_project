
<!DOCTYPE html>
<html>
<head>
	<title>All Category </title>
</head>
<body>
	<?php require_once '../controllers/CategoryController.php';?>
	<div>
		<table border="1px" style="text-align: center;">
			
			<tr>
		       <th>category Id</th>
			   <th>category Name</th>
			   <th>Action</th>
			</tr>
     <?php 
     
  
    	$result=getAllCategory();
        for($i=0;$i<count($result);$i++)
    	
    	{

    		echo "<tr>";
         	echo "<td>".$result[$i]['id']."</td>";
     	    echo "<td>".$result[$i]['name']."</td>";
     	    echo "</tr>";
    	}
     
     

     
		
     ?>
		   
		
	

		</table>
	</div>

</body>
</html>