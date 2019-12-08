<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>

	<form method="POST" action="../php/regCheck.php"> 
		<fieldset>
			<legend>Registration</legend>
			<table>
				<tr>
					<td>Author Name</td>
					<td><input type="text" name="athname"></td>
				</tr>
				<tr>
					<td>Contact Number</td>
					<td><input type="text" name="cnum"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="uname"></td>
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