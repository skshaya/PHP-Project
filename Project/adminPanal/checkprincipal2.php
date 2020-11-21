
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>|Wiyaluwa Zonal Education Office|</title>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>

    </head>
    <?php include 'optionHeader.php'; ?>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = 'zonel';

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            } else if(isset($_POST['update'])){
        
        $principalId = $_POST['principalId'];
        $SchoolName = $_POST['SchoolName'];
        $Address = $_POST['Address'];
        $SchoolType = $_POST['SchoolType'];
        $Principal = $_POST['Principal'];
        $Telephone = $_POST['Telephone'];
        $division=$_POST['division'];
       
    
         $sql = "update principal set SchoolName='$SchoolName',Address='$Address',SchoolType='$SchoolType',Principal='$Principal',Telephone='$Telephone',division='$division' WHERE principalId='$principalId'";
      
      if (mysqli_query($conn, $sql)) {
            echo "<br><br><br><br><br><br><br><br>Data updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }   
        }else if(isset($_POST['delete'])){
        $SyNo = $_POST['SyNo'];
       
  
       
         $sql = "delete  from principal WHERE SyNo='$PrincipalId'";
      
 
      if (mysqli_query($conn, $sql)) {
            echo "<br><br><br><br><br><br><br><br>Data deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }   
        }
    }
            ?>
    <body></body>
</html>