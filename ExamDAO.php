<?php

class ExamDAO {
	public static function getQuestion($id){
		global $db;
		if($id <= 10){
			$sql = "SELECT distinct question FROM questions WHERE id = '{$id}'";
			$result = $db->query($sql);
			if($result){
			while($row = $result->fetch_assoc()){
				return $row['question'];
			}
			
		}else {
			return false;
		}
		}
		
	}
	public static function getUser($email, $pass){
		global $db;
		$sql = "SELECT * FROM examinee where email = '{$email}' AND password = '{$pass}'";
		$result = $db->query($sql);
		if($result->num_rows > 0) {
			$question = $result->fetch_assoc();
			return $question;
		}else {
			return false;
		}
	}
	public static function createUser(
		$first_name,
		$last_name,
		$email_address,
		$password) {
			global $db;
		$query = "INSERT INTO examinee (fname, lname, email, password) 
			VALUES ('$first_name', '$last_name', '$email_address', '$password')";
		$result = $db->query($sql);
		return $result;
	}
	public static function checkAnswers(){
		$correct;
	}
	public static function getAnswer($id){
		global $db;
			$sql = "SELECT  * FROM choices WHERE question_id_fk = '{$id}'";
			$result = $db->query($sql);
			if ($result->num_rows > 0) {
			$ans = array();
			for ($i = 0; $i < $result->num_rows; $i++) {
				$row = $result->fetch_assoc();
				$ans[$row['id']] = $row['answer'];
			}
			$result->free();
			return $ans;
		} else {
			return false;
		}
	}
	public static function countScore($answer){
		global $db;
			$sql = "SELECT * FROM choices where answer = '{$answer}' and is_correct = '1' ";
			$result = $db->query($sql);
			if ($result->num_rows > 0) {
				session_start();
				$_SESSION['score']++;
			}else{
				return false;
			}
	}
}