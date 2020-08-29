<?php
include("Config1.php");
$s="select * from tbl_contactus";
$res=mysqli_query($con,$s);
	while($r=mysqli_fetch_array($res))
	{
		$str=$r[1]."@".$r[2]."@".$r[3]."@";
		echo $str;

	}
?>