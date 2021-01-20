<?php


$servername='localhost';
	$username='root';
	$pass='';
	$db='login';
	
	$con=new mysqli($servername,$username,$pass,$db);
if($con->connect_error){
	die("connectio failed");
}

if(isset($_POST['send'])){
	$name=$_POST['name'];
	$rollno=$_POST['roll'];
	$cnic=$_POST['subject'];
	$email=$_POST['message'];
	
	
	$sql="INSERT INTO `contact`(`name`, `rollno`, `subject`, `message`) VALUES ('$name','$rollno','$cnic','$email')";
	
	if($con->query($sql)){
		
		echo '<script>alert("Your Message has been Sent To addministrator");</script>';
		header("refresh:0; url=ContactUs.php");
	}

	}
	
	





?>



