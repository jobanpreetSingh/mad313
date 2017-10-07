<?php
include_once("config.php");
include_once("session.php");


if (isset($_POST['submit'])) {
		$name = $_POST['name'] ;
		$emp_id = $_POST['emp_id'] ;
		$annual_pay = $_POST['annual_pay'] ;
		$tax = $_POST['tax'] ;
		$monthly_pay = $_POST['monthly_pay'] ;
		$netsalary = $_POST['net'] ;
		$create = date("Y-m-d") ;
		
		$sqls=mysqli_query($con,"INSERT INTO payroll(name, emp_id, annual_pay, tax, monthly_pay, netsalary,createat) VALUES  ('$name','$emp_id','$annual_pay','$tax','$monthly_pay','$netsalary','$create') ");
		
		
		if($sqls){
			$msg=' <div class="alert alert-success">
    <strong>Success! </strong> Pay  Add Successfully.
   </div>';
		}
		else{
			$msg=' <div class="alert alert-danger">
    <strong>Sorry!</strong> Pay Not Add.
  </div>' . mysqli_error($con);
		}
		
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Add Pay </title>
	<style>
	.addapps{
		background-color: #f9f6f1;
		
	}
	.hider{
		display:none;
	}
	</style>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
	  <script src="js/jquery.min.js"></script>
	

  </head>
  <body>
  <?php
  include("menu.php");
  ?>
  
  <div>

    <h3 class="text-center">Add Pay !</h3>
	<div class="col-md-10">
	<form class="form-horizontal"  enctype="multipart/form-data" role="form" method="post" >
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Employee Name</label>
		<div class="col-sm-10">
			 <select  name="name"  class="form-control clientType"onchange="Printname(this)" required="">
							<option value="" ></option>
				 <?php
				 $q=mysqli_query($con,"SELECT * FROM employee ORDER BY name ASC");
				
				  while($r=mysqli_fetch_assoc($q))
				  {
					  
					   $catname=$r['name'];
					   $bid=$r['id'];
					  echo "<option value='$catname' data-name='".$r['employee_id']."' data-basic='".$r['basic_pay']."' > $catname</option>";
				  }
				  ?>
                  
                </select>
			
		</div>
	</div>
	
	<div class="form-group hider" >
		<label  class="col-sm-2 control-label">Employee ID</label>
		<div class="col-sm-10">
				<input type="text" class="form-control" id="printname" name="emp_id" value="0" readonly="">
		</div>
	</div>
	<div class="form-group hider" >
		<label  class="col-sm-2 control-label">Annual Basic Pay</label>
		<div class="col-sm-10">
				<input type="text" class="form-control" name="annual_pay" id="printbasic" value="0" readonly="">
		</div>
	</div>
	
	<div class="form-group">
		<label  class="col-sm-2 control-label">Monthly Pay</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="printmpay" name="monthly_pay" value="0" readonly="">
		</div>
	</div>
	
	
	<div class="form-group hider" >
		<label  class="col-sm-2 control-label">Tax</label>
		<div class="col-sm-10">
				<input type="text" class="form-control" id="printtax" name="tax" value="0" readonly="">
		</div>
	</div>
	<div class="form-group hider" >
		<label  class="col-sm-2 control-label">Tax Amount</label>
		<div class="col-sm-10">
				<input type="text" class="form-control" id="printtaxamt" name="taxamt" value="0" readonly="">
		</div>
	</div>
	
	
	<div class="form-group hider" >
		<label  class="col-sm-2 control-label">Net Salary</label>
		<div class="col-sm-10">
				<input type="text" class="form-control" id="printnet" name="net" value="0" readonly="">
		</div>
	</div>
	
	
	
	
	
	
	
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
		</div>
	</div>
	<input type="hidden" id="addSectionCount" value="1" name="addSectionCount">
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<?php  if(isset($msg))
			{
				echo $msg;
			}
				?>
		</div>
	</div>
</form>
</div>
</div>

</div>


    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
	<script>

	function Printname(a){
		
$('.clientType').click(function () {
 basic=$('option:selected', this).attr('data-basic');
 
 var tax=get_taxed_salary(basic);
 var monthpay =basic/12;
 var taxamt=monthpay * (tax /100.0);
 var netsal=monthpay-taxamt;
 $('#printname').val($('option:selected', this).attr('data-name'));
  $('#printbasic').val($('option:selected', this).attr('data-basic'));
  $('#printmpay').val("$"+monthpay);
 $('#printtax').val(tax+"%");
 $('#printtaxamt').val("$"+taxamt);
  $('#printnet').val("$"+Math.ceil(netsal));


	})
}


function get_taxed_salary(salary){
  if (salary <= 45916 ){
    return 15;
  };
   if ((salary >= 45916) && (salary <= 91831)){
    return 20.5;
  };
  if ((salary >= 91831) && (salary <= 142353)){
    return 26;
  };
  if ((salary >= 142353)  && (salary < 202800)){
	  return 29;
  };
   if (salary >= 202800){
	  return 33;
  };
 

}
	</script>
	
	<script type="text/javascript">
	$(document).ready(function(){
  $('.clientType').change(function () {
  $(".hider").show('slow');
   });
});
	</script>
  </body>
</html>

