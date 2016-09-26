<?php
$url = Sis::apl()->tema->getUrlBase() . '/recursos/';
Sis::Recursos()->AwesomeFont();
?>
<!DOCTYPE HTML>
<html class="no-js">

    <!-- Mirrored from html.imithemes.com/vestige/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Apr 2016 01:44:49 GMT -->
    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>
        <!-- Basic Page Needs
          ================================================== -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Vestige - Responsive HTML5 Template</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
          ================================================== -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <!-- CSS
          ================================================== -->
        <link href="<?= $url ?>css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="<?= $url ?>css/bootstrap-theme.css" rel="stylesheet" type="text/css">
        <link href="<?= $url ?>css/style.css" rel="stylesheet" type="text/css">
        <link href="<?= $url ?>vendor/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
        <link href="<?= $url ?>vendor/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
        <link href="<?= $url ?>vendor/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">
        <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
        <link href="<?= $url ?>css/custom.css" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->
        <!-- Color Style -->
        <link class="alt" href="<?= $url ?>colors/color1.css" rel="stylesheet" type="text/css">
        <link href="<?= $url ?>style-switcher/css/style-switcher.css" rel="stylesheet" type="text/css">
        <link href="<?= $url ?>css/estilos.css" rel="stylesheet" type="text/css">
        <!-- SCRIPTS
          ================================================== -->
        <script src="<?= $url ?>js/modernizr.js"></script><!-- Modernizr -->
        <?php Sis::Recursos()->jQuery(); ?>
    </head>
    <body class="header-style1">
        <!--[if lt IE 7]>
                <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
        <div class="body">
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6  col-sm-6">
                            
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <ul class="pull-right social-icons-colored">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li class="flickr"><a href="#"><i class="fa fa-flickr"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Site Header -->
            <div class="site-header-wrapper">
                <header class="site-header">
                    <div class="container sp-cont">
                        <div class="site-logo">
                            <h1 class="site-title">Club Deportivo Praxis</h1>
                            <h2><a href="index-2.html"><img id="logo" src="<?= $url ?>images/site/Flag2.png" alt="Logo"></a></h2>
                        </div>
                        <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
                        
                        
                        <!-- Main Navigation -->
                        <nav class="main-navigation dd-menu toggle-menu" role="navigation">
                            <ul class="sf-menu">
                                <li><a href="<?= Sis::UrlBase() ?>">Inicio</a></li>
                                <li><a href="<?= Sis::CrearUrl(['principal/nosotros']) ?>">Nosotros</a></li>
                                <li><a href="<?= Sis::CrearUrl(['Publicaciones/todas']) ?>">Noticias</a></li>
                                <li><a href="<?= Sis::CrearUrl(['Eventos/todos']) ?>">Eventos</a></li>
                                <li><a href="<?= Sis::CrearUrl(['Torneos/todos']) ?>">Torneos</a></li>
                                <?php if(Sis::apl()->usuario->esVisitante):  ?>
                                <li><a href="<?= Sis::CrearUrl(['principal/entrar']) ?>">Ingresar <i class="fa fa-sign-in"></i></a></li>
                                <?php  else:  ?>                       
                                <li><a href="<?= Sis::CrearUrl(['principal/salir']) ?>">Salir <i class="fa fa-sign-out"></i></a></li>
                                <?php endif ?>
                            </ul>
                        </nav>
                    </div>
                </header>
                <!-- End Site Header -->
            </div>
            <div class="hero-area">
                <div class="page-header"><div><div><span>Noticias</span></div></div></div>
            </div>
            <!-- Notive Bar -->
            <div class="notice-bar">
                <div class="container">
                    <ol class="breadcrumb">
                        <?php if(count($this->migas) > 0):  ?>
                        <li><a href="<?= Sis::UrlBase() ?>">Inicio</a></li>
                            <?php foreach($this->migas AS $k=>$v): ?>
                                <?php if(is_string($k)): ?>
                        <li><a href="<?= Sis::CrearUrl($v) ?>"><?= $k ?></a></li>                        
                                <?php else: ?>
                        <li class="active"><?= $v ?></li>
                                <?php endif ?>
                            <?php endforeach ?>
                        <?php endif ?>
                    </ol>
                </div>
            </div>
            <!-- Start Body Content -->
            <div class="main" role="main">
                <div id="content" class="content full single-post">
                    <div class="container">
                        <div class="row">                            
                            <?= $this->contenido ?>                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Body Content -->
            <!-- Start site footer -->
            <footer class="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="widget footer-widget">
                                <h4 class="widget-title">About our museum</h4>
                                <img src="images/logo.png" alt=""><br><br>
                                <p>A visible trace, evidence, or sign of something that once existed but exists or appears no more: a building that is the area's last vestige of its colonial era. A rudimentary or degenerate, usually nonfunctioning, structure that is the remnant of an organ or part that was fully developed or functioning in a preceding generation or an earlier stage of development.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="widget footer-widget widget_links">
                                <h4 class="widget-title">Navigation</h4>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="membership.html">Membership</a></li>
                                    <li><a href="exhibitions.-grid.html">Exhibitions</a></li>
                                    <li><a href="events-grid.html">Special Events</a></li>
                                    <li><a href="internship.html">Internship Options</a></li>
                                    <li><a href="rentals.html">Rentals</a></li>
                                    <li><a href="donate.html">Donate</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="widget footer-widget">
                                <h4 class="widget-title">Our Venues</h4>
                                <address>
                                    <a href="venue-single.html"><strong>Accrue Homestead</strong></a><br>
                                    <span>158 Marion Street<br>
                                        Columbia, SC 29201</span>
                                </address>
                                <hr>
                                <address>
                                    <a href="venue-single.html"><strong>Mehar Mansion</strong></a><br>
                                    <span>158 Marion Street<br>
                                        Columbia, SC 29201</span>
                                </address>
                                <hr>
                                <address>
                                    <a href="venue-single.html"><strong>Shop Pleu</strong></a><br>
                                    <span>158 Marion Street<br>
                                        Columbia, SC 29201</span>
                                </address>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="widget footer-widget">
                                <h4 class="widget-title">Twitter Updates</h4>
                                <div class="twitter-widget" data-tweets-count="2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <footer class="site-footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 copyrights-left">
                            <p>&copy;2015 Vestige Museums. All rights reserved.</p>
                        </div>
                        <div class="col-md-6 col-sm-6 copyrights-right">
                            <ul class="pull-right social-icons-colored">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li class="flickr"><a href="#"><i class="fa fa-flickr"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End site footer -->
            <a id="back-to-top"><i class="fa fa-chevron-up"></i></a>  
        </div>
        <script src="<?= $url ?>vendor/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin -->
        <script src="<?= $url ?>js/ui-plugins.js"></script> <!-- UI Plugins -->
        <script src="<?= $url ?>js/helper-plugins.js"></script> <!-- Helper Plugins -->
        <script src="<?= $url ?>vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel -->
        <script src="<?= $url ?>js/bootstrap.js"></script> <!-- UI -->
        <script src="<?= $url ?>js/init.js"></script> <!-- All Scripts -->
        <script src="<?= $url ?>vendor/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider -->
        <script src="<?= $url ?>style-switcher/js/jquery_cookie.js"></script>
        <script src="<?= $url ?>style-switcher/js/script.js"></script>           
    </body>

    <!-- Mirrored from html.imithemes.com/vestige/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Apr 2016 01:44:50 GMT -->
</html>