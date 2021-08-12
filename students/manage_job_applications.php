<?php
 error_reporting(0);
require('includes/db_connect.php');
session_start();
if($_SESSION['PRN']=='')
{
  header("location:student_login.php");
}else
{
  echo " ";
}

  $PRN=$_SESSION['PRN'];

$query= "SELECT * FROM job_applications WHERE PRN ='$PRN'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));


?>
   
<!DOCTYPE html>
<html>
  <head>
    <title>Manage | Job Apllications</title>
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
      <h1 align="center"><b>Welcome to - <a href="manage_job_applications.php">Manage Job Applications</b></a></h1><br />

      <center>
        <a href='student_dashboard.php'><input type="submit" name="back" style="margin-top:5px;" class="btn btn-danger" value="Back" /></a>
        <a href='job_vacancies.php'><input type="submit" name="back" style="margin-top:5px;" class="btn btn-success" value="Apply Job" /></a>
      </center>
      <br /><br />
<?php
    echo"<div class='container'>"; 
    echo"<table class='table table-stripped table-bordered '>";
  echo "<tr align='center'>";
    echo "<th>Sr.no</th>";
    echo "<th>Job Designation</th>";
    echo "<th>Company Name</th>";
    echo "<th>Interview Date</th>";
    echo "<th>Student Name</th>";
    echo "<th>Student Email</th>";
    echo "<th>Student Mobile No</th>";
    echo "<th>CV/Resume</th>";
    echo "<th>Cancle Job Application</th>";
    
  echo"</tr>";

  
     
      $i=0;
  while ($retrive = mysqli_fetch_array($result)) 
  {
    $id=$retrive['job_appl_id'];
    $job_desg=$retrive['job_desg'];
    $company=$retrive['company_name'];
    $interview_date=$retrive['interview_date'];
    $student_name=$retrive['student_name'];
    $email=$retrive['email'];
    $mono=$retrive['mob_no'];
    $CV=$retrive['CV'];
    
    echo "<tr align='center'>";
    echo "<th>".$i=$i+1;"</th>";
    echo "<th>$job_desg</th>";
    echo "<th>$company</th>";
    echo "<th>$interview_date</th>";
    echo "<th>$student_name</th>";
    echo "<th>$email</th>";
    echo "<th>$mono</th>";
    echo "<th>$CV</th>";
    
    echo "<th><a href='cancle_job_application.php?del=$id'<button class='btn btn-danger'>Cancle Job Application</button></th>";
   
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
