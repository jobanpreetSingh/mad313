<?php
include("config.php");
include_once("session.php");
@session_start();

?>
<?php
$ID=$_GET['emp'];
$fsql=mysqli_query($con,"SELECT * FROM employee WHERE id='$ID' ");
$r=mysqli_fetch_assoc($fsql);
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
	
	
		$sqls=mysqli_query($con,"UPDATE employee SET name='$name',gender='$gender',address='$address',city='$city',postal='$postal',province='$province',email='$email',join_date='$dob',employee_id='$stdid',basic_pay='$basic' ");
		
		
		if($sqls){
			$msg=' <div class="alert alert-success">
    <strong>Success! </strong> Employee Detail Update.
   </div>';
		}
		else{
			$msg=' <div class="alert alert-danger">
    <strong>Sorry!</strong> Employee Detail Not Update .
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
        
   
<h1 class="text-center">Update Employee' details</h1>
<div class="row">
  
     
                <div class="col-lg-12">
                    <h1 class="page-header">Update Employee</h1>
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
							<div class="col-sm-6 form-group">
								<label> Name</label>
								<input type="text" value="<?php echo $r['name'] ?>" class="form-control" name="name" required>
							</div>
							<div class="col-sm-6 form-group">
								<label>Employee ID</label>
								<input type="text" value="<?php echo $r['employee_id'] ?>" class="form-control" name="stdid" required>
							</div>
						</div>					
						<div class="form-group">
							<label>Address</label>
							<textarea  name="address" rows="3" class="form-control"><?php echo $r['address'] ?></textarea>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>City</label>
								<input type="text" name="city" value="<?php echo $r['city'] ?>" class="form-control" required>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Province</label>
								<input type="text" name="province" value="<?php echo $r['province'] ?>" class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Postal Code</label>
								<input type="text" name="postal" value="<?php echo $r['postal'] ?>" class="form-control">
							</div>		
						</div>
						<div class="row">
							<div class="col-sm-12 form-group">
								<label>Email Address</label>
						<input type="text" name="email" value="<?php echo $r['email'] ?>" class="form-control" required>
							</div>		
								
						</div>						
						
					<div class="form-group">
						
						<label>Gender</label>
								<select  class="form-control"  name="gender" required>
									<option value="male">Male</option>
									<option value="female">Female</option>
									
								  </select>
					</div>	
					<div class="row">
							<div class="col-sm-6 form-group">
								<label>Join date</label>
						<input type="text" name="dob" value="<?php echo $r['join_date'] ?>" id="dob" class="form-control" required>
							</div>		
							<div class="col-sm-6 form-group">
								<label>Annual Basic Pay</label>
						<input type="text" name="basic" value="<?php echo $r['basic_pay'] ?>" class="form-control" >
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