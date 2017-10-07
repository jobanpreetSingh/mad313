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
        
   
<h1 class="text-center">Manage Employee</h1>
<div class="row">
  
     
                <div class="col-lg-12">
                    <h1 class="page-header">Employee</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        <?php 
					@session_start() ;
					if(isset($_SESSION['error']))
					{
			echo '<div class="alert alert-warning text-center" id="fade">';
			   echo $_SESSION['error'] ;
				   unset($_SESSION['error']);
				   echo '</div>';
						
				
					}
					?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Employee
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                       
                                        <th>Name</th>
                                        <th>Emp Id</th>
                                        <th>Join Date</th>
                                        <th>Email</th>
										<th>Basic Pay</th>
										<th>Action</th>
                                    </tr>
                                </thead>
                               
							   <tbody>
				<?php
				
				$sql=mysqli_query($con,"SELECT * FROM employee ORDER BY id DESC ");
				
				while($row=mysqli_fetch_assoc($sql)){
					$id=$row['id'];
				?>
                <tr>
                  <td> <?php echo $row['name'];  ?> </td>
                  <td> <?php echo $row['employee_id'];  ?> </td>
                  <td> <?php echo $row['join_date'];  ?> </td>
                  <td> <?php echo $row['email'];  ?> </td>
                  <td> $<?php echo $row['basic_pay'];  ?> </td>
                  <td class="view">
				   <a style="cursor:pointer" title="Edit" href="editemployee.php?emp=<?php echo $id ?>"> <img src="img/edit.png" alt="Edit"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a style="cursor:pointer" title="Delete" onclick="return confirm('Are you sure you want to delete this employee ?');" href="delete.php?emp=<?php echo $id ?>"> <img src="img/close.png" alt="Delete"></a> </td>
                 
                  
                </tr>
               <?php
				}
				?>
                
               
               
                </tbody>
                            </table>
                          
                         
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
               
            <script src="js/bootstrap.js"></script>
  </body>
</html>