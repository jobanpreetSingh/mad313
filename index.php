<?php
include("config.php");
include_once("session.php");
@session_start();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=us-ascii">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Payroll</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
   <script src="js/jquery.min.js"></script>
  
  </head>
  <body>

<?php
include("menu.php");

?>
	
      <div class="container">
        
   
<h1 class="text-center"> Dashboard</h1>
<div class="row">
        <div class="col-md-12">
<div class="market-updates">
			<div class="col-md-6 market-update-gd">
			<a href="employee.php">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
						<h3><?php $sqls=mysqli_query($con,"SELECT * FROM employee");
	echo $number=mysqli_num_rows($sqls); ?></h3>
						<h4>Total Employee</h4>
						<p>&nbsp;</p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-file-text-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
				</a>
			</div>
			<div class="col-md-6 market-update-gd">
				<a href="addemployee.php">
				<div class="market-update-block clr-block-3">
				 <div class="col-md-8 market-update-left">
					<h3> &nbsp; </h3>
	
					<h4>Add Employee </h4>
				<p>&nbsp;</p>
				  </div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
				</a>
			</div>
			
		   <div class="clearfix"> </div>
		</div>
		  
        </div>

    
   
   
   
   
      <div class="container">
        
   

<div class="row">
        <div class="col-md-12">
<div class="market-updates">
			<div class="col-md-6 market-update-gd">
			<a href="employee.php">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
						<h3><?php $sqls=mysqli_query($con,"SELECT * FROM employee");
	echo $number=mysqli_num_rows($sqls); ?></h3>
						<h4>Manage Employee</h4>
						<p>&nbsp;</p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-file-text-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
				</a>
			</div>
			<div class="col-md-6 market-update-gd">
				<a href="payroll.php">
				<div class="market-update-block clr-block-3">
				 <div class="col-md-8 market-update-left">
					<h3> &nbsp; </h3>
	
				 
					<h4>Manage Payroll </h4>
				<p>&nbsp;</p>
				  </div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
				</a>
			</div>
			
		   <div class="clearfix"> </div>
		</div>
		  
        </div>


    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>
