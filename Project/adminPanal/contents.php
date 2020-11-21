<div class="row">
    <div id="welcomeInfo" class="pull-left col-lg-8 col-md-8">
        <h2>Welcome to The Wiyaluwa Zonal Education Office</h2>
        <p>The Zonal Educatin office which is situated at the Vithnage
            Mavatha, Meegahakiwla, is the Institute that paves
            the way to give better management and supervision in the education system in 154 schools in the Zone. We provide information on institutional services of Wiyaluwa Zonal Education Office and information on schools in Wiyaluwa Education Zone.

            Moreover good teaching learning environment to students with knowledge, attitudes, skills and competencies.</p>
        <h4>Objectives</h4>
        <p>The responsibility of the Department is planning and implementation of all relevant activities regarding students, teachers, principals, officers and other cadres to attain aims and objectives expected from school educational system. To provide opportunity to obtain more complete education to all students up to G.C.E.(A/L) including compulsory educational limits, which is leading into physical, intellectual emotional and moral Development.

            Developing no formal educational facilities for school leavers of various stages and implementation of various programmers and projects in accordance with long education.

            Making pre-school education more organized and effective.

            Provision of educational facilities for children with special needs.

            While connecting school and community through co-curricular programmers such as sports, aesthetical activities, student leadership and welfare activities and improvement of special skills regarding these aspects.</p>

    </div>
    <div class=" pull-right col-lg-4 col-md-4">
        <div class="panel panel-danger"> 
            <div class="panel-heading"> 
                <h3 class="panel-title">News</h3> 
            </div> 
            <div class="panel-body">
                <?php
                $sql = "SELECT * FROM (SELECT * FROM news ORDER BY id DESC LIMIT 3) as r ORDER BY id";
                $result = mysqli_query($conn, $sql);
                $rows = mysqli_num_rows($result);
                if ($rows > 0) {
                    while ($row = mysqli_fetch_array($result)) {

                        $heading = $row['heading'];
                        $desc = $row['description'];
                        $imgName = $row['imgName'];

                        echo '
    
                <div class="media">
                    <div class="media-left">
                        <img  class="newsImg" src="../images/gallery/' . $imgName . '"  class="img-responsive" alt="Image">
                    </div>
                    <div id="mediaBody" class="media-body">
                        <h4 class="media-heading text-danger">' . $heading . '</h4>';
                        echo substr($desc, 0, 100)."...";
                        echo'
                    </div>
                </div>					
					';
                    }
                }
                ?>
            </div> 
        </div>
    </div>
    <div class=" pull-right col-lg-4 col-md-4">
        <div class="panel panel-success"> 
            <div class="panel-heading"> 
                <h3 class="panel-title">Quick Links</h3> 
            </div> 
            <div class="panel-body">
                <p>
                    <a type="button" href="documentAdmin.php" class="btn btn-warning btn-xs">Documents</a>
                    <a type="button" href="gallery.php" class="btn btn-danger btn-xs">Gallery</a>
                    <a type="button" href="about2.php" class="btn btn-primary btn-xs">About Us</a>
                </p>
            </div> 
        </div>
    </div>
</div>

