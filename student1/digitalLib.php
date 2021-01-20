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
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Student | Digital Library</title>

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
      <!-- BOOTSTRAP CORE STYLE  -->
  <link href="../assets/css/bootstrap.css" rel="stylesheet">
    
    <!-- CUSTOM STYLE  -->

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
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
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">

 
    <!-- CUSTOM STYLE  -->
        <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- DATATABLE STYLE  -->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
 
    <!-- GOOGLE FONT -->
    
            <!-- CUSTOM STYLE  -->
    
<link href="assets/css/bootstrap.css" rel="stylesheet" /> 
<style type="text/css">
  .table{
        width: 1000px;

    }
</style>
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
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right right-div">
            <li><a href="digitalLib.php?page=" style="color:#FFFFFF"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Digital Library</a></li>
            <li><a href="issuedbooks.php" style="color:#FFFFFF"><i class="fa fa-book" aria-hidden="true"></i> Issued Books</a></li>
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
            <li><a href="#"><img style="border-radius:50px" src="../images/" width="100" height="100" alt="not found"/></a></li>
			<?php 
			}
			else
			{
			?>
			<li><a href="#"><img style="border-radius:50px;margin-left: 25px;" class="center-div" src="../images/<?php echo $row['image'];?>"  width="150" height="150" alt="not found"/></a></li>
			<?php 
			}
			?>
			
			</br><br />
			
	
        
            <li><a href="rfbooks.php">&nbsp;&nbsp;<span class="glyphicon glyphicon-asterisk"></span> Request For Book</a></li>
           
            <li><a href="polciy.php">&nbsp;&nbsp;<span class="glyphicon glyphicon-asterisk"></span> Library Policy</a></li>
              <li><a href="http://www.digitallibrary.edu.pk/" target="_blank">&nbsp;&nbsp;<span class="glyphicon glyphicon-asterisk"></span> HEC Library</a></li>
            <li><a href="Aboutus.php?page=update_profile">&nbsp;&nbsp;<span class="glyphicon glyphicon-asterisk"></span> About Us</a></li>
             <li><a href="ContactUs.php">&nbsp;&nbsp;<span class="glyphicon glyphicon-asterisk"></span> Contact Us</a></li>
            
          </ul>
         
         
        </div>
         <div class="col-sm-7 col-sm-offset col-md-9 col-md-offset main">
          <!-- container--><br><br><br><br>
          
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
		 
		  
		  
		  
		  <h1 class="page-header">DIGITAL LIBRARY</h1>
		  
		  <div class="placeholders  table-responsive">
		  
		  
		  
		  

         
                                
                                        <table class=" table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
                                           
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th align="center" ="center">#</th>
                                                    <th class="center">BOOKS</th>
                                                    <th class="center">AUTHOR</th>
                                                    <th class="center">EDITION</th>
                                                    <th class="center">CATEGORY</th>
                                                    <th class="center">SEMESTER</th>
                                                    <th class="center">PDF FILE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php  
                                                    include 'conf.php';
                                                    $stmt = $db->prepare("select * from digital");
                                                    $stmt->execute();


                                                    $stbt = $db->prepare("select * from formm where cnic='".$_SESSION['login_stu']."'");
                                                    $stbt->execute();
                                                    $row1=$stbt->fetch();
                                                    $cat1=$row1['departmnet'];
                                                     $cnt=1;
                                                    if($stmt->rowCount() > 0)
                                                    {
                                                    while ($row = $stmt->fetch()) 
                                                    {
                                                        $id  = $row['id'];
                                                        $name  = $row['book'];
                                                        $path= $row['file'];
                                                        $cat = $row['category'];
                                                        $sem= $row['semester'];

                                                        if ($cat == $cat1) {
                                                            # code...
                                                       
                                                        ?>
                                                        <tr class="odd gradeX">
                                                            <td class="center"><?php echo $cnt;?></td> 
                                                            <td class="center"><?php echo $row['book'] ?></td>
                                                            <td><?php echo $row['author'] ?></td>
                                                            <td><?php echo $row['edition'] ?></td>
                                                            <td><?php echo $row['category'] ?></td>
                                                            <td><?php echo $row['semester'] ?></td>
                                                            <td class="text-center"><a href="../pdf/<?php echo $row['file'] ?>" target="_blank" class="btn btn-primary" download>Download</a></td>
                                                        </tr>

                                           
                                            


                                                
                                             <?php $cnt=$cnt+1;}} }?>
                                            </tbody>
                                        </table>
                                       
                                  
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/datatables.min.js"></script>
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- DATATABLE SCRIPTS  -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script src="assets/js/dataTables/jquery.dataTables1.js"></script>
    <script src="assets/js/dataTables/dataTables1.bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
     <script src="assets/js/custom1.js"></script>
  </body>
</html>
