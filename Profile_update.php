<?php
include("Config1.php");
$a=$_POST['x1'];
$b=$_POST['x2'];
$c=$_POST['x3'];
$d=$_POST['x4'];
$s="update tbl_admin set  Full_name='$b',admin_name='$c',password='$d' where id='$a'";
if(mysqli_query($con,$s))
{
 echo "Record updated...";
}
else
{
 echo "Record not updated...";
}
?>
