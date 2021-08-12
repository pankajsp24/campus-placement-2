<?php
error_reporting(0);
require('includes/db_connect.php');
session_start();
if($_SESSION['PRN']=='')
{
  header("location:student_login.php");
}else
{ 
	$id=$_GET['del'];

	$query="DELETE FROM job_applications WHERE job_appl_id='$id'";
	$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
	$count = mysqli_fetch_row($result);
	if($count==0)
		{
		  echo "<script>alert('job_application deleted successfully.')
		  window.location.href='manage_job_applications.php?success'</script>";
		   
		}
		else
		{
			echo"<script>alert('Something error')
			window.location.href='manage_job_applications.php?fail'</script>";
		}
}
?>