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
	$image=$result["image"];
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
    <title>Student | Delete</title>
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
   	form
   	{
   		width: 500px;
   		margin-left: 250px;

   		margin-top: 150px;
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

   </style>
</head>
<body>
<form action="" method="POST">
<!--in action we give a some file name like connection.php when 
user click a submit bitton so action will be perfom and form will send a data on connection.php file-->
<ul class="s">
                <li><a href="s1.php">Back To Previous Page</a></li>
</ul>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">

	<thead>
			<tr>
				<th colspan="9"> Are You Sure You Want to Delete The account of  <?php echo $name; ?> </th>
			</tr>
          <tr>
             <th class="center">IMAGE</th>
             <th class="center">Name</th>
             <th class="center">Roll No</th>
             <th class="center">Cell No</th>
            <th class="center">DEPARTMENT / SEMESTER</th>
            <th class="center">CNIC</th>
            <th class="center">EMAIL ID</th>
               <th class="center">GENDER</th>
               <th class="center">DELETE</th>
           </tr>
    </thead>
    <tbody>
    

    	<tr>
    		<td><a href="../images/<?php echo $image ?>" target="_blank"><img src=../images/<?php echo $image ?> height=100px width=100px></a></td>
    		<td><?php echo $name." ".$fname; ?></td>
    		<td><?php echo $roll; ?></td>
    		<td><?php echo $cell; ?></td>
    		<td><?php echo $cnic; ?></td>
    		<td><?php echo $email; ?></td>
    		<td><?php echo $depart ?></td>
    		<td><?php echo $semester; ?></td>
    		<td><button type="submit" class="btn btn-danger" name="submit" value="submit">delete</button></td>
    	</tr>
    </tbody>
	
</table>
</form>


<?php
if(isset($_POST['submit']))
	 
{
	
	$query="delete from formm where id ='$id'";
	$result=mysqli_query($conn,$query);
	if(isset($result))
	{
		echo '<script>alert("recored has been deleted");</script>';
		header("refresh:0; url=s1.php");
	}
else
{
	echo '<script>alert("NO recored delete");</script>';
	
}
}
	
?>
</body>
</html>