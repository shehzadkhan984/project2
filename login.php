<?php
	include 'db.php';
	session_start();
	if (isset($_POST["sub"])) 
	{
	 	$username = $_POST["txtuser"];
	 	$password = $_POST["txtpass"];

	 	$query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
	 	$exe_query = mysqli_query($conn, $query);
	 	$found_num_rows = mysqli_num_rows($exe_query);

	 	if ($found_num_rows>=1) 
	 	{


	 		$_SESSION["login_user"] = $username;

	 		header("location:welcome.php");
	 	}
	 	else
	 	{
	 		header("location:index.php?invalid=you are not an administrator");
	 	}
	}




?>