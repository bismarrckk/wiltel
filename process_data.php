<?php
session_start();
require "database/connection.php";
$user_id = $_SESSION["data"]["user_id"];

if(isset($_POST["save_user_details"])){

	$firstname = addslashes($_POST["firstname"]);
	$lastname = addslashes($_POST["lastname"]);
	$phone=addslashes($_POST["phone"]);
	$password = addslashes($_POST["password"]);
	$password2 = addslashes($_POST["password2"]);
	if($password!==$password2){
	header("location:reg_users.php?mismatch");
	}else{
	$hashpassword=password_hash($password, PASSWORD_DEFAULT);
	$_SESSION["firstname"] = ucwords(strtolower($firstname));
	$_SESSION["lastname"] = ucwords(strtolower($lastname));
	$_SESSION["phone"] = strtolower($phone);
	
	$fullname = $_SESSION["firstname"].' '.$_SESSION["lastname"];
	$phone = $_SESSION["phone"];
	
	$time=time();
	$add_user = "INSERT INTO users (full_name,phone_number,reg_date,password) VALUES ('$fullname', '$phone','$time','$hashpassword')";
	
	if($conn->query($add_user)){
		
		unset($_SESSION["firstname"]);
		unset($_SESSION["lastname"]);
		unset($_SESSION["phone"]); 
		

		header("Location: admin/users.php?successfull");
		exit();
	}
	
	else{
		echo "Error: " . $add_user . " ON " . $conn->error;
	}
  }
}
if(isset($_POST["btnMessage"])){

	$company = ucfirst(addslashes($_POST["company"]));
	$fullname = ucfirst(addslashes($_POST["fullname"]));
	$phone=addslashes($_POST["phone"]);
	$email=addslashes($_POST["email"]);
	$location = ucfirst(addslashes($_POST["location"]));
	$package=addslashes($_POST["package"]);
	$payment = addslashes($_POST["payment_method"]);
	$captcha=$_POST['g-recaptcha-response'];
	if(!$captcha){
		header("location:contact.php?captcha");
		exit();
	}else{
	
	$secretKey = "6Lenm6AcAAAAAMMBIaHXMXBZbfj5esIHJlkQ4ILe";
    $ip = $_SERVER['REMOTE_ADDR'];
    // post request to server
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
    $response = file_get_contents($url);
    $responseKeys = json_decode($response,true);
     if($responseKeys["success"]) {
	$time=time();
	$registration = "INSERT INTO customers (company,contact_person,phone_number,email,location,package,payment_method,reg_date) VALUES ('$company', '$fullname','$phone','$email','$location','$package','$payment','$time')";
	
	if($conn->query($registration)){
		
		unset($_SESSION["fullname"]);
		unset($_SESSION["phone"]);
		unset($_SESSION["location"]); 
		unset($_SESSION["email"]); 
		unset($_SESSION["company"]);
		unset($_SESSION["package"]);  


		header("Location: contact.php?successful");
		exit();
	}
	
	else{
		
		header("Location: contact.php?error");
		exit();
	}
	}
	else{
	header("Location: contact.php?error");
		exit();
	}
  }
 }
if(isset($_POST["update_user_details"])){

	$fullname = addslashes($_POST["fullname"]);	
	$role=addslashes($_POST["role"]);
	$status = addslashes($_POST["status"]);
	

	$_SESSION["fullname"] = ucwords(strtolower($fullname));
	$_SESSION["role"] = strtolower($role);
	$_SESSION["status"] = $status;
	
	
	$fullname = $_SESSION["fullname"];
	$role = $_SESSION["role"];
	$status = $_SESSION["status"];
	
	$userid=$_SESSION["user_id"];
	$update_user = "UPDATE users set full_name='$fullname', role='$role',status='$status' where user_id='$userid'";
	
	if($conn->query($update_user)){
		
		unset($_SESSION["fullname"]);
		unset($_SESSION["role"]); 
		unset($_SESSION["status"]);
		header("Location: admin/users.php?successfull");
		exit();
	}
	
	else{
		echo "Error: " . $update_user . " ON " . $conn->error;
	}

}

if(isset($_POST["update_cust_details"])){

	
	$status = addslashes($_POST["status"]);
	
	$_SESSION["status"] = $status;
	
	$status = $_SESSION["status"];
	
	$custid=$_SESSION["cust_id"];
	$update_customer = "UPDATE customers set status='$status' where cust_id='$custid'";
	
	if($conn->query($update_customer)){		
		unset($_SESSION["status"]);
		header("Location: admin/index.php?successfull");
		exit();
	}
	
	else{
		echo "Error: " . $update_customer . " ON " . $conn->error;
	}

}
if(isset($_POST["password_change"])){
	$oldpassword = addslashes($_POST["oldpassword"]);
	$password = addslashes($_POST["password"]);
	$password2 = addslashes($_POST["password2"]);

	if(password_verify($oldpassword,$_SESSION['data']['password'])){
	if($password!==$password2){
	header("location:admin/change_password.php?mismatch");
	}
	else{
	$hashpassword=password_hash($password, PASSWORD_DEFAULT);
	$userid=$_SESSION["data"]["user_id"];
	$time=time();
	$stmt =$conn->prepare("UPDATE users SET password=? WHERE user_id=?");
	$stmt->bind_param("si",$hashpassword,$userid);
	$exec=$stmt->execute();
	if($exec){
		session_unset();
		unset($_SESSION['data']);
		session_destroy();
		header('Location: login.php?successful');
		exit();
	}
	
	else{
		header("Location: admin/change_password.php?err");
	}
  }
}
else{
	header("Location: admin/change_password.php?err-old");
}
}



