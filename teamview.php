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
        <div class="info">
          <a href="#" class="d-block" style="margin-top: -12px">HOD</a>
         <a href="#" style="color: #239db1; font-size: 15px"><i class="fa fa-circle text-primary" style="font-size: 13px;"></i>ADMIN</a>
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

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          
      </div>
    
    

<form name="form1" method="post" action="">
<h1>TEAM VIEW</h1>
<br>
    <br>
<label>SELECT FACULTY</label>
 <select class="form-control" name="select1">
		<?php
		if(isset($s))
		{
		?>
		<option value="<?php echo $s;?>"><?php echo $s;?></option>
		<?php
    
		}
		?>
		<option>select </option>
		<?php
			$data=mysqli_query($conn,"SELECT * FROM tbl_teachteg");
			while($res=mysqli_fetch_array($data))
			{
			?>
			<option value="<?php echo $res['name'];?>"><?php echo $res['name'];?></option>
			
			<?php
			
			}
			?>
		
          </select>
		  <br>
    <br>
<input  class="btn btn-outline-success" type="submit" name="Submit" value="Submit">

<br>
<?php
if(isset($_POST['Submit']))
 {
     $su=$_POST['select1'];
    
	 ?>
         <br>
    <br>
    <h3>  Faculty : <?php echo $su; ?></h3>
	 <table  class="table table-bordered table-striped"width="1281" border="1">
    <tr> 
      <td width="218" height="38"><div align="center">STUDENT NAME</div></td>
        
        
        <td width="218" height="38"><div align="center">EMAIL</div></td>
        <td width="261"><div align="center">BATCH </div></td>
        <td width="255"><div align="center">PHONE NUMBER</div></td>
        <td width="255"><div align="center">PROJECT TOPIC</div></td>
      
      </tr>
 
      <?php
   
	 $Q=mysqli_query($conn,"select * from tbl_teachteg where name='$su'");
	 while($res1=mysqli_fetch_array($Q))
	 {
		 $mn= $res1['teachid'];
     }
		 $Q1=mysqli_query($conn,"select   * from tbl_studreg where tid='$mn'");
		while($res2=mysqli_fetch_array($Q1)) 
        {
            
            $ere=mysqli_query($conn,"select ptopic from tbl_topic where stid='$res2[0]'");
          $res78=mysqli_fetch_array($ere);
		 ?>
		 
  <tr> 
      <td width="218" height="70"><div align="center"><?php echo $res2[2];?></div></td>
      
      <td width="264"><div align="center"><?php echo $res2[4];?></div></td>
      <td width="264"><div align="center"><?php echo $res2[5];?></div></td>
	  <td width="264"><div align="center"><?php echo $res2[6];?></div></td>
      <td width="264"><div align="center"><?php if(empty($res78[0])) echo 'Topic is Not Approved '; else echo $res78[0];?></div> </td>

	 
    </tr>
	<?php
	 }
 
}
}
?>
  

</br>

 
</form>

</body>
</html>
