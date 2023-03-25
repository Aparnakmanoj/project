<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?php

 include "../connect.php";
 //session_start();
 if(isset($_POST['Submit1']))
		  {
			  $s=$_POST['select1'];
		  }
			 
			 
		  
		  ?>
<body>
<center>
<form name="form1" method="post" action="">
<center><h1><u>SUBMIT MARK</u></h1>
<label>SELECT STUDENT NAME</label>
 <select name="select1">
		<?php
		if(isset($s))
		{
		?>
		<option value="<?php echo $s;?>"><?php echo $s;?></option>
		<?php
		}
		?>
		<option>select STUDENT</option>
		<?php

			$data=mysqli_query($conn,"SELECT * FROM tbl_studreg where tid='23' ");// use session and find current guide
			while($res=mysqli_fetch_array($data))
			{
				
			?>
			<option value="<?php echo $res[2];?>"><?php echo $res[2];?></option>
			
			<?php
			
			}
			?>
		
          </select>
		  <input name="Submit1" type="submit"  value="MARK">
		  <?php
		  if(isset($_POST['Submit1']))
		  {
			 // $s=$_POST['select1'];
			 // echo $sname;
			 $res=mysqli_query($conn,"select studid from tbl_studreg where name='$s'");
			 $row=mysqli_fetch_array($res);
			 echo $row[0];
			 $res1=mysqli_query($conn,"select * from tbl_topic where stid='$row[0]'");
			 $row1=mysqli_fetch_array($res1);
			 ?></br>
			 </br></br></br><label>PROJECT TOPIC:&nbsp&nbsp</label>
			 <?php 
			 if($row1[1] == null)
			 {
				 echo 'No projects available';
				 
			 }
			 else{
			 echo $row1[1];
			 $t=mysqli_query($conn,"select * from tbl_mark where stid='$row[0]'");
			 $y=mysqli_fetch_array($t);
			 if($y[0] != null)
			 {
				 echo 'mark already enterd';
				 echo 'r1'.$y[4];
			 }
			 else
			 {
			 ?> 
			 
			 </br></br><label>REVIW 1</label>
			 <input type="text" name="t1">
			 </br></br><label>REVIW 2</label>
			 <input type="text" name="t2">
			 </br></br><label>REVIW 3</label>
			 <input type="text" name="t3">
			 </br></br><label>REVIW 4</label>
			 <input type="text" name="t4">
			 </br></br>
			  <input name="Submit2" type="submit"  value="SUBMIT MARK">
			  
		 <?php
		 
			 }
			 
		  }
		  }
		  if(isset($_POST['Submit2']))
			 {
				$s=$_POST['select1'];
			   echo $s;
			   $mark1=$_POST['t1'];
			   $mark2=$_POST['t2'];
			   $mark3=$_POST['t3'];
			   $mark4=$_POST['t4'];
			   echo $mark1;
			   echo $mark2;
			   echo $mark3;
			   echo $mark4;
			   $res=mysqli_query($conn,"select studid from tbl_studreg where name='$s'");
			 $row=mysqli_fetch_array($res);
			 echo $row[0];
			 $res1=mysqli_query($conn,"select * from tbl_topic where stid=$row[0]");
			 $row1=mysqli_fetch_array($res1);
			 echo $row1[0];
			 $n=mysqli_query($conn,"insert into tbl_mark(stid,tid,ptid,m1,m2,m3,m4,mstatus) values('$row[0]','23','$row1[0]','$mark1','$mark2','$mark3','$mark4','0')");
			 
			 }
		  
		  ?>
		  
		  
</form>

</body>
</html>
