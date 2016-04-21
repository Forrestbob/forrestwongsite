<?php
$servername = "localhost";
$username = "root";
$password = "abcd1234";
$dbname = "my_db";

// Create connection
		/* new mysqli*/
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}/*else {
	echo "Test Database Connection";
}*/
	
?>