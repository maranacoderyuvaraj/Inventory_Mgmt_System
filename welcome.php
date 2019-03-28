<?php
	session_start();
	echo "You are logged in as ".$_SESSION['username'];
?>
<html>
	<form action="/DBMS/inventory.php">
		<button>Add Item to Inventory</button>
	</form>
	<form action="/DBMS/retrievedb.php">
		<button>View Inventory</button>
	</form>
</html>


<br><br><br>
<a href="logout.php"><button>LOGOUT</button></a>
