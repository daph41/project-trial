<?php
	 session_start();
	  include("global_settings.php");


    if($_POST){
    $email = $_POST['email'];
	$password = md5($_POST['password']);
	echo  $password;

	die();
	
	try{
	$statement = $connection -> prepare("SELECT email, password, userid FROM users WHERE  email=: email");
	$statement -> execute(array(':email' => $email));
	$result = $statement->fetch(PDO::FETCH_ASSOC);
	var_dump($result);
	
	if(password_verify($password, $result['password'])){
		
	$_SESSION['email'] = $email;
	$_SESSION['userID'] = $result['userid']; // for who commented to which post (used in dashboard.js)
		
	header("Location:dashboard.php");
	
	}
		else {
		$_SESSION['error'] = "Invalid Username or Password!";
		header("Location:login.php");
		}
	}
		catch(PDOEXCEPTION $message){
			echo $message -> getMessage();
		}
		
 }?>