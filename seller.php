<!DOCTYPE html>
<html>
<title>Seller</title>
<style>
body{
	margin:0;
}
.dd{
	color:black;
}
ul{
	list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
	background-color:navy;
}
li{
	display:inline-block;float: left;	
}

li a{
	color:#fff;display: block;
	text-decoration: none;
	padding:10px 25px;
	font-family:poppins;
	font-size:20px;text-align: center;
}
li a:hover{
	background:orange;
	color:#333;
}
ol{
	list-style-type: none;
    margin:0;
    padding: 0;
    overflow: hidden;
	background-color:purple;
}

</style>
<body bgcolor="ffc0cb">
<ol><li> 
</li>
<li><a href="http://localhost/marketing/user.php">
    <img src="nav.png" alt="Northern Lights" width="60" height="18">
  </a></li>
<li><a href="http://localhost/marketing/marketing.php">Online Marketplace</a></li>

<li style="float:right"><a href="http://localhost/marketing/home.php">Logout</a></li>
<li style="float:right"><a href="http://localhost/marketing/contact.php">Contact</a></li>
</ol>
<h2><center>Seller must fill up this form with actual.. </br>PRODUCT TYPE & VIDEO (SIZE Less than 50 MB & Duration between 2 Minutes)</br></br></center></h2>
<form method="post" action="sellerpage.php" enctype="multipart/form-data">
<center>
<table><tr>
<td><font size="6">Product Type: </font></td>
<td><select name="type">
<option>t-shirt</option>
<option>saree</option>
<option>cycle</option>
<option>mobile</option>
<option>camera</option>
<option>book</option>
<option>Good Knight</option>
<option>Charger</option>
</select></td>
</tr>
<tr>
<td><font size="6">Price: </font></td>
<td><input type="text" name="price"></td>
</tr>
<tr>
<td><font size="6">Bkash: </font></td>
<td><input type="text" name="bkash"></td>
</tr>
<tr>
<td><font size="6">Video: </font></td>
<td><input type="file" name="file"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="upload" value="UPLOAD"></td>
</tr>
</table>
</center>
</form>
<center><img src="125.png" alt="Snow" style="width:50%;"></center>
<?php
$connect=mysqli_connect("127.0.0.1:3307","root","","onlinemarketing") or die("Connection Failed");
if(isset($_POST['upload'])){
	$type=$_POST['type'];
	$price=$_POST['price'];
	$bkash=$_POST['bkash'];
	$name=$_FILES['file']['name'];
	$tmp=$_FILES['file']['tmp_name'];
	move_uploaded_file($tmp, "image/".$name);
	$sql="INSERT INTO videos (type,price,bkash,video) VALUES('$type','$price','$bkash','$name')";
	$res=mysqli_query($connect,$sql);
	if($res==1){
		echo "<h1> <center>Video inserted!</center></h1>";
	}
}
?>
<br>

<div class="dd" id="footer"><h4 align="center">@Don't forget something that makes you HAPPY.  #CONTACT: 01521525841</h4></div>
</body>
</html>
