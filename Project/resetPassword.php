
<?php

require('db.php');
  if(isset($_POST['login'])){
      $un = $_POST['username'];
	  
      $query = "SELECT * FROM userLogin WHERE userName='".$un."' " ;
	  $result = mysqli_query($conn, $query);
      $rows = mysqli_num_rows($result);
	  
	  if ($rows > 0) {
		  
		  $result =  mysqli_query($conn,"select * from userLogin where username = '".$un."'");
		  
			while($row=mysqli_fetch_array($result)){
				$pw = $row['password'];
				$resultcategory = $row['userCategory'];
				$id = $row['id'];
				
				function random_password($length = 10) {
					$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
					$password = substr(str_shuffle($chars), 0, $length);
					return $password;
				}
				
				$randompass = random_password(10);
				$encryptpass = md5($randompass);
				
				$query2 = "UPDATE userLogin SET password='".$encryptpass."' WHERE userName='".$un."' ";
				
				if(mysqli_query($conn, $query2)){
					
					
					
					if($resultcategory==1){
						$queryAdmin = mysqli_query($conn,"SELECT email FROM admin WHERE id='".$id."'");
						while($row=mysqli_fetch_array($queryAdmin)){
							$email =  $row['email'];
							$subject = 'Reset Your Password ZEO!!';

							$from = 'Zonel Education Office';
							
							// To send HTML mail, the Content-type header must be set

							$headers  = 'MIME-Version: 1.0' . "\r\n";
							
							$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
							
							
							// Create email headers

							$headers .= 'From: '.$from."\r\n".
							
								'Reply-To: '.$from."\r\n" .
							
								'X-Mailer: PHP/' . phpversion();
							
							
							// Compose a simple HTML email message

							$message = '<html><body>';
							
							$message .= '<h1 style="color:#f40;">Hi</h1>';
							
							$message .= '<p style="color:#080;font-size:18px;">Your Password is '.$randompass.'</p>';
							
							$message .= '</body></html>';
							
							
							if(mail($email, $subject, $message, $headers)){
							echo "<div id='myModal1' class='modal fade' role='dialog'>
						  <div class='modal-dialog'>
						
							<!-- Modal content-->
							<div class='modal-content'>
							  <div class='modal-header bg-success text-white'>
								
								
								<h4 class='modal-title'>Password Reset Successfull</h4>
								<button type='button' class='close' data-dismiss='modal'>&times;</button>
							  </div>
							  <div class='modal-body'>
								<p>Your New Password has been sent to your E-mail..!</p>
							  </div>
							  <div class='modal-footer'>
								<button type='button' class='btn btn-success' data-dismiss='modal'>Close</button>
							  </div>
							</div>
						
						  </div>
						</div> ";
							}else{
								
															echo "<div id='myModal1' class='modal fade' role='dialog'>
						  <div class='modal-dialog'>
						
							<!-- Modal content-->
							<div class='modal-content'>
							  <div class='modal-header bg-danger text-white'>
								
								
								<h4 class='modal-title'>Reset Unsuccessfull</h4>
								<button type='button' class='close' data-dismiss='modal'>&times;</button>
							  </div>
							  <div class='modal-body'>
								<p>Fail to Update Password!!..</p>
							  </div>
							  <div class='modal-footer'>
								<button type='button' class='btn btn-success' data-dismiss='modal'>Close</button>
							  </div>
							</div>
						
						  </div>
						</div> ";
							}
						
						}
						
					}
					
					
					
					
					else if($resultcategory == 2){
						$queryofficer = mysqli_query($conn,"SELECT email FROM zonelofficestaff WHERE id='".$id."'");
						while($row2=mysqli_fetch_array($queryofficer)){
							$email =  $row['email'];
							
							$subject = 'Reset Your Password ZEO!!';

							$from = 'Zonel Education Office';
							
							// To send HTML mail, the Content-type header must be set

							$headers  = 'MIME-Version: 1.0' . "\r\n";
							
							$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
							
							
							// Create email headers

							$headers .= 'From: '.$from."\r\n".
							
								'Reply-To: '.$from."\r\n" .
							
								'X-Mailer: PHP/' . phpversion();
							
							
							// Compose a simple HTML email message

							$message = '<html><body>';
							
							$message .= '<h1 style="color:#f40;">Hi</h1>';
							
							$message .= '<p style="color:#080;font-size:18px;">Your Password is '.$randompass.'</p>';
							
							$message .= '</body></html>';
							
							
														if(mail($email, $subject, $message, $headers)){
							echo "<div id='myModal1' class='modal fade' role='dialog'>
						  <div class='modal-dialog'>
						
							<!-- Modal content-->
							<div class='modal-content'>
							  <div class='modal-header bg-success text-white'>
								
								
								<h4 class='modal-title'>Password Reset Successfull</h4>
								<button type='button' class='close' data-dismiss='modal'>&times;</button>
							  </div>
							  <div class='modal-body'>
								<p>Your New Password has been sent to your E-mail..!</p>
							  </div>
							  <div class='modal-footer'>
								<button type='button' class='btn btn-success' data-dismiss='modal'>Close</button>
							  </div>
							</div>
						
						  </div>
						</div> ";
							}else{
								
															echo "<div id='myModal1' class='modal fade' role='dialog'>
						  <div class='modal-dialog'>
						
							<!-- Modal content-->
							<div class='modal-content'>
							  <div class='modal-header bg-danger text-white'>
								
								
								<h4 class='modal-title'>Reset Unsuccessfull</h4>
								<button type='button' class='close' data-dismiss='modal'>&times;</button>
							  </div>
							  <div class='modal-body'>
								<p>Fail to Update Password!!..</p>
							  </div>
							  <div class='modal-footer'>
								<button type='button' class='btn btn-success' data-dismiss='modal'>Close</button>
							  </div>
							</div>
						
						  </div>
						</div> ";
							}
						
						}
						
					}
					
					
					
					
					
					
					
					else if($resultcategory==3){
						$queryschool = mysqli_query($conn,"SELECT email FROM school WHERE id='".$id."'");
						while($row=mysqli_fetch_array($queryschool)){
							$email =  $row['email'];
							$subject = 'Reset Your Password ZEO!!';

							$from = 'Zonel Education Office';
							
							// To send HTML mail, the Content-type header must be set

							$headers  = 'MIME-Version: 1.0' . "\r\n";
							
							$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
							
							
							// Create email headers

							$headers .= 'From: '.$from."\r\n".
							
								'Reply-To: '.$from."\r\n" .
							
								'X-Mailer: PHP/' . phpversion();
							
							
							// Compose a simple HTML email message

							$message = '<html><body>';
							
							$message .= '<h1 style="color:#f40;">Hi</h1>';
							
							$message .= '<p style="color:#080;font-size:18px;">Your Password is '.$randompass.'</p>';
							
							$message .= '</body></html>';
							
							
							if(mail($email, $subject, $message, $headers)){
							echo "<div id='myModal1' class='modal fade' role='dialog'>
						  <div class='modal-dialog'>
						
							<!-- Modal content-->
							<div class='modal-content'>
							  <div class='modal-header bg-success text-white'>
								
								
								<h4 class='modal-title'>Password Reset Successfull</h4>
								<button type='button' class='close' data-dismiss='modal'>&times;</button>
							  </div>
							  <div class='modal-body'>
								<p>Your New Password has been sent to your E-mail..!</p>
							  </div>
							  <div class='modal-footer'>
								<button type='button' class='btn btn-success' data-dismiss='modal'>Close</button>
							  </div>
							</div>
						
						  </div>
						</div> ";
							}else{
								
															echo "<div id='myModal1' class='modal fade' role='dialog'>
						  <div class='modal-dialog'>
						
							<!-- Modal content-->
							<div class='modal-content'>
							  <div class='modal-header bg-danger text-white'>
								
								
								<h4 class='modal-title'>Reset Unsuccessfull</h4>
								<button type='button' class='close' data-dismiss='modal'>&times;</button>
							  </div>
							  <div class='modal-body'>
								<p>Fail to Update Password!!..</p>
							  </div>
							  <div class='modal-footer'>
								<button type='button' class='btn btn-success' data-dismiss='modal'>Close</button>
							  </div>
							</div>
						
						  </div>
						</div> ";
							}
						
						}
						
					}
					
					
					
					
					
					
					
					
				
				
				}
				
					
			}	  
	  }

		

  }
  

            
  mysqli_close($conn);
                 
                        
 ?>  


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>|Wiyaluwa Zonal Education Office|</title>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>
        <style>
        .custom{
  				width:65%;
				
  				margin:0 auto;
  				min-width:350px;
				
                }
		</style>
}
    </head>
    <body>
        <div id="container">
            <?php include 'header.php'; ?>
            
        	<div class="panel panel-default custom">
  				<div class="panel-heading" >
    				<h1 class="panel-title">Find Your Account </h1>
                    
  				</div>
  				<div class="panel-body">
                	<form class="form"  method="post" name="login">
    				<div class="form-group">
            				
            				<label>Enter Your User Name to reset your Passwords.</label></br>								
                			<input type="text"  class="form-control" name="username" placeholder= "Enter your user name"  required/></br>

        		<!--	</div>		
    				<div class="form-group">-->
            				

                            <input type="submit" name="login" class="btn btn-primary btn-md" value="Reset">
                            <a href="loginNew.php" name="reset" class="btn btn-danger btn-md"> Cancel</a>
                            
            			
        			</div>
                    </form>
  				</div>
			</div>    
		
        </div>



<?php include'footer.php'; ?>
        <script type="text/javascript"  src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script> $(document).ready(function () {
                // Show the Modal on load
                $('#myModal1').modal('show');
});</script>


    </body>
</html>




                 
 