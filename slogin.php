<?php  



?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Student | Login Form</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="login-container">
  <section class="login" id="login">
    <header>
      <h2>BBSUL LIBRARY MANAGEMENT SYSTEM</h2>
      <h4>Student | Login</h4>
    </header>
    <form class="login-form" action="student_login.php" method="post">
      <h3 align="center" style="color: red; font-size: 16px;"> <?php echo @$_GET["success"]; ?></h3>
      <h3 align="center" style="color: red; font-size: 16px;"> <?php echo @$_GET["logout"]; ?></h3>
      <h3 align="center" style="color: red; font-size: 16px;"> <?php echo @$_GET["notlogin"]; ?></h3>
      <h3 align="center" style="color: red; font-size: 16px;"  id=""><?php echo @$_GET['invalid']; ?></h3>
      <input type="text" class="login-input" name="txtuser" placeholder="Enter Your Username" required autofocus/>
      <input type="password" class="login-input" name="txtpass" placeholder="Enter Your CNIC" required/>
      <div class="submit-container">
        <button type="submit" class="login-button" name="sub">SIGN IN</button>
      </div>
    </form>
  </section>
  <p>2018 - <a href="https://bbsul.edu.pk/" target="blank"> BBSULIANS</a></p>
</div>

<button id="e1">Login error!</button>
 
  

    <script  src="js/index.js"></script>




</body>

</html>
