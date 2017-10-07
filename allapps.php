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
    <title>Show All Application</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css">
   <script src="js/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <script type="text/javascript" class="init">
      $(document).ready(function() {
      	$('#example').dataTable();
      } );      	
    </script>
  </head>
  <body>

<?php
include("menu.php");
?>
	
      <div class="container">
        
   
<h1 class="text-center"> Update Data</h1>
        <div class="col-md-12">
		 <?php  
		 if(isset($_SESSION['delitem']))
		 {
			 echo $_SESSION['delitem'];
			 unset($_SESSION['delitem']);
		 }
		 ?>
          <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>S. No</th>
				<th>Icon</th>
                <th>App Name</th>
                <th>Url</th>
				<th>Price</th>
                <th>Description</th>
				<th>Edit</th>
				<th>Delete</th>
              </tr>
            </thead>
            <tbody>
			<?php
			$i=0;
			$sql=mysqli_query($con,"SELECT * FROM appsdata ORDER BY id DESC");
			while ($row=mysqli_fetch_assoc($sql) )
			{
			$i=++$i;
			$id=$row['id'];
			?>
              <tr>
                <td><?php echo $i; ?></td>
				<td ><img src="images/<?php echo $row['image'] ?>" height="50px" width="50px"></td>
                <td><?php echo $row['name']; ?></td>
                <td ><a href=""><?php echo $row['url']; ?></a></td>
				 <td ><?php echo $row['price']; ?></td>
                <td > <?php $des= substr($row['des'],0,100) . "...";
						echo $des;
				?> </td>
				   <td ><a href="edit.php?edit=<?php echo $id ?>" class="btn btn-success">Edit</a></td>
				    <td ><a href="delete.php?delete=<?php echo $id ?>&iname=<?php echo $row['image']; ?>" class="btn btn-danger" data-toggle="modal" 
           onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
              </tr>
             <?php
			}
			?>
            </tbody>
          </table>
		  
        </div>

         

    </div>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>