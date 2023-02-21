
<?php

 include "../connect.php";
 //session_start();
 $stid=$_GET['id'];
 echo $stid;
 $q=mysqli_query($conn,"update tbl_topic set status='1' where stid='$stid'");
 echo "<script> alert('Project topic approved'); window.location.href='guidetopic.php';</script>";
 
 
 
 
?>
