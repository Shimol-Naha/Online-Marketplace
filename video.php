<html>
<head>
<title>video upload</title>
</head>
<body>
<h1><a href="video.php">Videos</a></h1>
<form method="post" action="video.php" enctype="multipart/form-data">
<input type="file" name="file">
<input type="submit" name="upload" value="UPLOAD">
</form>
<?php
$connect=mysqli_connect("127.0.0.1:3307","root","","onlinemarketing") or die("Connection Failed");
if(isset($_POST['upload'])){
	$name=$_FILES['file']['name'];
	$tmp=$_FILES['file']['tmp_name'];
	move_uploaded_file($tmp, "image/".$name);
	$sql="INSERT INTO videos (name) VALUES('$name')";
	$res=mysqli_query($connect,$sql);
	if($res==1){
		echo "<h1> Video inserted!</h1>";
	}
}
?>
</body>
</html>