<?php
	require_once 'controllers/UserController.php';
	$users = getAllUsers();
	//$users ="";



	?>

	<form action="" method="post"  class="form-horizontal form-material">

		<input type="text"  placeholder="Search" name="search" id="" onkeyup="checkUsername(this)">

	</form>
	

    <br>
    <br>

    <br>

	<a href="adduser.php">ADD USER</a>

	<br>
    <br>

    <br>

	
	<!-- <div id ="txtHint"></div> -->
	<table id = "txtHint" border="1" style="border-collapse:collapse;">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Username</th>
			<th>Password</th>
			<th>Email</th>
			<th>Phone Number</th>
            <th colspan="2">action</th>
		</tr>
<?php
	foreach($users as $user){
		echo "<tr>";
		 echo "<td>".$user["id"]."</td>";
		 echo "<td>".$user["name"]."</td>";
		 echo "<td>".$user["username"]."</td>";
		 echo "<td>".$user["password"]."</td>";
		 echo "<td>".$user["email"]."</td>";
		 echo "<td>".$user["phoneno"]."</td>";
         //echo "<td> <input type='submit' value = 'Edit'/> </td>";
        // echo "<td><input type='submit' value = 'Delete'/></td>";
		 //echo "<td><a href='edituser.php'>Edit</a></td>";
		 echo '<td><a href="edituser.php?id='.$user["id"].'">Edit</a></td>';
		 echo '<td><a href="deleteuser.php?id='.$user["id"].'">Delete</a></td>';
		echo "</tr>";
	}
?>

</table>
	

<script>
			function checkUsername(control){
				
				var username = control.value;
				//ajax
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange=function(){
					if(this.readyState == 4 && this.status == 200){

						//when server respond
						//var rsp = this.responseText;
						//alert(this.responseText);
						document.getElementById("txtHint").innerHTML = this.responseText;
						
					}
				};
				xhttp.open("GET","checkusername.php?uname="+username,true);
				xhttp.send();
			}

			

	
</script>

	