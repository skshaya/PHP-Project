<?php
session_start();
include('db.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>|Wiyaluwa Zonal Education Office|</title>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>
        <link href="css/skitter.css" rel="stylesheet"/>
    </head>
    <body>
        <div id="container" style="background-color: #fff">
            <?php include 'header.php'; ?>
            <div class="row" style="border-bottom: 2px solid #094499;border-top: 2px solid #094499">
                <h1 class="text text-primary text-center">Director</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4" style="margin-top: 10px">
                    <img src ="images/director.jpg">

                    <h4>
                       	Mr.xxx.<br>
                        Director of Wiyaluva,<br>
                        Zonel Office,<br>
                        Badulls.
                    </h4>
                </div>
                <div class="col-lg-8 col-md-8" style="margin-top: 10px">
                    <div id="msgHeading" style="background-color: #094499;color: #ffffff;padding: 5px ">
                        <h4 class="text text-center">
                            "Successful People always think about Failure"
                        </h4>
                    </div>
                    <div id="msgHeading" style="background-color: #F7F7F7;padding: 5px;margin-top: 5px; border-bottom: 2px solid #DDDDDD; border-top: 2px solid #DDDDDD;">
                        <p class="text text-justify">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.<br><br>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg3 col-md-3" style="margin-top: 10px">
                    <div  style="border-bottom: 2px solid #F22006">
                        <h3 class="text text-primary text-center">Assistant Director</h3>
                    </div>
                    <div style="margin-top: 10px; ">
                        <img src ="images/as.jpg" style="width: 150px">

                        <h5>
                            Mr M.M Mark Antoney (MA).<br>
                            Director of Wiyaluva,<br>
                            Zonel Office,<br>
                            Badulls.
                        </h5>
                    </div>
                </div>
                <div class="col-lg3 col-md-3" style="margin-top: 10px">
                    <div  style="border-bottom: 2px solid #F22006">
                        <h3 class="text text-primary text-center">Manager</h3>
                    </div>
                    <div style="margin-top: 10px; ">
                        <img src ="images/as.jpg" style="width: 150px">

                        <h5>
                            Mr M.M Mark Antoney (MA).<br>
                            Director of Wiyaluva,<br>
                            Zonel Office,<br>
                            Badulls.
                        </h5>
                    </div>
                </div>
                <div class="col-lg3 col-md-3" style="margin-top: 10px">
                    <div  style="border-bottom: 2px solid #F22006">
                        <h3 class="text text-primary text-center">Project Manager</h3>
                    </div>
                    <div style="margin-top: 10px; ">
                        <img src ="images/as.jpg" style="width: 150px">

                        <h5>
                            Mr M.M Mark Antoney (MA).<br>
                            Director of Wiyaluva,<br>
                            Zonel Office,<br>
                            Badulls.
                        </h5>
                    </div>
                </div>
                <div class="col-lg3 col-md-3" style="margin-top: 10px">
                    <div  style="border-bottom: 2px solid #F22006">
                        <h3 class="text text-primary text-center">Registrar</h3>
                    </div>
                    <div style="margin-top: 10px; ">
                        <img src ="images/as.jpg" style="width: 150px">

                        <h5>
                            <br>
                            Director of Wiyaluva,<br>
                            Zonel Office,<br>
                            Badulls.
                        </h5>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include'footerIndexPage.php'; ?>
    <script type="text/javascript"  src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
</body>
</html>