<!DOCTYPE html>
<html>
    <head>
        <title>|Wiyaluwa Zonal Education Office|</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/w3.css">
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
    </head>
    <body>
        <div id="container">
            <?php include 'optionHeader.php'; ?>
        </div>
        <!-- Page Content -->
            <div class="w3-container">
                <div class="container">
                    <form action="uploadDocumentTargetAdmin.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputFile" class="text text-info"><h2>Select a Valid <strong class="text text-danger">PDF</strong> document to upload</h2></label>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </div>
                        <button type="submit" name="submit" class="btn btn-success">Upload &nbsp; <span class="glyphicon glyphicon-upload"></button>
                    </form>
                </div>
            </div>
        <div id="container">
            <?php include 'footer.php'; ?>
        </div>

        <script type="text/javascript"  src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>  
    </body>
</html>