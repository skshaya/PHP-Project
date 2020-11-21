<?php

require('db.php');

if (isset($_POST['login'])) {
    $email = $_POST['username'];
    $password = $_POST['password'];
	
	$encryptpassword = md5($password);
	
    $sql = "SELECT * FROM userLogin WHERE username='".$email."' and password='".$encryptpassword."'";
	$result = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($result);

    if ($rows > 0) {

		
	$result =  mysqli_query($conn,"select * from userLogin where username = '".$email."'");

	
		
		while($row=mysqli_fetch_array($result)){
			$resultcategory = $row['userCategory'];
			$uid =$row['id'];
			$pw = $row['password'];
			$result2 = mysqli_query($conn,"select * from school WHERE id='".$uid."'");
			$result3 = mysqli_query($conn,"select * from admin WHERE id='".$uid."'");
			$result4 = mysqli_query($conn,"select * from zonelofficestaff WHERE id='".$uid."'");
				
			if($resultcategory == 1){
				
				session_start();
				$_SESSION['sid']=$resultcategory;
				$_SESSION['userid'] = $uid;
				$_SESSION['userPassword'] = $pw;
				
				header('location:./adminPanal/index.php');
					while($row=mysqli_fetch_array($result3)){
					session_start();
					$adminName = $row['adminName'];
					$address = $row['address'];
					$email = $row['email'];
					$tel = $row['telNo'];
					
					
					$_SESSION['name']=$adminName;
					$_SESSION['address']=$address;
					$_SESSION['email']=$email;
					$_SESSION['tel']=$tel;
						
					}
			}
			
			else if($resultcategory == 2){
				session_start();
				$_SESSION['sid2']=$resultcategory;
				$_SESSION['userid'] = $uid;
				$_SESSION['userPassword'] = $pw;
				header('location:./officerPanel/index.php');
					while($row=mysqli_fetch_array($result4)){
						session_start();
						$staffname = $row['staffName'];
						$_SESSION['name']=$staffname;	
					}
				
			}
			else if($resultcategory == 3){
				session_start();
				$_SESSION['sid3']=$resultcategory;	
				$_SESSION['userid'] = $uid;
				$_SESSION['userPassword'] = $pw;
				header('location:./school/index.php');
				while($row=mysqli_fetch_array($result2)){
					session_start();
					$prinName = $row['principalName'];
					
					$schName = $row['schoolName'];
					$_SESSION['name']=$prinName;
					$_SESSION['schname']=$schName;
							
			}
				
						
			}
			else{
				echo "not yet did";
			}
		}
        


    } else {
		   echo "<div id='myModal1' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header bg-danger text-white'>
        
        
		<h4 class='modal-title'>Error</h4>
		<button type='button' class='close' data-dismiss='modal'>&times;</button>
      </div>
      <div class='modal-body'>
        <p>Incorrrect Password!!..Try Again.</p>
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
        <style>
        .custom{
  				width:45%;
				height::75%;
  				margin:0 auto;
  				min-width:350px;
                }
		</style>

    </head>
    <body>
        <div id="container">
            <?php include 'headerForLogin.php'; ?>
            
        	<div class="panel panel-primary custom">
  				<div class="panel-heading" >
    				<h1 class="panel-title">Login to your Account </h1>
  				</div>
  				<div class="panel-body">
                        
                
                	<form class="form" method="post" name="login">
    				<div class="form-group">
            			
            				<label>User Name</label></br>
                            <div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span> 
                			<input type="text"  class="form-control" name="username" placeholder="Username" required="required"   autofocus/></br>
                            </div>
                            </div>
                            
                            <label>Password</label>
                            <div class="form-group">
                            <div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
                            
                			<input type="password" class="form-control" name="password" placeholder="Password" required="required"  autofocus/></br>
                			</div>
                            
                            </div>
                            <div class="form-group">
                            <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                            </div>
            			
        			
                    </form>
                    </div>
                                    <div class="panel-footer">
    								<h3 class="panel-title">Forget your password?<br><br> </h3>
                   					 No Worries, <a href="resetPassword.php">Click Here</a> to get New password
                    
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
