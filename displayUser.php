<html>


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">My Paint shop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="http://localhost/welcome.php">Home</a>
                    </li>
                                        
			<li class="nav-item">
                      <a class="nav-link" href="http://localhost/displaySaleperson.php">Salespersons</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="http://localhost/displayCust_13207.php">Customers</a>
                    </li>
                    <li class="nav-item">
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


<table style="width:100%">
</table>

<style>
#logout{
margin-left: 1000%;
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
td{
    border: 0px solid black;
}
th, td {
		
    padding: 5px;
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

$a = $_POST['ID'];
$b = $_POST['PASSWORD'];
$c = $_POST['ACTIVE'];
$d = $_POST['SALESPERSON'];
}


if(isset($_POST['UPDATE'])){
	//form ki vlaues are saved in a,b,c....
	//search kar k prev values are saved in a1,b1,c1...
	
	$updateQ = mysqli_query($conn,"SELECT * FROM USER WHERE ID = $a");
	$upQ = $updateQ->fetch_assoc();
	$a1 = $upQ['ID'];
	$b1 = $upQ['PASSWORD'];
	$c1 = $upQ['ACTIVE'];	
	$d1 = $upQ['SALESPERSON'];
	
	echo "old values:  $a1 	$b1 	$c1	 $d1 	<br>";
	echo "new values to be updated:  $a 	$b 	$c	 $d 	<br>";
	
	if($b != null )
	{
	$b1=  $_POST['PASSWORD']; // agar form ka data khali nahi hai tou b1 me form ka data ajay
	}
	
	
	if($c != null )
	{
	$c1=  $_POST['ACTIVE']; // agar form ka data khali nahi hai tou c1 me form ka data ajay
	}

	
	if($d != null )
	{
	$d1=  $_POST['SALESPERSON']; // agar form ka data khali nahi hai tou d1 me form ka data ajay
	}

	echo "RESULT SHOULD BE :  $a1 	$b1 	$c1	 $d1 	 <br>";
	 
	mysqli_query($conn,"UPDATE USER SET PASSWORD='$b1',ACTIVE='$c1',SALESPERSON='$d1' WHERE ID = $a");


}





if(isset($_POST['DELETE'])){


if($a != ""){
	mysqli_query($conn,"DELETE FROM USER WHERE ID=$a");

	echo "DELETED";
}

if($b != ""){
	mysqli_query($conn,"DELETE FROM USER WHERE PASSWORD='$b'");

	echo "DELETED";
}

if($c != ""){
	mysqli_query($conn,"DELETE FROM USER WHERE ACTIVE='$c'");

	echo "DELETED";
}

if($d != ""){
	mysqli_query($conn,"DELETE FROM USER WHERE SALESPERSON='$d'");

	echo "DELETED";
}

}







if(isset($_POST['INSERT'])){

mysqli_query($conn,"INSERT INTO USER VALUES ($a,'$b','$c','$d')");

if($d != null){
	mysqli_query($conn,"INSERT INTO SalesPerson VALUES ('$a','','','')");
	
}


}








function pr($result2){

	if ($result2->num_rows > 0) {
          echo "<div class='container'> 
         <table align='center'>
		
	 <tr>
	<th>ID </th>
	 <th>PASSWORD</th>
	 <th>ACTIVE</th>
	 <th>SALESPERSON</th>
	 	 
	 </tr>";
    // output data of each row
     	while($row = $result2->fetch_assoc()){
	
        echo "<tr>
	    <td>".$row["ID"]."</td>
	     <td>".$row["PASSWORD"]."</td>
	     <td>".$row["ACTIVE"]."</td>
	     <td>".$row["SALESPERSON"]."</td>
	     </tr>";}
    
    echo" </table>
	</div>";
} else {
    echo "0 results";
}



}








if(isset($_POST['SEARCH'])){


if($a != ""){
$searchQ = mysqli_query($conn,"SELECT * FROM USER WHERE ID = $a");

pr($searchQ);

echo "Searched from ID";
echo "<br>";

}


else if ($b != ""){
$searchQ = mysqli_query($conn,"SELECT * FROM USER WHERE PASSWORD = $b");
pr($searchQ);

echo "Searched from PASSWORD<br>";
echo "<br>";

}



else if ($c != ""){
$searchQ = mysqli_query($conn,"SELECT * FROM USER WHERE ACTIVE = $c");
pr($searchQ);

echo "Searched from ACTIVE<br>";echo "<br>";

}


else if ($d != ""){
$searchQ = mysqli_query($conn,"SELECT * FROM USER WHERE SALESPERSON = $d");
pr($searchQ);

echo "Searched from SALESPERSON<br>";echo "<br>";

}




}












$sql = "SELECT * FROM USER";
$result = $conn->query($sql);





if ($result->num_rows > 0) {
    echo "<div class='container'> 
<table align='center'>
		
	 <tr>
	 <th>ID #</th>
	 <th>PASSWORD</th>
	 <th>ACTIVE</th>
	 <th>SALESPERSON</th>
	
	 </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
	     <td>".$row["ID"]."</td>
	     <td>".$row["PASSWORD"]."</td>
	     <td>".$row["ACTIVE"]."</td>
	     <td>".$row["SALESPERSON"]."</td>
	     
	     </tr>";
    }








    echo "</table>
	</div>";
} else {
    echo "0 results";
}
$conn->close();
?> 
<html>

<form id = "formCust" action = " formUser.php" method="post" autocomplete="on"/>
<input type = "submit" name = "FORM" value ="FORM " />
</form>

<body>

<table style="width:100%">
</table>

<style>

#formCust{
margin-left: 47%;
}

	

</style>

</body>
</html>
