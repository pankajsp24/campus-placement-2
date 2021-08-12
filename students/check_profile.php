<?php
 error_reporting(0);
require('includes/db_connect.php');
session_start();
if($_SESSION['PRN']=='')
{
  header("location:student_login.php");
}else
{

  $PRN=$_SESSION['PRN'];
}

$query= "SELECT PRN FROM student_profile";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count=mysqli_num_rows($result);
if($count==0)
{
  header("location:create_profile.php");
}else
{

 while ($retrive = mysqli_fetch_array($result)) 
  {
    $prn=$retrive['PRN'];
     
     if($PRN==$prn)
     {
     	    header("location:my_profile.php");
        
     	
     }else
     {
     	echo" <script>alert('You not create profile Yet.')
         window.location.href='create_profile.php?fail'</script>";

     }
  
  }
}//else
?>
