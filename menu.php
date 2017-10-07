<style>
.navbar-default
{
	background-color:#6fa3f7
}
.navbar-default .navbar-nav>li>a
{
	color:#fff;
}
.navbar-brand {
  padding: 5px; /* firefox bug fix */
}
.navbar-brand>img {
  height: 100%;
 // padding: 15px; /* firefox bug fix */
  width: auto;
}

</style>
<nav class="navbar navbar-default navbar-static-top" style="">
	<div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"  title="Coding Cage Programming Blog"><img src="img/logo.png" class="img-responsive" ></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li ><a href="index.php" >Home</a></li>
    
			
			<li><a href="addemployee.php" >Add Employee </a></li>
			<li><a href="employee.php" >Manage Employee </a></li>
		
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              Manage Payroll <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="addpayroll.php" >Add Payroll</a></li>
                <li><a href="payroll.php" >Manage Payroll</a></li>
            
              </ul>
            </li>
			
     
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <li align="right" "logout.php" >Logout</a></li>
            
              </ul>
            </li>
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
</nav>
    
    <br />
           