<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>|Wiyaluwa Zonal Education Office|</title>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>

    </head>
  <?php include 'optionHeader.php'; ?>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = 'zonel';

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
            if (isset($_POST['loadbtn'])) {
              
                $id = $_POST["code"];

                $sql = "SELECT * FROM schoolD where schoolId='$id'";
                $result = mysqli_query($conn, $sql);
                $rows = mysqli_num_rows($result);




                if ($rows > 0) {
                    while ($row = mysqli_fetch_array($result)) {



                        $code = $row['schoolId'];
                        $schoolName = $row['schoolName'];
                        $Address = $row['Address'];
                        $studentCount = $row['studentCount'];
                        $principalId = $row['principalId'];
                        $principalName = $row['principalName'];
                        $telNo = $row['telNo'];
                        $email = $row['email'];
                        $division = $row['division'];

                        echo '        <body>
       
            <div >  
                <div class="col-sm-6">
                    <div class="panel-primary  col-lg-10 " style="margin-top:100px;margin-left: 450px ;margin-right: 200px ">
                        <form class="form-horizontal" method="post" action="check4.php" name="change"  >
                            <br>
                            <br>
                            <div class="panel-heading bg-primary">UPDATE & DELETE </div>
                            <div class="panel-body bg-info">
                                <table width="400" border="0" cellspacing="10" cellpadding="10" class="table table-hover">
                                       <tr><td>Division</td><td> <input class="form-control"   name="division" placeholder="" value="' . $division . '"></td></tr>
                                        
                                    <tr><td>School Id</td><td> <input type="text"  class="form-control"  placeholder="" name="code"  readonly="" value="' . $code . '"></td></tr>
                                    <tr><td>School Name</td><td> <input type="text"  class="form-control"  placeholder="" name="school"  value="' . $schoolName . '" data-validation="required"></td></tr>
                                    <tr><td>Address</td><td>  <input class="form-control"   name="address" placeholder="" value="' . $Address . '" data-validation="required"></td></tr>
                                    <tr><td>Student Count</td><td> <input class="form-control"   name="count" placeholder="" value="' . $studentCount . '" data-validation="required"></td></tr>
                                    <tr><td>Principal Id</td><td>  <input class="form-control"   name="pid" placeholder="" value="' . $principalId . '" data-validation="required"></td></tr>
                                    <tr><td>Principal Name</td><td> <input class="form-control"  name="pname" placeholder="" value="' . $principalName . '" data-validation="required"></td></tr>
                                    <tr><td>Telephone Number</td><td> <input class="form-control"   name="telephone" placeholder="" value="' . $telNo . '"  data-validation="length" data-validation-length="9-10" 
                 data-validation-error-msg="Telephone Number has to be a 10 numbers"></td></tr>
                                    <tr><td>E mail Address</td><td> <input class="form-control"   name="email" placeholder="" value="' . $email . '"></td></tr>
                                   

                                    <tr><td>
    
                                            <button type="submit" value="UpDate" class="btn btn-success  text-primary" name="update">Update</button></td>
                                        <td>  <button type="submit" value="Delete" name="delete" class="btn btn-success  text-primary">Delete</button></td></tr>
                                </table>
    
                        </form>  
                    </div>
                </div>
                    <br>
    
    <script type="text/javascript"  src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</div>
</div>
</body>';
                    }
                } else {

                    echo '<br><br><br><br>Error:Enter Valid ID';
                }
            }
        }
        mysqli_close($conn);
    }
    ?>

    <?php include'footer.php'; ?>
    <script src="js/jquery.form-validator.min.js"></script>
    <script>
  $.validate({
    lang: 'en'
  });
</script>

</html>