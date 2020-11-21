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
        <style>
            img{
                border:5px solid #ccc;
            }
            img:hover {
                box-shadow: 0 0 2px 1px rgba(0, 200, 200, 2);
            }
           
            
        </style>
    </head>
    <body>
        <div id="container">
            <?php include 'header.php'; ?>
        </div>
        <div class="container"> 
            <?php
            $sql = "SELECT * FROM gallery_images";
            $result = mysqli_query($conn, $sql);
            $rows = mysqli_num_rows($result);
            if ($rows > 0) {
                while ($row = mysqli_fetch_array($result)) {

                    $name = $row['name'];

                    echo'	            
                		<div class="col-sm-4">     
                      
                    	<div class="panel-body"><img src="adminPanal/uploads/' . $name . '" class="img-responsive"  alt="Image"></div>    
                </div>
            
					
					
					';
                }
            }
            ?>		

        </div>

        <br><br><br>
        <div class="navbar-fixed-bottom">
        <?php include'footerIndexPage.php'; ?>
        </div>
		<script type="text/javascript"  src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

    </body>
</html>