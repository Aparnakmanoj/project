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

  <?php include 'admin_package.php'; ?>
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
            <a href="dashboard.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
              
          </li>
        
          <li class="nav-item">
            <a href="faculty.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                FACULTY LIST
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            </li>
            
              <li class="nav-item">
                <a href="approveview.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>STUDENT APPROVAL</p>
                </a>
              </li>
            
            <li class="nav-item">
                <a href="batchview.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>BATCH VIEW</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="teachreg.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FACULTY REGISTRATION</p>
                </a>
              </li>
            
            <li class="nav-item">
                <a href="currentco.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CURRENT COORDINATOR</p>
                </a>
              </li>
             <li class="nav-item">
                <a href="coassign.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>COORDINATOR ASSIGNMENT</p>
                </a>
              </li>
        <li class="nav-item">
                <a href="Addnoti.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> ADD NOTIFICATIONS</p>
                </a>
              </li>
            
            
              <li class="nav-item">
                <a href="notiview.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NOTIFICATION</p>
                </a>
              </li>
        
          <li class="nav-item">
            <a href="profile.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                PROFILE
          
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../logout.php" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                LOGOUT
              </p>
            </a>
          </li>

        </ul>
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
<h1>BATCH VIEW</h1>
<br>
    <br>
<label>SELECT BATCH</label>
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
			$data=mysqli_query($conn,"SELECT  distinct(batch)  FROM tbl_studreg");
			while($res=mysqli_fetch_array($data))
			{
			?>
			<option value="<?php echo $res[0];?>"><?php echo $res[0];?></option>
			
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
    <h3>  Batch : <?php echo $su; ?></h3>
	 <table  class="table table-bordered table-striped"width="1281" border="1">
    <tr> 
      <td width="218" height="38"><div align="center">STUDENT NAME</div></td>
        <td width="261"><div align="center">GUIDE </div></td>
        <td width="255"><div align="center">PROJECT TOPIC</div></td>
      
      </tr>
 
      <?php
  
	 $Q=mysqli_query($conn,"select * from tbl_studreg where batch='$su' and status='1'");
	 while($res1=mysqli_fetch_array($Q))
	 {
		 //echo $res1[9];
		 $Q1=mysqli_query($conn,"select name from tbl_teachteg where teachid='$res1[9]'");
		 $res2=mysqli_fetch_array($Q1);
		 
		 $ere=mysqli_query($conn,"select ptopic from tbl_topic where stid='$res1[0]'");
          $res78=mysqli_fetch_array($ere);
         ?>
  <tr> 
      <td width="218" height="70"><div align="center"><?php  
 echo $res1[2];?></div></td>
      
      <td width="264"><div align="center"><?php if(empty($res2[0])) echo 'Guide is Not Assigned '; else echo $res2[0];?></div></td>
	  
      <td width="264"><div align="center"><?php if(empty($res78[0])) echo 'Topic is Not Approved '; else echo $res78[0];?></div></td>
</div> </td>

	 
    </tr>
	<?php
	 }
 }
 

?>
  

</br>

 
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