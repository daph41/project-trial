<?php
	session_start();
	unset($_SESSION['login_user']);
	
	echo "Logged out";
	header("Location:adminlogin.html");
?>