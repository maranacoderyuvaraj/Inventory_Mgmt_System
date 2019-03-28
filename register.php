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
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$EmailID=$_POST['email'];
		$Password=$_POST['password'];
		$Username=$_POST['uname'];
		$Hashpassword = password_hash($Password, PASSWORD_DEFAULT);
		$sqlquery="INSERT INTO `login`(`EmailID`, `Password`,`userName`) VALUES ('$EmailID','$Hashpassword','$Username')";
		$conn->query($sqlquery);
		header("location:login.php");
	}
?>

<html>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		Name:<input type="name" name="uname" placeholder="Enter Username">
		<br>
		E-Mail:<input type="email" name="email" placeholder="Enter Email">
		<br>
		Password:<input type="password" name="password" placeholder="Enter Password">
		<br>
		<button type="submit">Register</button>
	</form>
</html>