<?php
	session_start();
	require_once('function.php');
	
	if(isset($_POST['submit'])){

		$uname = $_POST['uname'];
		$password = $_POST['pass'];

		if(empty($uname) == true || empty($password) == true){
			echo "null submission!";
		}else{

			$count = validate($uname, $password);

			if($count > 0){
				
				$_SESSION['username'] = $uname;
				$_SESSION['password'] = $password;

				header('location: ../view/home.php');

			}else{
				echo "invalid username/password";
			}
		}
	}else{
		header('location: ../index.php');
	}


?>