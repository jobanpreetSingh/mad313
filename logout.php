<?php
@ session_start();

	session_destroy();
	unset($_SESSION["adminlogin"]);
	header("location: login.php");
	exit();
	
?>