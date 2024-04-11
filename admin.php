
<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
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
	
	width:40%;
	
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

</head>
<body bgcolor="ffc0cb">
<div id="full">
<div id="inner_full"></br></br>
<h1><marquee behavior="alternate" bgcolor="powderblue" direction="left" scrollamount="10">Please Login First</marquee></h1></br></br>
<div id="body">
</br>
<form action="" method="post">
<center>
<table>

<tr>
<td><font size="6">Enter Mobile No</font></td>
<td><input type="text" name="mobile" required pattern="[0][1][0-9]{9}" minlength="11" maxlength="11"></input></td>
</tr>
<tr>
<td><font size="6" >Enter Password</font></td>
<td><input type="password" name="pw" required></input></td>
</tr></table>
</br></br>
<input type="submit" value="Login" name="sub" style="background-color: blue; border-radius:7px;color: white;padding: 8px 15px;font-family:Georgia;font-size: 16px;"/>

</center>
</form>
</div>
<?php 
$connect=mysqli_connect("127.0.0.1:3307","root","","onlinemarketing") or die("Connection Failed");
if(isset($_POST['mobile']) && isset($_POST['pw']))
{
	$mobile=$_POST['mobile'];
	$password=$_POST['pw'];
	if(!empty($mobile) && !empty($password)){
	$query="select id from admin where mobile='$mobile' && password='$password'";
	$sql_result=mysqli_query($connect,$query);
	$s_count=mysqli_num_rows($sql_result);
	if($s_count>0)
	{
		header('location:marketing.php');
	}
	else echo "<center>Login Unsuccessful</center>";
	}
}
?><br><br>
<div class="a">
<td><b><center>Not a member?<a href="http://localhost/marketing/register.php"> Register Here</a></center></b></td>
</div>
</body>
</html>