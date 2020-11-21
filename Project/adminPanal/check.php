<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>|Wiyaluwa Zonal Education Office|</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>

</head>
<?php
 
   
    
  ?> 
<body>
    <?php include 'optionHeader.php'; ?>
     <div class="col-sm-6">

<div class="panel bg-primary" style="width:15cm;margin-top:100px;margin-left: 450px ;margin-right: 200px;  border-style: solid;border-color: blue; color:black;">
        <div class=" panel-heading text-center bg-primary" ><strong>Change School Details </strong></div>

     <form class="form-horizontal" method="post" action="check3.php" name="Cjd"  >
      <div class="panel-body bg-info">
          <div class="form-group" >
                <label class="control-label col-sm-3" for="Scode">  School Code:</label>
                <div class="col-sm-9">

                    <input type="text" class="form-control" id="code" name="code"  placeholder="" size="10" maxlength="10" value="" style="width:5cm" required> 
                   
                  
                    
                </div>
            </div>
       
          <button type="submit" class="btn btn-primary btn-block text-primary" value="Load" name="loadbtn" style="background-color:#1b6d85;width:7cm;margin-left: 3cm ">Load the Data</button>
      </div>
        </form>
 </div>




                                            </div>
                                            <div>
<?php include'footer.php'; ?>
                                            <script type="text/javascript"  src="js/jquery-3.2.1.min.js"></script>
                                            <script type="text/javascript" src="js/bootstrap.min.js"></script>
                                            </div>
</body>

</html>
