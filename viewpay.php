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
  	<style type="text/css" media="print" >
		
	
		

@page {
    size: auto;  
    margin: 0; 
}
    @media print
        {
            .no-print, .no-print *
            {
                display: none !important;
            }
        }
		
	</style>
  </head>
  <body>

<?php
$ID=$_GET['pay'];
include("menu.php");
 $sql=mysqli_query($con,"SELECT * FROM payroll  WHERE id='$ID' ");
   $row=mysqli_fetch_assoc($sql);
?>





<div class="container">
    <div class="row">
	 
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
		
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>Baljit Canada Company </strong>
                        <br>
                       157 Cockburn St, Campbellford,
                        <br>
                       ON K0L 1L0, Canada
                        <br>
                   
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date: <?php  date('d-M-Y', strtotime($row['createat']))  ?> </em>
                    </p>
                    <p>
                        <em>Slip #: 00000<?php echo $row['id'] ?></em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                   
                    <h1>Pay Slip</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th> </th>
                            <th class="text-center"> </th>
                            <th class="text-center"><?php echo $row['name'] ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em>Employee ID</em></h4></td>
                            <td class="col-md-1" style="text-align: center">  </td>
                            <td class="col-md-1 text-center"></td>
                            <td class="col-md-1 text-center"><?php echo $row['emp_id'] ?></td>
                        </tr>
                        <tr>
                            <td class="col-md-9"><em>Monthly Pay</em></h4></td>
                            <td class="col-md-1" style="text-align: center">  </td>
                            <td class="col-md-1 text-center"></td>
                            <td class="col-md-1 text-center"><?php echo $row['monthly_pay'] ?></td>
                        </tr>
                        <tr>
                            <td class="col-md-9"><em>Tax</em></h4></td>
                            <td class="col-md-1" style="text-align: center">  </td>
                            <td class="col-md-1 text-center"></td>
                            <td class="col-md-1 text-center"><?php echo $row['tax'] ?></td>
                        </tr>
                    
                        <tr>
                          
                            <td class="text-right"><h4><strong>Net pay salary</strong></h4></td>
                            <td class="text-center text-danger"><h4><strong><?php echo $row['netsalary'] ?></strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                <div>
                  
                    
                </div>
            </div>
        </div>
    </div>
	<div class="col-md-6 col-md-offset-3">
	 <button class='text-center no-print btn btn-success'  onClick="window.print();">Click Here to Print</button>
	</div>
	   
            <script src="js/bootstrap.js"></script>