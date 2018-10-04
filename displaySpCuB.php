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




$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];




if(isset($_POST['UPDATE'])){
	//form ki vlaues are saved in a,b,c....
	//search kar k prev values are saved in a1,b1,c1...
	
	$updateQ = mysqli_query($conn,"SELECT * FROM spCuBridge WHERE ID = $a");
	$upQ = $updateQ->fetch_assoc();
	$a1 = $upQ['ID'];
	$b1 = $upQ['SP_ID'];
	$c1 = $upQ['CUST_ID'];
	
	
	if($b != null )
	{
	$b1=  $_POST['b']; // agar form ka data khali nahi hai tou b1 me form ka data ajay
	}
	
	
	if($c != null )
	{
	$c1=  $_POST['c']; // agar form ka data khali nahihai tou c1 me form ka data ajay
	}
	echo "old values:  $a1 	$b1 	$c1	 <br>";
	echo "new values to be updated:  $a 	$b 	$c	 <br>";
	
	
	
	echo "RESULT SHOULD BE :  $a1 	$b1 	$c1	  <br>";
	 
	mysqli_query($conn,"UPDATE spCuBridge SET ID=$a1, SP_ID=$b1,CUST_ID=$c1 WHERE ID = $a1");


}

if(isset($_POST['DELETE'])){


if($a != ""){
	mysqli_query($conn,"DELETE FROM spCuBridge WHERE ID=$a");

	echo "DELETED";
}

if($b != ""){
	mysqli_query($conn,"DELETE FROM spCuBridge WHERE SP_ID=$b");

	echo "DELETED";
}

if($c != ""){
	mysqli_query($conn,"DELETE FROM spCuBridge WHERE CUST_ID=$c");

	echo "DELETED";
}
}











if(isset($_POST['INSERT'])){

mysqli_query($conn,"INSERT INTO spCuBridge VALUES ($a,$b,$c)");
echo " INSERTED";
}





function pr($result2){

	if ($result2->num_rows > 0) {
          echo "<div class='container'> 
         <table align='center'>
		
		
	 <tr>
	 <th>ID #</th>
	 <th>SP_ID</th>
	 <th>CUST_ID</th>
	 </tr>";
    // output data of each row
     	while($row = $result2->fetch_assoc()){
	
        echo "<tr>
	      <td>".$row["ID"]."</td>
	     <td>".$row["SP_ID"]."</td>
	     <td>".$row["CUST_ID"]."</td>
	     </tr>";}
    
    echo "</table>
	</div>";
} else {
    echo "0 results";
}



}






if(isset($_POST['SEARCH'])){


if($a != ""){
$searchQ = mysqli_query($conn,"SELECT * FROM spCuBridge WHERE ID = $a");

pr($searchQ);

echo "Searched from ID";
echo "<br>";

}


else if ($b != ""){
$searchQ = mysqli_query($conn,"SELECT * FROM spCuBridge WHERE SP_ID = $b");
pr($searchQ);

echo "Searched from SP_ID<br>";
echo "<br>";

}



else if ($c != ""){
$searchQ = mysqli_query($conn,"SELECT * FROM spCuBridge WHERE CUST_ID = $c");
pr($searchQ);

echo "Searched from CUSTOMER<br>";echo "<br>";

}



}


$sql = "SELECT * FROM spCuBridge";
$result = $conn->query($sql);





if ($result->num_rows > 0) {
    echo "<div class='container'> 
<table align='center'>
	 <tr>
	 <th>ID #</th>
	 <th>SP_ID</th>
	 <th>CUST_ID</th>
	 </tr>";
    // output data of each row
     	while($row = $result->fetch_assoc()){
	
        echo "<tr>
	      <td>".$row["ID"]."</td>
	     <td>".$row["SP_ID"]."</td>
	     <td>".$row["CUST_ID"]."</td>
	     </tr>";}
    echo "</table>
	</div>";
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
