<?php

include("Config1.php");
$flag=$_POST['flag'];
if($flag=="insert")
{
$s_name=$_POST['s_name'];
$description=$_POST['description'];
$status=$_POST['status'];

$s="insert into tbl_service(S_name,Description,status)  values('$s_name','$description','$status')";

if(mysqli_query($con,$s))
{
echo"Record Inserted";
}
else
{
echo mysqli_error($con);
}
}
if($flag=="update")
{
$s_name=$_POST['s_name'];
$description=$_POST['description'];
$status=$_POST['status'];
$s="update  tbl_service  set  description='$description',status='$status' where S_name='$s_name'";	
if(mysqli_query($con,$s))
{
	 echo "Record updated....";
}
else{
	echo mysqli_error($con);
}
}
?>
