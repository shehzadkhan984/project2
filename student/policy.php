

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
    <title>LMS | POLICY</title>

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
                                <li class="active has-sub">
                            
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
                           
                            </ul>
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
                       <div class="card">
                  <div class="card-header">
                    <strong class="card-title">POLICY</strong>
                  </div>

                  <div class="card-body">
                    <div class="typo-headers">
                      <h1 class="pb-2 display-4">BBSU LIBRARY POLICY</h1>
                  
                    </div>
                    <div class="typo-articles">
                      <p>
                        Students are expected to observe the following rules while using the library services; any violation of these rules will incur appropriate disciplinary action.
                   
                       </p>
                      <blockquote class="blockquote mt-3 text-right">
                        <p>
                          If you want to get laid, go to college. If you want an education, go to the library.
 </p>
                        <footer class="blockquote-footer">Frank Zappa
</footer>
                      </blockquote>
                      
                    </div>
                    <div class="vue-lists">
                  
                      <div class="row">
                        <div class="col-md-10">
                          <h3>List of Do's & Dont's</h3>
                          <ul>
                            <li>Submit any book or object for inspection, when requested by the library staff.</li>
                                            <li>Do not write, underline or mark any book. Library books are carefully examined on return and the borrower will be held responsible for the damage.    </li>
                                            <li>After reading, leave books on the table or on the book trolley. Please do not shelve the books.</li>
                                            <li>Complete silence should be observed except for brief and subdued talk with the library staff.</li>
                                            <li>Drinks and eatables are not allowed in the library.</li>
                                            <li>Keep your mobiles switched-off within the library premises.</li>
                                            <li>Library is a noise free zone, observe silence in the library.</li>
                                            <li>Smoking is strictly prohibited inside the library.</li>
                                            <li><b>Library is not responsible for any losses; please do not leave your belongings unattended.<b></li>
                          </ul>
                        </div><br>
                        <div class="col-md-10 text-left">
                          <div>
                            <h3>LIBRARY MEMBERSHIP</h3>
                             <hr style="border-bottom: 1px solid black;">
                                    <p>Students, staff, faculty, RAs, TAs, researchers are entitled for library membership. Beside that the library also provides access to people from outside university community through its external membership services. The faculty and staff are required to fill a library membership form and submit it at the circulation desk in the library. The library membership forms are available from library circulation desk as well as from help desk. The LUMS HRD also provides the library related material including the membership form to a newly appointed faculty member. All students registered for the fall semester are automatically given the membership. They will be provided the filled membership forms at the time of their library orientation session. All the students need to verify their particulars and suggest amendments accordingly.</p>
                          </div>
                        </div>
                        <div class="col-md-10 text-left">
                          <div>
                           <h3>LIBRARY CARD</h3>
                                    <hr style="border-bottom: 1px solid black;">
                                    <p>For faculty, staff, and students, the Card serves as the library card. To prevent fraudulent use, lost or stolen cards should be reported immediately to library circulation desk or through email at BBSU@gmail.com.</p><br>
                                    <h3>DISCIPLINARY FINE</h3>
                                    <hr style="border-bottom: 1px solid black;">
                                    <p>Library has effectively put into practice the fine for those students who violate the library code of conduct for maintaining silence and discipline in the library. Rs. 500 are charged on first time voilation, Rs. 1,000 on second time violation. If a patron continues the violation, the case could be referred to Value & Ethics Committee.

                                    Note: System generated over due and fine notices will be sent at patrons' official email account. All library fines are only paid at Library desk. Library account will be blocked if the fine exceeds Rs. 5,000/-. Overdue fines will not be charged to Faculty and Staff.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                   

                  </div>
                </div>


              </div>
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

