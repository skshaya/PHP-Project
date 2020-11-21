
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>|Wiyaluwa Zonal Education Office|</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>

</head>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = 'zonel';

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
          } else {
        $code = $_POST['code'];
        $school = $_POST['school'];
        $address = $_POST['address'];
        $count = $_POST['count'];
        $pid = $_POST['pid'];
        $pname = $_POST['pname'];
        $telephne = $_POST['telephone'];
        $email = $_POST['email'];

        if(isset($_POST['save'])){
            
            $dropdownValue = $_POST['myDropdown'];
    
    if( empty( $dropdownValue ) || $dropdownValue == "null" )
        // If there isn't a value for the dropdown, or they've selected the option
        // that reads "Please select one" then return an error
        die( "You must select something from the dropdown! Please go back and try again." );
    
    if( $dropdownValue == "soranathota" ){
         $sql = "insert into school(schoolId,schoolName,Address,studentCount,principalId,principalName,telNo,email,division) values ('$code','$school','$address','$count','$pid','$pname','$telephne','$email','Soranathota')";
       
    }elseif( $dropdownValue == "meegahakiwla" ){
         $sql = "insert into school(schoolId,schoolName,Address,studentCount,principalId,principalName,telNo,email,division) values ('$code','$school','$address','$count','$pid','$pname','$telephne','$email','Meegahakiwla')";
       
    } elseif( $dropdownValue == "kandakatiya" ){
         $sql = "insert into school(schoolId,schoolName,Address,studentCount,principalId,principalName,telNo,email,division) values ('$code','$school','$address','$count','$pid','$pname','$telephne','$email','Kandakatiya')";
       
    }
     if (mysqli_query($conn, $sql)) {
            echo "New save successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        } else if(isser($Post['reset'])){
             $code = "";
        $school =  "";
        $address = "";
        $count =  "";
        $pid =  "";
        $pname =  "";
        $telephne =  "";
        $email =  "";
        } 
       
        mysqli_close($conn);
    }
    exit();
//This will insert run above query
}
?>
<body>




   <!-- <?php include 'header.php'; ?>-->
    <div class="row"  >  
    </div>
    <div class="col-md-2"></div>
    <div class="col-sm-6">
        <div class="panel panel-primary " id="cn">

            <div class=" panel-heading text-center" ><strong>Save School Details</strong></div>
            <div class="well">
               
                    <div class="panel-body bg-info">
                    <form class="form-horizontal" method="post" action="" name="change" >
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="Scode" style="text-align:left">  Select division:</label>
                            <div class="col-sm-9">
                                <div class="dropdown">
                                    
                                    <select name="myDropdown">
                <option value="null" class="btn btn-primary dropdown-toggle">Please select relevent division</option>
                <option value="soranathota">Soranathota</option>
                <option value="meegahakiwla">Meegahakiwla</option>
                <option value="kandakatiya">Kandakatiya</option>
                
            </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="Scode" style="text-align:left">  School Code:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="code" name="code"  placeholder="" size="40" maxlength="10" value="">
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="school" style="text-align:left">School</label>
                            <div class="col-sm-9">
                                <textarea  rows="2" class="form-control" id="title" placeholder="" name="school"  ></textarea>
                              
                              
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="address" style="text-align:left">Address:</label>

                            <div class="col-sm-9"> 

                                <textarea class="form-control" rows="5" id="comment" name="address" placeholder="">
                                </textarea> 

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="count" style="text-align:left">Student count:</label>

                            <div class="col-sm-9"> 

                                <input class="form-control"  id="comment" name="count" placeholder="" value="">
                               

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="pid"style="text-align:left">PricipalId:</label>

                            <div class="col-sm-9"> 

                                <input class="form-control"  id="comment" name="pid" placeholder="" value="">
                               

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="pname" style="text-align:left">Principal:</label>

                            <div class="col-sm-9"> 

                                <textarea class="form-control" rows="2" id="comment" name="pname" placeholder="" >
                                </textarea> 

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="telephone" style="text-align:left">Telephone:</label>

                            <div class="col-sm-9"> 

                                <input class="form-control"  id="comment" name="telephone" placeholder="" value="">
                              
                                

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="email" style="text-align:left">Email:</label>

                            <div class="col-sm-9"> 

                                <input class="form-control"  id="comment" name="email" placeholder="" value="">
                           
                                

                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="col-sm-offset-2">
                                <table>
                                    <tr><td>    <button type="submit" class="btn btn-success text-muted btn-block" name="save" style="width:6cm;margin-right:"><strong>Save<strong></button></td>
                                                        <td>&nbsp</td>
                                                        <td> <button type="reset" class="btn btn-success text-muted btn-block" name="Reset" style="width:6cm;margin-left: "><strong>Reset<strong></button></td>
                                                                        </tr>   </table>
                                

                                            </div>
                                            </div>
                                            </form>  

                                            </div>

                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            <?php include'footer.php'; ?>
                                            <script type="text/javascript"  src="js/jquery-3.2.1.min.js"></script>
                                            <script type="text/javascript" src="js/bootstrap.min.js"></script>

                                            </body>
