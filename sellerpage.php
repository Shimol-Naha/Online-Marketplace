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
<ol>
<li></li>
<li><a href="http://localhost/marketing/user.php">
    <img src="nav.png" alt="Northern Lights" width="60" height="18">
  </a></li>
<li><b><a href="http://localhost/marketing/marketing.php">Online Marketplace</a></b></li>
<li style="float:right"><b><a href="http://localhost/marketing/home.php">Logout</a></b></li>
<li style="float:right"><b><a href="http://localhost/marketing/contact.php">Contact</a></b></li>
</ol>
<h2><center>VIDEO SIZE must be Less than 50 MB & Duration between 2 Minutes</br></center></h2>
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
<td><font size="6">Product Code: </font></td>
<td><input type="text" name="code" required></td>
</tr>
<tr>
<td><font size="6">Video: </font></td>
<td><input type="file" name="file" required></td>
</tr>
<tr>
<td><font size="6">Price: </font></td>
<td><input type="text" name="price" required></td>
</tr>
<tr>
<td><font size="6">Contact Number: </font></td>
<td><input type="text" name="bkash" required></td>
</tr>
<tr>
<td><font size="6">Email:</font></td>
<td><input type="email" name="email" required ></input></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="upload" value="UPLOAD" style="background-color: red; cursor: pointer; color: white;padding: 10px 15px;font-family:Georgia;font-size: 20px;"></td>
</tr>
</table>
</center>
</form>

<?php
$connect=mysqli_connect("127.0.0.1:3307","root","","onlinemarketing") or die("Connection Failed");
if(isset($_POST['upload'])){
	$type=$_POST['type'];
	$code=$_POST['code'];
	$price=$_POST['price'];
	$bkash=$_POST['bkash'];
	$email=$_POST['email'];
	$name=$_FILES['file']['name'];
	$tmp=$_FILES['file']['tmp_name'];
	move_uploaded_file($tmp, "image/".$name);
	
 $query="select * from video where code='$code'";
 $mysql_result=mysqli_query($connect,$query);
 $s_count=mysqli_num_rows($mysql_result);
 if($s_count==0){
	$sql="INSERT INTO video (product,code,vname,price,bkash,email) VALUES('$type','$code','$name','$price','$bkash','$email')";
	$res=mysqli_query($connect,$sql);
	if($res==1){
		echo "<h1> <center>Video inserted!</center></h1>";
	}
}
else echo "<h1> <center>Product code already exist! Please try with another code.</center></h1>";
}
?>
<center><img src="125.png" alt="Snow" style="width:50%;"></center>
<br>

<div class="dd" id="footer"><h4 align="center">@Don't forget something that makes you HAPPY.  #CONTACT: 01521525841</h4></div>
</body>
</html>
