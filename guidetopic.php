<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ARMPMS </title>

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
 
 $data22=mysqli_query($conn,"SELECT * FROM tbl_teachteg where email='$getid'");
 $res5=mysqli_fetch_array($data22);
			$k=$res5['teachid'];
    
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
       $sql2 = mysqli_query($conn,"select * from tbl_teachteg where email='$getid'");
    
    while ($row2 = mysqli_fetch_array($sql2)) 
    {
    
    
    ?>
       
       
        <div class="info">
          <a href="#" class="d-block" style="margin-top: -12px"><?php  echo $row2['name']." ".$row2['lname'];}?></a>
         <a href="#" style="color: #239db1; font-size: 15px"><i class="fa fa-circle text-primary" style="font-size: 13px;"></i>Faculty</a>
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">CHECK PROJECT TOPICS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
      <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

<form name="form1" method="post" action="">


<label>SELECT STUDENT NAME</label>
 <select name="select1" class="form-control">
		<?php
		if(isset($s))
		{
		?>
		<option value="<?php echo $s;?>"><?php echo $s;?></option>
		<?php
		}
		?>
		<option>Select Student</option>
		<?php
			$data=mysqli_query($conn,"SELECT * FROM tbl_studreg where tid='$k'");// use session and find current guide
			while($res=mysqli_fetch_array($data))
			{
				
			?>
			<option value="<?php echo $res[2];?>"><?php echo $res[2];?></option>
			
			<?php
			
			}
			?>
		
          </select>
		  <br>
    <br>
&nbsp;&nbsp;&nbsp;<input class="btn btn-outline-success" type="submit" name="Submit" value="Submit">

</br>
</br>
<?php
if(isset($_POST['Submit']))
 {

	 $s=$_POST['select1'];
	

 ?>
<table  class="table table-bordered table-striped" width="1281" border="1">
    <tr> 
      <td width="218" height="38"><div align="center">First Name</div></td>
      <td width="261">Last Name</td>
      
      <td width="264">Batch</td>
	  <td width="264">Project Topic</td>
	  
	  <td width="264">Action</td>
      </tr>
 
      <?php
	  
	 
	$st=mysqli_query($conn,"select * from tbl_studreg where name='$s'");
	while($res=mysqli_fetch_array($st))
	{
		$st1=mysqli_query($conn,"select * from tbl_topic where stid='$res[0]'");
		$row2=mysqli_fetch_array($st1)
	?>
    <tr> 
      <td width="218" height="70"><?php echo $res[2];?></td>
      
      <td width="264"><?php echo $res[3];?></td>
	  
	  	  <td width="264"><?php echo $res[5];?></td>
		  <td width="264"><?php if(empty($row2[0])) echo 'NO Topic Entered By This Student '; else echo $row2[1];?></td>
		  <td width="249">&nbsp;<?php if(empty($row2[1])) echo 'Pending';elseif($row2[3]=='1') echo 'TOPIC APPROVED';elseif($row2[3]=='2') echo 'TOPIC REJECTED';else echo "<a href='guideapprove.php?id=$res[0]'>APPROVE</a>&nbsp&nbsp&nbsp<a href='guidereject.php?id=$res[0]'>REJECT</a> ";?></td>

	
    </tr>
    <?php
	}
	?>
  </table>
  <?php
 }
 ?>

</br>

 
</form>

</body>
</html>
