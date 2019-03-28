<?php

session_start();


if($_SESSION['loggedin']!=true)
{
	echo "you are not logged in";
	header("location:login.php");
}
else
{
?>

<html>
	<head>
	</head>
	<body>
		<form action="" method="post">
			<input type="text" name="Item_Name" placeholder="Item Name" required="required">
			<input type="number" name="Item_ID" placeholder="Item ID" required="required">
			<input type="number" name="Item_Price" placeholder="Item Price" required="required">
			<br>
			<button type="submit" name="signup-submit" formaction="/DBMS/enterdb.php">Enter Another Item</button>
			<button type="submit" name="signup-submit" formaction="/DBMS/enterdbalt.php">Finish</button>	
		</form>
	</body>
</html>

<?php

}
	//session_destroy();

?>