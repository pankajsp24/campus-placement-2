<?php  
error_reporting(0);
require('includes/db_connect.php');
session_start();
if($_SESSION['PRN']=='')
{
 header("location:student_login.php");
}else
{
  echo"";
}
$PRN=$_SESSION['PRN'];

if(isset($_POST['submit'])){
 
// Assigning POST values to variables.
  $student_name=$_POST['name'];
  $email=$_POST['email'];
  $mono=$_POST['mono'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];
  
  $query=("insert into feedbacks(student_name,email,mob_no,subject,message) values ('$student_name','$email','$mono','$subject','$message')");
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_fetch_row($result);
if($count==0)
{
  echo "<script>alert('Feedback sent successfully.')
  window.location.href='student_dashboard.php?success'</script>";
   
}
else{
	echo"<script>alert('Something Error.')
  window.location.href='feedback.php?fail'</script>";
}
}
// mysql_close($connection); 

?>


<!DOCTYPE html>
<html>
<head>
  <title>Send | Feedback</title>
  <!-- Favicon -->
  <link rel="icon" href="images/favicon.ico">
  <meta  name="viewport" content="width=device-width, initial-scal=1">
  <style type="text/css">
    body{font-family: all; background-image: url(images/h.jpg); background-size: 100%;}
    input[type=string], input[type=password]{ width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box; border-radius: 25px; }
    button{background-color: #19B3D3; color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 100%; border-radius: 25px;}
    button:hover{opacity: 0.8;}
    .cancelbtn{ width: auto; padding: 10px 18px; background-color: #f44336 }
    .imgcontainer{string-align: center; margin: 0px 0 12px 0;}
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
    <center><img src="images/index7.jpg" alt="" class="avtar"></center>
    <center><h1>Give Feedback Us</h1></center>
  </div>
<div class="form-group">
<label><b>Your Name :</b></label>
<input type="string" name="name" placeholder="Your Name" class="form-control" value="" required="">
</div>
<div class="form-group">
<label><b>Your Email :</b></label>
<input type="string" name="email" class="form-control"  placeholder="Your Email" required="">
</div>
<div class="form-group">
<label><b>Your Mobile No :</b></label>
<input type="string" name="mono" class="form-control"  placeholder="Your Mobile No" required="">
</div>
<div class="form-group">
<label><b>Your Subject :</b></label>
<input type="string" name="subject"class="form-control"  placeholder="Your Subject" required="">

</div>
<div class="form-group">
<label><b>Your Comments :</b></label>
<br><center>
<textarea name="message" class="form-control"  cols="30" rows="10" placeholder="Your Comments..." required=""></textarea></div></center>

<button type="submit" name="submit">SEND MESSAGE</button>

<center><p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>| <i class="fa fa-heart-o" aria-hidden="true"></i> Developed By: Poojashree Yadav & Pankaj Sabale | All rights reserved. 
     </p></center>
  </div>
  <br>
</div>  
</form>

</body>
</html>
