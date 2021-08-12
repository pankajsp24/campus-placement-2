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

$query= "SELECT * FROM students order by experience DESC";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

?>
   
<!DOCTYPE html>
<html>
  <head>
    <title>Manage | Students</title>
    <!-- Favicon -->
  <link rel="icon" href="images/favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
    <br />
    <div class="container">
      <br />
      <br />
      <br />
      <h1 align="center"><b>Welcome to - <a href="students.php">All Students</b></a></h1><br />

      <center>
        <a href='admin_dashboard.php'><input type="submit" name="back" style="margin-top:5px;" class="btn btn-danger" value="Back" /></a>
      </center>
      <br /><br />
<?php
    echo"<div class='container'>"; 
    echo"<table class='table table-stripped table-bordered '>";
  echo "<tr align='center'>";
    echo "<th>Sr.no</th>";
    echo "<th>Student PRN</th>";
    echo "<th>Department Name</th>";
    echo "<th>Experience</th>";
    echo "<th>view Profile</th>";
  echo"</tr>";

  
     
      $i=0;
  while ($retrive = mysqli_fetch_array($result)) 
  {
       $PRN=$retrive['PRN'];
       $dept_name=$retrive['dept_name'];
       $exp=$retrive['experience'];

    echo "<tr align='center'>";
    echo "<th>".$i=$i+1;"</th>";
    echo "<th>$PRN</th>";
    echo "<th>$dept_name</th>";
    echo "<th>$exp</th>";
    echo "<th><a href='view_profile.php?profile=$PRN'<button class='btn btn-success'>View Profile</button></th>";
  
  echo"</tr>";
    
   }
   echo"</div>";
   echo"</table>"; 
?>
</div>
<footer>
    <div class="copywrite-area">
      <center><p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>| <i class="fa fa-heart-o" aria-hidden="true"></i> Developed By: Poojashree Yadav & Pankaj Sabale | All rights reserved. 
     </p></center>
    </div>
    </footer>   
</body>
</html>
