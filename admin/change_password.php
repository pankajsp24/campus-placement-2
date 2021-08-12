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
 if(isset($_POST['submit'])){
     //for match newPass and confirmPass
   if($_POST["newPassword"] !== $_POST["confirmPassword"]){
      echo" <script>alert('New password and confirmed password must be same!')
            window.location.href='change_password.php?fail'</script>";

   }else{
          //fetch pass
         $result = mysqli_query($connection,"SELECT * FROM admin WHERE admin_name ='" . $admin_name . "'") or die(mysqli_error($connection));
         $row = mysqli_fetch_array($result);

            if($_POST["currentPassword"] == $row["password"]){
              //update password
              $result = mysqli_query($connection,"UPDATE admin SET password = '" . $_POST["newPassword"] . "' WHERE admin_name ='" . $admin_name . "'");
             
                    echo" <script>alert('Password succssesfully updated!')
                    window.location.href='admin_dashboard.php?success'</script>";
          
            }else{
                  echo" <script>alert('Incorrect password!')
                  window.location.href='change_password.php?fail'</script>";
                 }
        }
}
  
//  mysql_close($connection); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Change | Password</title>
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
    <img src="images/index3.jpg" alt="" class="avtar">
    <center><h1>Change Password</h1></center>
  </div>
  <div class="container">
    <input type="Password" name="currentPassword" placeholder="Current Password" required="">
    <input type="Password" name="newPassword" placeholder="New Password" required="">
    <input type="Password" name="confirmPassword" placeholder=" Re-enter Password" required="">
      <button type="submit" name="submit">Change</button>
      <center><h2><b><a href="admin_dashboard.php">Back</a></b></h2></center>

      <center><p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>| <i class="fa fa-heart-o" aria-hidden="true"></i> Developed By: Poojashree Yadav & Pankaj Sabale | All rights reserved.
     </p></center>
  </div>
  <br>
</div>  
</form>
</body>
</html>
