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

$query= "SELECT * FROM staff";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

?>
   
<!DOCTYPE html>
<html>
  <head>
    <title>Manage | Staff</title>
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
      <h1 align="center"><b>Welcome to - <a href="manage_staff.php"> Manage Staff</b></a></h1><br />

      <center>
        <a href='admin_dashboard.php'><input type="submit" name="back" style="margin-top:5px;" class="btn btn-danger" value="Back" /></a>
        <a href='add_staff.php'><input type="submit" name="back" style="margin-top:5px;" class="btn btn-success" value="Add Staff" /></a>
      </center>
      <br /><br />
<?php
    echo"<div class='container'>"; 
    echo"<table class='table table-stripped table-bordered '>";
  echo "<tr align='center'>";
    echo "<th>Sr.no</th>";
    echo "<th>Department Name</th>";
    echo "<th>Staff Name</th>";
    echo "<th>Staff Email</th>";
    echo "<th>Staff Mobile No</th>";
    echo "<th>Staff Address</th>";
    echo "<th>Update Staff</th>";
    echo "<th>Delete Staff</th>";
  echo"</tr>";

  
     
      $i=0;
  while ($retrive = mysqli_fetch_array($result)) 
  {
       $dept_name=$retrive['dept_name'];
       $staff_name=$retrive['staff_name'];
       $staff_email=$retrive['email'];
       $staff_mono=$retrive['mob_no'];
       $staff_addr=$retrive['address'];


    echo "<tr align='center'>";
    echo "<th>".$i=$i+1;"</th>";
    echo "<th>$dept_name</th>";
    echo "<th>$staff_name</th>";
    echo "<th>$staff_email</th>";
    echo "<th>$staff_mono</th>";
    echo "<th>$staff_addr</th>";
    echo "<th><a href='update_staff.php?upd=$dept_name'<button class='btn btn-success'>Update Staff</button></th>";
    echo "<th><a href='delete_staff.php?del=$dept_name'<button class='btn btn-danger'>Delete Staff</button></th>";
  
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
