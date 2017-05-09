
<html>
    <head>
        
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="jquery/jquery-3.2.0.min.js" type="text/javascript"></script>
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <script src="jquery/js.js" type="text/javascript"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
       
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
        <div class="module-1">
           
          <nav class="navbar navbar-inverse">
             <div class="container">
                <div class="navbar-header">
                     <div class="logo">
                            <a href="#"><img src="images/meni-logo-light.png" alt=""/></a>
                    </div>
                </div>
            
                <div class="collapse navbar-collapse js-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME</a>              
                            <ul class="dropdown-menu mega-dropdown-menu">
                                <li>
                                    <a href="#">Men collection</a>
                                </li>
                                <li>
                                    <a href="#">hehe</a>
                                </li>
                            </ul>
                                          
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES</a>                
                            <ul class="dropdown-menu mega-dropdown-menu">
                                 <li>
                                    <a href="#">Women collection</a>
                                </li>
                                <li>
                                    <a href="#">keke</a>
                                </li>
                            </ul>               
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ELEMENTS</a>                
                            <ul class="dropdown-menu mega-dropdown-menu">
                                 <li>
                                    <a href="#">Women collection</a>
                                </li>
                                <li>
                                    <a href="#">keke</a>
                                </li>
                            </ul>               
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">PORTFOLIO</a>                
                            <ul class="dropdown-menu mega-dropdown-menu">
                                 <li>
                                    <a href="#">Women collection</a>
                                </li>
                                <li>
                                    <a href="#">keke</a>
                                </li>
                            </ul>               
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">BLOG</a>                
                            <ul class="dropdown-menu mega-dropdown-menu">
                                 <li>
                                    <a href="#">Women collection</a>
                                </li>
                                <li>
                                    <a href="#">keke</a>
                                </li>
                            </ul>               
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">SHOP</a>                
                            <ul class="dropdown-menu mega-dropdown-menu">
                                 <li>
                                    <a href="#">Women collection</a>
                                </li>
                                <li>
                                    <a href="#">keke</a>
                                </li>
                            </ul>               
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <a href="#"><li><i class="fa fa-trash"></i></li></a>
                        <a href="#"><li><i class="fa fa-search"></i></li></a>
                        <a href="#"><li><i class="fa fa-bars"></i></li></a>            
                    </ul>
                  </ul>
                </div><!-- /.nav-collapse -->
              </nav>
            </div>
        </div>
       
    </body>
   
</html>