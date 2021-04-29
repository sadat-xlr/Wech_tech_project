<?php include '../include/header.php';?>

<?php require_once '../controllers/addProductController.php';

$products = getAllProduct();

?>


<div class="searchCSS">
	<input type="text" class="searchBox" onkeyup="suggest(this)" placeholder="Search here..">
	<p id="suggestion">

	</p>
</div>
<div class="ProductContainer">

	<table style="width: 500px; margin-left:  700px; margin-top:-40px;">
		<thead>
			<th>ID</th>
			<th> Category </th>
			<th>Product</th>
			<th>Price</th>
			<th>Discount</th>

		</thead>
		<tbody >
			<?php
foreach ($products as $product) {

    echo "<tr>";
    echo "<td>" . $product["id"] . "</td>";
    echo "<td>" . $product["category"] . "</td>";
    echo "<td>" . $product["product"] . "</td>";
    echo "<td>" . $product["price"] . "</td>";
    echo "<td>" . $product["discount"] . "</td>";
    echo '<td><a href="updateDeleteProduct.php?id=' . $product["id"] . '" class="btn">Update/Delete</a></td>';

    echo "</tr>";
}
?>


		</tbody>
	</table>
</div>

<script>
	function suggest(search){
		var key= search.value;
		if (key==""){
			document.getElementById("suggestion").innerHTML="";
			return;
		}
		var xhttp= new XMLHttpRequest();
		xhttp.open("GET","searchProduct.php?key="+key,true);
		xhttp.send();
		xhttp.onreadystatechange= function(){
			if(this.readyState==4 && this.status==200){
				document.getElementById("suggestion").innerHTML=this.responseText;
				console.log(this.responseText);
			}

			else{
				console.log(this.status);
			}
		}
		
	}
</script>
