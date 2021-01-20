<?php
session_start();

error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login_user'])==0)
    {   
header('location:index.php');
}
else{ 

// code for block student    
if(isset($_GET['inid']))
{
$id=$_GET['inid'];
$status=0;
$sql = "update formm set Status=:status  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query -> execute();
header('location:reg-students.php');
}



//code for active students
if(isset($_GET['id']))
{
$id=$_GET['id'];
$status=1;
$sql = "update formm set Status=:status  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query -> execute();
header('location:reg-students.php');
}


    ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>
        Library | Home
    </title>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- DATATABLE STYLE  -->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    
   
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link rel="stylesheet" type="text/css" href="css/welcome.css">
    <link rel="stylesheet" type="text/css" href="css/popup.css">
    
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
<style>

     
 </style>


</head>
<body>

    <div class="main">
        <?php  ?>
        <div class="main1">
            <div class="logo">
                <img src="pics/6.png">
                <?php
                    session_start();
                    if (!$_SESSION["login_user"])
                    {
                        header("location:index.php?notlogin=You are not administrator!");
                    }
                    else
                    {
                        
                        echo "<h3 style='font-size:20px;'> Welcome : ".$_SESSION["login_user"]."</h3>";
                    
                    }
                ?>
            </div>
            <div class="nav">
                <label for="show-menu" class="show-menu">Show Menu</label>
                <input type="checkbox" id="show-menu" role="button">
                <ul id="menu">
                    <li><a href="welcome.php">Home</a></li>
                    
                    <li><a href="AddStudent.php">Add Student</a></li>
                    <li><a href="Abooks.php">Manage Books</a>    </li>
                    <li><a href="Aobooks.php">Manage Digital Library</a>    </li>  
                    
                    <li><a href="finem.php">Fine</a>   </li>
                    <li><a href="#">Change Pass</a> </li>
                    
                
                    
                </ul>
            </div>

            <div class="nav1">
                <div class="container">
                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i> </div>
                        <div class="details"><h3><a href="javascript:void(0)" onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">Send Message</a></h3></div>
                    </div>
                    <div class="box">
                        <div class="icon">  <i class="fa fa-envelope-open-o" aria-hidden="true"></i></div>
                        <div class="details"><h3><a href="javascript:void(1)" onclick="document.getElementById('light1').style.display='block';document.getElementById('fade1').style.display='block'">Send Mail</a></h3></div>
                    </div>
                    
                
                </div>
            </div>
                 <div id="light" class="white_content">
                    <h2>Message</h2>
                    <form method="Post" action="send_sms.php">
                        <div class="input-field">
                            <input type="number" name="phone" required="">
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
                            <input type="number" name="phone" required="">
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
        </div>
             
    <div class="main2">

            <div class="side">
                    
                    <div class="rside">
                        <ul>
                            <li>
                                    <?php

                                        if (!$_SESSION["login_user"])
                                        {
                                            header("location:index.php?notlogin=You are not administrator!");
                                        }
                                        else
                                        {
                                            
                                            echo "<a href='logout.php'><i class='fa fa-sign-out logout' aria-hidden='true'></i></a>";
                                        }
                                ?>  
                                
                                
                            </li>
                             </li>
                            <li>
                            <a href="">Digital Library</a>
                            </li>
                            <li>
                                <a href="">Student</a>
                            </li>
                            <li>
                            <a href="">Books</a></li>
                           

                        </ul>
                    
                    </div>
            <div class="sidemain">  
                <br><br><br><br><br><br>
                                      <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage Reg Students</h4>
    </div>


        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Reg Students
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Student ID</th>
                                            <th>Student Name</th>
                                            <th>Email id </th>
                                            <th>Mobile Number</th>
                                            <th>CNIC</th>
                                             <th>department</th>
                                            <th>Reg Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php $sql = "SELECT * from formm";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>                                      
                                        <tr class="odd gradeX">
                                            <td class="center"><?php echo htmlentities($cnt);?></td>
                                            <td class="center"><?php echo htmlentities($result->rollno);?></td>
                                            <td class="center"><?php echo htmlentities($result->name);?></td>
                                            <td class="center"><?php echo htmlentities($result->fname);?></td>
                                            <td class="center"><?php echo htmlentities($result->cell);?></td>
                                            <td class="center"><?php echo htmlentities($result->cnic);?></td>
                                            <td class="center"><?php echo htmlentities($result->email);?></td>
                                             <td class="center"><?php echo htmlentities($result->RegDate);?></td>
                                            <td class="center"><?php if($result->Status==1)
                                            {
                                                echo htmlentities("Active");
                                            } else {


                                            echo htmlentities("Blocked");
}
                                            ?></td>
                                            <td class="center">
<?php if($result->Status==1)
 {?>
<a href="reg-students.php?inid=<?php echo htmlentities($result->id);?>" onclick="return confirm('Are you sure you want to block this student?');"" >  <button class="btn btn-danger"> Inactive</button>
<?php } else {?>

                                            <a href="reg-students.php?id=<?php echo htmlentities($result->id);?>" onclick="return confirm('Are you sure you want to active this student?');""><button class="btn btn-primary"> Active</button> 
                                            <?php } ?>
                                          
                                            </td>
                                        </tr>
 <?php $cnt=$cnt+1;}} ?>                                      
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>


            
    </div>
    </div>

     <!-- CONTENT-WRAPPER SECTION END-->
                             
   
                        
                        
                    </div>
        
            </div>
        </div>
        </div>
        
         <div class="footer">
             <div class="foote">
                    <p style="color:white;margin-top:-10px;">.Shop ©  2014</p>
                </div>
         </div>
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- DATATABLE SCRIPTS  -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->  
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>

</body>

</html>
<?php } ?>