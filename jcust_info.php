<?php
  include_once("header.php");
?>
<form method="POST">
<table id="t1" border='3'>
</table>
</form>
<script src="jquery.min.js"></script>
<script>
$(document).ready(function(){
        $.ajax({
		url:"Custo_info.php",
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
<?php
include_once("footer.php");
?>