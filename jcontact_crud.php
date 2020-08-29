<?php
include("Config1.php");
$flag=$_POST['flag'];
if($flag=="insert")
{
	$a=$_POST['x1'];
	$b=$_POST['x2'];
	$c=$_POST['x3'];
	$s="insert into tbl_contactus(Mob_no,Address,Email) values('$a','$b','$c')";
	if(mysqli_query($con,$s))
	{
		echo "Record inserted...";
	}
	else
	{	
		echo "Record failed...";
	}
}
if($flag=="update")
{
	$a=$_POST['x1'];
	$b=$_POST['x2'];
	$c=$_POST['x3'];
	$s="update tbl_contactus set  Mob_no='$a',Address='$b',Email='$c'";
	if(mysqli_query($con,$s))
	{
	echo "Record updated...";
	}
	else
	{
	echo "Record not updated...";
	}

}
?>