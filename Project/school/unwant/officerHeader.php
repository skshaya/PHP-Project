

<nav id="navBar" class="navbar navbar-inverse navbar-fixed-top">
    <div id="navBarConatin"class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">WZEO</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Branches <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Administration</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Education Development</a></li>
                        <li><a href="#">Education Management</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Finance</a></li>
                        <li><a href="#">Planning</a></li>

                    </ul>
                </li>                        
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Divisions <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Soranathota</a></li>
                        <li><a href="#">Kandaketiya</a></li>
                        <li><a href="#">Meegahakiwla</a></li>
                    </ul>
                </li>
                
 				<li><a href="#">News</a></li>

                <li><a href="documents.php">Documents</a></li>
                <li><a href="#">Gallery</a></li>
                

                <li><a href="#">Generate Report</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right ">
                <li><a href="../logout.php">Log out</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right ">
                <li><a hidden="#" style="background-color:transparent">Logged As:
                <?php 
					include('db.php');
					if($uid==2){
						$name=$_SESSION['name'];
						echo $name;
					}
					else{
					header("index.php")	;
					}
				
						
				?>
                
                </a></li>
            </ul>



        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>