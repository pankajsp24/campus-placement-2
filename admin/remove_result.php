<?php
error_reporting(0);
require('includes/db_connect.php');
session_start();
if($_SESSION['admin_name']=='')
{
  header("location:admin_login.php");
}else
{ 
	$id=$_GET['id'];
	$query="DELETE FROM results WHERE result_id='$id'";
	$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
	$count = mysqli_fetch_row($result);
	if($count==0)
		{
		  echo "<script>alert('Result removed successfully.')
		  window.location.href='results.php?success'</script>";
		   
		}
		else
		{
			echo"<script>alert('Something error')
			window.location.href='results.php?fail'</script>";
		}
}
?>