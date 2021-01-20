<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login_user'])==0)
  { 
header('location:index.php');
}
else{?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <script>
        jQuery(document).ready(function() {
             jQuery('.tabs .tab-links a').on('click', function(e)  {
                var currentAttrValue = jQuery(this).attr('href');
         
                // Show/Hide Tabs
                jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
         
                // Change/remove current tab to active
                jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
         
                e.preventDefault();
             });
        });
    </script>
<style>

.sidemain h1 {
margin: 25px 0px 20px 0;
font-weight: 500;
font-size: 30px;
}
input[type=text] {
display: block;
margin-bottom: 20px;
padding: 4px;
width: 240px;
height: 32px;
border: none;
border-bottom: 1px solid #6b3aff;
font-family: 'Roboto', sans-serif;
font-weight: 400;
font-size: 15px;
transition: 0.2s ease;
background-color: transparent;
}
input[type=email],select[name="semester"],select[name="department"] {
display: block;
margin-bottom: 20px;
padding: 4px;
width: 240px;
height: 32px;
border: none;
border-bottom: 1px solid #6b3aff;
font-family: 'Roboto', sans-serif;
font-weight: 400;
font-size: 15px;
transition: 0.2s ease;

background-color: transparent;
}
input[type="submit"],input[type="reset"]{
width: 160px;
height: 36px;
border: none;
border-radius: 20px;
color: #000000;
font-family: 'Roboto', sans-serif;
font-weight: 600;
transition: 0.2s ease;
cursor: pointer;
margin-left:75px;
margin-bottom:20px;
margin-top: 20px;
font-size: 15px;
align-content:space-around;
background-color: aquamarine;

}   
select{

}
.sidemain table{
position: relative;
margin: 5%  auto;
width: 650px;
height: 650px;
margin-top: 70px;

border-radius: 2px;
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
background-size: 100% 100%;

}   
table th{
     font-weight: 500;
     font-size: 18px;
    font-family: 'Roboto', sans-serif;
    margin-bottom: 20px;
}       

table img{
max-width:180px;
margin-left: 75px;
}
input[type=file]{
    padding:10px;
    font-family:"helvetica neue",helvetica,arial,sans-serif;
    color:#fff;
    background:#2f3036;
    text-decoration:none;

    width: 280px;
    opacity:.8;
    font-weight:500;
    margin-left:10px;
    transition:all linear 0.15s;
}
.form-radio
{
-webkit-appearance: none;
-moz-appearance: none;
appearance: none;
display: inline-block;
position: relative;
background-color: #f1f1f1;
color: #666;
top: 10px;
height: 30px;
width: 30px;
border: 0;
border-radius: 50px;
cursor: pointer;     
margin-right: 7px;
outline: none;
}
.form-radio:checked::before
{
position: absolute;
font: 13px/1 'Open Sans', sans-serif;
left: 11px;
top: 7px;
content: '\02143';
transform: rotate(40deg);
color: black;

}
table textarea[name="description"]{
  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 300px;
  height: 150px;
  border: none;
  border-bottom: 1px solid black;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 20px;
  transition: 0.2s ease;
  background-color: transparent;
   color: black;
  resize: none;
} 
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: black;
    opacity: 1; /* Firefox */
}


:-ms-input-placeholder { /* Internet Explorer 10-11 */
    color: black;
}

::-ms-input-placeholder { /* Microsoft Edge */
    color: black;

} 
.form-radio:hover
{
background-color: #f7f7f7;
}
.form-radio:checked
{
background-color: #f1f1f1;
}
label
{
font: 300 16px/1.7 'Open Sans', sans-serif;
color: #666;
cursor: pointer;
} 

</style>
<script>     

var loadFile = function(event) {
var output = document.getElementById('output');
output.src = URL.createObjectURL(event.target.files[0]);
};
</script>
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
        .nav1 .container{
            width: 220px;
            
            text-align:center;
            
        }
        .nav1 .container .box{
            position: relative;
            width: 100%;
            height: 80px;
            box-sizing: border-box;
            text-align: center;
            opacity: .5;
            
        }
        .nav1 .container .box .icon{
            width: 100%;
            height: 100%;
            background: #151515;
            transition: 0.5s;
            transform-origin: top;
            transform: translateY(0) rotateX(0deg);
        }
        .nav1 .container .box:hover .icon{
        
            transform: translateY(100px) rotateX(90deg);
        }

        .nav1 .container .box .icon .fa{
            font-size: 2em;
            line-height: 80px; 
            position: absolute;
            top: 0;
            left: 80px;
            color: #999;
        }
        .nav1 .container .box .details{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #03a9f4;

            transition: 0.5s;
            transform-origin: bottom;
            transform: translateY(-100px) rotateX(90deg);
        
        }
        .container .box:hover .details{
        
            transform: translateY(0px) rotateX(0deg);
        }
        .nav1 .container .box .details h3{
            margin: 0;
            padding: 0;
            line-height: 80px;
            font-size: 14px;
            color: #fff;
            font-family: sans-serif;
        }
        .nav1 .container .box .details h3 a{
           text-decoration: none;
           color: black;
           font-weight: bolder;
        }
        .nav1 .container .box:nth-child(2) .details{
            background: #e91e63;
        }
        .nav1 .container .box:nth-child(3) .details{
            background: #8bc34a;
        }
    </style>
     <link href="assets1/css/font-awesome.css" rel="stylesheet" />
     
    <link rel="stylesheet" type="text/css" href="css/popup.css">
   
    

    <!-- CUSTOM STYLE  -->
    
    <link rel="stylesheet" type="text/css" href="css/popup.css">
        <!-- FONT AWESOME STYLE  -->
  
     
    
    <!-- CUSTOM STYLE  -->
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    
  <script src="js/jquery-3.2.1.min.js"></script>
<style type="text/css">
    hr{
        border-bottom: 2px solid black;
    }
</style>
    <script>
        jQuery(document).ready(function() {
             jQuery('.tabs .tab-links a').on('click', function(e)  {
                var currentAttrValue = jQuery(this).attr('href');
         
                // Show/Hide Tabs
                jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
         
                // Change/remove current tab to active
                jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
         
                e.preventDefault();
             });
        });
    </script>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/logo.png">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        <img src="assets/img/logo.png" alt="" style="width: 179px;height: 52px"/>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="">
              <i class="material-icons">dashboard</i>
              <p>
              <?php
                    session_start();
                    if (!$_SESSION["login_user"])
                    {
                        header("location:index.php?notlogin=You are not administrator!");
                    }
                    else
                    {
                        
                        echo "<p style='font-size:16px; font-weight:bolder;'> Welcome  ".$_SESSION["login_user"]."</p>";
                    
                    }
                ?>
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="welcome.php">
              <i class="material-icons">dashboard</i>
              <p>HOME</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="AddStudent.php">
              <i class="material-icons">person</i>
              <p>Add Student</p>
            </a>
          </li>
          <li class="nav-item  active ">
            <a class="nav-link" href="Abooks.php">
              <i class="material-icons">content_paste</i>
              <p>Add Books</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="Aobooks.php">
              <i class="material-icons">library_books</i>
              <p>Manage Digital Library</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="rfb.php">
              <i class="material-icons">notifications</i>
              <p>
              Request <span style="color: red;font-weight: bolder">
                    <?php 

                    include 'conf.php';
                    $stmt = $db->prepare("select * from request");
                    $stmt->execute();
                    $cnt=0;
                    if($stmt->rowCount() > 0)
                    {

                    while ($row = $stmt->fetch()) 
                    {           ?>                                      
                                    
                                            
                                
                                      
                                         
                                  
 <?php $cnt=$cnt+1;} echo $cnt;} ?> 



                  </span>
              </p>
            </a>
          </li>
          <li class="nav-item dropdown">
                <a class="nav-link" href="logout.php" >
                <i class='fa fa-sign-out logout' aria-hidden='true'></i>
                  <p>
                  
                                
                  
                  <?php

                                        if (!$_SESSION["login_user"])
                                        {
                                            header("location:index.php?notlogin=You are not administrator!");
                                        }
                                        else
                                        {
                                            
                                            echo "logout</p>";
                                        }
                  
                  ?>
                  </a>
                </li>
                        <br>
          <div class="nav1">
                <div class="container">
                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i> </div>
                        <div class="details"><h3><a href="javascript:void(0)" onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">Send Message</a></h3></div>
                    </div>
                    <div class="box">
                        <div class="icon">  <i class="fa fa-envelope-open-o" aria-hidden="true"></i></div>
                        <div class="details"><h3><a href="javascript:void(1)" onclick="document.getElementById('light1').style.display='block';document.getElementById('fade1').style.display='block'">Send Mail</a><h3></div>
                    </div>
                    
                
                </div>
            </div>
            
        
          
        </ul>
      </div>
    </div>
    <div id="light" class="white_content">
                    <h2>Message</h2>
                    <form method="Post" action="send_sms.php">
                        <div class="input-field">
                            <input type="number" name="phone" maxlength="35" required="" >
                            <label>Number</label>
                        </div>
                        <div class="input-field">
                            <textarea rows="5" name="message" required=""></textarea>
                            <label>Message</label>
                        </div>
                        <input type="submit" name="send" value="Send Message" class="btn">
                        <a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a>
                    </form> </div>
                <div id="fade" class="black_overlay"></div>
                 <div id="light1" class="white_content">
                    <h2>Mail</h2>
                    <form method="Post" action="send_sms.php">
                        <div class="input-field">
                            <input type="email" name="phone" required="" maxlength="35">
                            <label>Email</label>
                        </div>
                        <div class="input-field">
                            <textarea rows="5" name="message" required=""></textarea>
                            <label>Body</label>
                        </div>
                        <input type="submit" name="send" value="Send Mail" class="btn">
                        <a href="javascript:void(1)" onclick="document.getElementById('light1').style.display='none';document.getElementById('fade1').style.display='none'">Close</a>
                    </form> </div>
                <div id="fade1" class="black_overlay"></div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Admin Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
          
            <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link" href="books/issuedbooks.php" >
                 
                  <p style='font-size:8px;'>
                  <i class="fa fa-book" aria-hidden="true"></i>
                  Issued Book</a>
                  </p>
            </li>   
            <li class="nav-item dropdown">
                <a class="nav-link" href="books/books1.php" >
                 
                  <p style='font-size:8px;'>
                  <i class="fa fa-book" aria-hidden="true"></i>
                  Books</a>
                  </p>
            </li>         
            <li class="nav-item dropdown">
                <a class="nav-link" href="online/obooks.php" >
                 
                  <p style='font-size:8px;'>
                  <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                 Digital Library</a>
                  </p>
                
                </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="shwstu/s1.php" >
                 
                  <p style='font-size:8px;'>
                 <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                Student </a>
                  </p>
                
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link" href="logout.php" >
                 
                  <p style='font-size:8px;'>
                  <i class='fa fa-sign-out logout' aria-hidden='true'></i>
                                
                  
                  <?php

                                        if (!$_SESSION["login_user"])
                                        {
                                            header("location:index.php?notlogin=You are not administrator!");
                                        }
                                        else
                                        {
                                            
                                            echo "logout</a>";
                                        }
                  
                  ?>
                  </p>
                </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-9">
                    <div class="sidemain">  
                  <form action="save.php" method="post" enctype="multipart/form-data">
                    <table border="0px" cellpadding="5px" cellspacing="2px" align="center">
                    
                    <tr><th><h1>&nbsp;&nbsp;Add Books</h1></th>
                    </tr>
                    
                    <tr><th rowspan="4" ><img id="output" src="http://placehold.it/180" alt="your image" /></th>  <!--image placeholder-->
                      
                      <td ><input type="text" name="isbn" placeholder="ISBN" required></td>
                    </tr>
                    <tr>
                      <td><input type="text" name="author" placeholder="Author Name" required></td>
                    </tr>
                    <tr>
                      <td><input type="text" name="book" placeholder="Book Title " required></td>
                    </tr>
                    <tr>
                      <td><input type="text" name="edition" placeholder="Edition " required></td>
                    </tr>
                    
                    <tr><th></th>
                      <td><input type="text" name="publisher" placeholder="Publisher "required></td>
                    </tr>
                    
                    <tr><th></th>
                      <td><input type="text" name="category" placeholder="Category"required><td>
                    </tr>
                    <tr><th><input type="file" onchange="loadFile(event)" name="image" required></th><!--image uplod button-->
                      <td><input type="text" name="quantity" placeholder="Quantity "required></td>
                    </tr>
                    <tr><th><input type="reset"  value="cancel"><!-- cancel button-->
                      <input type="submit" name="data" value="submit"></th> <!--submit button-->
                      <td><textarea name="description" placeholder="Add Book Discription..." required>
                      </textarea></td>
                    </tr>
                    <tr><th></th>
                      <td></td>
                    </tr>
                    <tr><th></th><td></td></tr>

                    </table>
                  
                  
                  
                  </form>

                          
                 

             </div>
   
            
      
                    </div>
                </div>
            

    
        </div>
    </div>

          
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="finem.php">
                  Policy
                </a>
              </li>
              <li>
                <a href="">
                  About Us
                </a>
              </li>
              
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="" target="_blank">BBSULIANS</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(2)">
            <img src="assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(2)">
            <img src="assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(2)">
            <img src="assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(2)">
            <img src="xassets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
           </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>
<?php } ?>