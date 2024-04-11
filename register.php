
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
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

<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body bgcolor="ffc0cb">
<div id="full">
<div id="inner_full"></br></br>
<h1><marquee behavior="alternate" bgcolor="powderblue" direction="left" scrollamount="10">Register Here</marquee></h1></br></br>
<div id="body">
</br>
<form action="" method="post">
<center>
<table>

<tr>
<td><font size="6">Full Name:</font></td>
<td><input type="text" name="un" required></input></td>
</tr>
<tr>
<td><font size="6">Email:</font></td>
<td><input type="email" name="email" required ></input></td>
</tr>
<tr>
<td><font size="6">Mobile:</font></td>
<td><input type="text" name="mobile" required pattern="[0][1][0-9]{9}" minlength="11" maxlength="11"></input></td>
</tr>
<tr>
<td><font size="6" >Password :</font></td>
<td><input type="password" name="pw" required minlength="5" maxlength="15"></input></td>
</tr>
</table></br></br>
<input type="submit" value="Register" name="sub" style="background-color: blue; border-radius:7px;color: white;padding: 8px 15px;font-family:Georgia;font-size: 20px;"/>


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
 $Password=$_POST["pw"];
 $query="select * from admin where mobile='$mobile'";
 $mysql_result=mysqli_query($connect,$query);
 $s_count=mysqli_num_rows($mysql_result);
 if($s_count==0){
 $sql="insert into admin(username,email,mobile,password) values('".$Username."','".$email."','".$mobile."','".$Password."')";
if(mysqli_query($connect,$sql))
{
header('location:admin.php');
	
}
 }
else
{
?>
	<script type="text/javascript">alert('Registration Failed');</script>
<?php	
	echo"<center>Username already exists. Please enter a different username.".mysqli_error($connect);
}

}
?></br></br>
</body>
</html>