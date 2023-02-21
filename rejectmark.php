<?php
 include "../connect.php";
$id=$_GET['id'];
echo $id;
$n=mysqli_query($conn,"update tbl_mark set mstatus='2' where stid='$id'");
echo "<script>alert('Mark list rejected');window.location.href='viewmarks.php';</script>";
?>