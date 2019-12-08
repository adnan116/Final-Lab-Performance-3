<?php

	function getConn(){

		$conn = mysqli_connect('localhost', 'root', '', 'blog');

		return $conn;
	}

 ?>