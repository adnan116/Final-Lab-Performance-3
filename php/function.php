<?php 

	require_once('db.php');

	function validate($uname, $password){

		$conn = getConn();
		
		$sql = "select * from author where username='{$uname}' and password='{$password}'";

		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		return count($user);
	}

	function register($name, $cno, $uname, $pass){

		$conn = getConn();
		$sql = "insert into author values('', '{$name}','{$cno}', '{$uname}', '{$pass}')";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}

	}

	function userView()
	{
		$conn = getConn();
		$sql = "select * from author";
		$result = mysqli_query($conn,$sql);

		return $result;
	}

	function single_user($id)
	{
		$conn = getConn();
		$sql = "select * from author where id='{$id}'";
		$result = mysqli_query($conn,$sql);

		return $result;
	}

	function userDelete($uname)
	{
		$conn = getConn();
		$sql = "delete from author where username = '{$uname}'";
		mysqli_query($conn,$sql);
	}

	function userUpdate($uname,$name,$cn,$pass)
	{
		$conn = getConn();
		$sql = "update author SET name='{$name}', phone = '{$cn}', password = '{$pass}' where username = '{$uname}'";
		mysqli_query($conn,$sql);
	}

 ?>