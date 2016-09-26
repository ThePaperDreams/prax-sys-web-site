<?php
$url = Sis::apl()->tema->getUrlBase() . '/recursos/';
Sis::Recursos()->AwesomeFont();
?>
<!DOCTYPE HTML>
<html class="no-js">

    <!-- Mirrored from html.imithemes.com/vestige/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Apr 2016 00:41:45 GMT -->
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
        <!--<link href="<?= $url ?>css/bootstrap.css" rel="stylesheet" type="text/css">-->
        <!--<link href="<?= $url ?>css/bootstrap-theme.css" rel="stylesheet" type="text/css">-->
        <!--<link href="<?= $url ?>css/style.css" rel="stylesheet" type="text/css">-->
        <!--<link href="<?= $url ?>vendor/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">-->
        <!--<link href="<?= $url ?>vendor/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">-->
        <!--<link href="<?= $url ?>vendor/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">-->
        <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
        <!--<link href="<?= $url ?>css/custom.css" rel="stylesheet" type="text/css"> CUSTOM STYLESHEET FOR STYLING--> 

        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="<?= $url ?>css/extralayers.css" media="screen" />	
        <link rel="stylesheet" type="text/css" href="<?= $url ?>vendor/revslider/css/settings.css" media="screen" />

        <!-- GOOGLE FONTS FOR REVOLUTION SLIDER ONLY -->
<!--        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,700,800,900' rel='stylesheet' type='text/css' />-->
        <!-- Color Style -->
        
        <link href="<?= $url ?>css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="<?= $url ?>css/bootstrap-theme.css" rel="stylesheet" type="text/css">
        <link href="<?= $url ?>css/style.css" rel="stylesheet" type="text/css">
        <link href="<?= $url ?>vendor/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
        <link href="<?= $url ?>vendor/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
        <link href="<?= $url ?>vendor/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">
         <!--Nivo Slider Styles--> 
        <link rel="stylesheet" href="<?= $url ?>vendor/nivoslider/themes/default/default.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?= $url ?>vendor/nivoslider/nivo-slider.css" type="text/css" media="screen" />
        <!-- [if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif] -->
        <link href="<?= $url ?>css/custom.css" rel="stylesheet" type="text/css"> <!-- CUSTOM STYLESHEET FOR STYLING -->
        <!-- Color Style -->
        
        <link href="<?= $url ?>css/estilos.css" rel="stylesheet" type="text/css">
        <!-- SCRIPTS
          ================================================== -->
        <script src="<?= $url ?>js/modernizr.js"></script><!-- Modernizr -->
        <?php Sis::Recursos()->jQuery(); ?>
        <!-- <script src="<?= $url ?>js/jquery-2.1.3.min.js"></script>  -->
    </head>
    <body class="home header-style1">
        <!--[if lt IE 7]>
                <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
        <div class="body">
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6  col-sm-6"></div>
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
    <!-- Start Hero Slider -->
                <div class="slider-wrapper theme-default">
                    <div class="nivoSlider clearfix" data-autoplay="yes" data-pagination="yes" data-arrows="yes" data-effect="random" data-thumbs="no" data-slices="15" data-animSpeed="500" data-pauseTime="3000" data-pauseonhover="yes">
                        <img src="<?= $url ?>images/slides/slide3.jpg" alt="">
                        <img src="<?= $url ?>images/slides/slide4.jpg" alt="">
                        <img src="<?= $url ?>images/slides/slide5.jpg" alt="">
                    </div>
                </div>
    <!-- End Hero Slider -->
            </div>
            <!-- Notive Bar -->
            
            <!-- Start Body Content -->
            <div class="skewed-title-bar">
                <div class="container">
                    <h4>
                        <span>Noticias</span>
                    </h4>
                </div>
            </div>
            
            <div class="main" role="main">
                <div id="content" class="content full">
                    <?= $this->contenido ?>
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
                                <img src="<?= $url ?>images/logo.png" alt=""><br><br>
                                <p>A visible trace, evidence, or sign of something that once existed but exists or appears no more: a building that is the area's last vestige of its colonial era. A rudimentary or degenerate, usually nonfunctioning, structure that is the remnant of an organ or part that was fully developed or functioning in a preceding generation or an earlier stage of development.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="widget footer-widget widget_links">
                                <h4 class="widget-title">Navigation</h4>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="membership.html">Membership</a></li>
                                    <li><a href="exhibitions-grid.html">Exhibitions</a></li>
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
        <!--<script src="<?= $url ?>js/jquery-2.1.3.min.js"></script>  Jquery Library Call -->
        <!--<script src="<?= $url ?>vendor/prettyphoto/js/prettyphoto.js"></script>  PrettyPhoto Plugin -->
        <!--<script src="<?= $url ?>js/ui-plugins.js"></script>  UI Plugins--> 
        <!--<script src="<?= $url ?>js/helper-plugins.js"></script>  Helper Plugins -->
        <!--<script src="<?= $url ?>vendor/owl-carousel/js/owl.carousel.min.js"></script>  Owl Carousel -->
        <!--<script src="<?= $url ?>js/bootstrap.js"></script>  UI -->
        <!--<script src="<?= $url ?>js/init.js"></script>  All Scripts -->
        <!--<script src="<?= $url ?>vendor/flexslider/js/jquery.flexslider.js"></script>  FlexSlider -->
<!--        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>-->

        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <!--<script type="text/javascript" src="<?= $url ?>vendor/revslider/js/jquery.themepunch.tools.min.js"></script>-->   
        <!--<script type="text/javascript" src="<?= $url ?>vendor/revslider/js/jquery.themepunch.revolution.min.js"></script>-->
        <script type="text/javascript">
            
        </script>        
        <script src="<?= $url ?>vendor/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin -->
        <script src="<?= $url ?>js/ui-plugins.js"></script> <!-- UI Plugins -->
        <script src="<?= $url ?>js/helper-plugins.js"></script> <!-- Helper Plugins -->
        <script src="<?= $url ?>vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel -->
        <script src="<?= $url ?>vendor/nivoslider/jquery.nivo.slider.js"></script> <!-- NivoSlider -->
        <script src="<?= $url ?>js/bootstrap.js"></script> <!-- UI -->
        <script src="<?= $url ?>js/init.js"></script> <!-- All Scripts -->
        <script src="<?= $url ?>vendor/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider -->
        <script src="<?= $url ?>style-switcher/js/jquery_cookie.js"></script>
        <script src="<?= $url ?>style-switcher/js/script.js"></script>
    </body>

    <!-- Mirrored from html.imithemes.com/vestige/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Apr 2016 00:43:36 GMT -->
</html>
