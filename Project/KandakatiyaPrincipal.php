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
                <div class="panel panel-default col-sm-2 text-muted" style="background-color:rgb(240, 240, 240); height:17cm" >

                   
                        <ul style="text-align: left; list-style-type:none; margin-left:0px;  "> 
                            
                           
                            <li style=" font-color:white;font-family: Arial;"><h4> <br><br><br><br><br><a href="Kschool.php"><button class="btn btn-muted">SCHOOLS</button></a></h3></li>
                           
        <li style=" font-color:white;font-family:Arial;"><h4><br><br><a href="KandakatiyaPrincipal.php"><button class="btn btn-muted">PRINCIPAL DETAILS </button></a> </h4></li>
                   </ul>
                </div>
                <div id="container">
                    <div id="division" class="col-lg-10 panel panel-muted "> 
                        <div class="panel-heading bg-primary"> 
                            <br>



                            <h2 class="title" style="font-family: AR JULIAN; font-color:white" ><strong>KANDAKATIYA DEVISION</strong>  - Principal Details</h2> 
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
                            $sql = "SELECT * FROM principal where division='Kandakatiya'";
                            $result = mysqli_query($conn, $sql);
                            ?>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                      
                                        <th>Principal Id</th>
                                        <th>Principal</th>
                                         <th>Address</th>
                                        
                                       
                                        <th>School Type</th>
                                        <th>School</th>
                                        
                                        <th>Telephone</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr><td >" . $row["principalId"] . "</td><td >" . $row["Principal"] . "</td><td >" . $row["Address"] . "</td><td >" . $row["SchoolType"] . "</td><td >" . $row["SchoolName"] . "</td><td >" . $row["Telephone"] . "</td></tr>";
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