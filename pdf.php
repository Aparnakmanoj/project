<?php 
include "../connect.php";
$id=$_GET['id'];
$sql2 = mysqli_query($conn,"select * from image where imid='$id'");
     while($r=mysqli_fetch_array($sql2))
  {
     
        
     

//$file='placement.pdf';
$filepath='../Profile/'.$r['file'];
header('Content-type:application/pdf');
header('Content-Disposition: inline; filename="'. $filename. '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile('../Profile/'.$r['file']);
  }
?>