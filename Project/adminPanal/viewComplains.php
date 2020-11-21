<?php
session_start();
include('db.php');
?>
<?php include 'optionHeader.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin page</title>
        <link rel="stylesheet" href="assets/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="js/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="js/bootstrap.min.js"></script> 
         <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>
        <link href="css/skitter.css" rel="stylesheet"/>

        <link rel="stylesheet" href="css/w3.css">

    </head>
    <body>

        <div class="container">
            <div class="w3-card-2" style="margin-top:50px">
                <h2 class="w3-padding" align="center"><font><strong><i class="fa fa-send">Complains From Schools</i></strong></font></h2>
                <table class="w3-table-all " align="center" cellpadding="5" cellspacing="5" border="1">
                    <tr>

                    </tr>
                    <tr class="w3-light-blue">

                        <td><b>School Name</b></td>
                        <td><b>Complain Header</b></td>
                        <td><b>Description</b></td>
                    </tr>
                    
                        

                    
                    
                    
                    
            <?php
        	$sql = "SELECT * FROM complain";
			$result = mysqli_query($conn, $sql);
    		$rows = mysqli_num_rows($result);
			if($rows>0){
					while($row=mysqli_fetch_array($result)){

							$name =  $row['name'];
							$heading =  $row['heading'];
							$desc =  $row['description'];

					echo'
					            
                
            	     <tr>

                        <td>'.$name.'</td>
                        <td>'.$heading.'</td>
                        <td>'.$desc.'</td>

                    </tr>
					
					
					';
					
					}
			}
					
			?>	                    
                    
                    
                    
                    
                    
                    
                    


                </table>
            </div>
        </div>
    </body>
</html>
<?php include 'footer.php'; ?>