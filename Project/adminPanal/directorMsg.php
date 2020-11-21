<?php 
include('db.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>director Message UPDATE</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
            .custom{
  				width:45%;
				height::75%;
  				margin-top: 10px;
    			margin-bottom: 100px;
    			margin-right: 150px;
    			margin-left: 150px;
  				min-width:350px;
                }
	</style>

  </head>
  <body>
  <div id="container">
            <?php include 'optionHeader.php'; ?>
  </div>
  <div class="container" style="margin-top: 25px;margin-left: 150px;">
    <h1>Director's Message Update</h1>
  </div>
  
  <div class="container custom">
  <form method="post" action="directorMsg.php" id="form">
  		<div class="form-group">
    		<label>Heading</label>
        	<input type="text" name="heading" class="form-control" placeholder="Enter Message Heading Here" 
            required>
    	</div>
    
    	<div class="form-group">
    		<label>Message</label>
        	<textarea class="form-control" name="message" placeholder="Enter The entier Message Here"
            rows="7"
            required></textarea>
    	</div>
        
    	<div class="form-group">
        	<input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </div>
  </form>
  <?php
  if(isset($_POST['submit'])){
		$heading = $_POST['heading'];
		$message = $_POST['message'];
		
		$query = "UPDATE `directormsg` SET heading='".$heading."' ,`message` = '".$message."' WHERE `directormsg`.`id` = 1;";
		
		if(mysqli_query($conn, $query)){
					echo "<div id='myModal1' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header bg-success text-white'>
        
        
		<h4 class='modal-title'>Successfully Updated!!</h4>
		<button type='button' class='close' data-dismiss='modal'>&times;</button>
      </div>
      <div class='modal-body'>
        <p>You Have Successfully Updated directors massage for all users.</p>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-success' data-dismiss='modal'>Close</button>
      </div>
    </div>

  </div>
</div> ";
		}
		
		else{
				echo "<div id='myModal1' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header bg-danger text-white'>
        
        
		<h4 class='modal-title'>Fail to Updated!!</h4>
		<button type='button' class='close' data-dismiss='modal'>&times;</button>
      </div>
      <div class='modal-body'>
        <p>YSorry!.Try Again.</p>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-success' data-dismiss='modal'>Close</button>
      </div>
    </div>

  </div>
</div> ";
			}
  }

						
 ?>  
 </div>

		<br>
<?php include 'adminFooter.php'; ?>
        <script type="text/javascript"  src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
<script> $(document).ready(function () {
                // Show the Modal on load
                $('#myModal1').modal('show');
});</script>
     </body>
</html>
