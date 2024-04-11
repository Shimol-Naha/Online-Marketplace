<?php 
$connect=mysqli_connect("127.0.0.1:3307","root","","adminlogin") or die("Connection Failed");
if(isset($_POST['un']) && isset($_POST['pw']))
{
	$username=$_POST['un'];
	$password=$_POST['pw'];
	if(!empty($username) && !empty($password)){
	$query="select id from admin where username='$username' && password='$password'";
	$sql_result=mysqli_query($connect,$query);
	$c=mysqli_num_rows($sql_result);
	if($c>0)
	{
		echo "Login Successful";
	}
	else echo "Login Unsuccessful";
	}
}
?>

<form action="connection.php" method="POST">
 Username : <input type="text" name="un"><br/>
 Password : <input type="password" name="pw"><br/>
 <input type="submit" value="Login">
</form>