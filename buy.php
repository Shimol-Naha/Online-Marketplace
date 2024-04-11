<!DOCTYPE html>
<html>
<title>Buy</title>
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
	color:black;
}
table{
	
	width:60%;
	
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

</style>
<body bgcolor="ffc0cb">
<ul>
<li><a href="http://localhost/marketing/user.php">
    <img src="nav.png" alt="Northern Lights" width="60" height="18">
  </a></li>
<li><a href="http://localhost/marketing/marketing.php">Online Marketplace</a></li>
<li><a href="http://localhost/marketing/buyerpage.php">Buy Product</a></li>
<li><a href="http://localhost/marketing/sellerpage.php">Sell Product</a></li>

<li style="float:right"><a href="http://localhost/marketing/home.php">Logout</a></li>
<li style="float:right"><a href="http://localhost/marketing/contact.php">Contact</a></li>
</ul>
<h1><marquee behavior="alternate" bgcolor="powderblue" direction="left" scrollamount="10">After payment, Please Confirm Your Order..</marquee></h1>
<h2><center>If you want to pay on delivary time, you need not fill up you bKash Number and Transaction ID.</br></center></h2>
<div id="body">
</br>
<form action="" method="post">
<center>
<table>

<tr>
<td><font size="6">Your Full Name:</font></td>
<td><input type="text" name="un" required></input></td>
</tr>
<tr>
<td><font size="6">Your Email:</font></td>
<td><input type="email" name="email" required ></input></td>
</tr>
<tr>
<td><font size="6">Your Mobile:</font></td>
<td><input type="text" name="mobile" required pattern="[0][1][0-9]{9}" minlength="11" maxlength="11"></input></td>
</tr>
<tr>
<td><font size="6">Your bKash Number:</font></td>
<td><input type="text" name="bkash"></input></td>
</tr>
<tr>
<td><font size="6">Transaction ID:</font></td>
<td><input type="text" name="txid" ></input></td>
</tr>
<tr>
<td><font size="6">Your Address:</font></td>
<td><input type="text" name="address" required ></input></td>
</tr>
<tr>
<td><font size="6">Product Code:</font></td>
<td><input type="text" name="code" required ></input></td>
</tr>
</table></br></br>
<input type="submit" value="Confirm Order" name="sub" style="background-color: red; cursor: pointer; color: white;padding: 10px 15px;font-family:Georgia;font-size: 20px;"/>

</center>
</form>
</br>
</div>
<?php 
$connect=mysqli_connect("127.0.0.1:3307","root","","onlinemarketing") or die("Connection Failed");
if($_SERVER['REQUEST_METHOD']=='POST')
{
 $Username=$_POST["un"];
 $email=$_POST["email"];
 $mobile=$_POST["mobile"];
 $bkash=$_POST["bkash"];
 $address=$_POST["address"];
 $txid=$_POST["txid"];
 $code=$_POST["code"];
 $sql="insert into buy(username,email,mobile,bkash,txid,address,code) values('".$Username."','".$email."','".$mobile."','".$bkash."','".$txid."','".$address."','".$code."')";
if(mysqli_query($connect,$sql))
{
echo "<center>Your Order Confirmed! Seller will contact you shortly.</center>";	
}
 
}
?></br></br>

<div class="dd" id="footer"><h4 align="center">@Don't forget something that makes you HAPPY.  #CONTACT: 01521525841</h4></div>
</div>
</body>
</html>