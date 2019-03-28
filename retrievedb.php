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
	$sqlquery="SELECT * FROM `items` WHERE 1 ORDER BY `Item_ID`";
	$result=$conn->query($sqlquery);
	session_start();
	if($_SESSION['loggedin']!=true)
	{
		echo "you are not logged in";
		header("location:login.php");
	}
	else
	{

	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			echo "Item Name:".$row["Item_Name"]."&nbsp; &nbsp"."Item ID:".$row["Item_ID"]."&nbsp &nbsp"."Item Price:".$row["Item_Price"];
			?>
			<a href="/DBMS/delete.php?id=<?php echo $row['Item_ID'];?>"><button>Delete</button></a>
			<a href="/DBMS/edit.php?id=<?php echo $row['Item_ID'];?>"><button>Edit</button></a>
			<?php
			echo "<br>";
		}
	}
	}
?>
<br>
<a href="inventory.php"><button>Enter items into Inventory</button></a>
<br><br><br>
<a href="logout.php">LOGOUT</a>