<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "13207_ass1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$a= $_SESSION["ide"];
mysqli_query($conn,"UPDATE USER SET ACTIVE='0' WHERE ID = $a");







$_SESSION = false;
session_destroy();
	header("Location: login.php");

?>
