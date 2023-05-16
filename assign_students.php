<?php
include "../connect.php";


?>


<!DOCTYPE html>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body class="hold-transition sidebar-mini layout-fixed">


  <?php



  $getid = $_SESSION['username'];


  $sql2 = mysqli_query($conn, "select * from tbl_teachteg where email='$getid' and costatus=1");
  if ($getid != '') {

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

            while ($row2 = mysqli_fetch_array($sql2)) {


            ?>
              <div class="info">
                <a href="#" class="d-block" style="margin-top: -12px"><?php echo $row2['name'] . " " . $row2['lname'];
                                                                    } ?></a>
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
                    DASHBOARD
                  </p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="addstud.php" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    ADD STUDENTS
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="team1.php" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    GUIDE ALLOCATION
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view.php" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    STUDENTS
                  </p>
                </a>
              </li>
              <li class="nav-item">
                 <a href="assign_students.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                PANNEL ALLOCATION
              </p>
            </a>
          </li>
              <li class="nav-item">
                <a href="slotdetails.php" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    STAFF SLOTS
                  </p>
                </a>
              </li>
              <li class="nav-item">
            <a href="scrum.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                 ADD SCRUM
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pannel.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                ADD PANEL
              </p>
            </a>
          </li> <li class="nav-item">
            <a href="payment.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                PAYMENT DETAILS
              </p>
            </a>
          </li>
          <li class="nav-item">
                <a href="viewmarks.php" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    MARKLIST
                  </p>
                </a>
              </li>
          <li class="nav-item">
            <a href="notification.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                ADD NOTIFICATIONS
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="noti.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                VIEW NOTIFICATIONS
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
                <h1>ASSIGN STUDENTS</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Assign students</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">


                <div class="card">
                  <div class="card-header">

                    <!-- <form action="" method="post">
                      <label for="">SELECT PANEL REVIEW: </label>
                      <select name="panelreview" id="" required>
                        <option value="" selected disabled>Select Panel Review</option>
                        <option value="first">First Panel Review</option>
                        <option value="second">Second Panel Review</option>
                        <option value="third">Third Panel Review</option>
                      </select>
                      <button name="panelrevire_submit" type="submit" class="btn btn-primary btn-sm">SUBMIT</button>
                    </form> -->
                    <!-- /.card-header -->
                    <?php
                    // if (isset($_POST['panelrevire_submit'])) {
                    //   $panelreview = $_POST['panelreview'];
                    ?>

                    <button class="btn btn-info float-right" onclick="window.location.href='viewassignedlist.php'">VIEW ASSIGNED PANNEL LIST</button>
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <th>Name</th>


                        <th>GUIDE</th>
                        <th>Batch</th>

                        <th>Assign</th>

                      </thead>

                      <?php
                      $q = mysqli_query($conn, "SELECT DISTINCT a.studid, a.name AS sname, a.lname AS slname, a.batch, b.*
                        FROM tbl_studreg a
                        JOIN tbl_teachteg b ON a.tid = b.teachid
                        LEFT JOIN tbl_assignpanel c ON a.studid = c.studid
                        WHERE c.studid IS NULL;
                        ");
                      while ($d = mysqli_fetch_array($q)) {

                      ?>
                        <tr>
                          <td><?php echo $d['sname'] . " " . $d['slname']; ?></td>
                          <td><?php echo $d['name'] . " " . $d['lname']; ?></td>
                          <td><?php echo $d['batch']; ?></td>

                          <td>
                            <form action="assignpanel.php" method="post">
                              <input type="hidden" name="teachid" value="<?php echo $d['teachid'] ?>">
                              <!-- <input type="hidden" name="panelreview" value="<?php echo $panelreview ?>"> -->
                              <button type="submit" name="psubmit" class="btn btn-success" value="<?php echo $d['studid'] ?>">Assign Faculty</button>
                            </form>
                          </td>







                        </tr>






                        </br>

                      <?php
                      }
                      ?>
                    </table>
                    <?php
                    // }
                    ?>
                    <!-- /.content-wrapper -->
                    <style>
                      .select2-selection__choice__display {
                        padding-left: 10px;
                      }
                    </style>

                    <!-- Control Sidebar -->
                    <aside class="control-sidebar control-sidebar-dark">
                      <!-- Control sidebar content goes here -->
                    </aside>
                    <!-- /.control-sidebar -->
                  </div>
                </div>
              </div>
            </div>
            <!-- ./wrapper -->

            <!-- jQuery -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <!-- AdminLTE App -->
            <script src="dist/js/adminlte.min.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="dist/js/demo.js"></script>
            <!-- Page specific script -->
            <script>
              $(function() {
                $("#example1").DataTable({
                  "responsive": true,
                  "lengthChange": false,
                  "autoWidth": false,
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
<?php
  } else {
    header("Location:login.php");
  }
?>