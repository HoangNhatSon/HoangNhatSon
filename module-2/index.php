<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery/jquery-3.2.0.min.js" type="text/javascript"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<head>
    
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
    
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class ="module-2">
                
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/main-home-slide1.jpg" alt=""/>
                        <div class="carousel-caption">
                            <h5>CRISPY AND SOFT</h5>
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
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    
</body>