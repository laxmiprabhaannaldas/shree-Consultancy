<?php
  include_once("header.php");
?>


<html>
<head>
	<title>SCHEDULE</title>
		<script src="jquery.min.js"></script>
			<script>
			$('document').ready(function(){
				$("#s1").click(function(){
				var x1=$("#a1").val();
				var x2=$("#a2").val();
				$.ajax({
				    url:"Schedule.php",
					type:"POST",
					data:{flag:"insert",date:x1,time:x2},
					success:function(data){
					alert(data);
					},
					error:function(data){
					alert(data);
					}
					
				}),
				$("#s2").click(function(){
				var x1=$("#a1").val();
				var x2=$("#a2").val();
				$.ajax({
				    url:"Schedule.php",
					type:"POST",
					data:{flag:"update",date:x1,time:x2},
					success:function(data){
					alert(data);
					},
					error:function(data){
					alert(data);
					}
					
				}),
				$("#s3").click(function(){
				var x1=$("#a1").val();
				$.ajax({
				    url:"Schedule.php",
					type:"POST",
					data:{flag:"delete",date:x1},
					success:function(data){
					alert(data);
					},
					error:function(data){
					alert(data);
					}
					
				});
			
			
			});
		});
	});
});
		
		</script>
</head>
<body>
<form method="POST">
<center>
SET SCHEDULE<br><br>
Enter Date:<input type="date" id="a1" ><br><br>
Enter Time:<input type="text" id="a2"><br><br>
<input type="button" id="s1" value="Save">
<input type="button" id="s2" value="Update">
<input type="button" id="s3" value="Delete">

</center>
</form>
</body>
</html>
<?php
  include_once("footer.php");
?>
