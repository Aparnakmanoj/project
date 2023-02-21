<?php
  include "../connect.php";
 // $getid=$_SESSION['uname'];
 
 
?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ARMPMS</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=-7eSns8llm-RMrRDsxHMEIf7RLOedtIl6ZakLhKnAVIi-rbZhzluH4rAXuSX_8wNGEWusUgzMC9IkFMaNASdxErVoYrB2Z8hTL1irKOppalmPhXlsdexC0odXcoEnuLC" charset="UTF-8">

    </script>
    <?php include 'admin_package.php'; ?>
  
  </head>
    <body class="hold-transition sidebar-mini">
      <div class="wrapper">
       <form method="POST" action="">
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
                <i class="fas fa-expand-arrows-alt"></i> </a>
              </li>
     
            </ul>
          </nav>
          <!-- /.navbar -->
          <!-- Main Sidebar Container -->
          <aside class="main-sidebar sidebar-dark-primary elevation-4">
           <!-- Brand Logo -->
            <a href="" class="brand-link">
           <img src="../images/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">ARMPMS</span></a>
            <!-- Sidebar -->
            <div class="sidebar">
              <!-- Sidebar user panel (optional) -->
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                 
                </div>
                <div class="info">
                  <a href="#" class="d-block" style="margin-top: -12px">HOD</a>
                  <a href="#" style="color: #239db1; font-size: 15px"><i class="fa fa-circle text-primary" style="font-size: 13px;">
                  </i> ADMIN</a>
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
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>COODINATOOR ASSIGNMENT</h1>
          </div>
         
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
     

              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                 
                </table><div class="form-group">
   <label for="name"> Faculty Name:</label>
   
        <select id="cassign" class="form-control"  name="cassign" placeholder="select">
             <option value=0>Select</option>
         <?php
            $q="select * from tbl_teachteg where costatus='0'";
             $result=mysqli_query($conn,$q);
  while($r=mysqli_fetch_array($result))
  {
  ?>
           
        <option value="<?php echo $r['name'];?>"> <?php echo $r['name'];?>
  </option>    
           
          <?php

  }?>
        </select>

                    <br>
                    <br>
                   

<p> <button type="submit"  name="btnsignup" class="btn btn-default" >Submit</button></p>

                     
                    <?php
     
     
               
  if(isset($_POST['btnsignup']))
  {
    $name=$_POST['cassign'];
   $sql4 = mysqli_query($conn,"SELECT * from tbl_teachteg where name='$name'");
   while ($row = mysqli_fetch_array($sql4))
    {
        $xu=$row['email'];
		?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          
      </div><!-- /.container-fluid -->
    </section>
    <center>
           <div class="card-body">
               
<table id="example1" class="table table-bordered table-striped" border="0">
	
	<thead>
                      <tr>
                     
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">phoneno</th>
                          <th scope="col">Designation</th>
                          <th scope="col">Department</th>
                 
                      </tr>
                    </thead>
					
<tr>
     <td ><?php echo $row[2];?></td>
      <td ><?php echo $row[4];?></td>
	  <td ><?php echo $row[7];?></td>
    <td ><?php echo $row[5];?></td>
    <td ><?php echo $row[6];?></td>
	  <td>
	 <button  type="button" class="btn btn-outline-success"><?php echo "<a href='coassign2.php?id=$row[0]'>SET PASSWORD AND USERNAME</a>";?></button>
	  </td>
	  </tr>
	  </table>
               </center>
	  <?php
    }
      
 
      ?>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Footer <a href="">ARMPMS</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Footer</b>
    </div>
  </footer>

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
</form>
</body>
</html>
<?php
  }
    ?>        