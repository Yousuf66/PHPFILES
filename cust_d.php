<?php
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

 $a=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');
 
    // delete query
    	mysqli_query($conn,"DELETE FROM Customer_13207 WHERE Cust_ID=$a");
        header('Location: http://localhost/displayCust_13207.php');
   


$conn->close();
?>

