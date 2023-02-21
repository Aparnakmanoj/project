<?php

include("connect.php");
if(isset($_GET['id']))
{

    $id =$_GET['id'];

    
    $sql2 = mysqli_query($conn,"select * from image where imid='$id'");
     while($r=mysqli_fetch_array($sql2))
  {
     
        
     $filepath='Profile/'.$r['file'];
        
     
if(file_exists($filepath))
{
    header('Content-Type: application/octet-stream');
    header('Content-Description: File Transfer');
    header('Content-Dispostion: attachment; filename=' . basename($filepath));
        header('Expires : 0');
    header('Cache-Control : must-revalidate');
    header('Pragma:public');
    header('Content-Length:' . filesize('Profile/'.$r['file']));
    readfile('Profile/'.$r['file']);
    
    exit;

}
     }} ?>