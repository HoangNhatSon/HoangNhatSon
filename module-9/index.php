<html>
    <head>
    <title>title</title>
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
        <div class="module-9">
            <div class="container">
                <div class="than">
                     <div class="row">
                         <div class="col-md-3">
                            <h3>CHEESE CROISSANTS</h3>
                            <h3>BRUSCHETTI</h3>
                            <h3>AWESOME VEGETABLES</h3>
                            <h3>TASTY SNACKS</h3>
                            <h3>ALL-TIME BEST RECIPES</h3>
                            <h3>MEAL FOR WHOLE FAMILY</h3>          
                        </div>
                        <div class="col-md-6">
                            <h1>TODAY’S BEST OFFER</h1>
                            <div class="h41">
                                <h4>Sed ut perspiciatis unde omnis iste natus error sit voluptatem <br>accusantium doloremque laudantium, 
                                totam rem aperiam.</h4>
                            </div>
                            <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea<br> commodo consequat. Duis aute irure dolor in reprehenderit in voluptate <br>velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat <br>cupidatat non.</h4>
                        </div>
                        <div class="col-md-3">
                           <img src="images/home1-main-tab-image1.jpg" alt=""/>     
                        </div>
                    </div>
                </div>
        </div>
        <div class="clearfix"></div>
    </body>
<div class="clearfix"></div>
</html>