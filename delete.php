<?php
include_once("config.php");
include_once("session.php");

	 if(isset($_GET['emp'])){
	 $ID=$_GET['emp'];
	 $del=mysqli_query($con,"DELETE FROM employee WHERE id='$ID' LIMIT 1 ");
	 if($del){
		 $_SESSION['error'] = "Employee Delete Successfully";

		header("location:employee.php");
	 }
	 else{
		  $_SESSION['error'] = "Employee Not Delete ";

		header("location:employee.php");
	 }
 }

?>