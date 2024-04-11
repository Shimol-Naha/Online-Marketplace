<!DOCTYPE html>
<html>
<title>Buyer</title>
<style>
body{
	margin:0;
}
table,td,th{
	border:1px solid black;
	text-align: center;	
}
th{
	background-color: #a52a2a;
	color:white;
}
td{
	background-color: #f0f8ff;
	color:black;width:40%;
}
table{
	
	width:80%;
	
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
<h1><marquee behavior="alternate" bgcolor="powderblue" direction="left" scrollamount="30">Select your desired product..</marquee></h1>
<form action="" method="post">
<center>

<tr>
<td></td>

<tr>
<td><font size="6">Product Type:</font></td>
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
<td></td>
<td><b><input type="submit" value="SEARCH" name="upload" style="background-color: red; cursor: pointer; color: white;padding: 6px 8px;font-family:Georgia;font-size: 18px;"></b></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
</form>
<table></br></br>
<?php 
$connect=mysqli_connect("127.0.0.1:3307","root","","onlinemarketing") or die("Connection Failed");

if(isset($_POST['upload'])){
	$type=$_POST['type'];
	
	$sql="select * from video where product='$type'";
$res = mysqli_query($connect,$sql);
if(mysqli_num_rows($res)>0){
while($row=mysqli_fetch_assoc($res)){
		$image=$row['vname'];
	$type=$row['product'];
	$code=$row['code'];
	$price=$row['price'];
	$bkash=$row['bkash'];
	?>
<tr>
<td><video src='image/<?=$image?>' controls width='100%' height='50%'> </video></td> 
<?php
	echo "<td>
	<h1><b>PRODUCT DETAILS:</b></h1></br><h2><b>Product Type:</b> $type </br><b>Product Price:</b> $price tk</br><b>Contact Number:</b> $bkash</br></h2>
	</td></tr>";
}
}
else {
	echo "<h1>Empty Video</h1>";
}
}
else{
$sql="select * from video ORDER BY id DESC";
$res = mysqli_query($connect,$sql);
if(mysqli_num_rows($res)>0){
while($row=mysqli_fetch_assoc($res)){
	$image=$row['vname'];
	$type=$row['product'];
	$code=$row['code'];
	$price=$row['price'];
	$bkash=$row['bkash'];
	?>
<tr>
<td><video src='image/<?=$image?>' controls width='100%' height='50%'> </video></td> 
<?php
	echo "<td>
	<h1><b>PRODUCT DETAILS:</b></h1></br><h2><b>Product Type:</b> $type </br><b>Product Price:</b> $price tk</br><b>Contact Number:</b> $bkash</br></h2>
	</td></tr>";
	
}
}
else {
	echo "<h1>Empty Video</h1>";
}

}
?>
</center></table></br>
<div class="dd" id="footer"><h4 align="center">@Don't forget something that makes you HAPPY.  #CONTACT: 01521525841</h4></div>
</body>
</html>