<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome!</title>
    
</head>

<?php include('session.php'); ?>

<body>



        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">My Paint shop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="http://localhost/displayUser.php">Users<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="http://localhost/displaySaleperson.php">Salespersons</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="http://localhost/displayCust_13207.php">Customers</a>
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
   


   
</body>
<style>


body,html {

    height: 10%;
    background-image: url('abstract-art-artistic-459799.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    
}
form {
    width: % !important;
    margin: auto;
    text-align: left;
    padding: px !important;
    border: 1px solid #bbbbbb;
    border-radius: 5px;
}
.container{
    display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
  justify-content: space-between;
}
.btn{
    opacity: 0.5 !important;
}
</style>


</html>



