<?php
include("../db.php");//in php "include" function is use to connect a one page to another.
/*i start a variable with query name then i write a data in double quetion marks to insert a data
 in value like which type of data u insert in database*/
 //error_reporting(0);//error remover
 $id = $_GET['id'];
 //$_GET['fn'];
 //$_GET['c'];
 //$_GET['rn'];
 //$_GET['cnic'];
 //$_GET['em'];
 //$_GET['dep'];
 //$_GET['sem'];
 //$_GET['gen'];
 //$_GET['img'];
$query ="SELECT * FROM `formm` WHERE id='$id'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
while($result=mysqli_fetch_assoc($data))
{
  $name = $result["name"];
  $fname = $result["fname"];
  $cell = $result["cell"];
  $roll = $result["rollno"];
  $cnic = $result["cnic"];
  $email = $result["email"];
  $depart = $result["departmnet"];
  $semester = $result["semester"];
  $gender = $result["gender"];
}
?>

<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>
        Library | Add In Digital Lib
    </title>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/popup.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->

 
    
  <script src="js/jquery-3.2.1.min.js"></script>
    
     <script src="js/jquery-3.2.1.min.js"></script>


<style>

.sidemain h1 {
  margin: 25px 0px 20px 0;
  font-weight: 500;
  font-size: 30px;
}
  .sidemain input[type=text]{
  display: block;
  margin-bottom: 20px;
  margin-left: 8%;
  padding: 4px;
  width: 400px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 20px;
  transition: 0.2s ease;
  background-color: transparent;
}
.sidemain select[name=category],select[name=semester]{
  display: block;
  margin-bottom: 20px;
  margin-left: 8%;
  padding: 4px;
  width: 400px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 20px;
  transition: 0.2s ease;
  background-color: transparent;
}

 .sidemain input[type="submit"],input[type=reset]{
  width: 280px;
  height: 60px;
  border: none;
  color: #fff;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
  font-size: 20px;
  transition: 0.2s ease;
  cursor: pointer;
  margin-left:18%;
  margin-bottom:20px;
  margin-top: 20px;
  align-content:space-around; 
  background-color: aquamarine; 
  background: #2f3036;  
  opacity: .8;
  border: 5px solid black;
} 


.sidemain input[type=file]{
  cursor: pointer;
  width: 40px;
  height: 34px;
  margin-left:15%;
  
  
}
.sidemain input[type=file]:before {
  width: 280px;
  height: 60px;
  font-size: 20px;
  color: #fff;
  font-weight: 300;
  line-height: 50px;
  content: 'Select your file';
  display: inline-block;
  background: #2f3036;
  border: 5px solid black;
  opacity: .8;
  padding: 0 10px;
  text-align: center;
  margin-left:30%;
  font-family: 'Roboto', sans-serif;
  transition: 0.2s ease;
  align-content:space-around; 
}
.sidemain input[type=file]::-webkit-file-upload-button {
  visibility: hidden;
  margin-left:15%;
}

.sidemain table{
  position: relative;
  margin: 5%  auto;
  width: 500px;
  height: 800px;
  border-radius: 2px;
  background:linear-gradient(345deg, #6b3aff 50%, #fff 50%, #fff);
  margin-top: 200px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  background-size: 100% 100%;
}    

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: black;
    opacity: 1; /* Firefox */
}


</style>
<script>     

    var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>     

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
                   <li><a href="welcome.php"> Home</a></li>
                    
                    <li><a href="AddStudent.php"> Add Student</a></li>
                    <li><a href="Abooks.php">Manage Books</a>    </li>
                    <li><a href="Aobooks.php">Manage Digital Library</a>    </li>  
                    <li><a href="#">Issue Books</a> </li>
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
                        <div class="details"><h3><a href="javascript:void(1)" onclick="document.getElementById('light1').style.display='block';document.getElementById('fade1').style.display='block'">Send Mail</a><h3>  </div>
                    </div>
                    
                
                </div>
            </div>
                 <div id="light" class="white_content">
                    <h2>Message</h2>
                    <form method="Post" action="send_sms.php">
                        <div class="input-field">
                            <input type="number" maxlength="15" name="phone" required="">
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
                    <form method="Post" action="send_mail.php">
                        <div class="input-field">
                            <input type="email" name="to" maxlength="15" required="">
                            <label>Email</label>
                        </div>
                        <div class="input-field">
                            <textarea rows="5" name="request" required=""></textarea>
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
                                            
                                            echo "<a href='logout.php'><i class='fa fa-sign-out logout' aria-hidden='true'></i> logout</a>";
                                        }
                                ?>  
                                
                                
                            </li>
                             
                            <li>
                            <a href="online/obooks.php"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Digital Library</a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                Student</a>
                            </li>
                            <li>
                            <a href=""><i class="fa fa-book" aria-hidden="true"></i> Books</a>
                           </li>
                            <li>
                            <a href=""><i class="fa fa-book" aria-hidden="true"></i> Issued Books</a>
                           </li>

                        </ul>
                    
                    </div>
            <div class="sidemain">  
                      <form action="digitallib.php" method="post" enctype="multipart/form-data">
                        <table border="0px" cellpadding="5px" cellspacing="2px" align="center">
                          
                          <tr><th><h1>&nbsp;&nbsp;Add PDF Book</h1></th>
                          </tr>
                          
                          <tr>
                            <td><input type="text" name="book" placeholder="Book Title" required></td>
                          </tr>
                          <tr>
                            <td><input type="text" name="author" placeholder="Author Name " required></td>
                          </tr>
                          <tr>
                            <td><input type="text" name="edition" placeholder="Edition " required></td>
                          </tr>
                              
                          <tr>
                                          <td><select name="category">
                                      <option >--Select Category--</option>
                                      <option >Computer Science</option>
                                      <option >Information Technology</option>
                                     
                                      <option >Business Administration</option>
                                      <option >Commerce</option>
                                      <option >English</option>
                                      <option >Education</option>
                                      <option >D-Pharm</option>
                                      
                                      <option >Management Science</option>
                                      
                                      <option >Others</option>
                                      </select></td>
                                        </tr>
                                        <tr><td><select name="semester">
                                      <option >--Select Semester:--</option>
                                      <option >1st Semester</option>
                                      <option >2nd Semester</option>
                                      <option >3rd Semester</option>
                                      <option >4th Semester</option>
                                      <option >5th Semester</option>
                                      <option >6th Semester</option>
                                      <option >7th Semester</option>
                                      <option >8th Semester</option>
                                      <option >9th Semester</option>
                                      <option >10th Semester</option>
                                      </select><br></td></tr>
                                        <tr>
                            <td><input type="file" name="file" required/><br><br><!--file uplod button-->
                              <input type="reset"  value="Cancel"><br><br><!-- cancel button--> 
                            <input type="submit" name="data" value="Submit"></td><!--submit button-->
                          </tr>
                          </table>
                        </form>

             </div>
        </div>
    </div>
</body>
</html>
