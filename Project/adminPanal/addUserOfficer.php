<?php 
include('db.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Add USER officer</title>
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
            <?php include 'formHeader.php'; ?>
  </div>
  <div class="container" style="margin-top: 25px;margin-left: 150px;">
    <h1>Register Office User</h1>
  </div>
  
  <div class="container custom">
  <form method="post" action="addUserOfficer.php">
  		<div class="form-group">
    		<label>Name</label>
        	<input type="text" class="form-control" name="name" placeholder="Type Your Name Here"
            data-validation="required">
    	</div>
    
    	<div class="form-group">
    		<label>Address</label>
        	<textarea class="form-control" name="address" placeholder="Type Your Address Here"
            data-validation="required"></textarea>
    	</div>
        
        <div class="form-group">
    		<label>NIC number</label>
        	<input type="text" class="form-control" name="nic" 
            data-validation="length" data-validation-length="10-10"  
            data-validation-error-msg="Telephone Number has to be a 10 numbers"              
            placeholder="eg:93XXXXXXXv">
    	</div>
        
        <div class="form-group">
    		<label>Telephone Number</label>
        	<input type="text" class="form-control" name="tp" 
             data-validation="length" data-validation-length="9-10" 
             data-validation-error-msg="Telephone Number has to be a 10 numbers"
             placeholder="Type your telephone Number">
    	</div>
        
        <div class="form-group">
    		<label>email</label>
        	<input type="email" class="form-control"  name="email" placeholder="Enter your e-mail address"
            data-validation="email">
    	</div> 
        
        <div class="form-group">
    		<label>Position</label>
        	<input type="text" class="form-control" name="position" placeholder="Type your Office Position Here "
            data-validation="required">
    	</div>
        
        <div class="form-group">
    		<label>User Name</label>
        	<input type="text" class="form-control" name="un" placeholder="user name" 
            data-validation="required">
    	</div>
        
    	<div class="form-group">
    		<label>Password</label>
        	<input type="password" name="pw" class="form-control"
            data-validation="length alphanumeric" 
		 data-validation-length="8-16"  >
    	</div>
    
        
    	<div class="form-group">
        	<input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </div>
  </form> 
  
  
		<?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $Address = $_POST['address'];
			$email = $_POST['email'];
            $NIC_number = $_POST['nic'];
            $telephone = $_POST['tp'];
            $position = $_POST['position'];
            $User_Name = $_POST['un'];
            $password = $_POST['pw'];
            $userCategory = 2;
            
			$encrypt = md5($password);     
            
            $query="INSERT INTO userlogin (userName,password,userCategory) VALUES('".$User_Name."','".$encrypt."','".$userCategory."')";
                    
		
		if (mysqli_query($conn, $query)) {
		$queryNew = mysqli_query($conn,"SELECT max(id) from userlogin" );  
		
		while($row=mysqli_fetch_array($queryNew)){
					$lastid = $row['max(id)'];		
					 $query2 = "INSERT INTO zonelofficestaff (id,staffName,address,NIC,telNo,email,position) VALUES('".$lastid."','".$name."','".$Address."','".$NIC_number."','".$telephone."','".$email."','".$position."')";
							
					if(mysqli_query($conn, $query2)){
					echo "New record created successfully";
					}
					else {
        			echo "Error: " . $query2 . "<br>" . mysqli_error($conn);
    				}
					
		}
	} 
	
	else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
		
            
 mysqli_close($conn);
 }
?>  
     </div>
  
  
  
  
   
  </div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.form-validator.min.js"></script>
    <script>
  $.validate({
    lang: 'en'
  });
</script>
    	<?php include 'adminFooter.php'; ?>
     </body>
</html>