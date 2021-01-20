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
  <head>
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
 
<style>
    .placeholders #tab2 h2
    {
        margin:0;
        padding: 0;
        /*display: block;text-align: center; width: 100%; height: 20%;background: #002366;color: white;font-size: 34px;*/
        
        border-left: 5px solid #19c589;
    }
    .placeholders .tab-content ul 
{
    
   list-style-type: none;
    margin:0;
    padding:0;
}
.placeholders .tab-content ul li
{
    display:inline-block;
    margin-right:1px;
    
}
.placeholders  .tab-links ul li a
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
    

 
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />


<link href="assets/css/bootstrap.css" rel="stylesheet" /> 
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
            <li><a href="digitalLib.php?page=" style="color:#FFFFFF"><i class="fa fa-book" aria-hidden="true"></i> Issued Books</a></li>
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
          <!-- container--><br><br><br>
		  
		 
		   <div class="tab1">
                        <div class="tabs">
                           
                            <div class="tab-content">
                                        <!--###################################### tabs 1 -->
                                <div id="tab1" class="tab active">
                                    
                                   <h2 >BBSU LIBRARY POLICY</h2>         
                                    
                                    <hr style="border-bottom: 2px solid black;">
                                    <p> Students are expected to observe the following rules while using the library services; any violation of these rules will incur appropriate disciplinary action.
                                        <br>
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
                                    </p><br>
                                    <h3>LIBRARY MEMBERSHIP</h3>
                                    <hr style="border-bottom: 1px solid black;">
                                    <p>Students, staff, faculty, RAs, TAs, researchers are entitled for library membership. Beside that the library also provides access to people from outside university community through its external membership services. The faculty and staff are required to fill a library membership form and submit it at the circulation desk in the library. The library membership forms are available from library circulation desk as well as from help desk. The LUMS HRD also provides the library related material including the membership form to a newly appointed faculty member. All students registered for the fall semester are automatically given the membership. They will be provided the filled membership forms at the time of their library orientation session. All the students need to verify their particulars and suggest amendments accordingly.</p><br>
                                    <h3>LIBRARY CARD</h3>
                                    <hr style="border-bottom: 1px solid black;">
                                    <p>For faculty, staff, and students, the Card serves as the library card. To prevent fraudulent use, lost or stolen cards should be reported immediately to library circulation desk or through email at BBSU@gmail.com.</p><br>
                                    <h3>DISCIPLINARY FINE</h3>
                                    <hr style="border-bottom: 1px solid black;">
                                    <p>Library has effectively put into practice the fine for those students who violate the library code of conduct for maintaining silence and discipline in the library. Rs. 500 are charged on first time voilation, Rs. 1,000 on second time violation. If a patron continues the violation, the case could be referred to Value & Ethics Committee.

                                    Note: System generated over due and fine notices will be sent at patrons' official email account. All library fines are only paid at Library desk. Library account will be blocked if the fine exceeds Rs. 5,000/-. Overdue fines will not be charged to Faculty and Staff.</p>

                                                
                                            
                                
                                </div>
                                            <!--###################################### tabs 2 -->
                                <div id="tab2" class="tab">
                                                                    
                                            
                                </div>
                                    <!--###################################### tabs 3 -->
                                <div id="tab3" class="tab">
                                    
                                </div>
                            </div>
                        </div>
               
		  
		  
		  
		  
		  
		  

          <div class="placeholders">
            
      </div>
    </div>

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
  </body>
</html>
<?php } ?>