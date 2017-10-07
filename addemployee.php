<?php
include("config.php");
include_once("session.php");
@session_start();

?>
<?php

if(isset($_POST['reg'])){
	
		$name = $_POST['name'] ;
		$stdid = $_POST['stdid'] ;
		$address = $_POST['address'] ;
		$city = $_POST['city'] ;
		$province = $_POST['province'] ;
		$postal = $_POST['postal'] ;
		$email = $_POST['email'];
	
		$gender=$_POST['gender'];
		$basic=$_POST['basic'];
		$dob=$_POST['dob'];
	
		$sqls=mysqli_query($con,"INSERT INTO employee(name, gender, address, city, postal, province, email, join_date, employee_id, basic_pay) VALUES  ('$name','$gender','$address','$city','$postal','$province','$email','$dob','$stdid','$basic') ");
		
		
		if($sqls){
			$msg=' <div class="alert alert-success">
    <strong>Success! </strong> Employee Successfully.
   </div>';
		}
		else{
			$msg=' <div class="alert alert-danger">
    <strong>Sorry!</strong> Employee Not Success .
  </div>';
		}

      
}

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
        <link rel="stylesheet" href="datepicker/datepicker3.css">
  </head>
  <body>

<?php
include("menu.php");

?>
	
      <div class="container">
        
   
<h1 class="text-center">Add Employee</h1>
<div class="row">
  
     
                <div class="col-lg-12">
                    <h1 class="page-header">Add Employee</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
      
            <div class="row">
                <div class="col-lg-12">
                  
                       
                        <!-- /.panel-heading -->
         

					<?php  
				if(isset($msg))
			{
			echo $msg;
			}
				?>
  
	<br>
	<div class="col-md-10  well">
	<div class="row">
				<form method="post">
					<div class="col-sm-12 " >
						<div class="row">
							<div class="col-sm-12 form-group">
							
							<label>Employee ID</label>
								<input type="text" placeholder="Enter Student ID Here.." class="form-control" name="stdid" required>
							
								
							</div>
							<div class="col-sm-12 " >
						<div class="row">
							
							<div class="col-sm-12 form-group">
								<label> Employee Name</label>
								<input type="text" placeholder="Enter Name Here.." class="form-control" name="name" required>
							</div>
							
						</div>					
						
						<div class="row">
							<div class="col-sm-12 form-group">
								<label>City</label>
								<input type="text" name="city" placeholder="Enter City Name Here.." class="form-control" required>
							</div>	
							<div class="col-sm-12 form-group">
								<label>Province</label>
								<input type="text" name="province" placeholder="Enter Province  Here.." class="form-control">
							</div>	
							<div class="col-sm-12 form-group">
								<label>Postal Code</label>
								<input type="text" name="postal" placeholder="Enter Postal Code Here.." class="form-control">
							</div>	
						</div>
						<div class="row">
							<div class="col-sm-12 form-group">
								<label>Email Address</label>
						<input type="text" name="email" placeholder="Enter Email Address Here.." class="form-control" required>
							</div>	</br>	
								
						</div>						
						
					<div class="form-group">
						
						<label>Gender</label>
								<select  class="form-control"  name="gender" required>
									<option value="male">Male</option>
									<option value="female">Female</option>
									
								  </select>
					</div>	
					<div class="row">
							<div class="col-sm-12 form-group">
								<label>Join date</label>
						<input type="text" name="dob" placeholder="Enter Birth date Here.." id="dob" class="form-control" required>
							</div>		
							<div class="col-sm-12 form-group">
								<label>Annual Basic Pay</label>
						<input type="text" name="basic" placeholder="Annual Basic Pay" class="form-control" >
							</div>	
						</div>	
					<input type="submit"  name="reg" class="btn btn-info" value="Submit">					
					</div>
				</form> 
				</div>
	</div>
	
             
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
               
            <script src="js/bootstrap.js"></script>
			<script src="datepicker/bootstrap-datepicker.js"></script>
			<script>
			
		 $('#dob').datepicker({
			  format: "yyyy-mm-dd",
					autoclose: true
     
    });
			</script>
  </body>
</html>