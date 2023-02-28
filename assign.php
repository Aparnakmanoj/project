<?php
  include "../connect.php";
 $getid=$_SESSION['username'];
$id=$_GET['id'];

//if($getid!=0)
//{
  
if(isset($_POST['Submit']))
{

$a=$_POST['staffid'];
$qcx=mysqli_query($conn,"update tbl_studreg set tid='$a' where studid='$id'");
echo'<script>alert("Staff allotted");window.location.href="assign_students.php";</script>';


}

 
  
 
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
                 <a href="assign_students.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Assign Students
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
           
          </div>
          
      </div><!-- /.container-fluid -->
    </section>
    
             
             <div class="form-group">
                 <form method="POST">
<center>
             <table width="54%" border="0">
        <tr> 
            <h4 class="modal-title">ASSIGN Faculty</h4>
          <td>FACULTYNAME</td><td height="28"></TD>

        <td><select name="staffid">
            <option>SELECT</option>
<?php


$q=mysqli_query($conn,"SELECT tbl_slot.Tid,tbl_teachteg.teachid,tbl_teachteg.name FROM tbl_slot INNER JOIN tbl_teachteg ON tbl_slot.Tid= tbl_teachteg.teachid where status1='Accepted'");
while($d=mysqli_fetch_array($q))
{

    
$ds=$d['teachid'];
$qd=mysqli_query($conn,"select * from tbl_teachteg where teachid='$ds'");
$da=mysqli_fetch_array($qd);

?>
<option value="<?php echo $da['teachid'];?>"><?php echo $d['name'];?></option>


        
<?php


}

?></select>
    </td>
        </tr>
        
		<tr> 
          
          
                               <div class="form-group">
                                  
        <tr> 
            <center>
          <td><input type="submit" class="btn btn-primary" name="Submit" value="Submit"></td>
            </center>
        </tr>
      </table>
    </center>

</FORM><br><br><br>
<center>
     <h1>Faculty Available Time Sheets</h1>
<table id="example1" class="table table-bordered table-striped">
                  <thead>
<th>Faculty Name</th>


<th>Available Date</th>
<th>Slot_From</th>
<th>Slot_To</th>
<th>Slot_Type</th>



    </thead>

<?php
$q=mysqli_query($conn,"select * from tbl_slot where status1='Accepted'");
while($d=mysqli_fetch_array($q))
{
$user=$d['Tid'];
$gd=mysqli_query($conn,"select * from tbl_teachteg where teachid='$user'");
$datas=mysqli_fetch_array($gd);
?>
<tr>
<td><?php echo $datas['name'];?></td>
<td><?php echo $d['avail_date'];?></td>
<td><?php echo $d['Slot_from'];?></td>
<td><?php echo $d['Slot_to'];?></td>
<td><?php echo $d['Slot_type'];?></td>
<td></td>





</tr>
  <?php

}
?>








               
                    </div>
                    </div>
</body>
</html>
               </table>
</center>
        </div>
            
               
      

  <?php
}else
{
   header("Location:login.php");    
}
               
//}
               ?>