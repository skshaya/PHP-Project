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
            <?php include 'header.php'; ?>
            <div id="dowloadUpload">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">                                
                                Download Documents
                            </h4>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-body">
                                <table class="table">                                    
                                    <?php
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = mysqli_fetch_assoc($result);
                                        $id = $row['id'];
                                        // Array containing sample image file names
                                        $images = array();
                                        // Loop through array to create image gallery
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<td>";
                                            echo "<img src = 'images/pdf.png' class = 'iconlarge activityicon' role = 'presentation'>";
                                            echo '<a href="dowloadPDFFromAdmin.php?file=' . urlencode($row["name"]) . '">' . $row["name"] . '</a>';
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<a class='btn btn-success btn-xs' href='dowloadPDFFromAdmin.php?file=" . urlencode($row["name"]) . "'>Download  &nbsp; <span class='glyphicon glyphicon-download-alt'> </a>";
                                            echo "</td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>    
                                </table>
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

