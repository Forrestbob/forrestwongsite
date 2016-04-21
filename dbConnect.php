<?php
$servername = "192.168.1.227";
$username = "root";
$password = "bluepiece49";
$dbname = "Raspberry Pi";

// Create connection
		/* new mysqli*/
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
	echo "Test Database Connection";
}
	
?>