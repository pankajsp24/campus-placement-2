<?php
 error_reporting(0);
session_start();
if($_SESSION['admin_name']=='')
{
   header("location:admin_login.php");
}else
{
  echo"";
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin | Dashboard</title>
    <!-- Favicon -->
  <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/style.css">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
      $(document).ready(function(){
        $('#icon').click(function(){
          $('ul').toggleClass('active');
        });
      });
    </script>
      <style type="text/css">
      section{
                background: url(images/bg.jpg) no-repeat;
                background-size: cover;
                height: calc(100vh - 80px);
              }
    </style>
  </head>
  <body>
    <nav>
        <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
  <div class="sidebar">

      <header><b>Admin</b></header>
      <a href="admin_dashboard.php" class="active">
        <i class="fas fa-desktop"></i>
        <span>Dashboard</span>
      </a>
      
      <a href="manage_job_applications.php">
        <i class="fa fa-table"></i>
        <span>Applications</span>
      </a>
      
      <a href="manage_job.php">
        <i class="fas fa-sliders-h"></i>
        <span>Jobs</span>
      </a>
      
      <a href="results.php">
        <i class="fas fa-poll"></i>
        <span>Results</span>
      </a>


      <a href="manage_staff.php">
        <i class="fas fa-chalkboard-teacher"></i>
        <span>Staff</span>
      </a>
      <a href="students.php">
        <i class="fas fa-user-graduate"></i>
        <span>Students</span>
      </a>

      <a href="feedbacks.php">
        <i class="far fa-envelope"></i>
        <span>Feedbacks</span>
      </a>
      <a href="logout.php">
        <i class="fas fa-sign-out-alt"></i>
        <span>Logout</span>
     </a>
      
  </div>
    <label class="logo">Admin|Dashboard</label>
      <ul>
        <li ><a href="results.php">Results</a></li>
        <li ><a href="add_job.php">Add Job</a></li>
        <li ><a href="change_password.php">Change password</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    <label id="icon"><i class="fas fa-bars"></i></label>
  </nav>
                
  <section> 
  </section>
  
 <footer>
 <div class="copywrite-area">
<center><p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>| <i class="fa fa-heart-o" aria-hidden="true"></i> Developed By: Poojashree Yadav & Pankaj Sabale | All rights reserved. 
     </p></center>
</div></footer>
</body>
</html>
