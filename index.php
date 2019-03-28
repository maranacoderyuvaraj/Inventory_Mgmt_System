<?php
	$servername="localhost";
	$username="root";
	$password="";
	$db="inventory";
	$conn=mysqli_connect($servername,$username,$password,$db);
	if(!$conn)
	{
		die("Connection Failed:".mysqli_connect_error());
	}
//	$EmailID=$_POST['email'];
//	$Password=$_POST['password'];
//	$sql="INSERT INTO `login`(`EmailID`, `Password`) VALUES ('$EmailID','$Password');";
//	$result=$conn->query($sql);
	session_start();
?>
<html>
	<form action="/DBMS/login.php">
		<button>Log In</button>
	</form>
	<form action="/DBMS/register.php">
		<button>Register Now</button>
	</form>
</html>