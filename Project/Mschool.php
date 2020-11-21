<?php ?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>|Wiyaluwa Zonal Education Office|</title>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/sac/style.css" rel="stylesheet"/>
    </head>

    <body>

       
            <?php include 'optionHeaderForDivision.php'; ?>

            <div id="contai">


                <br><br>
 <div class="row"  >
                <div class="panel panel-default col-sm-2 text-muted" style="background-color:rgb(240, 240, 240); height:25cm" >

                   
                        <ul style="text-align: left; list-style-type:none; margin-left:0px;  "> 
                            
                           
                            <li style=" font-color:white;font-family: Arial;"><h4> <br><br><br><br><br><a href="Mschool.php"><button class="btn btn-muted">SCHOOLS</button></a></h3></li>
                           
            <li style=" font-color:white;font-family:Arial;"><h4><br><br><a href="MPrincipal.php"><button class="btn btn-muted">PRINCIPAL DETAILS</button> </a> </h4></li>
                   </ul>
                </div>
     <div class="col-1 panel"> </div>
      <div id="container">
                <div id="division" class="col-lg-10 panel panel-muted "> 
                    <div class="heading panel-heading bg-primary " > 
                        <br>



                        <h2 class="title" style="font-family: AR JULIAN; font-color:white"><strong>MEEGAHAKIWLA DIVISION</strong> -School Details</h2> 
                    </div> 
                    <div class="panel-body">
                        <br>
                        <br>
                         <?php
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = 'zonel';
                                $conn = mysqli_connect($servername, $username, $password, $dbname);
                                if (!$conn) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }
//include('db.php');
                                $sql = "SELECT * FROM schoolD where division='Meegahakiwla'";
                                $result = mysqli_query($conn,$sql); ?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    
                                    <th>SchoolId</th>
                                    <th>School</th>
                                    <th>Address</th>
                                    <th>Student Count</th>
                                    <th>Principal Id</th>
                                    <th>Principal Name</th>
                                    <th>Telephone</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                               
 <?php
 while ($row = mysqli_fetch_assoc($result)) {
                                   
                                            echo "<td >".$row["schoolId"]."</td>";
                                            echo "<td >".$row["schoolName"]."</td>";
                                            echo "<td >".$row["Address"]."</td>";
                                            echo "<td >".$row["studentCount"]."</td>";
                                            echo "<td >".$row["principalId"]."</td>";
                                             echo "<td >".$row["principalName"]."</td>";
                                              echo "<td >".$row["telNo"]."</td>";
                                            echo "<td >".$row["email"]."</td></tr>";

                                }
                                ?>
                            </tbody>
                        </table>
                    </div> 
                </div>


            </div> 

        </div>
<?php include'footer.php'; ?>
        <script type="text/javascript"  src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        </div>
    </body>
</html>