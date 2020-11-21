<?php

require '../db.php';
if (isset($_REQUEST["id"])) {
    // Get parameters
    $delid = $_REQUEST["id"];
    $sql3 = "SELECT * FROM adminuploadeddocuments WHERE id = '$delid'";
    $result = mysqli_query($conn, $sql3);
    $row = mysqli_fetch_assoc($result);
    $delFile = $row["name"];
    unlink("uploadDocumentsToWebsite/" . $delFile);
    $sql2 = "DELETE FROM adminuploadeddocuments WHERE id = '$delid'";
    mysqli_query($conn, $sql2);
    header("Location: documentAdmin.php");
}
?>