<?php

error_reporting(0);

?>



<!DOCTYPE html>
<html>
<head>
	<title>
		Upload Image
	</title>


<style>
  

#content{
    width: 50%;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
}
form{
    width: 50%;
    margin: 20px auto;
}
form div{
    margin-top: 5px;
}
#img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
}
#img_div:after{
    content: "";
    display: block;
    clear: both;
}
img{
    float: left;
    margin: 5px;
    width: 300px;
    height: 140px;
}

</style>

	
</head>
<body>

	<form action="" method="POST" enctype="multipart/form-data">

		<input type="file" name="upload_image">
		<input type="submit" name="Upload" value="Upload">
		
	</form>

</body>
</html>

<?php

$filename=$_FILES["upload_image"] ["name"];
$tempname=$_FILES["upload_image"] ["tmp_name"];
$folder="Rental_Management_System_Images/".$filename;
move_uploaded_file($tempname, $folder);
//echo $folder;
?>
