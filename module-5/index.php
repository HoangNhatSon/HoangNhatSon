<html>
    <head>
    <title>title</title>
    <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
<div class="module-5">
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
                        <img src="images/home1-main-parallax-1.jpg" alt=""/>
                        <div class="carousel-caption">
                            <img src="images/Testemonial13.jpg" alt=""/>
                             <h4>The essential elements of giving are power and love activity and affection and the<br> consciousness of the race testifies that in the high and appropriate exercise of these<br> is a blessedness greater than any other.
                            </h4>
                            <h5>Mario Andretti</h5>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/home1-main-parallax-1.jpg" alt=""/>

                        <div class="carousel-caption">
                            <img src="images/testimonial2.jpg" alt=""/>
                            <h4>Success is not a destination, but the road that you're on. Being successful means <br>that you're working hard and walking your walk every day. You can only live your <br>dream by working hard towards it. That's living your dream.
                            </h4>
                            <h5>Ema Wayans</h5>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/home1-main-parallax-1.jpg" alt=""/>
                        <div class="carousel-caption">
                        <img src="images/Testemonial14.jpg" alt=""/>
                        <h4>Desire is the key to motivation, but it's determination and commitment to an <br>unrelenting pursuit of your goal a commitment to <br>excellence that will enable you to attain the success you seek.
                        </h4>
                        <h5>MARK HOPPKINS</h5>
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


