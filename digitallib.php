<?php


$servername='localhost';
	$username='root';
	$pass='';
	$db='login';
	
	$con=new mysqli($servername,$username,$pass,$db);
if($con->connect_error){
	die("connectio failed");
}

if(isset($_POST['data'])){
	$book=$_POST['book'];
	$author=$_POST['author'];
	$edition=$_POST['edition'];
	$category=$_POST['category'];
	$semester=$_POST['semester'];
	$file = $_FILES['file']['name'];
	
	$sql="INSERT INTO `digital`(`book`, `author`, `edition`, `category`, `file`, `semester`) VALUES ('$book','$author','$edition','$category','$file','$semester')";
	
	if($con->query($sql)){
		echo '<script>alert("data is uploaded");</script>';
		header("refresh:0; url=Aobooks.php");
	}
	if(isset($_FILES['file'])){
	$image = $_FILES['file']['name'];
	$target = "pdf/".basename($_FILES['file']['name']);
	if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
		echo '<script>alert(Image is uploaded);</script>';
	}
	}
	
	
}




?>



