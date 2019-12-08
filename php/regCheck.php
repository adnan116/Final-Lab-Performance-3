<?php
	
	require_once('function.php');

	if(isset($_POST['submit'])){

		$name = $_POST['athname'];
		$cno = $_POST['cnum'];
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];
		$cpass = $_POST['cpass'];
		if(empty($name) == true || empty($cno) == true || empty($uname) == true || empty($pass) == true || empty($cpass) == true){
			echo "null submission!";
		}elseif ($pass != $cpass) {
			echo "password not match";
		}
		else{

			$status = register($name, $cno, $uname, $pass);

			if($status){

				header('location: ../index.php');
			}else{
				header('location: ../view/reg.php');
			}
		}

	}else{
		header('location: ../view/reg.php');
	}


?>