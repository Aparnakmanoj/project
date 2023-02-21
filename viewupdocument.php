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
            <h1 class="m-0">VIEW PROJECT DOCUMENTS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">VIEW PROJECT DOCUMENTS</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
       </section>

<?php

    $getid=$_SESSION['username'];

$sql234 = mysqli_query($conn,"select * from tbl_teachteg where email='$getid'");
   while($row33=mysqli_fetch_array($sql234))
   {
       $id=$row33['teachid'];
}
if(isset($_POST['Submit3']))
	
	{
		$stname=$_POST['select'];
	}
	if(isset($_POST['Submit4']))
	
	{
		$stname=$_POST['select'];
		$stname1=$_POST['select2'];
	}
?>
<body>
<center>
<form action="" method="post" enctype="multipart/form-data">
<center>
<br><label> SELECT STUDENT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
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
	  
      
			$data=mysqli_query($conn,"select name from tbl_studreg where tid='$id'");//use session 
			while($res=mysqli_fetch_array($data))
			{
			?>
      <option value="<?php echo $res[0];?>"><?php echo $res[0];?></option>
      <?php
			}
			?>
    </select>
    <input type="submit"  class="btn btn-info btn-sm" name="Submit3" value="confirm">
    </label>
  </p>
  
    <label>SELECT DOCUMENT TYPE</label>

 
   
    <select name="select2" size="1">
	<?php
			if(isset($stname1))
		{
	 ?>
		<option value="<?php echo $stname1;?>"><?php echo $stname1;?></option>
	<?php
		}
		?>
	<option>SELECT DOCUMENT </option>
	<?php
	if(isset($_POST["Submit3"]))
	{
	
	$stname=$_POST['select'];
	
	
	$drec=mysqli_query($conn,"select distinct(dtype),imid from image where studid=(select studid from tbl_studreg where name='$stname') and rstatus='0'");
	while($ress=mysqli_fetch_array($drec))
			{
			?>
      <option value="<?php echo $ress[0];?>"><?php echo $ress[0];?></option>
      <?php
			}
			}
			?>
	
               
    </select></br></br></br>
	
<input type="submit" class="btn btn-info btn-sm" name="Submit4" value="CONFIRM">
<?php
if(isset($_POST['Submit4']))
{ 
 $select=$_POST['select2'];
 $k='SELECT DOCUMENT';
 if($select==$k)
 {
	 echo "NO RECORDS";
	 
 }
 else
 {
	?>
	</br></br>
	<?php
	if(isset($_POST['Submit4']))
	{
		$sn=$_POST['select'];
		$dt=$_POST['select2'];
		$stf=mysqli_query($conn,"SELECT studid FROM tbl_studreg where name='$sn'");
	    $sd=mysqli_fetch_array($stf);
		$h=mysqli_query($conn,"SELECT imid FROM image where studid='$sd[0]' and dtype='$dt'");
	   $p=mysqli_fetch_array($h);
	
	
	}
	?>
	<button><a href="pdf.php?id=<?php echo $p[0];?>">View DOCUMENT</a></button>
	</br></br></br>
	<center>SUBMIT REMARKS</u></br></br>
	<label>COMMENTS</label>
	<textarea name="t3" type="text" size="100"></textarea>
	</br></br>
	<input type="submit"  class="btn btn-info btn-sm" name="submit5">
	<?php
 }
}
if(isset($_POST['submit5']))
{
	$com=$_POST['t3'];
	$stname=$_POST['select'];
	$stidf=mysqli_query($conn,"SELECT studid FROM tbl_studreg where name='$stname'");
	$stid=mysqli_fetch_array($stidf);
	//echo $stid[0];
	$pdidf=mysqli_query($conn,"SELECT imid FROM image where studid='$stid[0]'");
	$pdid=mysqli_fetch_array($pdidf);
	
	//echo $com;
	$in=mysqli_query($conn,"insert into tbl_remark(pdid,stid,tid,rcontent) values('$pdid[0]','$stid[0]','23','$com')");//USe session for find tid
    $up=mysqli_query($conn,"update image set rstatus='1' where imid='$pdid[0]'");	
    echo "<script> alert('Remark Added'); window.location.href='viewupdocument.php';</script>";
}
?>
</form>

</body>
</html>
