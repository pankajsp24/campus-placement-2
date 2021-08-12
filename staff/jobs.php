<?php
 error_reporting(0);
require('includes/db_connect.php');
session_start();
if($_SESSION['dept_name']=='')
{
  header("location:staff_login.php");
}else
{
  echo " ";
}

  $dept_name=$_SESSION['dept_name'];

$query= "SELECT * FROM jobs";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));


?>
   
<!DOCTYPE html>
<html>
  <head>
    <title>Job | List</title>
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
      <h1 align="center"><b>Welcome to - <a href="jobs.php"> Job Vacancies</b></a></h1><br />

      <center>
        <a href='staff_dashboard.php'><input type="submit" name="back" style="margin-top:5px;" class="btn btn-danger" value="Back" /></a>
        
      </center>
      <br /><br />
<?php
    echo"<div class='container'>"; 
    echo"<table class='table table-stripped table-bordered '>";
  echo "<tr align='center'>";
    echo "<th>Sr.no</th>";
    echo "<th>Job Designation</th>";
    echo "<th>Company Name</th>";
    echo "<th>Job Post On</th>";
    echo "<th>Interview Date</th>";
    echo "<th>Stream</th>";
    echo "<th>Qualification</th>";
    echo "<th>Other requirement</th>";
    echo "<th>Sallary</th>";
    echo "<th>Location</th>";
   
  echo"</tr>";

      $i=0;
  while ($retrive = mysqli_fetch_array($result)) 
  {
    $id=$retrive['job_id'];
    $job_desg=$retrive['job_desg'];
    $company=$retrive['company_name'];
    $pdate=$retrive['post_date'];
    $idate=$retrive['interview_date'];
    $stream=$retrive['stream'];
    $qualification=$retrive['qualification'];
    $other_req=$retrive['other_req'];
    $sallary=$retrive['sal_package'];
    $place=$retrive['job_place'];
    
    echo "<tr align='center'>";
    echo "<th>".$i=$i+1;"</th>";
    echo "<th>$job_desg</th>";
    echo "<th>$company</th>";
    echo "<th>$pdate</th>";
    echo "<th>$idate</th>";
    echo "<th>$stream</th>";
    echo "<th>$qualification</th>";
    echo "<th>$other_req</th>";
    echo "<th>$sallary</th>";
    echo "<th>$place</th>";
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
