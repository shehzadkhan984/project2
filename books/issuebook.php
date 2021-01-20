<?php

include("../db.php");
$servername='localhost';
  $username='root';
  $pass='';
  $db='login';
  
  $con=new mysqli($servername,$username,$pass,$db);
if($con->connect_error){
  die("connectio failed");
}

  $db = mysqli_connect('localhost', 'root', '', 'login');
session_start();
error_reporting(0);
include('config.php');
if(strlen($_SESSION['login_user'])==0)
{   
header('location:../index.php');
}
else{ 



//in php "include" function is use to connect a one page to another.
/*i start a variable with query name then i write a data in double quetion marks to insert a data
 in value like which type of data u insert in database*/
 //error_reporting(0);//error remover
 $id = $_GET['issue'];
 //$_GET['fn'];
 //$_GET['c'];
 //$_GET['rn'];
 //$_GET['cnic'];
 //$_GET['em'];
 //$_GET['dep'];
 //$_GET['sem'];
 //$_GET['gen'];
 //$_GET['img'];
$query ="SELECT * FROM `books` WHERE id='$id'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
while($result=mysqli_fetch_assoc($data))
{
    $isbn=$result['isbn'];
    $author=$result['author'];
    $book=$result['book'];
    $edition=$result['edition'];
    $publisher=$result['publisher'];
    $category=$result['category'];
    $quantity=$result['quantity'];
    $description=$result['description'];


}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Library | Issue Book</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<script>



</script> 
<style type="text/css">
  .others{
    color:red;
}

</style>


</head>
<body>

    <div class="content-wra">
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Issue a New Book</h4>
                
                            </div>

</div>
<div class="row">
<div class="col-md-10 col-sm-6 col-xs-12 col-md-offset-1"">
<div class="panel panel-info">
<div class="panel-heading">
Issue a New Book
</div>
<div class="panel-body">
<form action="" method="POST">

<div class="form-group">
<label>Student Name<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="stuname" id="stuname" autocomplete="off"  required />
</div>

<div class="form-group">
<span id="get_student_name" style="font-size:16px;"></span> 
</div>
<div class="form-group">
<label>Student Cell<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="stucell" id="stucell" autocomplete="off"  required />
</div>

<div class="form-group">
<span id="get_student_name" style="font-size:16px;"></span> 
</div>
<div class="form-group">
<label>Student Roll No<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="sturoll" id="student" autocomplete="off"  required />
</div>

<div class="form-group">
<span id="get_student_name" style="font-size:16px;"></span> 
</div>



<div class="form-group">
<label>ISBN Number<span style="color:red;">*</span></label>
<input class="form-control" value="<?php echo $isbn; ?>" type="text" name="isbn" id="bookid" required="required" readonly/>
</div>

 <div class="form-group">
<label>Book Title<span style="color:red;">*</span></label>
  <input class="form-control" value="<?php echo $book; ?>" type="text" name="book"  required="required" readonly/>

   

 </div>
  <div class="form-group">
<label>Book Author<span style="color:red;">*</span></label>
  <input class="form-control" value="<?php echo $author; ?>" type="text" name="author"  required="required" readonly/>

   

 </div>
<button type="submit" name="issue"  class="btn btn-info">Issue Book </button>

                                    </form>
                            </div>
                        </div>
                            </div>

        </div>
   
    </div>
    </div>
    <?php
     if (isset($_POST['issue'])) {
        date_default_timezone_set("America/New_York");
            $Sname = $_POST['stuname'];
            $Scell = $_POST['stucell'];
            $Sroll = $_POST['sturoll'];
      
            $isbn1 = $_POST['isbn'];
            $author1 = $_POST['author'];
            $book1 = $_POST['book'];
            $issueDate=date("d/m/Y");
            
         
    
        $sql = "SELECT * FROM `formm` WHERE `name`='$Sname' ";
        $results1 = mysqli_query($db, $sql);
        
        if (mysqli_num_rows($results1) > 0) {
            
             $sql1 = "INSERT INTO `tblissuedbookdetails`(`isbn`, `bookname`, `bookauth`, `stuname`, `stucell`, `sturoll`) VALUES ('$isbn1', '$book1', '$author1', '$Sname', '$Scell', '$Sroll')";
            $results2 = mysqli_query($db, $sql1);
            if ($results2) {
                echo '<script>alert("Book has been issued");</script>';
                header("refresh:0; url=Books1.php");
            }
           
        }   
        else
        {
            
            echo '<script>alert("Data You enterd is not In Our Record");</script>';
            header("refresh:0; url=issuebook.php");
        }
}
    ?>
     <!-- CONTENT-WRAPPER SECTION END-->
  <?php include('includes/footer.php');?>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
<?php } ?>
