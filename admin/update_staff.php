<?php  
 error_reporting(0);
 require('includes/db_connect.php');
session_start();
if($_SESSION['admin_name']=='')
{
 header("location:admin_login.php");
}else
{
	$dept_name=$_GET['upd'];
    if (isset($_POST['submit']))
    {
    // Assigning POST values to variables.
      
      $staff_name = $_POST['staff_name'];
      $staff_email = $_POST['staff_email'];
      $staff_mono = $_POST['staff_mono'];
      $staff_addr = $_POST['staff_addr'];
      $password = $_POST['password'];
      $repass = $_POST['repass'];

  if($password!=$repass)
    {
    echo" <script>alert('Your passwords do not match.');</script>";
    }else
  {
    // CHECK FOR THE RECORD FROM TABLE
      $query =("UPDATE staff SET dept_name='$dept_name',staff_name='$staff_name',email='$staff_email',mob_no='$staff_mono',address='$staff_addr',password='$password' WHERE dept_name='$dept_name'");
     
     $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
     $count = mysqli_num_rows($result);

      if ($count == 0)
      {
          echo "<script>alert('Staff successfully updated.');</script>";
          
      }else{
           
          echo"<script>alert('Failed to update staff.');</script>";
          
           }
    }      

  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Update | Staff</title>
  <!-- Favicon -->
  <link rel="icon" href="images/favicon.ico">
  <meta  name="viewport" content="width=device-width, initial-scal=1">
  <style type="text/css">
    body{font-family: all; background-image: url(images/h.jpg); background-size: 100%;}
    input[type=string], input[type=password]{ width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box; border-radius: 25px; }
    button{background-color: #19B3D3; color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 100%; border-radius: 25px;}
    button:hover{opacity: 0.8;}
    .cancelbtn{ width: auto; padding: 10px 18px; background-color: #f44336 }
    .imgcontainer{text-align: center; margin: 24px 0 12px 0;}
    img.avtar{width: 40%; border-radius: 50%;}
    a{color:black}
    span.psw{float: right; padding-top: 16px;}
    @media screen and (max-width: 300px){span.psw{display: block; float: none;} .cancelbtn{width: 100%;}}
    .megacontainer{padding: 20px; background-color: #f1f1f1; width: 30%; height: 40%; border-radius: 24px; border: 2px solid #ffffff; margin-right: auto; margin-left: auto; opacity: 90%;}
  </style>
</head>
<body>
  <br>
<form action="" method="post">
<div class="megacontainer" style="padding-top: 40px">
  <div class="imgcontainer">
    <img src="images/index4.jpg" alt="" class="avtar">
    <center>
    	<h2><?php echo "Department Name : ".$dept_name; ?></h2>
    	<h1>Update Staff</h1>
    </center>
  </div>
  <div class="container">
    
    <input type="string" name="staff_name" placeholder="Staff Name" required="">
    <input type="string" name="staff_email" placeholder="Staff Email" required="">
    <input type="string" name="staff_mono" placeholder="Staff Contact No" required="">
    <input type="string" name="staff_addr" placeholder="Staff Address" required="">
    <input type="Password" name="password" placeholder=" Give Password" required="">
    <input type="Password" name="repass" placeholder=" Re-enter Password" required="">
      <button type="submit" name="submit">Update Staff</button>
      <center><h2><b><a href="manage_staff.php">Back</a></b></h2></center>

      <center><p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>| <i class="fa fa-heart-o" aria-hidden="true"></i> Developed By: Poojashree Yadav & Pankaj Sabale | All rights reserved. 
     </p></center>
  </div>
  <br>
</div>  
</form>
</body>
</html>
