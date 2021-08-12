<?php
error_reporting(0);
require('includes/db_connect.php');
session_start();
if($_SESSION['admin_name']=='')
{
  header("location:admin_login.php");
}else
{ 
	$id=$_GET['del'];

	$query="DELETE FROM jobs WHERE job_id='$id'";
	$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
	$count = mysqli_fetch_row($result);
	if($count==0)
		{
		  echo "<script>alert('Job deleted successfully.')
		  window.location.href='manage_job.php?success'</script>";
		   
		}
		else
		{
			echo"<script>alert('Something error')
			window.location.href='manage_job.php?fail'</script>";
		}
}
?>