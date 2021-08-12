<?php
error_reporting(0);
require('includes/db_connect.php');
session_start();
if($_SESSION['dept_name']=='')
{
  header("location:staff_login.php");
}else
{ 
	$PRN=$_GET['del'];
	$query="DELETE FROM students WHERE PRN = '$PRN'";
	$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
	$count = mysqli_fetch_row($result);
	if($count==0)
		{
		  echo "<script>alert('Student deleted successfully.')
		  window.location.href='manage_students.php?success'</script>";
		   
		}
		else
		{
			echo"<script>alert('Something error')
			window.location.href='manage_students.php?fail'</script>";
		}
}
?>