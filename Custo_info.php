<?php
  include("Config1.php");



   $s="select * from tbl_registration";  
   $response= "<tr><th>Id</th><th>Name</th><th>DOB</th><th>Mob_no</th><th>Address</th><th>Email</th><th>Uname</th><th>Password</th></tr>";
   $res=mysqli_query($con,$s);
   while($r=mysqli_fetch_array($res))   
	{
	$response.= "<tr><td>$r[0]</td><td>$r[1]</td><td>$r[2]</td><td>$r[3]</td><td>$r[4]</td><td>$r[5]</td><td>$r[6]</td><td>$r[7]</td></tr>";
	}
	
	echo $response;
	
?>