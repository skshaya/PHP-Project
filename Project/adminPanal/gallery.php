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
        </div>
        <br><br><br>
        <div class="navbar-fixed-bottom">
        <?php include'../footerIndexPage.php'; ?>
        </div>
        <script type="text/javascript"  src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

    </body>
</html>

