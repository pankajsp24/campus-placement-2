<?php
 error_reporting(0);
require('includes/db_connect.php');
session_start();
if($_SESSION['admin_name']=='')
{
 header("location:admin_login.php");
}else
{
  echo"";
}
$admin_name=$_SESSION['admin_name'];
$PRN=$_GET['profile'];

$query="SELECT * FROM student_profile WHERE PRN='$PRN'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$retrive = mysqli_fetch_array($result);
//print_r($retrive);
$name=$retrive['student_name'];
$PRN=$retrive['PRN'];
$email=$retrive['email'];
$mono=$retrive['mob_no'];
$address=$retrive['address'];
$DOB=$retrive['DOB'];
$class=$retrive['class'];
$experience=$retrive['job_experience'];
$dept_name=$retrive['dept_name'];
$image=$retrive['image'];

?>
<title>Student | Profile</title>
<!-- Favicon -->
  <link rel="icon" href="images/favicon.ico">
<style type="text/css">
	#body-bg
	{
		background-color:#efefef; 
	}

</style>
</head>
<body id='body-bg'>
<div class="container" style="padding-top: 10px; background-color:#ddeedd; margin-top: 20px; margin-bottom: 20px;width: 1333px;height: 600px;">
	<h1 align="center"><b>Welcome to - <a href="view_profile.php">Student Profile</b></a></h1><br />

    <center><img src='images/profile_pics/<?php echo $image ?>' style='width: 200px;'></center>
<h2><center>
	<?php
       echo "Student Name : ".$name ."<br>";
       echo "PRN : ".$PRN ."<br>";
       echo "Email Id : ".$email ."<br>";
       echo "Contact No : ".$mono ."<br>";
       echo "DOB : ".$DOB ."<br>";
       echo "Address : ".$address ."<br>";
       echo "Class : ".$class ."<br>";
       echo "Department Name : ".$dept_name ."<br>";     
       echo "Job Experience : ".$experience ."<br>";

   ?></h2></center>

</center>   
</div>
</div>
<center><p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>| <i class="fa fa-heart-o" aria-hidden="true"></i> Developed By: Poojashree Yadav & Pankaj Sabale | All rights reserved. 
     </p></center>
</body>
</html>