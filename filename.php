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

$sql = "SELECT * FROM Customer_13207";
$result = $conn->query($sql);





if ($result->num_rows > 0) {
    echo "<div class='container'> 
<table align='center'>
	 <tr>
	 <th>Customer ID</th>
	 <th>Shop name</th>
	 <th>Contact name</th>
	 <th>ContactNumber</th>
	 <th>Address</th>
	 <th>Area</th>
	 <th>GeographicalCoordinates</th>
	 </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
	     <td>".$row["Cust_ID"]."</td>
	     <td>".$row["SName"]."</td>
	     <td>".$row["CName"]."</td>
	     <td>".$row["CNo"]."</td>
	     <td>".$row["Address"]."</td>
	     <td>".$row["Area"]."</td>
	     <td>".$row["GC"]."</td>
	     </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?> 
<html>
<body>

<table style="width:100%">
</table>

<style>
html,body{
height:100%;
width:100%;
}

.container{
margin-top: 10%;
}
table, th{
    border: 2px solid black;
    
}
td{
    border: 1px solid black;
}
th, td {
		
    padding: 10px;
    text-align: center;
}
td{
background-color: ECE0F8;
}
th{
background-color: FBEFF5;
}

	

</style>

</body>
</html>
