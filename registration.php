<?php
	session_start();
?>
<html>
<head>
	<title>Emamination Web App</title>
	<link type="text" rel="stylesheet" href="css/bootstrap.css">
  	<link type="text" rel="stylesheet" href="style.css"></head>
</head>
<body>
	<?php  include 'header.php';?>
	<div >
		<div>
			<div class = "thumbnail span6 offset5" style = "margin-top:20px">
		
				<center>
					<form method = "POST" action = "authenticator.php" id = "regForm">
						<h1><font color = "black" face = "Century Gothic">Register</h1></font><br>
						<input type = "text" name="fname" id="fname" placeholder=" Enter First name" style ="margin-left:10px;height:30px;"></b><br>
						<input type = "text" name="lname" id="lname" placeholder=" Enter Last name" style ="margin-left:10px;height:30px;"></b><br>
						<input type = "email" name = "email" id = "email" style ="margin-left:10px;height:30px;" placeholder = "Enter your Email"></b><br>
						<input type = "password" name = "password" id = "pass" style ="margin-left:10px;height:30px;" placeholder = "Enter your Password"></b><br>
						<input type = "password" id = "cpass" style ="margin-left:10px;height:30px;" name = 'cpassword' placeholder = "Confirm Password"></b><br>
						<button id = "reg" class = "btn btn-primary">Register</button>
						<a href = "login.php" id = "login2">Log in</a>
				
					</form>
				</center>
			<div id = "ack"></div>
		</div>
		</div>
			
</div>
</body>
<script type="text/javascript" src = "js/jquery.1.10.2.js"></script>
<script type="text/javascript" src = "js/registration.js"></script>
</html>