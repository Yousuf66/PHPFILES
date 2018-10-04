
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
$updateQ = mysqli_query($conn,"SELECT * FROM Customer_13207 WHERE  Cust_ID= ?");
     
    // store retrieved row to a variable
    $row = $updateQ->fetch_assoc();
     
    // values to fill up our form
    $shopid = $row['Cust_ID'];
    $shop_name = $row['SName'];
    $contactperson = $row['CName'];
    $contactnumber = $row['CNo'];
    $address = $row['Address'];
    $area = $row['Area'];
    $geographicalcoordinates = $row['GC'];


$conn-> close();
?>
