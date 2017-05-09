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
                        <img src = "images/<?php echo $slideshow[9]['slideshow_content'] ?>" alt=""/>
                        <div class="carousel-caption">
                            <h5>
                                <?php echo $slideshow[0]['slideshow_content'] ?>
                            </h5>

                            <h2><?php echo $slideshow[1]['slideshow_content'] ?></h2>
                            <h4><?php echo $slideshow[2]['slideshow_content'] ?>
                            </h4>
                            <h3><a href="#"><?php echo $button[0]['button_content'] ?></a></h3> 
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/<?php echo $slideshow[10]['slideshow_content'] ?>" alt=""/>

                        <div class="carousel-caption">
                            <h5><?php echo $slideshow[3]['slideshow_content'] ?></h5>
                            <h2><?php echo $slideshow[4]['slideshow_content'] ?></h2>
                            <h4><?php echo $slideshow[5]['slideshow_content'] ?>
                            </h4>
                            <h3><a href="#"><?php echo $button[0]['button_content'] ?></a></h3> 

                        </div>
                    </div>
                    <div class="item">
                        <img src="images/<?php echo $slideshow[11]['slideshow_content'] ?>" alt=""/>
                        <div class="carousel-caption">
                            <h5><?php echo $slideshow[6]['slideshow_content'] ?></h5>
                            <h2><?php echo $slideshow[7]['slideshow_content'] ?></h2>
                            <h4><?php echo $slideshow[8]['slideshow_content'] ?>
                            </h4>
                            <h3><a href="#"><?php echo $button[0]['button_content'] ?></a></h3> 

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
    <div class="clear"></div>
</div>
<div class="clear"></div>