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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

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
                                <a href="payment.php" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        Payment Details
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
                                <a href="scrum.php" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        SCRUM
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pannel.php" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        PANEL
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
                                <h1>PANNEL DETAILS</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Pannel</li>
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



                                        <!-- /.card-header -->

                                        <?php

                                        if (isset($_POST['viewpanel'])) {

                                            $pannelid = $_POST['viewpanel'];
                                        }


                                        ?>

                                        <form name="form1" method="post" action="">
                                            <CENTER>
                                                <h3>
                                                    <label>PANNEL MARK DETAILS </label>

                                                    <?php if (isset($no_of_std)) echo $no_of_std;
                                                    else $no_of_std = '0'; ?>
                                                    <br>


                                                    <?php if (isset($s)) echo $s;
                                                    else $s = '0'; ?>
                                                </h3>
                                            </CENTER>
                                            <br>

                                            <table class="table table-bordered table-striped" id="panneltable">
                                                <tr>
                                                    <b>
                                                        <td width="218" height="38">
                                                            <div align="center"><b>STUDENT NAME</b></div>
                                                        </td>
                                                        <td width="261">
                                                            <div align="center"><b>GUIDE</b></div>
                                                        </td>
                                                        <td width="261">
                                                            <div align="center"><b>TOPIC</b></div>
                                                        </td>
                                                        <td width="261">
                                                            <div align="center"><b>MARK</b></div>
                                                        </td>
                                                        <td width="261">
                                                            <div align="center"><b>REMARKS</b></div>
                                                        </td>
                                                    </b>
                                                </tr>
                                                <tr>
                                                    <?php
                                                    $query = "SELECT a.*, b.name as sname, b.lname as slname, c.name as tname, c.lname as tlname, d.ptopic FROM tbl_pmark a JOIN tbl_studreg b JOIN tbl_teachteg c JOIN tbl_topic d
                                                            ON a.studid = b.studid AND a.rteachid = c.teachid AND a.topicid = d.ptid AND a.pannel_id = '$pannelid'";
                                                    $query_run = mysqli_query($conn, $query);
                                                    $i = 1;
                                                    $sum = 0;
                                                    $count = 0;
                                                    while ($row = mysqli_fetch_assoc($query_run)) {
                                                        $sum += $row['fmark'];
                                                        $count++;
                                                    ?>
                                                        <td width="218" height="38">
                                                            <div align="center"><?php echo $row['sname'] . " " . $row['slname'] ?></b></div>
                                                        </td>
                                                        <td width="261">
                                                            <div align="center"><?php echo $row['tname'] . " " . $row['tlname'] ?></b></div>
                                                        </td>
                                                        <td width="261">
                                                            <div><?php echo $row['ptopic'] ?></b></div>
                                                        </td>
                                                        <td width="261">
                                                            <div><?php echo $row['fmark'] ?></b></div>
                                                        </td>
                                                        <td width="261">
                                                            <div><?php echo $row['remark'] ?></b></div>
                                                        </td>
                                                </tr>
                                            <?php
                                                        $i++;
                                                    }
                                                    $average = $sum / $count;
                                            ?>


                                            </table>

                                            Total: <?php echo $average; ?>

                                            </br>


                                        </form>
</body>

</html>
<?php
    } else {
        header("Location:login.php");
    }
?>