<?php
	session_start();
	$servername="localhost";
	$username="root";
	$password="";
	$db="inventory";
	$conn=mysqli_connect($servername,$username,$password,$db);
	if(!$conn)
	{
		die("Connection Failed:".mysqli_connect_error());
	}
	//if($_SESSION['loggedin']==true)
	{
	$value=$_SESSION['again'];
	$Item_Name=$_POST['Item_Name'];
	echo "SUCCESSFULLY ENTERED VALUES INTO TABLE";
	$Item_Price=$_POST['Item_Price'];
	$Item_ID=$_POST['Item_ID'];
	$sqlquery="INSERT INTO `items`(`Item_Name`, `Item_ID`, `Item_Price`) VALUES ('$Item_Name','$Item_ID','$Item_Price')";
	$conn->query($sqlquery);	
	}
	header("location:/DBMS/retrievedb.php");
?>