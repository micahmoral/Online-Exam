<?php
session_start();
require_once('ExamDAO.php');
require_once('config.php');
// if(isset($_SESSION['name'])== ""){
// 	header('Location: login.php');
// }else{
// 	echo "Sign in as: ".$_SESSION['name'];
// }

$answers = explode("-", $_SESSION['answers']);
?>	
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php  include 'header.php';?>
		<div>
			<div id = "loginname"><?php if(isset($_SESSION['name'])== ""){
							header('Location: login.php');
						}else{
							echo "Sign in as: ".$_SESSION['name'];
						} ?></div>
			<div>
				<div class = "thumbnail3 span6 offset5" style = "margin-top:20px">
					<center><h1><font color = "black" face = "Century Gothic">Results :)</h1></font></center>
				<div style = "color:white;">
					<div id = "score">
						<?php echo "Your total score is : ".$_SESSION['score']; ?>
					</div>
					<?php for($i = 1; $i < 11; $i++){
							echo $i."). ".ExamDAO::getQuestion($i)."<br>";
							echo $answers[$i]."<br>";
					 } ?>
				</div>		
			</div>	
			
			<div>
				<a href="logout.php">Logout</a>
			</div>
		</div>
		</div>
	</body>
</html>	