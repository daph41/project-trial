<?php
	// define("HOST","localhost");
	// define("USER","root");
	// define("PASS","");
	
	// $connection = mysql_connect(HOST,USER,PASS)or die("Failed to connect: ".mysql_error());
	// mysql_select_db("demoproject",$connection) or die("Error: ".mysql_error());
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demoproject";

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>