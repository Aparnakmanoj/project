<?php

include "../connect.php";

 $getid=$_SESSION['username'];
//echo "select * from tbl_teachteg where email='$getid' and costatus=1";
$sql2 = mysqli_query($conn,"select * from tbl_teachteg where email='$getid' and costatus=1");
if($getid!='')
{
  
?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Project Management System </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    
    
  <script>
function phoneValidate()
{


  var phone=document.getElementById('phone').value;
  if(phone.length>10)
  {
    alert("Please Enter 10 digit Mobile no");
  }
  else if(phone.length<10)
  {
    alert("Please Enter 10 digit Mobile no");
  }
}

  </script>
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    
    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   <a href="" class="brand-link">
      <img src="../images/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ARMPMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
   <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          </div>
       <?php
    
    while ($row2 = mysqli_fetch_array($sql2)) 
    {
    
    
    ?>
        <div class="info">
          <a href="#" class="d-block" style="margin-top: -12px"><?php  echo $row2['name']." ".$row2['lname'];}?></a>
         <a href="#" style="color: #239db1; font-size: 15px"><i class="fa fa-circle text-primary" style="font-size: 13px;"></i>Coordinator </a>
        </div>

      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="studentd.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Add 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="addstud.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Add Students
              </p>
            </a>
          </li>
    
             <li class="nav-item">
            <a href="team1.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Guide Assignment
              </p>
            </a>
          </li>
           <li class="nav-item">
           <a href="view.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                View Students
              </p>
            </a>
          </li>
            <li class="nav-item">
                 <a href="slotdetails.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Staff Slot Details
              </p>
            </a>
          </li>
             <li class="nav-item">
                 <a href="assign_students.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Panel Assigment
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="payment.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Payment Details
              </p>
            </a>
          </li>
             <li class="nav-item">
            <a href="viewmarks.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Marklist Approval
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="notification.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Updates
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="noti.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                View Updates
              </p>
            </a>
          </li>
          
           <li class="nav-item">
            <a href="../logout.php" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Students</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Students</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
      </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
       

            <div class="card">
              <div class="card-header">
            

      <?php


if(isset($_POST['submit']))
{
$a=$_POST['name'];
$b=$_POST['lname'];
$c=$_POST['email'];
$d=$_POST['batch'];
$e=$_POST['phone'];
$f=$_POST['year'];


$password=$a."@123";

$sql = mysqli_query($conn, "INSERT INTO `tbl_login`( `username`, `password`, `utype`, `status`) VALUES ('$c','$password','3','1')");
$q=mysqli_query($conn,"select * from tbl_login where username='$c'");
$data=mysqli_fetch_array($q);
$loginid=$data['loginid'];

$qs=mysqli_query($conn,"INSERT INTO `tbl_studreg`(`loginid`, `name`, `lname`, `email`, `batch`, `phoneno`, `yer`, `status`, `tid`,`gid`) VALUES ('$loginid','$a','$b','$c','$d','$e','$f','0','NIL','NIL')");
echo'<script>alert("Record Inserted");window.location.href="addstud.php";</script>';
    
}
?>

<html>
    <form action="" method="post" enctype="multipart/form-data">
  
<table>
<tr><td>FirstName</td><td><input type="text" name="name" required=""></td></tr>
<tr><td>LastName</td><td><input type="text" name="lname" required=""></td></tr>
<tr><td>Email</td><td><input type="email" name="email" required=""></td></tr>
<tr><td>Batch</td><td><select name="batch" required="">

<option>SELECT</option>
<option value="A">A</option>
<option value="B">B</option>
</select></td></tr>
<tr><td>Phoneno</td><td><input type="number" id="phone" onchange="phoneValidate()" name="phone" required=""></td></tr>
<tr><td>Joining Year</td><td><input type="number" name="year" required=""></td></tr>

</table>





        
<input type="submit" value="Submit"  class="btn btn-primary" name="submit">
</form>
</html>
                  
                  <?php
                  }
    else
{
    header("Location:login.php");    
}