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

<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Student | Update</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />


    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style type="text/css">

.form-style-1 {
    margin:10px auto;
    max-width: 400px;
    padding: 20px 12px 10px 20px;
    font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-1 li {
    padding: 0;
    display: block;
    list-style: none;
    margin: 10px 0 0 0;
}
.form-style-1 label{
    margin:0 0 3px 0;
    padding:0px;
    display:block;
    font-weight: bold;
}
.form-style-1 input[type=text], 
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
textarea, 
select{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border:1px solid #BEBEBE;
    padding: 7px;
    margin:0px;
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;  
}
.form-style-1 input[type=text]:focus, 

.form-style-1 textarea:focus, 
.form-style-1 select:focus{
    -moz-box-shadow: 0 0 8px #88D5E9;
    -webkit-box-shadow: 0 0 8px #88D5E9;
    box-shadow: 0 0 8px #88D5E9;
    border: 1px solid #88D5E9;
}
.form-style-1 .field-divided{
    width: 49%;
}

.form-style-1 .field-long{
    width: 100%;
}
.form-style-1 .field-select{
    width: 100%;
}
.form-style-1 .field-textarea{
    height: 100px;
}
.form-style-1 input[type=submit], .form-style-1 input[type=submit]{
    background: #4B99AD;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}
.form-style-1 .required{
    color:red;
}
 .s 
{
    width: 200px;
   list-style-type: none;
    margin:0;
    padding:0;
}
 .s li
{
    display:inline-block;
    margin-right:1px;
    
}
 .s li a
{
    display:block;
    min-width:180px;
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
.s li a:hover{
    background-color: white;
    color: black;
    border:2px solid black;
    font-weight: bolder
}


form{
  position: relative;
  margin: 5%  auto;
  width: 600px;
  height: 850px;
  border-radius: 2px;
  background:linear-gradient(345deg, #6b3aff 50%, #fff 50%, #fff);
  margin-top: 40px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  background-size: 100% 100%;
}    

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: black;
    opacity: 1; /* Firefox */
}


    </style>
</head>
<body>
	<div class="content-wra">
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
            
<form action="" method="POST">

    <ul class="s">
                <li><a href="s1.php">Back To Previous Page</a></li>
            </ul>


	<h2 align="center">update Students Record</h2>

<hr style="border:1px solid black">
<ul class="form-style-1"><!--in action we give a some file name like connection.php when 
user click a submit bitton so action will be perfom and form will send a data on connection.php file-->

    <li><legend>Edit <?php echo $name.' '.$fname?> Record</legend></li>
    <li><label>Full Name <span class="required">*</span></label><input type="text" class="field-divided" name="name" value="<?php echo $name; ?>"/>&nbsp;<input type="text"  class="field-divided" name="fname" value="<?php echo $fname; ?>" /></li>
    <li>
        <label>Cell No <span class="required">*</span></label>
        <input type="text" class="field-long"  name="cell" value="<?php echo $cell; ?>" />
    </li>
     <li>
        <label>Roll No <span class="required">*</span></label>
        <input type="text" class="field-long"  name="rollno" value="<?php echo $roll; ?>" />
    </li>
    <li>
        <label>CNIC <span class="required">*</span></label>
        <input type="text" class="field-long" name="cnic" value="<?php echo $cnic; ?>" />
    </li>
     <li>
        <label>EMAIL <span class="required">*</span></label>
        <input type="text" class="field-long" name="email" value="<?php echo $email; ?>" />
    </li>
    <li>
        <label>Department <span class="required">*</span></label>
        <input type="text" class="field-long" name="departmnet" value="<?php echo $depart; ?>" />
    </li>
    <li>
        <label>Department <span class="required">*</span></label>
        <input type="text"class="field-long"  name="semester" value="<?php echo $semester; ?>" />
    </li>
    <li>
        <label>Department <span class="required">*</span></label>
        <input type="text" class="field-long"  name="gender" value="<?php echo $gender; ?>"/>
    </li>

 <li>
        <input type="submit" value="Update" name="submit" />
  </li>
  <li>
  <font color='black' style="font-family: sans-serif;font-size: 18px">*Click on Update Button To save the changes.</font>
</li>

</ul>
</form>
</div>
</div>
</div>
</div>
</div>


<?php
if(isset($_POST['name']))
{
	$name1 = $_POST['name'];
	$fname1 = $_POST['fname'];
	$cell1 = $_POST['cell'];
	$roll1 = $_POST['rollno'];
	$cnic1 = $_POST['cnic'];
	$email1 = $_POST['email'];
	$departmnet1 = $_POST['departmnet'];
	$semester1 = $_POST['semester'];
	$gender1 = $_POST['gender'];

	
	$query="UPDATE `formm` SET `name`='$name1',`fname`='$fname1',`cell`='$cell1',`rollno`='$roll1',
	`cnic`='$cnic1',`email`='$email1',`departmnet`='$departmnet1',
	`semester`='$semester1',`gender`='$gender1' WHERE id ='$id'"; 
	
	$data = mysqli_query($conn,$query);

	if($data)
	{
		  echo '<script>alert("Image is uploaded");</script>';
   		 header("refresh:0; url=s1.php");
	}
else
{
	echo "Record NOT UPDATED";
}
}

?>
</body>
</html>