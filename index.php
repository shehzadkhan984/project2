<!DOCTYPE html>
<html>
<head>
	<title>Library | Login</title>
	<style type="text/css">
		body{
			background-image: url("pics/library.jpg");
			background-repeat: no-repeat;
			background-position: fixed; 	
			background-size: 100% 130%;
		}
		.main{
			width: 900px;
			height: 400px;
			background-color:;
			margin: 0 auto;
			margin-top: 100px;
			box-shadow:2px 3px 4px rgba(0,0,0,.6);
			-moz-box-shadow:2px 3px 4px rgba(0,0,0,.6)
			-wbkit-box-shadow:2px 3px 4px rgba(0,0,0,.6);
			-o-box-shadow:2px 3px 4px rgba(0,0,0,.6);
		}
		.main1{
			width: 400px;
			height:400px;
			float: left;
			background-image: url("pics/logo.jpg");
			background-repeat: no-repeat;
			background-position: fixed; 	
			background-size: 100% 100%;
		}
		.main2{
			width: 500px;
			height: 400px;
			float: right;
			background: white;
			opacity: .8;
				

		}
		
		input[type=text]
		{
			height: 26px;
			width: 250px;
			padding: 5px;	
			border-radius:10px 10px 0px 0px;
			border:none;
			border-bottom: 3px solid #002366;	

		}
		input[type=password]
		{
			height: 26px;
			width: 250px;
			padding: 5px;
		
		 
			border-radius:10px 10px 0px 0px;
			border:none;
			border-bottom: 3px solid #002366;	
			
		}
		input[type=submit]
		{
			height: 39px;
			width: 120px;
			background: #002366;
			color: white;
			text-decoration: none;
			font-size: 23px;
			border: 3px solid black;
			
		}
		input[type=submit]:hover
		{
			
			
			font-style: bold;
			border-radius: 0px 10px;
			border:none;
			border-bottom: 3px solid black;
			font-weight: bolder;
		}
		.s{

			color: black; font-family: cursive; font-size: 20px;
		}
		@media screen  and (max-width:700px){
					user-select: {
						position:static;
						display:none;
					}
					input{
						margin-bottom:1px;
					}
					.main{
						width: 100%;
					}
					.main1{
						display: none;
					}
					.main2{
						width:100%;
						margin-right: 4px;
					}
					.form .s{
						font-size: 15px;
						color: black;
					}
					body{
						background-image:none;
					}
		}
.s1 
{
    width: 250px;
   list-style-type: none;
    margin:0;
    padding:0;
}
 .s1 li
{
    display:inline-block;
    margin-right:1px;
    
}
 .s1 li a
{
    display:block;
    min-width:200px;
    height:40px;
    text-align:center;
    line-height:40px;
    font-family:"helvetica neue",helvetica,arial,sans-serif;
    color:#fff;
    background: #002366;
    text-decoration:none;
    opacity:.8;

    
}
.s1 li a:hover{
    background-color: white;
    color: black;
    border:2px solid black;
    font-weight: bolder
}

	</style>
</head>
<body>
	<div class="main">

		<div class="main1">
			
		</div>
		<div class="main2">
		<form action="login.php" method="POST" class="form" autocomplete="on">
			<ul class="s1">
                <li><a href="slogin.php">Login As A Student</a></li>
            </ul>
			<h3 align="center" style="color: red; font-size: 20px;"> <?php echo @$_GET["success"]; ?></h3>
			<h3 align="center" style="color: red; font-size: 20px;"> <?php echo @$_GET["logout"]; ?></h3>
			<h3 align="center" style="color: red; font-size: 20px;"> <?php echo @$_GET["notlogin"]; ?></h3>
			<h3 align="center" style="color: red; font-size: 20px;"> <?php echo @$_GET["invalid"]; ?></h3>

			<table  align="center" cellpadding="5" cellspacing="6" width="100%">
				<tr>
					<th colspan="6" align="center" style="background: #002366; color: white; "><h1>LOGIN FORM</h1></th>
				</tr>
				<tr style="margin-top: 10px;">
					<th align="right" class="s" >UserName : </th>
					<td><input type="text" name="txtuser" placeholder="Enter a valid userame" maxlength="15" ></td>
				</tr>
				<tr>
					<th align="right" class="s" >Password : </th>
					<td><input type="password" name="txtpass" placeholder="Enter a valid pass" maxlength="20"></td>
				</tr>
				<tr>
					<td colspan="2" align="center" >
						<input type="submit" value="LOG IN" id="sub" name="sub" />
					</td>
				</tr>
				
			</table>
		</form>
		</div>
	</div>
</body>
</html>