<!DOCTYPE html>
<html>
<head>
	<title>
		Library | Home
	</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link rel="stylesheet" type="text/css" href="css/popup.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
	
	 <script src="js/jquery-3.2.1.min.js"></script>

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
						
						echo "<h3> Welcome : ".$_SESSION["login_user"]."</h3>";
					
					}
				?>
			</div>
			<div class="nav">
				<label for="show-menu" class="show-menu">Show Menu</label>
				<input type="checkbox" id="show-menu" role="button">
				<ul id="menu">
					<li><a href="welcome.php">Home</a></li>
					
					<li><a href="#">Manage Student</a></li>
					<li><a href="#">Manage Books</a>	</li>
					<li><a href="Aobooks.php">Add Online Book</a></li>
					<li><a href="obooks.php">Online Books</a>	</li>
					<li><a href="#">Change Pass</a>	</li>
					<li><a href="#">About</a>	</li>
				
					
				</ul>
			</div>

			<div class="nav1">
				<div class="container">
					<div class="box">
						<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i>	</div>
						<div class="details"><h3><a href="javascript:void(0)" onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">Send Message</a></h3></div>
					</div>
					<div class="box">
						<div class="icon">	<i class="fa fa-envelope-open-o" aria-hidden="true"></i></div>
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
					<div class="search">
						<input type="search" name="search" placeholder="Enter a book name or author name">
						<input type="button" name="search" value="search">
					</div>
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
											
											echo "<a href='logout.php'>Logout</a>";
										}
								?>	
								
								
							</li>
							<li>
								<a href="">Student</a>
							</li>
							<li>
							<a href="">Books</a>
							</li>

						</ul>
					
					</div>
					<div class="sidemain">	
						<div class="tabs">
							</br></br>
							<ul class="tab-links">
								<li class="active"><a href="#tab1">Random</a></li>
								<li><a href="#tab2">Novels</a></li>
								<li><a href="#tab3">History</a></li>
							</ul>
							<div class="tab-content">
											<!--###################################### tabs 1 -->
								<div id="tab1" class="tab active">
								
								</div>
								<div id="tab2" class="tab active">
								
								</div>
							</div>
						</div>
					</div>
		</div>
	</div>
</body>
</html>
