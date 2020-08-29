<?php
session_start();
include("Config1.php");
$i="";
$unm=$_POST['a1'];
$pass=$_POST['a2'];
$s="select * from  tbl_admin where admin_name='$unm' and password='$pass'";
$r=mysqli_query($con,$s);
while($res=mysqli_fetch_array($r))
{
 $i=$res[0];
 $_SESSION["aid"]=$i;
}
if($i>0)
{
	echo "success";
}
else
{
	echo mysqli_error($con);
}

?>