<?php
@ session_start();
	if(!empty($_SESSION["adminlogin"]))
	{
	$suname=$_SESSION["adminlogin"];
	}
	else
	{
	header("location:login.php");
	}
	?>