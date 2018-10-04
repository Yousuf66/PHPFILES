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


$id =$_POST['id'];




if($id != null){
$searchQ = mysqli_query($conn,"SELECT * FROM spCuBridge WHERE ID = $id");


	if ($searchQ->num_rows > 0) {
          echo "<div class='container'> 
         <table align='center'>
		
		
	 <tr>
	 
	 <th>SP_ID</th>
	 <th>CUST_ID</th>
	 </tr>";
    // output data of each row
     	while($row = $searchQ->fetch_assoc()){
	
        echo "<tr>
	      
	     <td>".$row["SP_ID"]."</td>
	     <td>".$row["CUST_ID"]."</td>
	     </tr>";}
    
    echo "</table>
	</div>";
} else {
    echo "0 results";
}



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
