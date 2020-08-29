<?php
include("Config1.php");
    $flag=$_POST["flag"];
    if($flag=="insert")
	{
	$a=$_POST['date'];
    $b=$_POST['time'];

	$s="insert into tbl_schedule(S_date,S_time) values('$a','$b')";
	if(mysqli_query($con,$s))
	{
		echo "Record  inserted....";
	}
	else
	{
		echo mysqli_error($con);
	}
	}
    if($flag=="update")
	{
    $a=$_POST['date'];
    $b=$_POST['time'];

	$s="update tbl_schedule set S_time='$b' where S_date='$a'";
	if(mysqli_query($con,$s))
	{
		echo "Record  updated....";
	}
	else
	{
		echo mysqli_error($con);
	}
	}
	if($flag=="delete")
	{
		$a=$_POST['date'];
		$s="delete  from  tbl_schedule where S_date='$a'";
		if(mysqli_query($con,$s))
		{
			echo "Record deleted.......";
		}
		else
		{
			echo mysqli_error($con);
		}
	}

?>