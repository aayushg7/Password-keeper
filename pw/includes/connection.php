<?php
	$host = "localhost";
	$un = "root";
	$pwd = "";
	$dbname = "pw";

	$con = mysqli_connect($host, $un, $pwd, $dbname);

	if(mysqli_connect_error()){
		die("Connection failed:" . mysqli_connect_error);
	}
?>