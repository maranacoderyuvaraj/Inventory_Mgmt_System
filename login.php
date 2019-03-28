<?php

session_start();

if(isset($_SESSION['error']))
{
	$error=$_SESSION['error'];
}
else
{
	$error="";
}

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=true)
{
	header("location:welcome.php");
	exit;
}

?>

<html>
	<body>
		<form action="logincheck.php" method="post">
			<input type="email" name="email" placeholder="Enter Email" required="required">
			<input type="password" name="password" placeholder="Enter Password" required="required">
			<button type="submit">Login</button>
		</form>
		<?php echo $error; ?>
		<br><br><br>
		Don't have an account? <a href="register.php">Register</a>
	</body>
</html>