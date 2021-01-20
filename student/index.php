

<!DOCTYPE html>
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
 $sname=$users['name'];
 $sroll=$users['rollno'];
 $scell=$users['cell'];
  $semail=$users['email'];
//print_r($users);
?>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>LMS | HOME</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
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
            #tab2 h2
    {
        margin:0;
        padding: 0;
        /*display: block;text-align: center; width: 100%; height: 20%;background: #002366;color: white;font-size: 34px;*/
        
        border-left: 5px solid #19c589;
    }
    .tab-content ul 
{
    
   list-style-type: none;
    margin:0;
    padding:0;
}
.tab-content ul li
{
    display:inline-block;
    margin-right:1px;
    
}
.tab-links ul li a
{
    display:block;
    min-width:330px;
    height:40px;
    text-align:center;
    line-height:40px;
    font-family:"helvetica neue",helvetica,arial,sans-serif;
    color:#fff;
    background:#2f3036;
    text-decoration:none;
    opacity:.8;
    margin-top: 5px;
    
}
    </style>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="images/icon/logo1.png" alt="" style="width: 179px;height: 52px"/>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-home"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                 <li>
                                    <a href="index.php">HOME</a>
                                </li>
                                <li>
                                    <a href="Bookshelf.php">BOOK SHELF</a>
                                </li>
                                <li>
                                    <a href="DigitalLib.php">DIGITAL LIBRARY</a>
                                </li>
                                <li>
                                    <a href="IssuedBooks.php">ISSUED BOOKS</a>
                                </li>
                           
                            </ul>
                        </li>
                         <li>
                            <a href="rfbooks.php">
                                <i class="fas fa-book"></i>REQUST FOR BOOK</a>
                        </li>
                        <li>
                            <a href="http://www.digitallibrary.edu.pk/" target="_blank"">
                                <i class="far fa-check-square"></i>HEC LIBRARY</a>
                        </li>
                        <li>
                            <a href="policy.php">
                                <i class="far fa-check-square"></i>LIBRARY POLICY</a>
                        </li>
                        <li>
                            <a href="Aboutus.php">
                                <i class="fas fa-calendar-alt"></i>ABOUT US</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>CONTACT US</a>
                        </li>
                        <li class="has-sub">
                          
                        </li>
            
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo1.png" alt=""  style="width: 200px;height: 60px" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-home"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                              <li>
                                    <a href="index.php">HOME</a>
                                </li>
                                <li>
                                    <a href="Bookshelf.php">BOOK SHELF</a>
                                </li>
                                <li>
                                    <a href="DigitalLib.php">DIGITAL LIBRARY</a>
                                </li>
                                <li>
                                    <a href="IssuedBooks.php">ISSUED BOOKS</a>
                                </li>
                            </ul>
                        </li>
                           <li>
                            <a href="rfbooks.php">
                                <i class="fas fa-book"></i>REQUST FOR BOOK</a>
                        </li>
                        <li>
                            <a href="http://www.digitallibrary.edu.pk/" target="_blank"">
                                <i class="far fa-check-square"></i>HEC LIBRARY</a>
                        </li>
                        <li>
                            <a href="policy.php">
                                <i class="far fa-check-square"></i>LIBRARY POLICY</a>
                        </li>
                        <li>
                            <a href="Aboutus.php">
                                <i class="fas fa-calendar-alt"></i>ABOUT US</a>
                        </li>
                      
                        <li class="has-sub">
                         
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                        
                            </form>
                            <div class="header-button">
                               
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <?php 
			$q=mysqli_query($conn,"SELECT image FROM formm WHERE cnic='".$_SESSION['login_stu']."'");
			$row=mysqli_fetch_assoc($q);
			if($row['image']=="")
			{
			?>
            <a href="#"><img style="" src="../images/" width="100" height="100" alt="not found"/></a></
			<?php 
			}
			else
			{
			?>
		<a href="#"><img style="" class="center-div" src="../images/<?php echo $row['image'];?>"  width="150" height="150" alt="<?php echo $row['name'];?>"/></a>
			<?php 
			}
			?>
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $sname?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
<div class="info clearfix">
     <div class="image">
                                   			<?php 
			$q=mysqli_query($conn,"SELECT image FROM formm WHERE cnic='".$_SESSION['login_stu']."'");
			$row=mysqli_fetch_assoc($q);
			if($row['image']=="")
			{
			?>
            <a href="#"><img style="" src="../images/" width="100" height="100" alt="not found"/></a></
			<?php 
			}
			else
			{
			?>
		<a href="#"><img style="" class="center-div" src="../images/<?php echo $row['image'];?>"  width="150" height="150" alt="<?php echo $row['name'];?>"/></a>
			<?php 
			}
			?>
                                         </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $sname;?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $semail;?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="Account.php">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                               
                                               
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
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
    </div>
    <script>
            var images = ["1.jpg", "3.jpg", "4.jpg"];
        var totalImages = 3;
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
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-book"></i>
                                            </div>
                                            <div class="text">
                                            	   <?php 
                                                    $sid=$users['rollno'];
                                                    $sql1 ="SELECT id from tblissuedbookdetails where sturoll=:sid";
                                                    $query1 = $dbh -> prepare($sql1);
                                                    $query1->bindParam(':sid',$sid,PDO::PARAM_STR);
                                                    $query1->execute();
                                                    $results1=$query1->fetchAll(PDO::FETCH_OBJ);
                                                    $issuedbooks=$query1->rowCount();
                                                    ?>


                                                                <h2><?php echo htmlentities($issuedbooks);?></h2>
                                                     
                                            
                                                <span>Book Issued</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-file-text"></i>
                                            </div>
                                            <div class="text">
                                                
                                                      <?php 
                                                    $rsts=0;
                                                    $sql2 ="SELECT id from tblissuedbookdetails where sturoll=:sid and RetrunStatus=:rsts";
                                                    $query2 = $dbh -> prepare($sql2);
                                                    $query2->bindParam(':sid',$sid,PDO::PARAM_STR);
                                                    $query2->bindParam(':rsts',$rsts,PDO::PARAM_STR);
                                                    $query2->execute();
                                                    $results2=$query2->fetchAll(PDO::FETCH_OBJ);
                                                    $returnedbooks=$query2->rowCount();
                                                    ?>

                                                                <h2><?php echo htmlentities($returnedbooks);?> </h2>
                                                            
                                               
                                                <span>Not Return Yet</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                 
                        </div>
                      
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 All rights reserved by <a href="#">BBSU</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

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
<?php } ?>
