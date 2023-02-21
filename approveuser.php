<?php
   include '../connect.php';
  if(isset($_GET['accept']))
  {
    $name=$_GET['accept'];
    $sql2="UPDATE `tbl_login` SET `status`='1' WHERE username = '$name' ";
    $res2=mysqli_query($conn,$sql2);
    $sql3="UPDATE `tbl_studreg` SET `status`='1' WHERE email = '$name' ";
    $res3=mysqli_query($conn,$sql3);
    if($res2)
    {
        
     header('location:approveview.php');
         header("location:../src/verifymail5.php?email=$name");
    }
  }
  
  else
  {
   die(mysqli_error($conn));
  }

?>



