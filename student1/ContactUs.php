<?php 
session_start();
include('../includes/config.php');
include('../db.php');

$user= $_SESSION['login_stu'];
if($user=="")
{header('location:../slogin.php');}
else{

$sql=mysqli_query($conn,"SELECT * FROM formm WHERE cnic = '$user' ");
$users=mysqli_fetch_assoc($sql);

//print_r($users);
?>
<!DOCTYPE html>
<html lang="en">
  <head profile="http://www.w3.org/2015/10/profile">
<link rel="icon" href="images/icon/logo.png" type="image/gif">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Student | ContactUs</title>

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
     <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

 
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />


<link href="assets/css/bootstrap.css" rel="stylesheet" />
<style type="text/css">
  .rowg{
   
  }
</style> 
      <style>
         .setValue {
            width: 1000px;
            height: 350px;
        }
        .circles {
            width: 10px;
            height: 10px;
            border: 1px solid black;
            border-radius: 100%;
            margin: 0 auto;
            margin-top: -110px;
            display: inline-block;
            z-index: 9999;
        }

        #changeBackground {
            background: black;
        }

        #removeBackground {
            background: #fff;
        }
         .s1{
        width: 100%;

        height: 400px;
        background-color: white;
        margin-top: 200px;
       }
        .s1 h2{
          font-family: sans-serif;
          color: #666;
          margin: 0;
          padding: 0;
          text-align: center;
          font-size: 30px;
          text-transform: uppercase;
       }

       .s1 form{
        width: 75%;
        height: 500px;
        margin: 0 auto;
        position: absolute;
        left: 12.5%;
        top: 15%;
        box-sizing: border-box;
        background: #fff;
        box-shadow: 0 10px 30px rgba(0,0,0,.5);
       
       }
       .s1 form .input-field{
          position: relative;
          width: 95%;
          margin-top: 50px;
          margin-left: 10px;
       }
       .input-field input, .input-field textarea{
          width: 100%;
          padding: 5px 0;
          box-sizing: border-box;
          background: transparent;
          border: none;
          outline: none;
          border-bottom: 2px solid #666;
          font-size: 16px;
          color: #666;
          font-weight: 700;
                  resize: none;

       }
       .s1 label{
          position: absolute;
          top: 0;
          left: 0;
          padding: 5px 0;
          pointer-events: none;
          font-size: 16px;
          color: #666;
          font-weight: 700;
          text-transform: uppercase;
          transition: 0.5s;
       }
       .input-field input:focus + label,
       .input-field textarea:focus + label,
       .input-field input:valid + label,
       .input-field textarea:valid + label
       {
          top: -30px;
          font-size: 14px;
          padding: 5px 7px;
          background:#428bca;
          color: #fff;
          border-radius: 4px;
          padding: 5px;
       }
        .s1 form .btn{
          margin-top: 10px;
           background:#428bca;
                  opacity: ;
          color: #fff;
          padding: 15px 30px;
          border:none;
          outline: none;
          border-radius: 30px;
          font-weight: 700;
          font-size: 16px;
          margin-left: 5px;
        }
      .s1 form .btn:hover{
            background: #6b3aff;
      }
         .white_content form a{
          margin-top: 12px;
          background: red;
                  opacity: .8;
          color: #fff;
          padding: 15px 30px;
          border:none;
          outline: none;
          border-radius: 30px;
          font-weight: 700;
          font-size: 16px;
          text-decoration: none;
          float: right;
          margin-right: 5px;


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
        <div class="col-sm-7 col-sm-offset col-md-10 col-md-offset main">
          <!-- container--><br><br>
		  
		 
		  
		  
		  
		  <h1 class="page-header">Student | CONTACT US</h1>
		  
           
         
         <div class="placeholders">
            <br><br><br><br>
               <div class="s1">
        <form action="contact.php" method="post">
                        <div class="input-field">
                            <input type="text" name="name" value="<?php echo $users['name']." ".$users['fname']?>" required="">
                            <label>Student Name</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="roll" value="<?php echo $users['rollno']?>" required="">
                            <label>Student RollNo</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="subject"  required="" maxlength="45">
                            <label>Subject</label>
                        </div>
                        
                        <div class="input-field">
                            <textarea rows="5" name="message" required="" maxlength="250"></textarea>
                            <label>Message</label>
                        </div>
                        <input type="submit" style="float: left;" name="send" value="Contact Us" class="btn">
                       
            </form>

        
          
        </div>
         
          </div>
        <br><br><br><br><br><br>
        <div class="footer" style="width: 100%;height: 40px;padding: 10px; background:#428bca; color: white;">
          <font style=" float:right;font-weight: bolder;">This Site Was Encoded By Shehzad  & <span>All Copy  rights Are Reserverd by BBSU</span></font>

          
        </div>
      </div>
    </div>

    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>

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
<?php } ?>