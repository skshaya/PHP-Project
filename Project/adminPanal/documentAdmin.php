<?php
require '../db.php';
$sql2 = "SELECT * FROM schooluploadeddocuments";
$result = mysqli_query($conn, $sql2);

$sql3 = "SELECT * FROM  adminuploadeddocuments";
$result3 = mysqli_query($conn, $sql3);
?>
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
        <div>
            <div class="w3-container">
                <div class="jumbotron text-center">
                    <p><h1>Documents</h1> </p>
                    <hr>
                    <div>
                        <table>
                            <tr>
                            <a href="uploadDocumentAdmin.php" style="margin-right: 50px" class="btn btn-success">Upload a Document &nbsp; <span class="glyphicon glyphicon-upload"></span></a>
                            <b>(to the website)</b>
                            </tr>
                        </table>
                    </div>
                    <hr>

                    <div class="container" style="text-align: left">
                        <div class="row">
                            <div class="col-lg-6">
                                <table class="table">
                                    <h3 class="text-left">Documents uploaded by the <strong>Users</strong></h3> 
                                    <?php
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = mysqli_fetch_assoc($result);
                                        $id = $row['id'];
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<td>";
                                            echo "<img src = '../images/pdf.png' class = 'iconlarge activityicon' role = 'presentation'>";
                                            echo '<a href="downloadPDFUploadedBySchool.php?file=' . urlencode($row["name"]) . '">' . $row["name"] . '</a>';
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<a class='btn btn-success btn-xs' href='downloadPDFUploadedBySchool.php?file=" . urlencode($row["name"]) . "'>Download  &nbsp; <span class='glyphicon glyphicon-download-alt'> </a>";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<a class='btn btn-danger btn-xs' href='deletePDF.php?id=" . ($row["id"]) . "'>Delete &nbsp; <span class='glyphicon glyphicon-remove'> </a>";
                                            echo "</td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>    
                                </table>
                            </div>

                            <div class="col-lg-6" style="border-left: 5px #337AB7 solid">
                                <table class="table">
                                    <h3 class="text text-left text-success">Documents uploaded by the <strong>Admin</strong></h3> 
                                    <?php
                                    if (mysqli_num_rows($result3) > 0) {
                                        $row = mysqli_fetch_assoc($result3);
                                        $id = $row['id'];
                                        while ($row = mysqli_fetch_assoc($result3)) {
                                            echo "<tr>";
                                            echo "<td>";
                                            echo "<img src = '../images/pdf.png' class = 'iconlarge activityicon' role = 'presentation'>";
                                            echo '<a href="../dowloadPDFFromAdmin.php?file=' . urlencode($row["name"]) . '">' . $row["name"] . '</a>';
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<a class='btn btn-success btn-xs' href='../dowloadPDFFromAdmin.php?file=" . urlencode($row["name"]) . "'>Download  &nbsp; <span class='glyphicon glyphicon-download-alt'> </a>";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<a class='btn btn-danger btn-xs' href='deletPDFUploadedByAdmin.php?id=" . ($row["id"]) . "'>Delete &nbsp; <span class='glyphicon glyphicon-remove'> </a>";
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
        <div id="container">
            <?php include 'adminFooter.php'; ?>
        </div>

        <script type="text/javascript"  src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>  
    </body>
</html>

