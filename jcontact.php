<?php
include_once("header.php");
?>
<html>
<head>
<title>Contact Page</title>
<script src="jquery.min.js"></script>
<script>
$(document).ready(function(){
	        $.ajax({
					url:"contact_display.php",
					type:"post",
					data:{},
				    success:function(data)
					{
						var arr=data.split('@');
						$("#a1").val(arr[0]);
						$("#a2").val(arr[1]);
						$("#a3").val(arr[2]);
						
					},
			        error:function(data)
					{
					},
					
				}),
					
    $("#btn1").click(function(){
		var a=$("#a1").val();
		var b=$("#a2").val();
		var c=$("#a3").val();
	   $.ajax({
	    url:"jcontact_crud.php",
		type:"POST",
		data:{flag:"insert",x1:a,x2:b,x3:c},
		success:function(data){
		    alert(data);
		     }
		});
	}),
	$("#btn2").click(function(){
		var a=$("#a1").val();
		var b=$("#a2").val();
		var c=$("#a3").val();
	   $.ajax({
		   url:"jcontact_crud.php",
		   type:"post",
		   data:{flag:"update",x1:a,x2:b,x3:c},
		   success:function(data){
			   alert(data);
		   }
	   });
	});
});	
</script>
</head>
<body>
<center><b>Contact us</b><br>
<form>
<pre>
<h6>Enter Mob_NO:</h6> <input type="text" id="a1"><br><br>
<h6>Enter Address:</h6><input type="text" id="a2"><br><br>
<h6>Enter email:</h6>  <input type="text" id="a3"><br><br>
</pre>
<input type="button" id="btn1" value="Submit"><br><br>
<input type="button" id="btn2" value="Update">
</form>
</center>
</body>
</html>
<?php
include_once("footer.php");
?>
