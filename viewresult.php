<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?php

 include "../connect.php";
 //session_start();
 
 

?>
<body>
<center>
<form name="form1" method="post" action="">
<center><h1>CHECK MARKLIST</h1>
<?php
$data=mysqli_query($conn,"select * from tbl_mark where stid='8' and mstatus='1'");//use session to get current student id
$row=mysqli_fetch_array($data);
if($row[0]== null)
{
	echo 'mark list not available';
}
else
{
	$data1=mysqli_query($conn,"select ptopic from tbl_topic where ptid='$row[3]' ");//use session to get current student id
$row1=mysqli_fetch_array($data1);
$data2=mysqli_query($conn,"select name from tbl_teachteg where teachid='$row[2]' ");//use session to get current student id
$row2=mysqli_fetch_array($data2);
	
?>
<label>PROJECT TOPIC:&nbsp</label>
<?php
echo $row1[0];?>
</br></br></br>
<label>GUIDE:&nbsp</label>
<?php
echo $row2[0];?>
</br></br>
<table border="1">

<th>MARK1</th>
<th>MARK2</th><th>MARK3</th><th>MARK4</th><th>TOTAL</th>
<?php
	  
	 
	$st=mysqli_query($conn,"select * from tbl_mark where stid='8' and mstatus='1'");
	while($res=mysqli_fetch_array($st))
	{ 
     
	 $total=$res[4]+$res[5]+$res[6]+$res[7];
	
	?>
    <tr> 
      
      <td width="264"><?php echo $res[4];?></td>
	  <td width="264"><?php echo $res[5];?></td>
	  <td width="264"><?php echo $res[6];?></td>
	  <td width="264"><?php echo $res[7];?></td>
	  <td width="264"><?php echo $total;?></td>
	 
	  
    </tr>
    <?php
	}
	?>

</table>
<?Php
}
?>
</br>
	</br></br>
	</br>

</form>

</body>
</html>
