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

	<h1>User List</h1>
	<br>
	<br>
	<input type="text" id="key" onkeyup="key()"></input>
	<br>
	<br>
	<div id="data">
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
	</div>

	<script type="text/javascript">
		
		function key()
		{
			var xhttp = new XMLHttpRequest();
			xhttp.open("POST", "../php/search.php", true);
			xhttp.setRequestHeader('content-type', 'application/x-www-form-urlencoded')
			$a = document.getElementById('key').value;
			xhttp.send("name="+$a);
			xhttp.onreadystatechange = function()
			{
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById('data').innerHTML = this.responseText; 
					//alert($d);
				}

			};
		}

	</script>

</body>
</html>

<?php 

	}else{
		header('location: ../index.php');
	}
 ?>