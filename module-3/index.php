
<html>
    <head>
        
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js" type="text/javascript"></script>
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
        <div class="module-2">
            <div class="container">
                <h5>TASTY AND CRUNCHY</h5>
                <h2>OUR STORY</h2>
                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sedolorm reminusto <br> doeiusmod tempor incidition ulla mco laboris nisi ut aliquip 
                    ex ea commo <br> condorico consectetur adipiscing elitut aliquip.
                </h4>
                <div class="outstory">
                    <div class="box">
                        <div class="row">
                            <div class="col-md-6 hinh1">
                                <img src="images/home1-main-image-1.jpg" alt=""/>
                            </div>
                            <div class="col-md-6 hinh2">
                                <img src="images/home1-main-image-2.jpg" alt=""/>
                            </div>
                        </div>
                    </div>
                    <div class="member">
                        <h5 >JOSEFINE HOELLER</h5>
                        <img src="images/home1-main-image-3.png" alt=""/>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </body>
   
</html>