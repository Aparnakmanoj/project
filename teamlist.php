<?php
  include "../connect.php";
$getid=$_SESSION['username'];


if($getid!=0)
{
  


 
  
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ARMPMS</title>

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
    
    
    
    <?php



$sql2 = mysqli_query($conn,"select * from tbl_teachteg where email='$getid'");
 
      
if($getid!=0)
{
  
?>   
    
    
    
    
    
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
     $r=$row2['teachid']
  
    
    ?>
       
       
        <div class="info">
          <a href="#" class="d-block" style="margin-top: -12px"><?php  echo $row2['name']." ".$row2['lname'];}?></a>
         <a href="#" style="color: #239db1; font-size: 15px"><i class="fa fa-circle text-primary" style="font-size: 13px;"></i>Faculty</a>
        </div>

      </div>

      <!-- Sidebar Menu -->
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
            <a href="teamlist.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Team List
              </p>
            </a>
          </li>
             <li class="nav-item">
            <a href="guidetopic.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Project Topic
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="notview.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Notifications
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="viewupdocument.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Verify Project Document
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="submark.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Mark Submission
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          
      </div><!-- /.container-fluid -->
    </section>
    
           <div class="card-body">
             <table id="example1" class="table table-bordered table-striped">
                  <thead>
             
             <div class="form-group">
                <?php
                 $qu="select * from tbl_studreg where tid= $r "; 
                 
                   if($qu!=0){
                 
                 
                 ?>
                  <h1> STUDENT LIST</h1>
                  <div class="card card-body">
                  <table class="table table-hover">
                   <thead>
                      <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Batch</th>
                      <th scope="col">Phone</th>
                     
                      </tr>
                    </thead>
                  <tbody>
                  <?php
                      
                       $res= mysqli_query($conn,$qu);
                       if($res)
                     {
                        while($row1=mysqli_fetch_assoc($res))
                          {
                           
                            $name=$row1['name'];
                            $email=$row1['email'];
                            $batch=$row1['batch'];
                            $phone=$row1['phoneno'];
                          echo ' <tr>
                          
                          <td>'.$name.'</td>

                          <td>'.$email.'</td>
                          <td>'.$batch.'</td>
                          <td>'.$phone.'</td> 
                           <td>
                               
                            </td>
                           </tr>';
                         }
                      }
                    ?>
                    </div>
                    </div>
</body>
</html>
               </table>
        </div>
             <?php }else{ ?>
        <center> <h3 style="color:red">No Team is selected</h3> </center>
       
         <?php } ?>   
               
      

  <?php
}
else
{
    header("Location:login.php");    
}
               
}
               ?>