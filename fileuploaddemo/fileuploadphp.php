<?php
//if(isset($_POST["submit"])) {
	//echo "welcome";
	//exit();
	$con=mysqli_connect("localhost","root","","newpro");
	$z1=$_POST['a1'];
	$z2=$_POST['a2'];
	//echo $_POST['a1'];
	//exit();
	$target_dir = "upload/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
		
		//insert code
		
		//file name contain in $target_file variable
    } 
	else 
	{
        echo "File is not an image.";
        $uploadOk = 0;
		
    }
	$s="insert into tbl_aboutus(title,Description,image) values('$z1','$z2','$target_file')";
		
		if(mysqli_query($con,$s))
		{
		echo "image inserted....";	
		}
//}
?>