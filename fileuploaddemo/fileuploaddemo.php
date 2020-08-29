<html>
<head>
	<script src="jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#uploadform").on('submit',(function(e){
				//var fileup = $("#fileToUpload").val();
				e.preventDefault();
				$.ajax({
					url:"fileuploadphp.php",
					type:"POST",
					data:new FormData(this),
					contentType: false,
					cache: false,
					processData:false,
					success:function(data){
						alert(data);
					},
					error:function(data){
						alert(data);
					}
				});
			}));
			
		});
	</script>
</head>
<body>

<form id="uploadform" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" id="btn" value="Upload Image" name="submit">
</form>
</body>
</html>