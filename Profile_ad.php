<?php
session_start();
include("Config1.php");
$a=$_SESSION["aid"];
$s="select * from tbl_admin where id='$a'";
$res=mysqli_query($con,$s);
	while($r=mysqli_fetch_array($res))
	{
		$str=$r[0]."@".$r[1]."@".$r[2]."@".$r[3]."@";
		echo $str;

	}
?>