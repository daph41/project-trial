<?php include("global_settings.php"); ?>
	<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){?>

		<!--display username-->
		<!-- please login -->

		<?php
   
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$mobileno = $_POST["phone"];
	$password = md5($_POST["password"]);



	$sql = "INSERT INTO users (fname, lname, gender, email, mobileno, password)
VALUES ('$firstname', '$lastname','$gender' ,'$email', '$mobileno', '$password')";

if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
header("Location:login.php");
	
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
} ?>