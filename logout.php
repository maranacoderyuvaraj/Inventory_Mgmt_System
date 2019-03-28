<?php
	session_start();
	session_destroy();
	echo "you have been successfully logged out";
	sleep(0.5);
	header("location:login.php");
?>