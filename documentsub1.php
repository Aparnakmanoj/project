<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?php

 include "../connect.php";
 //session_start();
 $stid=$_GET['id'];
 echo $stid;
 if(isset($_POST['Submit1']))
 {
	 $dname=$_POST['select1'];
	 $n=$_POST['file'];
	 echo $dname;
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="upload/";
     /* new file size in KB */
 $new_size = $file_size/1024;  
 /* new file size in KB */
 
 /* make file name in lower case */
 $new_file_name = strtolower($file);
 /* make file name in lower case */
 
 $final_file=str_replace(' ','-',$new_file_name);
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO image(file,type,size) VALUES('$final_file','$file_type','$new_size')";
  mysqli_query($conn,$sql);
  
 
  echo "File sucessfully upload";
        
  
 }
 else
 {
  
  echo "Error.Please try again";
		
		}
	}
 
 
 
 
 
?>
<body>
<center>
<form name="form1" method="post" action="">
<center><h1><u>SUBMIT YOUR DOCUMMENTS NOW</u></h1>
</br></br></br>
<?php
$res=mysqli_query($conn,"select ptopic from tbl_topic where stid='$stid' and status='1'");
$row=mysqli_fetch_array($res);
?>
<label>PROJECT TOPIC:&nbsp&nbsp</label>
<?php echo $row[0]; ?>
</br></br></br>
<label>SELECT DOCUMENT TYPE:&nbsp&nbsp</label>
<select name="select1">
<option>ABSTRACT</option>
<option>DIAGRAMS</option>
<option>TABLE </option>
<option>REPORT</option>

</select>
</br>
</br>
</br>
<p>UPLOAD PHOTO 
    <input type="file" name="file">
    <input name="Submit1" type="submit"  value="upload">
  </p>
</form>

</body>
</html>
