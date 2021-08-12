<?php
error_reporting(0);
require('includes/db_connect.php');
session_start();
if($_SESSION['PRN']=='')
{
  header("location:student_login.php");
}else
{
 
 $PRN=$_GET['PRN'];
 
if(isset($_POST['submit']))
{   
  // Assigning POST values to variables.
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mono=$_POST['mono'];
  $addr=$_POST['addr'];
  $adhar=$_POST['adhar'];
  $dob=$_POST['bdate'];
  $class=$_POST['class'];
  $exp=$_POST['experience'];
  $image=$_FILES['image']['name'];

    // CHECK FOR THE RECORD FROM TABLE
  $query=("UPDATE student_profile SET student_name='$name' ,PRN='$PRN',email='$email' ,mob_no='$mono' ,address='$addr' ,DOB='$dob' ,adhar='$adhar' ,class='$class' ,job_experience='$exp' ,image='$image' WHERE PRN='$PRN'");

     $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
     $count = mysqli_num_rows($result);

if ($count == 0)
{
  $query1="UPDATE students SET experience='$exp' WHERE PRN='$PRN'";
  $result = mysqli_query($connection, $query1) or die(mysqli_error($connection));
    echo "<script>alert('Student profile updated successfully.')
    window.location.href='my_profile.php?success'</script>";

}else{
     
    echo"<script>alert('Failed to update profile');</script>";
   
     }

}
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Update | Profile</title>
  <!-- Favicon -->
  <link rel="icon" href="images/favicon.ico">
  <meta  name="viewport" content="width=device-width, initial-scal=1">
  <style type="text/css">
    body{font-family: all; background-image: url(images/h.jpg); background-size: 100%;}
    input[type=string], input[type=password]{ width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box; border-radius: 25px; }
    button{background-color: #19B3D3; color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 100%; border-radius: 25px;}
    button:hover{opacity: 0.8;}
    .cancelbtn{ width: auto; padding: 10px 18px; background-color: #f44336 }
    .imgcontainer{text-align: center; margin: 0px 0 12px 0;}
    img.avtar{width: 40%; border-radius: 50%;}
    span.psw{float: right; padding-top: 16px;}
    @media screen and (max-width: 300px){span.psw{display: block; float: none;} .cancelbtn{width: 100%;}}
    .megacontainer{padding: 20px; background-color: #f1f1f1; width: 30%; height: 40%; border-radius: 24px; border: 2px solid #ffffff; margin-right: auto; margin-left: auto; opacity: 90%;}
  </style>
</head>
<body>
  <br>
<form action="" method="post" enctype="multipart/form-data">
<div class="megacontainer" style="padding-top: 0px">
  <div class="imgcontainer">
    
    <img src="images/index7.jpg" alt="" class="avtar">
    <center><h1>Update Profile</h1></center>
  </div>
<div class="form-group">
<label>Your Name :</label>
<input type="string" name="name" placeholder="Student Name" class="form-control" value="" required="">
</div>
<div class="form-group">
<label>Email Id :</label>
<input type="string" name="email" placeholder=" Email Id" class="form-control" value="">
</div>
<div class="form-group">
<label>Mobile No. :</label>
<input type="string" name="mono" placeholder=" Mobile No" class="form-control" value="" required="">
</div>
<div class="form-group">
<label>Address :</label>
<input type="string" name="addr" placeholder="Address" class="form-control" value="" required="">
</div>
<div class="form-group">
<label>Adhar No. :</label>
<input type="string" name="adhar" placeholder=" Adhar No" class="form-control" value="" required="">
</div><br>
<div class="form-group">
<label>Birth Date :</label>
<input type="date" name="bdate" placeholder="Birth Date" class="form-control" value="" required="">
</div><br>
<div class="form-group">
<label>Class :</label>
<input type="string" name="class" placeholder="Class" class="form-control" value="" required="">
</div>
<div class="form-group">
<label>Job Experience :</label>
<input type="string" name="experience" placeholder="experience" class="form-control" value="" required="">
</div>
<br>
<div class="form-group">
<label>Profile Image :</label>
<input type="file" name="image"  class="form-control" value="">
</div><br>
<button type="submit" name="submit">Update Profile</button>

<center><p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>| <i class="fa fa-heart-o" aria-hidden="true"></i> Developed By: Poojashree Yadav & Pankaj Sabale | All rights reserved. 
     </p></center>
  </div>
  <br>
</div>  
</form>

</body>
</html>