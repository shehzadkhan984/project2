<?php 
session_start();
include('../includes/config.php');
include('../db.php');

$user= $_SESSION['login_stu'];
if($user=="")
{header('location:../slogin.php');}

$sql=mysqli_query($conn,"SELECT * FROM formm WHERE cnic = '$user' ");
$users=mysqli_fetch_assoc($sql);
//print_r($users);
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Student | Profile </title>

    <!-- Bootstrap core CSS -->
    <link href="../css1/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css1/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css1/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 

 
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />


<link href="assets/css/bootstrap.css" rel="stylesheet" />
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" style="background:#428bca">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="color:#FFFFFF" href="#">Hello <?php echo $users['name'];?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse right-div">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="digitalLib.php?page=" style="color:#FFFFFF"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Digital Library</a></li>
            <li><a href="issuedbooks.php?page=" style="color:#FFFFFF"><i class="fa fa-book" aria-hidden="true"></i> Issued Books</a></li>
             <li><a href="bookshelf.php" style="color:#FFFFFF"><i class="fa fa-book" aria-hidden="true"></i> Book-Shelf</a></li>
           <li><a href="profile.php"  style="color:#FFFFFF"><i class="fa fa-user" aria-hidden="true"></i> profile</a></li>
            <li><a href="logout.php" class="btn btn-danger" style="color:#FFFFFF"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php">Student | Dashboard <span class="sr-only">(current)</span></a></li>
      <!-- find users' image if image not found then show dummy image -->
      
      <!-- check users profile image -->
      <?php 
      $q=mysqli_query($conn,"SELECT image FROM formm WHERE cnic='".$_SESSION['login_stu']."'");
      $row=mysqli_fetch_assoc($q);
      if($row['image']=="")
      {
      ?>
            <li><a href="#"><img style="border-radius:50px" src="../images/" width="150" height="150" alt="not found"/></a></li>
      <?php 
      }
      else
      {
      ?>
      <li><a href="#"><img style="border-radius:50px;margin-left: 25px;" src="../images/<?php echo $row['image'];?>" width="150" height="150" alt="not found"/></a></li>
      <?php 
      }
      ?>
      
      </br><br />
      
  
           <li><a href="rfbooks.php">&nbsp;&nbsp;<span class="glyphicon glyphicon-asterisk"></span> Request For Book</a></li>
           
            <li><a href="polciy.php">&nbsp;&nbsp;<span class="glyphicon glyphicon-asterisk"></span> Library Policy</a></li>
              <li><a href="http://www.digitallibrary.edu.pk/" target="_blank">&nbsp;&nbsp;<span class="glyphicon glyphicon-asterisk"></span> HEC Library</a></li>
            <li><a href="Aboutus.php?page=update_profile">&nbsp;&nbsp;<span class="glyphicon glyphicon-asterisk"></span> About Us</a></li>
             <li><a href="ContactUs.php">&nbsp;&nbsp;<span class="glyphicon glyphicon-asterisk"></span> Contact Us</a></li>       </ul>
         
         
        </div>
        <div class="col-sm-4 col-sm-offset-3 col-md-4 col-md-offset-1 main">
          <!-- container-->
      <?php 
    @$page=  $_GET['page'];
      if($page!="")
      {
        if($page=="update_password")
      {
        include('update_password.php');
      
      }
      
        if($page=="update_profile")
      {
        include('update_profile.php');
      
      }
      if($page=="feedback")
      {
        include('give_feedback.php');
      
      }
      }
      else
      {
      
      ?>
     
      
      
      
     
      <br><br><br><br>
      
      
      

          <div class="placeholders">
            <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
         
                
                            </div>

        </div>
             <div class="row">
           
<div class="col-md-9 col-md-offset">
               <div class="panel panel-danger">
                        <div class="panel-heading">
                           <h3>My Profile</h3>
                        </div>
                        <div class="panel-body">
                          
<?php 
$q=mysqli_query($conn,"SELECT name,fname,cell,rollno,cnic,email,departmnet,semester,gender,image FROM formm WHERE cnic='".$_SESSION['login_stu']."'");
      $row=mysqli_fetch_assoc($q);

            ?>  

<div class="form-group">

<?php
if($row['image']=="")
      {
      ?>
            <img style="border-radius:50px" src="../images/person.jpg" width="100" height="100" alt="not found"/>
      <?php 
      }
      else
      {
      ?>
  <img style="border-radius:50px" src="../images/<?php echo $row['image'];?>" width="100" height="100" alt="not found"/><?php } ?>
</div>
<div class="form-group">
<label>Student Name : </label>
<?php echo $row['name']." ".$row['fname'];?>
</div>


<div class="form-group">
<label>Cell No : </label>
<?php echo $row['cell'];?>
</div>
<div class="form-group">
<label>Roll No : </label>
<?php echo $row['rollno'];?>
</div>
<div class="form-group">
<label>CNIC : </label>
<?php echo $row['cnic'];?>
</div>

<div class="form-group">
<label>EMAIL : </label>
<?php echo $row['email'];?>
</div>
<div class="form-group">
<label>DEPARTMENT : </label>
<?php echo $row['semester']." ".$row['departmnet'];?>
</div>








                                
                            </div>
                        </div>
                            </div>
        </div>
    </div>
    </div>
    
                           
                                  
          </div>
        </div>
<?php } ?>
        
          
        </div>
      </div>
    </div>
    <script src="../assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="../assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="../assets/js/custom.js"></script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
