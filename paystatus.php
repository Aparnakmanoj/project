<?php
  include "../connect.php";
 // $getid=$_SESSION['uname'];
 $getid=$_SESSION['username'];

if($getid!='')
{
  

$id=$_GET['id'];
if(isset($_POST['Submit']))
{
  $m=$_POST['t2'];
  $q=mysqli_query($conn,"select * from tbl_topic where ptid='$id'");
  $n=mysqli_num_rows($q);
  if($n>=1)
  {
    echo'<script>alert("Already Send the Reply")</script>';
  }
  else{
  $qc=mysqli_query($conn,"update tbl_topic set reply='$m' where ptid='$id'");
  $qc1=mysqli_query($conn,"update tbl_mark set pstatus='1' where ptid='$id'");
  echo'<script>alert("Payment reply Send");window.location.href="payment.php"</script>';
}
}



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
    
    
    <?php


 $getid=$_SESSION['username'];

$sql2 = mysqli_query($conn,"select * from tbl_teachteg where email='$getid' and costatus=1");
if($getid!='')
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
                Add Students
              </p>
            </a>
          </li>
<!--          <li class="nav-item">
            <a href="addstud.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Add Students
              </p>
            </a>
          </li>-->
             <li class="nav-item">
            <a href="team.php" class="nav-link">
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
                Panel Assignment
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Notifications</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Noficatons</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
       

            <div class="card">
              <div class="card-header">
                 
                
                            
              <!-- /.card-header -->
                            

































<body>
<form name="form1" method="post" action="">
  <div class="modal-content">
                            <div class="modal-header">
                              
                             
                               
   <center>
      <p>&nbsp;</p>
        <div class="card card-primary">
                              <div class="card-body">
                                <div class="row">
                                   
                                  <div class="form-group">
      
      <table width="54%" border="0">
        <tr> 
            <h4 class="modal-title">SEND A MESSAGE</h4>
          
        
		<tr> 
          <td>Message</td><td height="28"><textarea name="t2" type="text" id="t2" row="100" cols="100" class="form-control"></textarea></td>
        </tr>
          
                               <div class="form-group">
                                  
        <tr> 
            <center>
          <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="Submit" value="Submit"></td>
            </center>
        </tr>
      </table>
	
    <div align="justify"></div>
  </div>
                                      
          

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": [""]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>                            
                                      
                                      
                                      
</form>
</body>
                                <?php
}
    }
    else
{
    header("Location:login.php");    
}
    ?>