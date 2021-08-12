<?php
 error_reporting(0);
require('includes/db_connect.php');
session_start();
if($_SESSION['dept_name']=='')
{
  header("location:staff_login.php");
}else
{
  echo"";
}

  $dept_name=$_SESSION['dept_name'];

$query= "SELECT * FROM results WHERE dept_name = '$dept_name'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

?>
   
<!DOCTYPE html>
<html>
  <head>
    <title>Results</title>
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
      <h1 align="center"><b>Welcome to - <a href="results.php">Results</b></a></h1><br />

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
    echo "<th>Interview Date</th>";
    echo "<th>Student Name</th>";
    echo "<th>Student PRN</th>";
    echo "<th>Class</th>";
    echo "<th>Remark</th>";
  echo"</tr>";

  
     
      $i=0;
  while ($retrive = mysqli_fetch_array($result)) 
  {
      $result_id=$retrive['result_id'];
       $job_desg=$retrive['job_desg'];
       $company_name=$retrive['company_name'];
       $interview_date=$retrive['interview_date'];
       $student_name=$retrive['student_name'];
       $PRN=$retrive['PRN'];
       $class=$retrive['class'];
       $remark=$retrive['remarks'];

    echo "<tr align='center'>";
    echo "<th>".$i=$i+1;"</th>";
    echo "<th>$job_desg</th>";
    echo "<th>$company_name</th>";
    echo "<th>$interview_date</th>";
    echo "<th>$student_name</th>";
    echo "<th>$PRN</th>";
    echo "<th>$class</th>";
    echo "<th>$remark</th>";
  
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
