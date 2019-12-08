<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<div id="error">
		
	</div>
	<form method="POST" action="php/loginCheck.php">
		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="uname"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="Password" name="pass"></td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="Login">
						<input type="reset" name="reset" value="Reset">
					</td>
					<td><a href="view/reg.php">SignUp</a></td>
				</tr>
			</table>
		</fieldset>
	</form>

</body>
</html>