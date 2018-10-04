<html>


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">My Paint shop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav active">
			<li class="nav-item active" >
                      <a class="nav-link" href="http://localhost/welcome.php">Home</a>
                    </li>
                    <li class="nav-item active active">

                      <a class="nav-link" href="http://localhost/displayUser.php">Users</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="http://localhost/displaySaleperson.php">Salespersons</a>
                    </li>
                    
                    <li class="nav-item active">
                      <a class="nav-link " href="http://localhost/displayproduct.php">Product</a>
                    </li>
                    <div class="topnav-right">
			<form action='logout.php'>
			<input  id = "logout" type="submit" value="Logout">
		    </form>


			</div>
		    
                  </ul>
                </div>
              </nav>







<!-- 
<div class='container'>

        <input type="button" class="btn btn-success" value="Put Your Text Here" 
        onclick="window.location.href='http://www.hyperlinkcode.com/button-links.php'" />

        <input type="button" class="btn btn-success" value="Put Your Text Here" 
        onclick="window.location.href='http://www.hyperlinkcode.com/button-links.php'" />
        <input type="button" class="btn btn-success" value="Put Your Text Here" 
        onclick="window.location.href='http://www.hyperlinkcode.com/button-links.php'" />
        <input type="button" class="btn btn-success" value="Put Your Text Here" 
        onclick="window.location.href='http://www.hyperlinkcode.com/button-links.php'" />
    </div> -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   



<body>


<table style="overflow-x:auto;" >
</table>

<style>
#logout{
margin-left: 1000%;
}
.nav {
    color: #ADFF2F;
    background-color: #ADFF2F;
}
.btn-primary {
  color: var(ECE0F8);
  background-color: var(ECE0F8);
  border-radius: var(--border-radius);
}

.btn-primary:hover {
  box-shadow: inset 0 0 0 20rem var(--darken-1);
}
#formCust{
margin-left: 40%;
}

.navbar-default {
  background-color:teal;
  background-image: none;
  background-repeat: no-repeat;
 }





html,body{
height:100%;
width:100%;
}
body{background-image: url('images.jpeg');
    background-repeat: no-repeat;
    background-size: cover;}
.container{
margin-top: 10%;
}
table, th{
    border: 1px solid black;
    
}
tr:hover {background-color: #FBEFF5;}
td{
    border: 0px solid black;
}
th, td {
		
    padding: 5px;
    text-align: center;
}
tr:nth-child(even) {background-color: #f2f2f2;}
td{
background-color: ECE0F8;
}
th{
background-color: FBEFF5;
}

	

</style>

</body>
</html>












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


if(isset($_POST['UPDATE']) ||isset($_POST['INSERT']) ||isset($_POST['DELETE']) ||isset($_POST['FIND'])  ){

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$e = $_POST['e'];
$f = $_POST['f'];
$g = $_POST['g'];
}




if(isset($_POST['UPDATE'])){




	//form ki vlaues are saved in a,b,c....
	//search kar k prev values are saved in a1,b1,c1...
	
	$updateQ = mysqli_query($conn,"SELECT * FROM Customer_13207 WHERE  Cust_ID= $a");
	$upQ = $updateQ->fetch_assoc();
	$a1 = $upQ['Cust_ID'];
	$b1 = $upQ['SName'];
	$c1 = $upQ['CName'];	
	$d1 = $upQ['CNo'];
	$e1 = $upQ['Address'];
	$f1 = $upQ['Area'];	
	$g1 = $upQ['GC'];
	
	echo "old values:  $a1 	$b1 	$c1	 $d1 	$e1  $g1 <br>";
	echo "new values to be updated:  $a 	$b 	$c	 $d 	$e  $g <br>";
	
	if($b != null )
	{
	$b1=  $_POST['b']; // agar form ka data khali nahi hai tou b1 me form ka data ajay
	}
	
	
	if($c != null )
	{
	$c1=  $_POST['c']; // agar form ka data khali nahi hai tou c1 me form ka data ajay
	}

	
	if($d != null )
	{
	$d1=  $_POST['d']; // agar form ka data khali nahi hai tou d1 me form ka data ajay
	}

	if($e != null )
	{
	$e1=  $_POST['e']; // agar form ka data khali nahi hai tou e1 me form ka data ajay
	}
	
	if($f != null )
	{
	$f1=  $_POST['f']; // agar form ka data khali nahi hai tou f1 me form ka data ajay
	}

	
	if($g != null )
	{
	$g1=  $_POST['g']; // agar form ka data khali nahi hai tou g1 me form ka data ajay
	}

	echo "RESULT SHOULD BE :  $a1 	$b1 	$c1	 $d1 	$e1  $f1 $g1 <br>";
	 
	mysqli_query($conn,"UPDATE Customer_13207 SET SName='$b1',CName='$c1',CNo='$d1',Address='$e1',Area='$f1',GC='$g1' WHERE Cust_ID=  $a1 ");






}



if(isset($_POST['DELETE']) ){

if($a != ""  ){
	mysqli_query($conn,"DELETE FROM Customer_13207 WHERE Cust_ID=$a");
	
	echo "DELETED";
}

if($b != ""){
	mysqli_query($conn,"DELETE FROM Customer_13207 WHERE SName='$b'");

	echo "DELETED";
}

if($c != ""){
	mysqli_query($conn,"DELETE FROM Customer_13207 WHERE CName='$c'");

	echo "DELETED";
}

if($d != ""){
	mysqli_query($conn,"DELETE FROM Customer_13207 WHERE CNo='$d'");

	echo "DELETED";
}


if($e != ""){
	mysqli_query($conn,"DELETE FROM Customer_13207 WHERE Address='$e'");

	echo "DELETED";
}

if($f != ""){
	mysqli_query($conn,"DELETE FROM Customer_13207 WHERE Area='$f'");

	echo "DELETED";
}

if($g != ""){
	mysqli_query($conn,"DELETE FROM Customer_13207 WHERE GC='$g'");

	echo "DELETED";
}


}





if(isset($_POST['INSERT'])){
mysqli_query($conn,"INSERT INTO Customer_13207 VALUES ($a,'$b','$c','$d','$e','$f','$g')");

}




function pr($result2){
if ($result2->num_rows > 0) {
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
	 <th>Action</th>
	 </tr>";
    // output data of each row
    while($row = $result2->fetch_assoc()) {
         echo "<tr>
	     <td>".$row["Cust_ID"]."</td>
	     <td>".$row["SName"]."</td>
	     <td>".$row["CName"]."</td>
	     <td>".$row["CNo"]."</td>
	     <td>".$row["Address"]."</td>
	     <td>".$row["Area"]."</td>
	     <td>".$row["GC"]."</td>";  
	echo "<td>";
            // we will use this links on next part of this post
            echo "<a href='http://localhost/displayCust_13207.php?id={$row["Cust_ID"]}' class='btn btn-primary'>Edit</a>";
 	echo " ";
            // we will use this links on next part of this post
            echo "<a href='http://localhost/test.php?id={$row["Cust_ID"]}'  class='btn btn-primary'>Delete</a>";
        echo "</td>";
	 echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}



}




if(isset($_POST['SEARCH'])){


if($a != ""){
$searchQ = mysqli_query($conn,"SELECT * FROM Customer_13207 WHERE Cust_ID = $a");

pr($searchQ);

echo "Searched from Customer Id";
echo "<br>";

}


else if ($b != ""){
$searchQ = mysqli_query($conn,"SELECT * FROM Customer_13207 WHERE SName = '$b'");
pr($searchQ);

echo "Searched from Shop name<br>";
echo "<br>";

}



else if ($c != ""){
$searchQ = mysqli_query($conn,"SELECT * FROM Customer_13207 WHERE CName = '$c'");
pr($searchQ);

echo "Searched from Contact name<br>";echo "<br>";

}


else if ($d != ""){
$searchQ = mysqli_query($conn,"SELECT * FROM Customer_13207 WHERE CNo = '$d'");
pr($searchQ);

echo "Searched from Contact number<br>";echo "<br>";

}

if($e!= ""){
$searchQ = mysqli_query($conn,"SELECT * FROM Customer_13207 WHERE Address = '$e'");

pr($searchQ);

echo "Searched from Address";
echo "<br>";

}


if($f!= ""){
$searchQ = mysqli_query($conn,"SELECT * FROM Customer_13207 WHERE Area = '$f'");

pr($searchQ);

echo "Searched from Area";
echo "<br>";

}

if($g!= ""){
$searchQ = mysqli_query($conn,"SELECT * FROM Customer_13207 WHERE GC = '$g'");

pr($searchQ);

echo "Searched from GC";
echo "<br>";

}




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
	  <th>Action</th>
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
	     <td>".$row["GC"]."</td>";  
	echo "<td>";
            // we will use this links on next part of this post
            echo "<a href='http://localhost/cust_u.php?id={$row["Cust_ID"]}' class='btn btn-primary'>Edit</a>";
 	echo " ";
            // we will use this links on next part of this post
            echo "<a href='http://localhost/cust_d.php?id={$row["Cust_ID"]}'  class='btn btn-primary'>Delete</a>";
        echo "</td>";
	 echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}







$conn->close();
?> 
<html>
<form action = " formCust_13207.php" method="post" autocomplete="on"/>
<input id="formCust" type = "submit" name = "FORM" value ="FORM CUSTOMER_13207" />
</form>

<form>


<table align='center'>
		
	 		
		
 <tr>
	 <th>Customer ID</th>
	 <th>Shop name</th>
	 <th>Contact name</th>
	 <th>ContactNumber</th>
	 <th>Address</th>
	 <th>Area</th>
	 <th>GeographicalCoordinates</th>
	  <th>Action</th>
	 </tr>";


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


$sql2 = "SELECT * FROM Customer_13207";
$result3 = $conn->query($sql2);

while($row3 = $result3->fetch_assoc()) {
         
    }
    


?>

</table>







</form>

</html>
