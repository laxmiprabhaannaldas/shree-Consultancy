<?php
  include_once("header.php");
?>

<html>
<head>
<script src="jquery.min.js"></script>
<script>

			$(document).ready(function(){
          			$.ajax({
					url:"Profile_ad.php",
					type:"post",
					data:{},
				    success:function(data)
					{
						var arr=data.split('@');
						$("#a1").val(arr[0]);
						$("#a2").val(arr[1]);
						$("#a3").val(arr[2]);
						$("#a4").val(arr[3]);
						
					},
			        error:function(data)
					{
					},
					
				}),
		$("#btn1").click(function(){
		var a=$("#a1").val();
		var b=$("#a2").val();
		var c=$("#a3").val();
		var d=$("#a4").val();
	   $.ajax({
		   url:"Profile_update.php",
		   type:"post",
		   data:{x1:a,x2:b,x3:c,x4:d},
		   success:function(data){
			   alert(data);
		   }
	   });
	});
});

</script>
</head>
<body>
<form>
<center>
<pre>
id:  <input type="text" id="a1"><br>
full name: <input type="text" id="a2"><br>
Admin User Name: <input type="text" id="a3"><br>
Password:  <input type="text" id="a4"><br>
<input type="button" id="btn1" value="update">
</pre>
</center>
</form>
</body>
</html>
<?php
  include_once("footer.php");
?>
