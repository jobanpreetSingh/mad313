<?php
include_once("config.php");
if (isset($_POST['submit'])) 
{
$user=strtolower($_POST['username']);
$pwd=$_POST['password'];
$sqls=mysqli_query($con,"SELECT * FROM admin WHERE username='$user' AND password='$pwd' ");
$r=mysqli_fetch_assoc($sqls);
if(($r['username']==$user) && ($r['password']==$pwd) )
{
	@ session_start();
	$_SESSION["adminlogin"]=$user;
	header("location: index.php");
}

	else {
			$msg='<div class="alert alert-danger">
  <strong>Wrong!</strong> Username Or Password.
</div>';
            
        }

}
	


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Admin Login </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">


  </head>
  <body>

      <div class="container" style="margin-top:40px">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> Login  to continue</strong>
					</div>
					<div class="panel-body">
						<form role="form"  method="POST">
							<fieldset>
								<div class="row">
									<div class="center-block">
										<img class="profile-img"
											src="img/logo.jpg" alt="">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span> 
												<input class="form-control" placeholder="Username" name="username" type="text" autofocus required>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
												<input class="form-control" placeholder="Password" name="password" type="password" required>
											</div>
										</div>
										<div class="form-group">
											<input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Log in">
										</div>
									</div>
				
								</div>
							</fieldset>
						</form>
						<?php  if(isset($msg)){
								echo $msg;
								}
				?>
					</div>
					
                </div>
			</div>
		</div>
	</div>
  
  </body>
</html>

