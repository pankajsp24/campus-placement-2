<?php
error_reporting(0);
require('includes/db_connect.php');
session_start();
if($_SESSION['PRN']=='')
{
  header("location:student_login.php");
}else
{
 

if(isset($_POST['submit']))
{ 
   $job_id = $_GET['apl'];
   $PRN = $_SESSION['PRN'];
  
     $query= "SELECT job_desg,company_name,interview_date FROM jobs WHERE job_id='$job_id'"; 
     $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
     while ($row = mysqli_fetch_array($result)) 
            {
              
              $job_desg = $row['job_desg'];
              $company = $row['company_name'];
              $interview_date = $row['interview_date'];
            }


  $query1= "SELECT * FROM student_profile WHERE PRN = $PRN";
  $result1 = mysqli_query($connection, $query1) or die(mysqli_error($connection));
     if(mysqli_num_rows($result1) > 0)
      {   
        while ($row1 = mysqli_fetch_array($result1)) 
        {

          $student_name = $row1['student_name'];
          $email = $row1['email'];
          $mono = $row1['mob_no'];
          $addr = $row1['address'];
          $DOB = $row1['DOB'];
          $class = $row1['class'];
          $experience = $row1['job_experience'];
          $dept_name = $row1['dept_name'];

        }
      }

//asign cv
      $CV=$_FILES['CV']['name'];

      // CHECK FOR THE RECORD FROM TABLE
    $query2="INSERT INTO job_applications(job_desg,company_name,interview_date,student_name,PRN,email,mob_no,address,DOB,Class,job_experience,dept_name,CV) values ('$job_desg','$company','$interview_date','$student_name','$PRN','$email','$mono','$addr','$DOB','$class','$experience','$dept_name','$CV')";

    $result2= mysqli_query($connection, $query2) or die(mysqli_error($connection));

    $count = mysqli_fetch_row($result2);
 
    if($count==0)
     {    
      
      echo" <script>alert('Job applied successfully.')
         window.location.href='job_vacancies.php?success'</script>";
      
     }else
     {
      echo" <script>alert('Something error')
      window.location.href='job_vacancies.php?fail'</script>";
     }


}//if end

} //else end 
  
// mysql_close($connection); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Apply | Job-Application</title>
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
    span.psw{float: right; padding-top: 16px;}
    @media screen and (max-width: 300px){span.psw{display: block; float: none;} .cancelbtn{width: 100%;}}
    .megacontainer{padding: 20px; background-color: #f1f1f1; width: 30%; height: 40%; border-radius: 24px; border: 2px solid #ffffff; margin-right: auto; margin-left: auto; opacity: 90%;}
  </style>
</head>
<body>
  <br>
<form action="" method="post" enctype="multipart/form-data">
<div class="megacontainer" style="padding-top: 40px">
  <div class="imgcontainer">
    
    <img src="images/index.jpg" alt="" class="avtar">
    <center><h1>Apply Job-Application</h1></center>
  </div>
<br>
<center><h2>Upload your Resume/CV here.</h2></center>

<div class="form-group">
<b><label>CV/Resume:</label></b>
<input type="file" name="CV"  class="form-control" value="">
</div><br>
<button type="submit" name="submit">Apply</button>

<center><p>Copyright &copy;<script>document.write(new Date().getFullYear());
</script>| <i class="fa fa-heart-o" aria-hidden="true"></i>
 Developed By: Poojashree Yadav & Pankaj Sabale| All rights reserved. 
     </p></center>
  </div>
  <br>
</div>  
</form>

</body>
</html>
