<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?php


 include "../connect.php";
     
  
 $getid=$_SESSION['username'];


if($getid!=0)
{
  
?>
<body>
<center>
<form name="form1" method="post" action="">
<center><h1> YOUR NOTIFICATIONS</h1>
<br>
<br>
  <table width="1281" border="1">
    <tr> 
      <td width="218" height="38"><div align="center"></div></td>
      <td width="261">SUBJECT</td>
      <td width="255">NOTIFICATION DATE</td>
      
     
      <?php
   
	 $date=date("Y-m-d");
	$st=mysqli_query($conn,"select * from tbl_readstatus where remail='$getid'");
while($res=mysqli_fetch_array($st))
	{
		
	 $st1=mysqli_query($conn,"select * from tbl_notification where nid!='$res[2]' ");
	}
	while($res1=mysqli_fetch_array($st1))
	{
	
	
	?>
    <tr> 
	<td width="218" height="70"><?php echo $res1[0];?></td>
      <td width="218" height="70"><?php echo $res1[3];?></td>
      <td width="261">&nbsp;<?php echo $res1[4];?></td>
      
	  <td width="249">&nbsp;<?php echo "<a href='viewnotificationmsg.php?id=$res1[0]&rid=1'>View</a>";?></td>
    </tr>
    <?php
	}
	
	?>
  </table>
</form>
</center></center>
</body>
</html>
<?php
}
    ?>