<?php 
session_start();
include('db.php');
/*$curruntName=$_SESSION['name'];
$curruntAddress=$_SESSION['address'];
$curruntEmail=$_SESSION['email'];
$curruntTel=$_SESSION['tel'];*/

$userid = $_SESSION['userid'];

	$sql ="SELECT * FROM admin WHERE id='".$userid."'";
			$result = mysqli_query($conn, $sql);
    		$rows = mysqli_num_rows($result);
			if($rows>0){
					while($row=mysqli_fetch_array($result)){

							$name =  $row['adminName'];
							$address =  $row['address'];
							$email =  $row['email'];
							$tel =$row['telNo']; 
						
						
						}
				
			}
		

?>        
<?php

  if(isset($_POST['submit'])){
	  
		$name = $_POST['name1'];
		$address = $_POST['address1'];
		$email = $_POST['email1'];
		$telephone = $_POST['telephone1'];
	
		
		
		$query1 = "UPDATE admin SET adminName = '".$name."' , address = '".$address."', email = '".$email."', telNo = '".$telephone."' WHERE id='".$userid."'";
		
		if(mysqli_query($conn, $query1)){
			echo "<div id='myModal1' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header bg-success text-white'>
        
        
		<h4 class='modal-title'>Success</h4>
		<button type='button' class='close' data-dismiss='modal'>&times;</button>
      </div>
      <div class='modal-body'>
        <p>Successfully Updated!.</p>
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
        
        
		<h4 class='modal-title'>Error</h4>
		<button type='button' class='close' data-dismiss='modal'>&times;</button>
      </div>
      <div class='modal-body'>
        <p>Update Unsuccesfull!.</p>
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
	  
      
      
      <!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>|Wiyaluwa Zonal Education Office|</title>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>

    </head>

    <body>
    
    
    <div >  
            <div class="col-sm-6">
                <div class="panel-primary  col-lg-10 " style="margin-top:100px;margin-left: 450px ;margin-right: 200px ">
                    <form class="form-horizontal" method="post" action="My_account.php" name="change"  >
                    <br>
                    <br>
                     <div class="panel-heading bg-primary">My ACCOUNT SETTINGS </div>
      <div class="panel-body bg-info">
                    <table width="400" border="0" cellspacing="10" cellpadding="10"class="table table-hover">
                        <tr><td>Name</td>
                            <td> <input type="text" class="form-control" name="name1" placeholder="Your Name" value="<?php echo $name?>"
                            data-validation="length" data-validation-length="min1"
                            data-validation-error-msg="Name should be Not Null"></td>
                            
                      
                        </tr><tr>
                            <td>Address</td>
                            <td> <input type="text" class="form-control" name="address1" placeholder="Personal Address" value="<?php echo $address?>"
                            data-validation="length" data-validation-length="min1"
                            data-validation-error-msg="Address should be Not Null"
                            ></td>
                            
                        </tr><tr>
                            <td>Email</td>
                            <td> <input type="email" class="form-control" name="email1"  value="<?php echo $email?>"
                            data-validation="email"></td>
                            
                        </tr><tr>
                            <td>Telephone</td>
                            <td> <input type="text" class="form-control" name="telephone1"  value="<?php echo $tel?>"
                            data-validation="length" data-validation-length="9-10" 
                 			data-validation-error-msg="Telephone Number has to be a 10 numbers"
                            ></td>
                             
                        </tr>
                        <tr>
                            <td></td>
                            <td><button type="submit" value="Changephone" class="btn btn-success  text-primary"name="submit">Change</button></td>
                             
                        </tr>
                        
                                
                    </table>
           </div>
                </form>
                
        

 
 
</div>
</div>
    
    
    
    
    
    
    
    
    
    
     </div>
        </div>
<?php include 'optionHeader.php'; ?>

<?php include'footer.php'; ?>
                <script type="text/javascript"  src="js/jquery-3.2.1.min.js"></script>
                <script type="text/javascript" src="js/bootstrap.min.js"></script>
                    <script src="js/jquery.form-validator.min.js"></script>
    <script>
  $.validate({
    lang: 'en'
  });
</script>    
           
        <script> $(document).ready(function () {
                // Show the Modal on load
                $('#myModal1').modal('show');
});</script>

    </body>

</html>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      

