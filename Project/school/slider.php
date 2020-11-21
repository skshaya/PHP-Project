<?php 
include('db.php');
?>
<div class="row">
    <div class="pull-left col-lg-8 col-md-8">
        <div id="content">
            <div class="skitter-large-box">
                <div class="skitter skitter-large with-dots">
                    <ul>
                        <li><a href="#cube"><img src="../images/example/img1.jpg" class="circles" /></a><div class="label_text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#see-more" class="btn btn-small btn-yellow">See more</a></p></div></li>
                        <li><a href="#cubeRandom"><img src="../images/example/img2.jpg" class="circlesInside" /></a><div class="label_text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officiis voluptatum reprehenderit vitae amet beatae dolorem labore dignissimos nesciunt. Harum, blanditiis suscipit beatae unde id non, necessitatibus praesentium nisi quidem. <a href="#" class="btn btn-small btn-yellow">See more</a></p></div></li>
                        <li><a href="#block"><img src="../images/example/img3.jpg" class="circlesRotate" /></a><div class="label_text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="btn btn-small btn-yellow">See more</a></p></div></li>
                        <li><a href="#cubeStop"><img src="../images/example/img4.jpg" class="cube" /></a><div class="label_text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit eos nihil corrupti inventore id culpa repellat molestiae quam at molestias. <a href="#" class="btn btn-small btn-yellow">See more</a></p></div></li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=" pull-right col-lg-4 col-md-4">
             
 <?php
        	$sql = "SELECT * FROM directormsg";
			$result = mysqli_query($conn, $sql);
    		$rows = mysqli_num_rows($result);
			if($rows>0){
					while($row=mysqli_fetch_array($result)){

							$heading =  $row['heading'];
							$message = $row['message'];

					echo'
					            
        <div class="panel panel-primary"> 
            <div class="panel-heading"> 
                <h3 class="panel-title">Director'.'s Message</h3> 
            </div> 
            <div class="panel-body">
                <div class="media">
                    <div class="media-left">
                        <img id="directorImg" class="img-responsiv img-rounded media-object" src="../images/director.jpg" alt="...">
                    </div>
                    <div id="mediaBody" class="media-body">
                        <h4 class="media-heading text-primary">'.$heading.'</h4>
                        '.$message.'
                    </div>
                </div>
            </div> 
        </div>
            
					
					
					';
					
					}
			}
					
			?>	

    </div>
</div>

