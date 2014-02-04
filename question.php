<?php
session_start();
require_once('ExamDAO.php');
require_once('config.php');
$choices= ExamDAO::getAnswer($_SESSION['next']);
$question = ExamDAO::getQuestion($_SESSION['next']);
if(isset($_SESSION['name'])== ""){
	header('Location: login.php');
}else{
	echo "Sign in as : ".$_SESSION['name'];
}


?>
<html>
	<head>
		<title>Emamination Web App</title>
		<link type="text" rel="stylesheet" href="css/bootstrap.css">
  		<link type="text" rel="stylesheet" href="style.css"></head>
	</head>
	<body id = "body">
		</div>
			<div class = "navbar navbar-fixed top">
				<div class = "well"><h1>La Verdad Online Examination</h1>
					<div class = "thumbnail4 span6 offset5" style = "margin-top:60px">
						<center><h1><font color = "black" face = "Century Gothic">Question</h1></font></center>
				<?php	
				if($_SESSION['next'] > 10){
					header('Location: result.php');
				}

				else{ ?>
	
							<div><?php echo $question; ?></div><br>
							<form method = "POST" action = "next.php">
							<?php foreach($choices as $id => $choices): ?>
								<input type = "radio" value = "<?= $choices ?>" name = "option"><?= $choices ?><br>
							<?php  endforeach ?>
								<button id =  "nextbtn" class = "btn btn-primary">NEXT</button>
							</form>
				<?php } ?>
						
							
				
					</div>
				</div>
			</div>
	</body>
</html>