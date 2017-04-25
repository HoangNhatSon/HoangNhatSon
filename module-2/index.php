<html>
    <head>
    <title>title</title>
    <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js" type="text/javascript"></script>
     <script src="jquery/jquery-3.2.0.min.js" type="text/javascript"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/1.css" rel="stylesheet" type="text/css"/>
     
     <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1.less', 'css/1.css');
        ?>
        <link href="css/1.css" rel="stylesheet" type="text/css" />
    </head>
     
    </head>
   
    
    <body>
<div class="module-2">
    <div class="row">
        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/main-home-slide1.jpg" alt=""/>
                        <div class="carousel-caption">
                            <h5>
                                CRISPY AND SOFT
                            </h5>

                            <h2>DELICIUOS</h2>
                             <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sedolorm reminusto <br> doeiusmod tempor incidition ulla mco laboris nisi ut aliquip 
                            ex ea commo <br> condorico consectetur adipiscing elitut aliquip.
                            </h4>
                            <a href="#"><h3>VIEW OUT MENU</h3></a> 
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/main-home-slide3.jpg" alt=""/>

                        <div class="carousel-caption">
                            <h5>TASTY AND CRUNCHY</h5>
                        <h2>RESTAURANT</h2>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sedolorm reminusto <br> doeiusmod tempor incidition ulla mco laboris nisi ut aliquip 
                            ex ea commo <br> condorico consectetur adipiscing elitut aliquip.
                        </h4>
                        <a href="#"><h3>VIEW OUT MENU</h3></a>

                        </div>
                    </div>
                    <div class="item">
                        <img src="images/hinhslide2.jpg" alt=""/>
                        <div class="carousel-caption">
                            <h5>WINE AND DINE</h5>
                        <h2>ENJOYABLE</h2>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sedolorm reminusto <br> doeiusmod tempor incidition ulla mco laboris nisi ut aliquip 
                            ex ea commo <br> condorico consectetur adipiscing elitut aliquip.
                        </h4>
                        <a href="#"><h3>VIEW OUT MENU</h3></a>

                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                        href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span></a>
            </div>
        </div>
    </div>
</div>
<div id="push">
</div>

    </body>
</html>


