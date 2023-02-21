<html>
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
<div class="wrapper">
     
<?php

 include "../connect.php";
  $getid=$_SESSION['username'];

 
$sql25 = mysqli_query($conn,"select * from tbl_studreg where email='$getid'");
  while($res5=mysqli_fetch_array($sql25))
			{  
      $sid=$res5['studid'];
      
  
    ?>
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
        <div class="info">
           <a href="#" class="d-block" style="margin-top: -12px"><?php  echo $res5['name']." ".$res5['lname'];?></a>
         <a href="#" style="color: #239db1; font-size: 15px"><i class="fa fa-circle text-primary" style="font-size: 13px;"></i> Student</a>
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
            <a href="viewnotification.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Notifications
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="guide.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                 Team Guide
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="Topicsub.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Project Topic
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="projectstatus.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Project Status
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="vremark.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                View Remarks
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="viewresult.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                View Marks
              </p>
            </a>
          </li>
          <li class="nav-item">
         
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
      <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
 <?php
 if(isset($_POST['Submit']))
 {
	 $stname=$_POST['select'];
 }
 
 
?>
<body>
<center>
<form name="form1" method="post" action="">
<center><h1>VIEW REMARKS</h1>
</br><label> SELECT DOCUMENT</label>
 <select name="select" size="1">
	<?php
			if(isset($stname))
		{
	 ?>
		<option value="<?php echo $stname;?>"><?php echo $stname;?></option>
	<?php
		}
		?>
      <option>SELECT </option>
	  <?php
	  
      
			$data=mysqli_query($conn,"select distinct(dtype) from image where studid='$sid'"); // use session and find student id
			while($res=mysqli_fetch_array($data))
			{
			?>
      <option value="<?php echo $res[0];?>"><?php echo $res[0];?></option>
      <?php
			}
			?>
    </select>
    <input type="submit" name="Submit" value="confirm">

<?php
if(isset($_POST['Submit']))
 {
	$dtype=$_POST['select'];
	//echo $dtype;
	$data2=mysqli_query($conn,"select * from image where studid='$sid' and dtype='$dtype' and rstatus='1'"); // use session and find student id
	$r2=mysqli_fetch_array($data2);
	if(empty($r2[0]))
	{
		?>
		</br></br>
		<?php
		echo 'your document not verifed  by guide';
	}
	else
	{
		$data3=mysqli_query($conn,"select * from tbl_remark where stid='$sid' and pdid='$r2[0]'"); // use session and find student id
	$r3=mysqli_fetch_array($data3);
	?></br></br>
	<?php
	echo $r3[4];
	}}
 }
?>
</br>

 
</form>

</body>
</html>
