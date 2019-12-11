<?php 

	require_once ('function.php');

	$key = $_POST['name'];	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Table Show</title>
</head>
<body>

	<table border="1">
		
		<tr>
			<th>ID</th>
			<th>Author Name</th>
			<th>Contact Number</th>
			<th>UserName</th> 
			<th colspan="2">Action</th>
		</tr>

		<?php 

			$result = searchData($key);
			while ($rows = mysqli_fetch_assoc($result)) {

		 ?>

		 <tr align="center">
			<td><?php echo $rows['id']; ?></td>
			<td><?php echo $rows['name']; ?></td>
			<td><?php echo $rows['phone']; ?></td>
			<td><?php echo $rows['username']; ?></td>
			<td><a href="updateuser.php?id=<?php echo $rows['id'];?>">Edit</a></td>
			<td><a href="../php/deleteuser.php?id=<?php echo $rows['id'];?>">Delete</a></td>
		</tr>

		 <?php 
		 	}
		  ?>

	</table>

</body>
</html>