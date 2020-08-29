<?php
   include("Config1.php");
   $s="select  a.id,s.S_date,s.S_time,r.Name,r.Mob_no,r.Email,c.S_name from  tbl_appointment a , tbl_registration r,tbl_schedule s,tbl_service c where  (C_id=r.id && S_id=s.id && service_id=c.id)";
   echo "<tr><th>AId</th><th>Name</th><th>Mob_no</th><th>E_mail</th><th>A_Date</th><th>A_time</th><th>Service_nm</th></tr>";
   $res=mysqli_query($con,$s);
   while($r=mysqli_fetch_array($res))   
	{
	echo "<tr><td>$r[0]</td><td>$r[3]</td><td>$r[4]</td><td>$r[5]</td><td>$r[1]</td><td>$r[2]</td><td>$r[6]</td></tr>";
	}
?>