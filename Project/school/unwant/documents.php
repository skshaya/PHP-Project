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
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Download Documents 
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <?php
                                // Array containing sample image file names
                                $images = array("director.jpg", "newsExample.jpg");

                                // Loop through array to create image gallery
                                foreach ($images as $image) {
                                    echo '<div class="img-box">';
                                    echo '<img src="images/' . $image . '" width="200" alt="' . pathinfo($image, PATHINFO_FILENAME) . '"></a>';
                                    echo '<p><a href="download.php?file=' . urlencode($image) . '">Download Template Form1 &nbsp; <span class="glyphicon glyphicon-floppy-save"></span></a></p>';
                                    echo '</div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Upload Documents
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <form action="upload.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <input type="file" name="fileToUpload" id="fileToUpload">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Check me out
                                        </label>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
        <script type="text/javascript"  src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>

