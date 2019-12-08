<?php 

	require_once ('function.php');
	session_start();
	if (isset($_SESSION['username'])) {
		if (is_numeric($_GET['id'])) {
			$data =single_user($_GET['id']);
			$rows = mysqli_fetch_assoc($data);
			$uname = $rows['username'];
			if ($_SESSION['username'] == $uname) {
				userDelete($uname);
				header('location: logout.php');
			}else{
				userDelete($uname);
				header('location:../view/authorlist.php');
			}
		}else{
			echo "No data found!!!";
		}
	}else{
		header('location: ../index.php');
	}

 ?>