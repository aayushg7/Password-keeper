<?php
	include("./includes/session_check.php");
	include("../includes/connection.php");
	
	//for creating unique id with database checked
	$f = 0;
	$id = "";
	while($f != 1){
		$temp_id = uniqid("NS");
		//query for checking the uniqueid is exist in table or not
		$sql = "SELECT * FROM pw_data WHERE ngo_id='".$temp_id."'";	
		$q = mysqli_query($con,$sql);
		if(mysqli_num_rows($q)==0){
			$id = $temp_id;
			$f = 1;
		}
	}
	$name = $_POST["website_name"];
	$password = md5($_POST["password"]);
	
	
	$sql = "INSERT INTO pw_data(id,name,password) VALUES('".$id."','".$name."','".$password."');
	$result = mysqli_query($con,$sql);
	if($result == 1){
		header("location:index.php");
	}
	else{
		echo "error..".mysqli_error($con);
	}
?>