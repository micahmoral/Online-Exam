<?php 
session_start();
require_once('config.php');
require_once('ExamDAO.php');
$_SESSION['next'] = 1;
$_SESSION['score'] = 0;
$_SESSION['answer'] = null;
if(!empty($_POST['email']) && (!empty($_POST['password']))){
	$email = $_POST['email'];
	$pass = sha1($_POST['password']);
	$result = ExamDAO::getUser($email, $pass);
	if($result){
		$_SESSION['name'] = $_POST['email'];
		echo "<script>alert('Login Succesfully');window.location.href='question.php'</script>'";
	
	}else{
		header('Location: login.php');
	}
}else{
	header('Location: login.php');
}

 ?>