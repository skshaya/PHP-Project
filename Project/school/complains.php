<?php 
session_start();
include('db.php');
$schName=$_SESSION['schname'];
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
        <div id="container">
            <?php include 'optionHeader.php'; ?>
            <div id="complain">
                <div class="panel panel-danger"> 
                    <div class="panel-heading"> 
                        <h3 class="panel-title">Complains</h3> 
                    </div> 
                    <div class="panel-body">
                        <form action="complains.php"  method="post" >
                            <div class="form-group">
                            	<label>To : Zonel Education Office</label>
                                <br><br>
                                <label>School Name:</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Your School's Name Here" value="<?php echo $schName?>"  readonly>
                            </div>
                            
                            <div class="form-group">
                                <label>Complain Header:</label>
                                <input type="text" class="form-control" name="header" placeholder="Type Complain Header" required>
                            </div>

                            <div class="form-group">
                                <label>Complain:</label>
                                <textarea class="form-control" rows="5" name="desc" placeholder="Type your complains here..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger" name="submit">Submit</button>
                        </form>
                        
                        
<?php

  if(isset($_POST['submit'])){
      $name = $_POST['name'];
	  $header = $_POST['header'];
	  $desc = $_POST['desc'];
      
      $query ="INSERT INTO complain(name,heading,description) VALUES('".$name."','".$header."','".$desc."')";
	  
	  if (mysqli_query($conn, $query)){
		  echo "Complain Submitted successfully";
		}
		
		 else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }
    
  }
 
            
  mysqli_close($conn);
                 
                        
 ?>                   
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </div> 
                </div>
            </div>
        </div>
        <?php include'footer.php'; ?>
        <script type="text/javascript"  src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>