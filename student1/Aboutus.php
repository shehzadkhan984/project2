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

    <title>Student | DashBoard</title>

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
    </style>
    <style>
.container {
    position: relative;
    width: 30%;
    height: 350px;
    background:#428bca;
    float: left;
    margin-left: 3.3%;
    
}




.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: 300px;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
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
      
     
      
      
      
      <h1 class="page-header">BBSU | AboutUs</h1>
        <div style="widows: 100%;background:#428bca;height: 352px;border:1px solid black;" >
       <div style="text-align: center">
        <div id="slider">

        </div>
    
        <div>
            <!--<div id="counter"> </div>-->
        </div>
        <div class="circles"></div>
        <div class="circles"></div>
        <div class="circles"></div>
        <div class="circles"></div>
    </div>
    <script>
            var images = ["1.jpg", "2.jpg", "3.jpg", "4.jpg"];
        var totalImages = 4;
        var currentImage = 0;
        var next = true;
        showNext();
        setInterval(function () {
            showNext();

        }, 3000)
        function showNext() {
            if (!next) currentImage++;
            if (currentImage == totalImages) currentImage = 0;
            document.getElementById("slider").innerHTML = "<img src='pics/" + images[currentImage] + "' class='setValue' />"
            dotCircles()
            currentImage++;
            next = true;
        }
        function showPrevious() {
            if (next) currentImage--;
            if (currentImage == 0) currentImage = totalImages;
            document.getElementById("slider").innerHTML = "<img src='pics/" + images[currentImage - 1] + "' class='setValue' />"
            currentImage--;
            dotCircles();
            next = false;
        }
        function dotCircles() {
            var a = document.getElementsByClassName("circles");
            for (var i = 0; i < a.length; i++) {
                if (i == currentImage) {
                    a[i].id = "changeBackground";
                }
                else {
                    a[i].id = "removeBackground";
                }

            }
        }    </script>                    
               
            
             </div>
           
         
      
      
      
      
      

     
            <br><br><br><br>

          <div class="placeholders">
              
               <br><br><br><br><br>
               <div class="row" style="width: 100%; height: 300px; opacity: .8;color: white;">
                <div class="col-md-3 col-sm-3 col-xs-6" style="width: 30%;float: left;margin-left: 3%;background:#428bca;">
                  <h3 align="center">WHO WE ARE ?</h3>

<p style="font-size:medium" align="center"> Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6" style="width: 30%;float: left;margin-left: 3%;background:#428bca;">
                  <h3 align="center">WHAT WE DO ? </h3>

<p style="font-size:medium" align="center">Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme. </p>
                  
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6" style="width: 30%;float: left;margin-left: 3%;background:#428bca;">
                  <h3 align="center">OUR SERVICES</h3>

<p style="font-size:medium" align="center">Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme. </p>
                </div>

               </div>
                <div class="row">
                 <div class="col-md-3 col-sm-3 col-xs-6" style="width:100%;height:250px;">

                  <h1 style="font-style:normal; font-weight:lighter; color:#999; float: left; ">About University </h1>
                  <br><br><br>  
                  <blockquote>

                  <p style="font-family:'Times New Roman', Times, serif;color:#000; font-size:medium">Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.
                  Save time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign.
                  Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.
                  To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.
                   </p>

                   </blockquote>



                  </div>

               </div>
               <div style="width: 100%; height: 400px">
                <h2 align="left">Our Team Member</h2>
                <hr>
                 <div class="container">
                  <img src="pics/gm.jpg" alt="Avatar" class="image" style="width:100%;height: 350px">
                  <div class="middle">
                    <div class="text">Shehzad G.M</div>
                  </div>
                </div>
                <div class="container">
                  <img src="pics/h1.jpg" alt="Avatar" class="image" style="width:100%;height: 350px;">
                  <div class="middle">
                    <div class="text">M.Hamza Ali</div>
                  </div>
                </div>
                <div class="container">
                  <img src="pics/s1.jpg" alt="Avatar" class="image" style="width:100%;height: 350px">
                  <div class="middle">
                    <div class="text">Shehzad</div>
                  </div>
                </div>
               </div>
         </div>
    
        <br><br><br><br><br><br>
       
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