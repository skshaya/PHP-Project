<?php
require 'db.php';
$sql2 = "SELECT * FROM adminuploadeddocuments";
$result = mysqli_query($conn, $sql2);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>|Wiyaluwa Zonal Education Office|</title>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>
        <style type="text/css">
            .img-box{
                display: inline-block;
                text-align: center;
                margin: 0 15px;
            }
        </style>
    </head>
    <body>
        <div id="container">
            <?php include 'optionHeader.php'; ?>
            <div id="dowloadUpload">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-primary">
                        <div class="panel-heading" >
                            <h4 class="panel-title">                                
                                    Upload Documents                                
                            </h4>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-body">
                                <form action="schoolUploadDocument.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputFile" class="text text-info"><h2>Select a Valid <strong class="text text-danger">PDF</strong> document to upload</h2></label>                              
                                        <input type="file" name="fileToUpload" id="fileToUpload">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-success">Upload &nbsp; <span class="glyphicon glyphicon-upload"></button>
                                </form>
                            </div>                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include'footer.php'; ?>
    <script type="text/javascript"  src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>



