<?php  
 error_reporting(0);
 require('includes/db_connect.php');
session_start();
if($_SESSION['admin_name']=='')
{
 header("location:admin_login.php");
}else
{
   $id=$_GET['upd'];
    if (isset($_POST['submit']))
    {
        
    // Assigning POST values to variables.
    $job_desg=$_POST['job_desg'];
    $company=$_POST['company_name'];
    $idate=$_POST['interview_date'];
    $stream=$_POST['stream'];
    $qualification=$_POST['qualification'];
    $other_req=$_POST['other_req'];
    $sallary=$_POST['sal_package'];
    $place=$_POST['job_place'];
    // CHECK FOR THE RECORD FROM TABLE
      $query =("UPDATE jobs SET job_desg='$job_desg',company_name='$company',interview_date='$idate',stream='$stream',qualification='$qualification',other_req='$other_req',sal_package='$sallary',job_place='$place' WHERE job_id='$id'");
      
     $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
     $count = mysqli_num_rows($result);

if ($count == 0)
{
    echo "<script>alert('Job details updated successfully.')
    window.location.href='manage_job.php?success'</script>";

}else{
     
    echo"<script>alert('Failed to update job details');</script>";
   
     }

}
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Update | Job</title>
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
<form action="" method="post" enctype="multipart/form-data">
<div class="megacontainer" style="padding-top: 40px">
  <div class="imgcontainer">
    <img src="images/index.jpg" alt="" class="avtar">
    <center><h1>Update job</h1></center>
  </div>
  <div class="form-group">
<label>Job Designation :</label>
<input type="string" name="job_desg" placeholder="Job Designation" class="form-control" value="" required="">
</div>
<div class="form-group">
<label>Company Name :</label>
<input type="string" name="company_name" placeholder="Company Name" class="form-control" value="" required="">
</div>
<div class="form-group">
<label>Interview Date :</label>
<input type="date" name="interview_date" class="form-control" value="" required="">
</div><br>
<div class="form-group">
<label>Job For Stream :</label>
<input type="string" name="stream" placeholder="Job For Stream" class="form-control" value="" required="">
</div>
<div class="form-group">
<label>Requird Qualification :</label>
<input type="string" name="qualification" placeholder="Requird Qualification" class="form-control" value="" required="">
</div>
<div class="form-group">
<label>Other Requirement :</label>
<input type="string" name="other_req" placeholder="Other Requirement" class="form-control" value="" required="">
</div>
<div class="form-group">
<label>Sallary Package :</label>
<input type="string" name="sal_package" placeholder="Sallary Package" class="form-control" value="" required="">
</div>
<div class="form-group">
<label>Job Location :</label>
<input type="string" name="job_place" placeholder="Job Location" class="form-control" value="" required="">
</div>

    
      <button type="submit" name="submit">Update Job</button>
      <center><h2><b><a href="admin_dashboard.php">Back</a></b></h2></center>

      <center><p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>| <i class="fa fa-heart-o" aria-hidden="true"></i> Developed By: Poojashree Yadav & Pankaj Sabale | All rights reserved. 
     </p></center>
  </div>
  <br>
</div>  
</form>
</body>
</html>
