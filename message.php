<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>
        Library | Library Books
    </title>
   
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/popup.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />

    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
        <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- DATATABLE STYLE  -->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<style type="text/css">
    .tab-content  .container{
        width: 1000px;
    }
    .container .table{
        width: 1000px;
    }
</style>
    

    
     <script src="js/jquery-3.2.1.min.js"></script>

 <!--   <script>
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
    </script>-->
<style>
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
                     <li><a href="../welcome.php"> Home</a></li>
                    
                    <li><a href="../AddStudent.php"> Add Student</a></li>
                    <li><a href="../Abooks.php">Manage Books</a>    </li>
                    <li><a href="../Aobooks.php">Manage Digital Library</a>    </li>  
                  
                    <li><a href="../finem.php">Fine</a>   </li>
              
                
                    
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
                        <div class="details"><h3><a href="javascript:void(1)" onclick="document.getElementById('light1').style.display='block';document.getElementById('fade1').style.display='block'">Send Mail</a><h3></div>
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
                <div id="fade1" class="black_overlay"></div>
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
                <div id="fade" class="black_overlay"></div>
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
                                            
                                            echo "<a href='../logout.php'><i class='fa fa-sign-out logout' aria-hidden='true'></i>logout
												</a>";
                                        }
                                ?>  
                                
                                
                            </li>
                              <li>
                            <a href="../online/obooks.php"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Digital Library</a>
                            </li>
                            <li>
                                <a href="../shwstu/s1.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                Student</a>
                            </li>
                            <li>
                            <a href="books1.php"><i class="fa fa-book" aria-hidden="true"></i> Books</a>
                           </li>
                            <li>
                            <a href="issuedbooks.php"><i class="fa fa-book" aria-hidden="true"></i> Issued Books</a>
                           </li>

                        </ul>
                    
                    </div>
            <div class="sidemain">  
                <br><br><br>
                                <!--###################################### tabs  -->
                <div class="tab1">
                        <div class="tabs">
                           
                            <div class="tab-content">
                                        <!--###################################### tabs 1 -->
                                <div id="tab1" class="tab active">
                                           
                                    <div class="container">
                                        <table class=" table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
                                            <h2> &nbsp;&nbsp;MESSAGE FROM STUDEN'S</h2>
                                            <hr style="border:2px solid black">
                                            <thead>
                                                <tr>
                                                    <th align="center">#</th>
                                                    <th align="center">NAME</th>
                                                    <th align="center">ROLL NO</th>
                                                    <th align="center">TOPIC</th>
                                                    <th align="center">MESSAGE</th>
                                                    <th align="center">DELETE</th>
                                      
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php  
                                                    include 'conf.php';
                                                    $stmt = $db->prepare("select * from contact");
                                                    $stmt->execute();
                                                    $cnt=1;
                                                    if($stmt->rowCount() > 0)
                                                    {

                                                    while ($row = $stmt->fetch()) 
                                                    {

                                                        $id=   $row['id'];       
                                                        
                                                        

                                                        
                                                            # code...
                                                       
                                                        ?>
                                                        <tr class="odd gradeX">
                                                            <td><?php echo $cnt; ?></td>
                                                       
                                                            <td align="center"><?php echo $row['name'] ?></td>
                                                            <td><?php echo $row['rollno'] ?></td>
                                                            <td><?php echo $row['subject'] ?></td>
                                                            <td><?php echo $row['message'] ?></td>
                                                          
                                                          
                                                           <td align="center">
     <a href='delete.php?del=<?php echo $row['id'] ?>' style='text-decoration:none;'><button class="btn btn-danger" style="width: 125px;padding: 5px;margin-top: 15px;"><i class="fa fa-pencil"></i> DELETE</button></a>
 </td>
                               
                                                        </tr>

                                           
                                            


                                                
                                         <?php $cnt=$cnt+1;}} ?>  
                                            </tbody>
                                        </table>
                                    </div>
                                </div>        
                       
   
                            </div>
                        </div>
                </div>
             </div>
        </div>
    </div>
      
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
