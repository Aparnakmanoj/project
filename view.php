<?php
include "../connect.php";

$q="select count(*) as c from tbl_login where status = 0 ";


$result = mysqli_query($conn,$q);
//echo $result;
$row = mysqli_fetch_array($result);
$count = $row['c'];

?><!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ARMPMS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=yenS3mscfV0vsFqrm4en2iFGM1WVbv-92ah3nC2oQztB8v5qEZU2fL9NG5FDqG8ki40tr0DNi2dOMvcZfxES6b74dDxe7RuWmCKUjLWzCYU" charset="UTF-8"></script>
<?php include 'admin_package.php'; ?>
</head>
<body class="hold-transition sidebar-mini">
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
    <img src="dist/img/avatar.png" class="img-square elevation-3" style="width:30px;  border-radius:10%;" alt="User Image">        </div>
        <div class="info">
          <a href="#" class="d-block" style="margin-top: -12px">HOD</a>
         <a href="#" style="color: #239db1; font-size: 15px"><i class="fa fa-circle text-primary" style="font-size: 13px;"></i> ADMIN</a>
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
    <!-- /.container-fluid -->
    </section>
    



    <script language="javascript" type="text/javascript">
    window.history.forward();
  </script>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
</style>
    <link rel="stylesheet" href="new/style.css">
    <link rel="stylesheet" href="new/style2.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
   <div class="m-5">
    
        
        <?php
        echo "<h1>welcome,Admin</h1>";
        ?>
       
       <div class="mt-5">
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    View Requests <span class="badge bg-secondary"><?php echo "$count" ?></span>
         </a>
         <!-- accept workshop -->
         

  <div class="collapse" id="collapseExample">
  <div class="card card-body">
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">batch</th>
      <th scope="col">phone</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>

  <?php
$qu="select * from tbl_login where status = 0 ";
$res= mysqli_query($conn,$qu);
$que="select * from tbl_studreg where status = 0 ";
$resu= mysqli_query($conn,$que);
if($res)
{
  while($row1=mysqli_fetch_assoc($res))
  {
    $loginid=$row1['loginid'];
    $name=$row1['name'];
    $email=$row1['email'];
    $batch=$row1['batch'];
    $phone=$row1['phone'];
   echo ' <tr>
   <th scope="row">'.$loginid.'</th>
   <td>'.$name.'</td>
   <td>'.$email.'</td>
   <td>'.$batch.'</td>
   <td>'.$phone.'</td> 
   <td>
 <button  type="button" class="btn btn-outline-success"><a href="approveuser.php?accept='.$name.'">Accept</a></button>
 <button type="button" class="btn btn-outline-danger"><a href="approveuser.php?reject='.$name.'">Reject</a></button>
</td>
 </tr>';
  }
}
?>

  </tbody>
</table>
  </div>
</div>
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
</body>
</html>
