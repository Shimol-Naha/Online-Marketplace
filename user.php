<!DOCTYPE html>
<html>
<head>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<title>Home</title>
<style>
body{
	margin:0;
}
table,td,th{
	border:1px solid black;
	text-align: center;	
}
th{
	background-color: purple;
	color:white;
}
td{
	background-color: #f0f8ff;
	color:black;width:10%;
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
</head>
<body bgcolor="ffc0cb";>

<ol>
<li></li>
<li><a href="http://localhost/marketing/user.php">
    <img src="nav.png" alt="Northern Lights" width="60" height="18">
  </a></li>
<li><b><a href="http://localhost/marketing/marketing.php">Online Marketplace</a></b></li>

<li style="float:right"><b><a href="http://localhost/marketing/home.php">Logout</a></b></li>
</ol></br>
<center><img src="buyer.jpg" alt="Cinque Terre" width="200" height="150"></br><b>
<?php 
$connect=mysqli_connect("127.0.0.1:3307","root","","onlinemarketing") or die("Connection Failed");


	$sql="select * from admin";
$res = mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($res);
echo $row['username'];

?></br>
<?php 
$connect=mysqli_connect("127.0.0.1:3307","root","","onlinemarketing") or die("Connection Failed");
	$sql="select * from admin";
$res = mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($res);
echo $row['email'];

?></br>
<?php 
$connect=mysqli_connect("127.0.0.1:3307","root","","onlinemarketing") or die("Connection Failed");


	$sql="select * from admin";
$res = mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($res);

echo $row['mobile'];
?></b></br></br></br>


<form action="" method="post">
<tr>
<td></td>
<tr>
<td><font size="6">Enter Product Code: </font></td>
<td><input type="text" name="code" required></td>
</tr>

<tr>
<td></td>
<td><b><input type="submit" value="SEARCH" name="upload" style="background-color: red;cursor: pointer; color: white;padding: 5px 5px;font-family:Georgia;font-size: 16px;"></b></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
</form>
</center>
<center>
<table>

<?php 
$connect=mysqli_connect("127.0.0.1:3307","root","","onlinemarketing") or die("Connection Failed");

if(isset($_POST['upload'])){
	$type=$_POST['code'];
	$sql="select * from buy where code='$type'";
$res = mysqli_query($connect,$sql);
if(mysqli_num_rows($res)>0){
	echo"<h2><b>Order List</b></h2><tr>
	<th>Name</th>
	<th>Email</th>
	<th>Mobile</th>
	<th>Transaction ID</th>
	<th>Address</th>
	<th>Bkash Number</th>
	</tr>";
	
while($row=mysqli_fetch_assoc($res)){
	$name=$row['username'];
	$email=$row['email'];
	$mobile=$row['mobile'];
	$txid=$row['txid'];
	$add=$row['address'];
	$bkash=$row['bkash'];
	$code=$row['code'];
	echo "<tr>
	<td>$name</td>
	<td>$email</td>
	<td>$mobile</td>
	<td>$txid</td>
	<td>$add</td>
	<td>$bkash</td>
	</tr>";

}
}
else {
	echo "<h1>Not found any Order!</h1>";
}
}
?>

<?php 
$connect=mysqli_connect("127.0.0.1:3307","root","","onlinemarketing") or die("Connection Failed");

$sql="select * from admin";
$res = mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($res);
$email=$row['email'];
	$sql="select * from video where email='$email'";
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
	<h1><b>Product Type:</b> $type </br><b>Product Code:</b> $code </br><b>Product Price:</b> $price tk</br><b>bKash Number:</b> $bkash</br>
	<button><a href=delete.php><b>Delete Product</b></button></a></h1>
	</td></tr>";
}
}



?>

</table>
<center>
</br></br></br>
<div class="dd" id="footer"><h4 align="center">@Don't forget something that makes you HAPPY.  #CONTACT: 01521525841</h4></div>
</div>

</body>
</html>