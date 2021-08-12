<?php
require('includes/db_connect.php');
session_start();
if (isset($_POST['PRN']) and isset($_POST['password'])){
    
// Assigning POST values to variables.
$PRN = $_POST['PRN'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `students` WHERE PRN='$PRN' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1)
{  
  $_SESSION['PRN']=$PRN;
  
    echo" <script>alert('Login succssesfully.')
         window.location.href='student_dashboard.php?success'</script>";

}else{
     
      echo"<script>alert('Invalid Login Credentials')
      window.location.href='student_login.php?fail'</script>";
      
     }
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Student | Login</title>
	<!-- Favicon -->
  <link rel="icon" href="images/favicon.ico">
	<meta  name="viewport" content="width=device-width, initial-scal=1">
	<style type="text/css">
		body{font-family: all; background-image: url(images/oportunity1.jpg); background-size: 100%;}
		input[type=string], input[type=password]{ width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box; border-radius: 25px; }
		button{background-color: #19B3D3; color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 100%; border-radius: 25px;}
		button:hover{opacity: 0.8;}
		.cancelbtn{ width: auto; padding: 10px 18px; background-color: #f44336 }
		.imgcontainer{text-align: center; margin: 24px 0 12px 0;}
		img.avtar{width: 40%; border-radius: 50%;}
		.smallavt{width:10%; border-radius: 25%;background-color: white;}
		span.psw{float: right; padding-top: 16px;}
		h1{
			color: white;
		}
		@media screen and (max-width: 300px){span.psw{display: block; float: none;} .cancelbtn{width: 100%;}}
		.megacontainer{padding: 20px; background-color:rgba(255,255,255, 0.5); width: 30%; height: 40%; border-radius: 24px; border: 2px solid #ffffff; margin-right: auto; margin-left: auto; opacity: 90%;}
	</style>
</head>
<body>
	<br>
<form action="" method="post">
<div class="megacontainer" style="padding-top: 25px">
	<div class="imgcontainer">
		<img src="images/index.jpg" alt="" class="avtar">
		<center><h1>Student Login</h1></center>
	</div>
	<div class="container">
		
		<input type="string" name="PRN" placeholder="PRN No" required="">
		<input type="Password" name="password" placeholder="Password" required="">
	    <button type="submit" name="submit">Login</button>
      
      <center><p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>| <i class="fa fa-heart-o" aria-hidden="true"></i> Developed By: Poojashree Yadav & Pankaj Sabale | All rights reserved. 
     </p></center>
	</div>
	<br>
</div>	
</form>
</body>
</html>
