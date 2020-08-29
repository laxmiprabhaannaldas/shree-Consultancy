<?php
    include("Config1.php");
		$ufnm = $_POST['fnm'];
		$uanm = $_POST['anm'];
		$upass = $_POST['pass'];
		$s="insert into tbl_admin (full_name,admin_name,password) values('$ufnm','$uanm','$upass')";
		if($ufnm=="" || $uanm =="" || $upass=="")
		{
			echo "Fill Field correctly.....";
		}
		else if(mysqli_query($con,$s))
		{
		   
			echo "Record inserted...";
		}
		else
			echo mysqli_error($con);
	
	
?>