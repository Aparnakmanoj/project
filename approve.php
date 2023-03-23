<?php
 include "../connect.php";
$id=$_GET['id'];
$q=mysqli_query($conn,"update tbl_slot set status1='Accepted' where Tid='$id'");
echo'<script>alert("Staff approved ");window.location.href="slotdetails.php";</script>';



 ?>