

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
    <title>LMS | REQUEST</title>

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
                        <a class="logo" href="index.html">
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
                            <div class="col-lg-12" style="">
                                <div class="card">
                                    <div class="card-header">REQUEST</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">REQUEST FOR BOOK</h3>
                                        </div>
                                        <hr>
                                        <form action="request.php" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">NAME</label>
                                                <input id="cc-pament" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $users['name'] ?>"  name="stuname" readonly>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">ROLL NO</label>
                                                <input id="cc-name" type="text" value="<?php echo $users['rollno'] ?>"  name="sturoll"  readonly class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">

                                                <label for="cc-number" class="control-label mb-1">SELECT BOOKS</label>
                                                <select name="bookname" class="form-control cc-number identified">
                              
                                                     <option class="hide">SELECT BOOKS</option>  
                                                        <?php  
                                                        include 'conf.php';
                                                        $stmt = $db->prepare("select * from books");
                                                        $stmt->execute();
                                                        while ($row = $stmt->fetch()) 
                                                          {
                                                                      
                                                    ?>
                                                  <option><?php echo $row['book'] ?></option>
                                                 
                                                   <?php } ?>
                                                </select>
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="row">
                                       
                                     
                                            </div>
                                            <div>

                                                <button id="payment-button" type="submit" name="send" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-request fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Send reuest</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
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
