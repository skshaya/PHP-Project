<?php
session_start();
include('db.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>|Wiyaluwa Zonal Education Office|</title>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>
        <link href="css/skitter.css" rel="stylesheet"/>
    </head>
    <body>
        <div id="container">
            <?php include 'optionHeader.php'; ?>
            </div>
           <div class="container"> 
            <?php
        	$sql = "SELECT * FROM gallery";
			$result = mysqli_query($conn, $sql);
    		$rows = mysqli_num_rows($result);
			if($rows>0){
					while($row=mysqli_fetch_array($result)){

							$name =  $row['name'];

					echo'
					            
                		<div class="col-sm-4">     
                      
                    	<div class="panel-body"><img src="../images/gallery/'.$name.'" class="img-responsive" style="width:100%" alt="Image" title="Australian Prime Minister Malcolm Turnbull"></div>    
                </div>
                
            
					
					
					';
					
					}
			}
					
			?>		
            
</div>
        </div>
        <br><br><br>
        <?php include'../footerIndexPage.php'; ?>
        <script type="text/javascript"  src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

    </body>
</html>