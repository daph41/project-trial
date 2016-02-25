



<?php
session_start();
 include("global_settings.php"); ?>
	<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){?>

		<!--display username-->
		<!-- please login -->

		<?php
   
$username=$_POST['email'];
$password=md5($_POST['password']);



$query = mysqli_query($connection, "select * from users where password='$password' AND email='$username'");
$rows = mysqli_num_rows($query);
if ($rows == 1) 
{
$_SESSION['login_user']=$username; // Initializing Session
header("Location:dashboard.php");
}
 
else 
{
$_SESSION['error'] = "Invalid username and password";
header("Location:login.php");
}
$connection->close();

}	
	//$time = NOW();
 	//$time->format('Y-m-d H:i:s');   
 	//$now->getTimestamp();  
									   
// 	$pass_hash = password_hash($password, PASSWORD_DEFAULT);
	
// 	try{								   
//     $query = $connection->prepare("INSERT INTO users (fname, lname, email, mobileno, password) 
// 	                                         VALUES(:firstname, :lastname,: email, :mobileno, :password)");

// 	$query->execute(array(':fname' => $firstname,
// 							':lname'=>$lastname,
// 						   ':password' => $password,
// 						   ':email' => $email,
					      
// 						 	));
// 		header("Location:landing.php");
// 	}
// catch(PDOEXCEPTION $ex){
// print $ex->getMessage();
// }
									   
	//header("Location:signup-success.php?name=$username");		   
//} ?>