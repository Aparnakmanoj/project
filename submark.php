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
 
  $sql2 = mysqli_query($conn,"select * from tbl_teachteg where email='$getid'");
    
    while ($row2 = mysqli_fetch_array($sql2)) 
    {
        $mr=$row2['teachid'];
    
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
      <img src="dist/img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ARMPMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
   <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          </div>
        
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
            <h1 class="m-0">MARKS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">MARKS</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
       </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
                
       <?php 
    
 if(isset($_POST['Submit1']))
		  {
			  $s=$_POST['select1'];
		  }
			 
			 
		  
		  ?>
<body>

<form name="form1" method="post" action="">

<label>SELECT STUDENT NAME</label>
 <select name="select1">
		<?php
		if(isset($s))
		{
		?>
		<option value="<?php echo $s;?>"><?php echo $s;?></option>
		<?php
		}
		?>
		<option>select STUDENT</option>
		<?php

			$data=mysqli_query($conn,"SELECT * FROM tbl_studreg where tid='$mr' ");// use session and find current guide
			while($res=mysqli_fetch_array($data))
			{
				
			?>
			<option value="<?php echo $res[2];?>"><?php echo $res[2];?></option>
			
			<?php
			
			}
			?>
		
          </select>
		  <input name="Submit1" type="submit"  value="MARK">
		  <?php
		  if(isset($_POST['Submit1']))
		  {
			 // $s=$_POST['select1'];
			 // echo $sname;
			 $res=mysqli_query($conn,"select studid from tbl_studreg where name='$s'");
			 $row=mysqli_fetch_array($res);
			 
			 $res1=mysqli_query($conn,"select * from tbl_topic where stid='$row[0]'");
			 $row1=mysqli_fetch_array($res1);
			 ?></br>
			 </br></br></br><label>PROJECT TOPIC:&nbsp&nbsp</label>
			 <?php 
			 if($row1[1] == null)
			 {
				 echo 'No Projects Available';
				 
			 }
			 else{
			 echo $row1[1];
                 ?>
                 
      <br>
      <?php
			 $t=mysqli_query($conn,"select * from tbl_mark where stid='$row[0]'");
			 $y=mysqli_fetch_array($t);
			 if(!empty($y[0]))
			 {
				 echo 'Mark Already Entered';
				 
			 }
			 else
			 {
			 ?> 
			 
			 </br><label>Document Upload</label>
			 <input type="number" min=0 max=20 class="form-control" name="t1" required>
			 </br><label>Scrum 1</label>
			 <input type="number" min=0 max=20  class="form-control" name="t2" required>
			 </br><label>Scrum 2</label>
			 <input type="number" min=0 max=20  class="form-control" name="t3" required>
			 </br><label>Scrum 3</label>
			 <input type="number"min=0 max=40  class="form-control"  name="t4" required>
			 </br>
			  <input name="Submit2" type="submit"  value="SUBMIT MARK">
			  
		 <?php
		 
			 }
			 
		  }
		  }
		  if(isset($_POST['Submit2']))
			 {
				$s=$_POST['select1'];
			  
			   $mark1=$_POST['t1'];
			   $mark2=$_POST['t2'];
			   $mark3=$_POST['t3'];
			   $mark4=$_POST['t4'];
			   
			   $res=mysqli_query($conn,"select studid from tbl_studreg where name='$s'");
			 $row=mysqli_fetch_array($res);
			
			 $res1=mysqli_query($conn,"select * from tbl_topic where stid=$row[0]");
			 $row1=mysqli_fetch_array($res1);
			
			 $n=mysqli_query($conn,"insert into tbl_mark(stid,tid,ptid,m1,m2,m3,m4,mstatus) values('$row[0]','$mr','$row1[0]','$mark1','$mark2','$mark3','$mark4','0')");
			 echo "<script> alert('Mark Added'); window.location.href='submark.php';</script>";
			 }
		  
		  ?>
		  
		  
</form>

</body>
</html>
