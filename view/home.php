<?php 
	session_start();
	if (isset($_SESSION['username'])) {
		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>

	<h1>Welcome!!!</h1>
	<a href="adduser.php">Register Author</a>
	<a href="authorlist.php">Author List</a>
	<a href="../php/logout.php">Log Out</a>

</body>
</html>

<?php 

	}else{
		header('location: ../index.php');
	}
 ?>