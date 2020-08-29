<?php
include("header.php");
?>
<html>
<head>
<script src="jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#b1").click(function(){

    var a=$("#t1").val();
	var b=$("#t2").val();
	var c=$("#t3").val();
    $.ajax({
		url:"service.php",
		type:"POST",
		data:{flag:"insert",s_name:a,description:b,status:c},
	
		success:function(data){
			alert(data);
		},
		error:function(data){
			alert(data);
		}
    });	
	}),
	$("#b2").click(function(){
	var a=$("#t1").val();
	var b=$("#t2").val();
	var c=$("#t3").val();
    
	$.ajax({
		url:"service.php",
		type:"post",
		data:{flag:"update",s_name:a,description:b,status:c},
		success:function(data){
			alert(data);
		},
		error:function(data){
			alert(data);
		}
	});

});
});
</script>
</head>


<body>
<form method="POST">

Enter s_name:<input type="text" id="t1"><br><br>

Enter description:<textarea rows="10" cols="50" id="t2">
This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
 either version 2 of the License, or (at your option) any later version.
This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; 
without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
See the GNU General Public License for more details. </textarea><br><br>

Enter status:<input type="text" id="t3"><br><br>
<input type="button" id="b1"value="submit">
<input type="button" id="b2"value="update">
</form>
</body>

</html>
<?php
include("footer.php");
?>