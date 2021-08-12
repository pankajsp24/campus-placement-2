<?php
error_reporting(0);
require('includes/db_connect.php');
session_start();
if($_SESSION['admin_name']=='')
{
  header("location:admin_login.php");
}else
{ 
	$dept_name=$_GET['del'];

	$query="DELETE FROM staff WHERE dept_name='$dept_name'";
	$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
	$count = mysqli_fetch_row($result);
	if($count==0)
		{
		  echo "<script>alert('Staff deleted successfully.')
		  window.location.href='manage_staff.php?success'</script>";
		}
		else
		{
			echo"<script>alert('Something error')
			window.location.href='manage_staff.php?fail'</script>";
		}
}
?>