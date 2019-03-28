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
	$editEle=$_GET['id'];
	$sqlquery="SELECT * FROM `items` WHERE `Item_ID`='$editEle'";
	$result=$conn->query($sqlquery);
	session_start();
	$_SESSION['EditID']=$editEle;
	$row=$result->fetch_assoc();
?>
<html>
		<form action="/DBMS/editenter.php" method="post">
			<input type="text" name="Item_Name" placeholder="Item Name" value="<?php echo $row['Item_Name']; ?>">
			<input type="number" name="Item_ID" placeholder="Item ID" value="<?php echo $row['Item_ID']; ?>">
			<input type="number" name="Item_Price" placeholder="Item Price" value="<?php echo $row['Item_Price']; ?>">
			<button type="submit">Enter to DB</button>
		</form>
</html>