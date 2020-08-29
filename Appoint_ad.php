<?php
include("header.php");
?>
<html>
<head>
<title>Appointment Details</title>
<script src="jquery.min.js"></script>
<script>
$(document).ready(function(){
        $.ajax({
		url:"appoint_ads.php",
		Type:"POST",
		data:{},
		success:function(data){
		    $("#t1").html(data);
		},
		error:function(data){
		  alert(data);
		}
		
        });        
	});	
</script>
</head>
<body>
<form method="POST">
<table id="t1" border='3'>
</table>
</form>
</body>
</html>
<?php
include("footer.php");
?>