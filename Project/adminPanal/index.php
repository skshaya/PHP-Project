<?php 
include('db.php');

	session_start();
	$uid=$_SESSION['sid'];
	if($uid==1){
		
	}
	else{
	header("location:../loginNew.php")	;
	}
	
?>

<!DOCTYPE html>
<html>
<head>
<title>|Wiyaluwa Zonal Education Office|</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>|Wiyaluwa Zonal Education Office|</title>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>
        <link href="css/skitter.css" rel="stylesheet"/>
    
</head>

    <body>
        <div id="container">
            <?php include 'adminHeader.php'; ?>
            <?php include 'slider.php'; ?>
            <?php include 'contents.php'; ?>
        </div>
        <br><br><br>
        
        <script type="text/javascript"  src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.skitter.min.js"></script>
        <script type="text/javascript" language="javascript">
            $(document).ready(function () {
                $('.skitter-large').skitter({
                    responsive: {
                        small: {
                            animation: 'fade',
                            max_width: 768,
                            suffix: '-small'
                        },
                        medium: {
                            animation: 'directionRight',
                            max_width: 1024,
                            suffix: '-medium'
                        }
                    }
                });
            });
        </script>
        <?php include'adminFooter.php'; ?>

    </body>

</html>
