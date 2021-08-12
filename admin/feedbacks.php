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

$query= "SELECT * FROM feedbacks";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

?>
   
<!DOCTYPE html>
<html>
  <head>
    <title>Manage | Feedbacks</title>
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
      <h1 align="center"><b>Welcome to - <a href="feedbacks.php"> Feedbacks</b></a></h1><br />

      <center>
        <a href='admin_dashboard.php'><input type="submit" name="back" style="margin-top:5px;" class="btn btn-danger" value="Back" /></a>
      </center>
      <br /><br />
<?php
    echo"<div class='container'>"; 
    echo"<table class='table table-stripped table-bordered '>";
  echo "<tr align='center'>";
    echo "<th>Sr.no</th>";
    echo "<th>Student Name</th>";
    echo "<th>Email Id</th>";
    echo "<th>Mobile No</th>";
    echo "<th>Subject</th>";
    echo "<th>Feedback/Message</th>";
    echo "<th>Delete Feedback</th>";
  echo"</tr>";
     
      $i=0;
  while ($retrive = mysqli_fetch_array($result)) 
  {
       $name=$retrive['student_name'];
       $email=$retrive['email'];
       $mono=$retrive['mob_no'];
       $subject=$retrive['subject'];
       $msg=$retrive['message'];
       

    echo "<tr align='center'>";
    echo "<th>".$i=$i+1;"</th>";
    echo "<th>$name</th>";
    echo "<th>$email</th>";
    echo "<th>$mono</th>";
    echo "<th>$subject</th>";
    echo "<th>$msg</th>";
    echo "<th><a href='delete_feedback.php?del=$name'<button class='btn btn-danger'>Remove Feedback</button></th>";
  
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
