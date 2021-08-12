<?php
error_reporting(0);
require('includes/db_connect.php');

 if(isset($_POST['submit']))
  {
     $name = $_POST['student_name'];
     $email = $_POST['email'];
     $mono = $_POST['mono'];
     $sub = $_POST['subject'];
     $msg = $_POST['msg'];
    // CHECK FOR THE RECORD FROM TABLE
      $query =("insert into feedbacks(student_name,email,mob_no,subject,message) values ('$name','$email','$mono','$sub','$msg')");
     
     $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
     $count = mysqli_num_rows($result);

		if ($count == 0)
		{
		    echo "<script>alert('Message sent succssefully.');</script>";

		}else{
		     
		    echo"<script>alert('Failed to send message.');</script>";
		   
		     }
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Campus Placement | Contact</title>
	<!-- Favicon -->
  <link rel="icon" href="images/favicon.ico">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="contact.php">
					<img src="images/Campusplacements_logo1.png" alt=""></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li><a href="index.html">Home</a></li>
					<li class="dropdown">
           				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
            			<ul class="dropdown-menu">
              				<li><a href="admin/admin_login.php">Admin Login</a></li>
              				<li><a href="staff/staff_login.php">Staff Login</a></li>
          				    <li><a href="students/student_login.php">Student Login</a></li>
            			</ul>
          			</li>
					<li><a href="about.html">About</a></li>
					<li><a href="notifications.html">Notifications</a></li>
					<li><a href="videos.html">Videos</a></li>
					<li class="active"><a href="contact.php">Contact</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

		<header id="head" class="secondary">
            <div class="container">
                    <h1>Contact Us</h1>
                    <p>By filling this form you can contact us!</p>
                </div>
    </header>


	<!-- container -->
	<form action="" method="POST">
	<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h3 class="section-title">Contact Us :</h3>	
						<form class="form-light mt-20" role="form">
							<div class="form-group">
								<label>Name</label>
								<input type="text" name="student_name" class="form-control" placeholder="Your name">
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Email</label>
										<input type="email" name="email" class="form-control" placeholder="Email address">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Phone</label>
										<input type="text" name="mono"class="form-control" placeholder="Phone number">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Subject</label>
								<input type="text" name="subject" class="form-control" placeholder="Subject">
							</div>
							<div class="form-group">
								<label>Message</label>
								<textarea class="form-control" name="msg" id="message" placeholder="Write you message here..." style="height:100px;"></textarea>
							</div>
							<button type="submit" name="submit" class="btn btn-two">Send message</button><p><br/></p>
						</form>
					</div>
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6">
								<h3 class="section-title">Address :</h3>
								<div class="contact-info">
									
									<p>Modern College Ganeshkhind Pune-16</p>
									
									<h5>Email :</h5>
									<p>moderngk@gmail.com</p>
									
									<h5>Phone :</h5>
									<p>+91-021-352-5647</p>
								</div>
							</div> 
						</div> 						
					</div>
				</div>
			</div>
		</form>
	<!-- /container -->

	

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="js/google-map.js"></script>
<br> 
 <div class="copywrite-area">
<center><p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> | <i class="fa fa-heart-o" aria-hidden="true"></i> Developed By: Poojashree Yadav & Pankaj Sabale | All rights reserved. </p></center>
</div>

</body>
</html>
