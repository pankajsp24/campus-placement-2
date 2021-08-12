<?php  
 error_reporting(0);
 require('includes/db_connect.php');
session_start();
if($_SESSION['admin_name']=='')
{
 header("location:admin_login.php");
}else
{
  $PRN=$_GET['sel'];
  
    $query1 =("SELECT * FROM job_applications WHERE PRN='$PRN'");
    $result1 = mysqli_query($connection, $query1) or die(mysqli_error($connection));
    $retrive = mysqli_fetch_array($result1);
    $job_appl_id = $retrive['job_appl_id'];
    $job_desg=$retrive['job_desg'];
    $company=$retrive['company_name'];
    $interview_date=$retrive['interview_date'];
    $student_name=$retrive['student_name'];
    $PRN=$retrive['PRN'];
    $dept_name=$retrive['dept_name'];
    $class=$retrive['class'];

  $remarks="Selected for the interview";
     
     
    // CHECK FOR THE RECORD FROM TABLE
      $query =("insert into results(job_appl_id,job_desg,company_name,interview_date,student_name,PRN,dept_name,class,remarks) values ('$job_appl_id','$job_desg','$company','$interview_date','$student_name','$PRN','$dept_name','$class','$remarks')");
     
     $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
     $count = mysqli_num_rows($result);

        if ($count == 0)
        {
           $query="DELETE FROM job_applications WHERE job_appl_id='$job_appl_id'";
          $result = mysqli_query($connection,$query) or die(mysqli_error($connection));
            echo "<script>alert('Student selected for the interview')
            window.location.href='manage_job_applications.php?success'</script>";

        }else{
             
            echo"<script>alert('Something error')
            window.location.href='manage_job_applications.php?fail'</script>";
           
             }


}
?>
