<?php
include("../db.php");
//in php "include" function is use to connect a one page to another.
/*i start a variable with query name then i write a data in double quetion marks to insert a data
 in value like which type of data u insert in database*/
 //error_reporting(0);//error remover
 $id = $_GET['edit'];
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

<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>BOOKS | Edit Book</title>
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
  height: 800px;
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
                <li><a href="books1.php">Back To Previous Page</a></li>
            </ul>


	<h2 align="center">update Books Record</h2>

<hr style="border:1px solid black">
<ul class="form-style-1"><!--in action we give a some file name like connection.php when 
user click a submit bitton so action will be perfom and form will send a data on connection.php file-->


    <li><label>Full Name <span class="required">*</span></label><input type="text" class="field-divided" name="isbn" value="<?php echo $isbn; ?>"/>&nbsp;<input type="text"  class="field-divided" name="author" value="<?php echo $author; ?>" /></li>
    <li>
        <label>Cell No <span class="required">*</span></label>
        <input type="text" class="field-long"  name="book" value="<?php echo $book; ?>" />
    </li>
     <li>
        <label>Roll No <span class="required">*</span></label>
        <input type="text" class="field-long"  name="edition" value="<?php echo $edition; ?>" />
    </li>
    <li>
        <label>CNIC <span class="required">*</span></label>
        <input type="text" class="field-long" name="publisher" value="<?php echo $publisher; ?>" />
    </li>
     <li>
        <label>EMAIL <span class="required">*</span></label>
        <input type="text" class="field-long" name="category" value="<?php echo $category; ?>" />
    </li>
    <li>
        <label>Department <span class="required">*</span></label>
        <input type="text" class="field-long" name="quantity" value="<?php echo $quantity; ?>" />
    </li>
    <li>
        <label>Department <span class="required">*</span></label>
        <input type="text"class="field-long"  name="description" value="<?php echo $description; ?>" />
    </li>
   

 <li>
        <input type="submit" value="Update" name="submit" />
  </li>
  <li>
  <font color='white' style="font-family: sans-serif;font-size: 18px">*Click on Update Button To save the changes.</font>
</li>

</ul>
</form>
</div>
</div>
</div>
</div>
</div>


<?php
if(isset($_POST['isbn']))
{
	$name1 = $_POST['isbn'];
	$fname1 = $_POST['author'];
	$cell1 = $_POST['book'];
	$roll1 = $_POST['edition'];
	$cnic1 = $_POST['publisher'];
	$email1 = $_POST['category'];
	$departmnet1 = $_POST['quantity'];
	$semester1 = $_POST['description'];
	

	
	$query="UPDATE `books` SET `isbn`='$name1',`author`='$fname1',`book`='$cell1',`edition`='$roll1',
	`publisher`='$cnic1',`category`='$email1',`quantity`='$departmnet1',
	`description`='$semester1' WHERE id ='$id'"; 


	 if (mysqli_query($conn,$query)) 
	 {
         echo '<script>alert("BOOK IS Updated");</script>';
   		 header("refresh:0; url=books1.php");
     } 
     else
     {
            echo "Not updated";
            echo "query failed: (" . $conn->errno . ") " . $conn->error;
     }
}

?>
</body>
</html>