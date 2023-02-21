<?php
session_start();
$db_hostname="localhost";
$db_username="root";
$db_password="";
$db_name="pms";
$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn)
{
echo"Unable to connect database".mysqli_error($conn);
die;
}
?>