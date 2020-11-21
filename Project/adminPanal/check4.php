
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
        $division=$_POST['division'];
                $code = $_POST['code'];
        $school = $_POST['school'];
        $address = $_POST['address'];
        $count = $_POST['count'];
        $pid = $_POST['pid'];
        $pname = $_POST['pname'];
        $telephne = $_POST['telephone'];
        $email = $_POST['email'];
       
       
        
         $sql = "update schoolD set schoolId='$code',schoolName='$school',Address='$address',studentCount='$count',principalId='$pid',principalName='$pname',telNo='$telephne',email='$email',division='$division' WHERE schoolId='$code'";
      
    
      if (mysqli_query($conn, $sql)) {
            echo "<br><br><br><br><br><br><br>Data updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }   
        }else if(isset($_POST['delete'])){
        $code = $_POST['code'];
       
    
   
         $sql = "delete  from schoolD WHERE schoolId='$code'";
      
   
      if (mysqli_query($conn, $sql)) {
            echo "<br><br><br><br><br><br><br>Data deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }   
        }
    }
            ?>
    <body></body>
</html>