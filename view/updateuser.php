<?php 
	require_once ('../php/function.php');
	session_start();
	if (isset($_SESSION['username'])) {
		if (is_numeric($_GET['id'])) {
			$data =single_user($_GET['id']);
			$rows = mysqli_fetch_assoc($data);
			$_SESSION['uname'] = $rows['username'];
			$cno = $rows['phone'];
			$aname = $rows['name'];
		}
	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>

	<form method="POST" action="../php/updateCheck.php"> 
		<fieldset>
			<legend>Registration</legend>
			<table>
				<tr>
					<td>Author Name</td>
					<td><input type="text" name="athname" value="<?php echo $aname; ?>"></td>
				</tr>
				<tr>
					<td>Contact Number</td>
					<td><input type="text" name="cnum" value="<?php echo $cno; ?>"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="uname" value="<?php echo $_SESSION['uname']; ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="Password" name="pass"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="Password" name="cpass"></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" name="submit" value="Registration">
						<input type="reset" name="reset" value="Reset">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>

</body>
</html>

<?php 

	}else{
		header('location: ../index.php');
	}

 ?>