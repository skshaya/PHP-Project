<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link href="css/bootstrap-imgupload.css" rel="stylesheet">
        <link href="css/style.css">
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/npm.js"></script>
    
</head>
<body>
    <div id="container">
            
    <form action="upload.php" method="post" enctype="multipart/form-data">
  
  <div class="form-group">
    <div class="col-md-4 col-md-offset-4">          
    <div class="imgupload panel panel-default">
      <div class="panel-heading clearfix">
          <h3 class="panel-title pull-left"><b>Upload Image</b></h3>    
      </div>

      <div class="file-tab panel-body">

        <div>
          <input type="file" name="fileToUpload" id="fileToUpload">
        </div>
      </div>

      <div class="url-tab panel-body">
        

          <div class="input-group-btn">

              <button type="submit" class="btn btn-primary" value="Upload Image" name="submit" style="float: right;">Upload</button>

          </div>


        <input type="hidden" name="url-input">

      </div>

    </div>
            </div>
      </div>
</form>

    </div>
<body>
</html>

