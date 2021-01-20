<?php
	include 'db.php';
	session_start();
	if (isset($_POST["sub"])) 
	{
	 	$username = $_POST["txtuser"];
	 	$password = $_POST["txtpass"];

	 	$query = "SELECT * FROM formm WHERE name = '$username' AND cnic = '$password'";
	 	$exe_query = mysqli_query($conn, $query);
	 	$found_num_rows = mysqli_num_rows($exe_query);


	
	 	if ($found_num_rows>=1) 
	 	{
	 		
		
		
	 	
	 		$_SESSION["login_stu"] = $password;
	 	
	 		header("location:student/index.php");
	 	}
	 	else
	 	{
	 		header("location:slogin.php?invalid=Your username or password is incorrect | please try again");
	 	}
	}




?>