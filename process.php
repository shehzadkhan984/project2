<?php 
$servername='localhost';
  $username='root';
  $pass='';
  $db='login';
  
  $con=new mysqli($servername,$username,$pass,$db);
if($con->connect_error){
  die("connectio failed");
}

  $db = mysqli_connect('localhost', 'root', '', 'login');
  if (isset($_POST['username_check'])) {
  	$email = $_POST['email'];
  	$sql = "SELECT * FROM formm WHERE email='$email'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "taken";	
  	}else{
  	  echo 'not_taken';
  	}
  	exit();
  }
  if (isset($_POST['email_check'])) {
  	$cnic = $_POST['cnic'];
  	$sql = "SELECT * FROM formm WHERE cnic='$cnic'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "taken";	
  	}else{
  	  echo 'not_taken';
  	}
  	exit();
  }
  if (isset($_POST['data'])) {
  	$cnic = $_POST['cnicc'];
  	
  	$sql = "SELECT * FROM formm WHERE cnic='$cnic '";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo '<script>alert("CNIC Already exist");</script>';
      header("refresh:0; url=AddStudent.php");
  	  exit();
  	}
      else{
  	 $name=$_POST['name'];
  $fnam=$_POST['fname'];
  $cellno=$_POST['celll'];
  $rollno=$_POST['roll'];
  $cnic=$_POST['cnicc'];
  $email=$_POST['email'];
  $department=$_POST['department'];
  $semester=$_POST['semester'];
  $gender=$_POST['gender'];
  $image = $_FILES['image']['name'];
  
  $sql="INSERT INTO `formm`(`name`, `fname`, `cell`, `rollno`, `cnic`, `email`, `departmnet`, `semester`, `gender`,`image`) VALUES ('$name','$fnam','$cellno','$rollno','$cnic','$email','$department','$semester','$gender','$image')";
  
  if($con->query($sql)){
    echo '<script>alert("Image is uploaded");</script>';
    header("refresh:0; url=AddStudent.php");
  }
  if(isset($_FILES['image'])){
  $image = $_FILES['image']['name'];
  $target = "images/".basename($_FILES['image']['name']);
  if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
    echo '<script>alert(Image is uploaded);</script>';
  	}
  }
}
}
?>