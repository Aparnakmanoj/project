<?php
include('connect.php');

$sql = mysqli_query($conn,"SELECT tbl_readstatus.stid,tbl_readstatus.remail,tbl_studreg.name,tbl_studreg.email
FROM tbl_studreg
INNER JOIN tbl_readstatus ON tbl_readstatus.remail=tbl_studreg.email and tbl_readstatus.nid=12;");
 while ($row = mysqli_fetch_array($sql)) 
    {
       
  

?>
<table>
    <td><?php echo $row['name'];}?></td>
</table>