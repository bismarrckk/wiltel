<?php
session_start();
require_once "database/connection.php";

if(isset($_POST["submit"])){
	
	$phone = addslashes($_POST["phone"]);
	$password = addslashes($_POST["password"]);

	$sql = "SELECT * FROM users WHERE phone_number = '$phone'  AND status='active'  LIMIT 1 ";

	$results = $conn->query($sql);
	
	if($results->num_rows > 0){
		$values= $results->fetch_assoc();
		if(password_verify($password, $values['password'])){
		$_SESSION["data"] = $values;
		$userid = $_SESSION["data"]["user_id"];		
		$time=time();
		$update_userlog = "UPDATE users SET  user_log = '$time' WHERE user_id = '$userid' LIMIT 1";
		$conn->query($update_userlog);
			
	header("Location:admin");
	exit();
		
	}	
	else{				
		header("Location:login.php?incorrect");
	exit();
		
	}
  }
  else{				
		header("Location:login.php?incorrect");
	exit();
		
	}
}
?>