<?php
	require_once 'controllers/UserController.php';
	$username=$_GET["uname"];
	$users = checkUsernameValidity($username);


?>
<table border="1" style="border-collapse:collapse;">
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