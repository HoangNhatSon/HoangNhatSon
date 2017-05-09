
<html>
    <head>
        
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
       
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1.less', 'css/1.css');
        ?>
        <link href="css/1.css" rel="stylesheet" type="text/css" />
        
    </head>

    <body>
      
        <div class ="module-13">
             <div class="content">
                <div class="row">
                    <div class="col-md-4">
                        <h6>TWITTER FEED</h6>
                        <div class="nd1">
                            <h5>Start creating with Kreate - Expert Theme for<br> Creative Business: </h5>
                            <h4><a href="#">HTTPS://T.CO/3OMWJ7RU78</a> #WordPress </h4>
                            <h5>#Themes #Themeforest </h5>
                        </div>
                        <div class="nd2">
                            <h5>Need a blog? Tomas & Daisy - A Stylish Blog <br> for Him and Her: </h5>
                            <h4><a href="#">HTTPS://T.CO/TIRWNLRRNA"</a> #WordPress</h4>
                            <h5>#Themes #Themeforest </h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="images/meni-logo-light.png" alt=""/>
                        <div class="nd3">
                            <div class="h51">
                                <h5 >Sed ut perspiciatis unde omnis iste natus <br> error sit voluptatem accusantium <br> doloremque.</h5>
                            </div>
                            <div class="h52">
                                <h5>+387648592568 <br> info@elatedthemes.com <br> Eighth Avenue 487, New York</h5>
                            </div>
                            <div class="icon">
                                <i class="fa fa-vimeo" aria-hidden="true"></i>
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h6>INSTAGRAM FEED</h6>
                    </div>
                </div>
            </div>
            <footer>
                @2016. All Rights Reserved
            </footer>
        </div>
       
        <!-- Begin Footer -->
    
    </body>
</html>