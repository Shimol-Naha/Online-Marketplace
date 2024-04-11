<?php 
$connect=mysqli_connect("127.0.0.1:3307","root","","onlinemarketing") or die("Connection Failed");
$sql="select * from admin";
$res = mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($res);
$email=$row['email'];
$sql="delete from video where email='$email'";
$res = mysqli_query($connect,$sql);
header('location:user.php');


?>