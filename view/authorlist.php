<?php 
	session_start();
	if (isset($_SESSION['username'])) {
	require_once('../php/function.php');

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>

	<h2>User List</h2>
	<a href="home.php">Back</a> |
	<a href="../php/logout.php">logout</a>

	<br>
	<br>
	<input type="text" name="key"></input>
	<button>Search</button>
	<br>
	<br>
	<table border="1" >
		<tr>
			<th>ID</th>
			<th>Author Name</th>
			<th>Contact Number</th>
			<th>UserName</th> 
			<th colspan="2">Action</th> 
		</tr>
		
		<?php 
			$result = userView();
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

<?php 

	}else{
		header('location: ../index.php');
	}
 ?>