<<!DOCTYPE html>
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

include "../connect.php";

 $getid=$_SESSION['username'];

$sql2 = mysqli_query($conn,"select * from tbl_teachteg where email='$getid' and costatus=1");
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
    
             <li class="nav-item">
            <a href="team.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Team Generation
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
           <h1>View Marklist</h1>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<?php

 //session_start();
 
 

?>
<body>
<center>
<form name="form1" method="post" action="">
<center>
<?php
$data=mysqli_query($conn,"select * from tbl_mark where mstatus='0'");
$r=mysqli_fetch_array($data);
if(empty($r[0]) )
{
	?> <H2><?PHP echo 'No new list available';?></H2>
    <?PHP
}
else
{
	

?>

<table class="table table-bordered table-striped" border="1">
<th> STUDENT NAME</th>
<th>GUIDE NAME</th>
<th>PROJECT TOPIC</th>
<th>MARK1</th>
<th>MARK2</th><th>MARK3</th><th>MARK4</th><th>TOTAL</th>
<th>ACTION</th>
<?php
	  
	 $date=date("Y-m-d");
	$st=mysqli_query($conn,"select * from tbl_mark where mstatus='0'");
	while($res=mysqli_fetch_array($st))
	{ 
     $data=mysqli_query($conn,"select * from tbl_studreg where studid='$res[1]'");
	 $row=mysqli_fetch_array($data);
	  $data1=mysqli_query($conn,"select * from tbl_teachteg where teachid='$res[2]'");
	 $row1=mysqli_fetch_array($data1);
	  $data2=mysqli_query($conn,"select * from tbl_topic where ptid='$res[3]'");
	 $row2=mysqli_fetch_array($data2) ;
	 $total=$res[4]+$res[5]+$res[6]+$res[7];
	
	?>
    <tr> 
      <td width="218" height="70"><?php echo $row[2];?></td>
      <td width="261">&nbsp;<?php echo $row1[2];?></td>
      <td width="255">&nbsp; <?php echo $row2[1];?></td>
      <td width="264"><?php echo $res[4];?></td>
	  <td width="264"><?php echo $res[5];?></td>
	  <td width="264"><?php echo $res[6];?></td>
	  <td width="264"><?php echo $res[7];?></td>
	  <td width="264"><?php echo $total;?></td>
	  <td class="btn btn-default"><?php  echo "<a href='approvemark.php?id=$res[1]'>APPROVE</a>&nbsp&nbsp&nbsp<a href='rejectmark.php?id=$res[1]'>REJECT</a> ";?></td>
	  
    </tr>
    <?php
	}
	?>
</table>
</br>
	</br></br>
	</br>

<?php
}
?>
</form>

</body>
</html>
<?php
}
    else
{
    header("Location:login.php");    
}
      ?>