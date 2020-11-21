<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
            .custom{
  				width:65%;
				height::100px;
				margin: auto;
                }
	</style>

  </head>
  <body>
  <div id="container">
            <?php include 'selectCategoryHeader.php'; ?>
  </div>
  <div class="container" style="margin-top:100px;margin-left:450px;">
    <h1>Select User Category</h1>
  </div>
  
  
  
  
  <div class="row  custom" >
  <div class="col-sm-6 col-md-4 col-lg-4" >
    <div class="thumbnail">
      <img src="../images/tr_star.jpg" alt="admin logo" style="height:100px">
      <div class="caption">
        <h3>Admin</h3>
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
        <p><a href="addUserAdmin" class="btn btn-primary" role="button">Select</a> </p>
      </div>
    </div>
  </div>
  
    <div class="col-sm-6 col-md-4 col-lg-4" style="height:auto" style="height:100px">
    <div class="thumbnail">
      <img src="../images/maxresdefault.jpg" alt="officelogo">
      <div class="caption">
        <h3>Office User</h3>
        <p>There are many variations of passages of Lorem Ipsum available, </p>
        <p><a href="addUserOfficer" class="btn btn-primary" role="button">Select</a> </p>
      </div>
    </div>
  </div>
  
    <div class="col-sm-6 col-md-4 col-lg-4" style="height:auto">
    <div class="thumbnail">
      <img src="../images/school-295210_960_720.png" alt="school logo" style="height:100px">
      <div class="caption">
        <h3>School User</h3>
        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced.</p>
        <p><a href="addUserSchool" class="btn btn-primary" role="button">Select</a> </p>
      </div>
    </div>
  </div>
</div>
<div id="container" style="margin-top: 30px";>
            <?php include 'footer.php'; ?>
  </div>
  
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    	
     </body>
</html>