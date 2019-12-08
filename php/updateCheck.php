<?php 
	
	require_once('function.php');
	session_start();
	if (isset($_POST['submit'])) {
		$name = $_POST['athname'];
		$cno = $_POST['cnum'];
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];
		$cpass = $_POST['cpass'];

		if ($name == "" || $cno == "" || $uname == "" || $pass == "" || $cpass == "") {
			echo "Fill Data";
		}else{
			userUpdate($_SESSION['username'], $name, $cno, $pass);
			header('location: ../view/authorlist.php');
		}
	}else{
		header('location: ../index.php');
	}

 ?>