<?php
error_reporting(0);
require('includes/db_connect.php');
$name=$_GET['del'];
$query="DELETE FROM feedbacks WHERE student_name='$name'";
$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
$count = mysqli_fetch_row($result);
if($count==0)
{
  echo "<script>alert('Feedback removed successfully.')
    window.location.href='feedbacks.php?success'</script>";
   
}
else{
	echo"<script>alert('Something error.')
  window.location.href='feedbacks.php?fail'</script>";
?>