
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
		</li>
                    <li class="nav-item active active">

                      <a class="nav-link" href="http://localhost/displayCust_13207.php">Customers</a>
                    </li>
                                        
		<li class="nav-item active">
                      <a class="nav-link" href="http://localhost/displaySaleperson.php">Salespersons</a>
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


#formCust{
margin-left: 40%;
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

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$e = $_POST['e'];
}


if(isset($_POST['UPDATE'])){




	//form ki vlaues are saved in a,b,c....
	//search kar k prev values are saved in a1,b1,c1...
	
	$updateQ = mysqli_query($conn,"SELECT * FROM PRODUCT WHERE  PRODUCT_ID= $a");
	$upQ = $updateQ->fetch_assoc();
	$a1 = $upQ['PRODUCT_ID'];
	$b1 = $upQ['BRAND'];
	$c1 = $upQ['TYPE'];	
	$d1 = $upQ['SHAPE'];
	$e1 = $upQ['SALES_PRICE'];
	
	echo "old values:  $a1 	$b1 	$c1	 $d1 	$e1<br>";
	echo "new values to be updated:  $a 	$b 	$c	 $d 	$e<br>";
	
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
	
	echo "RESULT SHOULD BE :  $a1 	$b1 	$c1	 $d1 	$e1 <br>";
	 
	mysqli_query($conn,"UPDATE PRODUCT SET BRAND='$b1 ',TYPE='$c1',SHAPE='$d1',SALES_PRICE='$e1' WHERE PRODUCT_ID=$a ");






}


if(isset($_POST['DELETE'])){


if($a != ""){
	mysqli_query($conn,"DELETE FROM PRODUCT WHERE PRODUCT_ID='$a'");

	echo "DELETED";
}

if($b != ""){
	mysqli_query($conn,"DELETE FROM PRODUCT WHERE BRAND='$b'");

	echo "DELETED";
}

if($c != ""){
	mysqli_query($conn,"DELETE FROM PRODUCT WHERE TYPE='$c'");

	echo "DELETED";
}

if($d != ""){
	mysqli_query($conn,"DELETE FROM PRODUCT WHERE SHAPE='$d'");

	echo "DELETED";
}

if($e != ""){
	mysqli_query($conn,"DELETE FROM PRODUCT WHERE SALES_PRICE='$e'");

	echo "DELETED";
}


}



if(isset($_POST['INSERT'])){
mysqli_query($conn,"INSERT INTO PRODUCT VALUES ('$a','$b','$c','$d','$e')");
echo " INSERTED";
}




function pr($result2){

	if ($result2->num_rows > 0) {
          echo "<div class='container'> 
         <table align='center'>
		
		
	 <tr>
	 <th>PRODUCT ID</th>
	 <th>BRAND</th>
	 <th>TYPE</th>
	 <th>SHAPE</th>
	 <th>SALES PRCIE</th>
	 </tr>";
    // output data of each row
     	while($row = $result2->fetch_assoc()){
	
        echo "<tr>
	     <td>".$row["PRODUCT_ID"]."</td>
	     <td>".$row["BRAND"]."</td>
	     <td>".$row["TYPE"]."</td>
	     <td>".$row["SHAPE"]."</td>
	     <td>".$row["SALES_PRICE"]."</td>
	     </tr>";}
    
    echo "</table>
	</div>";
} else {
    echo "0 results";
}



}






if(isset($_POST['SEARCH'])){


if($a != ""){
$searchQ = mysqli_query($conn,"SELECT * FROM PRODUCT WHERE PRODUCT_ID = $a");

pr($searchQ);

echo "Searched from PRODUCT_ID";
echo "<br>";

}


else if ($b != ""){
$searchQ = mysqli_query($conn,"SELECT * FROM PRODUCT WHERE BRAND = $b");
pr($searchQ);

echo "Searched from BRAND<br>";
echo "<br>";

}



else if ($c != ""){
$searchQ = mysqli_query($conn,"SELECT * FROM PRODUCT WHERE TYPE = $c");
pr($searchQ);

echo "Searched from TYPE<br>";echo "<br>";

}


else if ($d != ""){
$searchQ = mysqli_query($conn,"SELECT * FROM PRODUCT WHERE SHAPE = $d");
pr($searchQ);

echo "Searched from SHAPE<br>";echo "<br>";

}



else if ($e != ""){
$searchQ = mysqli_query($conn,"SELECT * FROM PRODUCT WHERE SALES_PRICE = $e");
pr($searchQ);

echo "Searched from SALES PRICE<br>";echo "<br>";

}





}










$sql = "SELECT * FROM PRODUCT";


$result = $conn->query($sql);





if ($result->num_rows > 0) {
    echo "<div class='container'> 
<table align='center'>
		
	 <tr>
	 <th>PRODUCT ID</th>
	 <th>BRAND</th>
	 <th>TYPE</th>
	 <th>SHAPE</th>
	 <th>SALES PRCIE</th>
	 </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
	     <td>".$row["PRODUCT_ID"]."</td>
	     <td>".$row["BRAND"]."</td>
	     <td>".$row["TYPE"]."</td>
	     <td>".$row["SHAPE"]."</td>
	     <td>".$row["SALES_PRICE"]."</td>
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


<form id = "formCust" action = " formProduct.php" method="post" autocomplete="on"/>
<input type = "submit" name = "FORM" value ="FORM " />
</form>
 <div class="form-popup" id="myForm">
 
</html>
