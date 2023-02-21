<?php
include "../connect.php";
$id=$_GET['id'];
$tid=$_GET['st'];
$no=$_GET['no'];
//echo $no;
//echo $id;
//echo $tid;
//
$res=mysqli_query($conn,"select teachid from tbl_teachteg where name='$tid'");
$row1=mysqli_fetch_array($res);
//echo $row[0];
$q=mysqli_query($conn,"update tbl_studreg set tid='$row1[0]' where studid='$id' ");
$result=mysqli_query($conn,"select count(tid) AS total from tbl_studreg where tid='$row1[0]'");
	 $row = mysqli_fetch_array($result);

        $count1 = $row['total'];
		
		
		if($count1 == $no)
		{
			$sql4 =  mysqli_query($conn, "UPDATE `tbl_teachteg` SET `tstatus`='1' WHERE teachid='$row1[0]'");
            
			echo "<script>alert('One Group Added');window.location.href='team.php';</script>";
		}
else
{
   
    header("location:team6.php?t1=$no&select=$tid" ); 
}
 
?>