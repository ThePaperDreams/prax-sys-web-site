<?php
Sis::Recursos()->JQuery();
Sis::Recursos()->UIKit();
Sis::Recursos()->recursoCss(['url' => Sis::apl()->tema->getUrlBase() . '/recursos/css/bootstrap.min.css']);
Sis::Recursos()->recursoCss(['url' => Sis::apl()->tema->getUrlBase() . '/recursos/css/font-awesome.min.css']);
Sis::Recursos()->recursoCss(['url' => Sis::apl()->tema->getUrlBase() . '/recursos/css/animate.min.css']);
Sis::Recursos()->recursoCss(['url' => Sis::apl()->tema->getUrlBase() . '/recursos/css/prettyPhoto.css']);
Sis::Recursos()->recursoCss(['url' => Sis::apl()->tema->getUrlBase() . '/recursos/css/main.css']);
Sis::Recursos()->recursoCss(['url' => Sis::apl()->tema->getUrlBase() . '/recursos/css/responsive.css']);
Sis::Recursos()->recursoCss(['url' => Sis::UrlRecursos() . '/librerias/uikit/css/components/sticky.min.css']);

//Sis::Recursos()->recursoJs(['url' => Sis::apl()->tema->getUrlBase() . '/recursos/js/jquery.js']);
Sis::Recursos()->recursoJs(['url' => Sis::apl()->tema->getUrlBase() . '/recursos/js/jquery.prettyPhoto.js']);
Sis::Recursos()->recursoJs(['url' => Sis::apl()->tema->getUrlBase() . '/recursos/js/bootstrap.min.js']);
Sis::Recursos()->recursoJs(['url' => Sis::apl()->tema->getUrlBase() . '/recursos/js/jquery.isotope.min.js']);
Sis::Recursos()->recursoJs(['url' => Sis::apl()->tema->getUrlBase() . '/recursos/js/main.js']);
Sis::Recursos()->recursoJs(['url' => Sis::apl()->tema->getUrlBase() . '/recursos/js/wow.min.js']);
Sis::Recursos()->recursoJs(['url' => Sis::UrlRecursos() . '/librerias/uikit/js/components/sticky.min.js']);

?>
<!--    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= Sis::apl()->nombre ?></title>	
	<!-- core CSS -->
    <!--[if lt IE 9]>
        <script src="<?= Sis::apl()->tema->getUrlBase() ?>/recursos/js/html5shiv.js"></script>
        <script src="<?= Sis::apl()->tema->getUrlBase() ?>/recursos/js/respond.min.js"></script>
    <![endif]-->       
    
    <link rel="shortcut icon" href="<?= Sis::apl()->tema->getUrlBase() ?>/recursos/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 90</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner" data-uk-sticky="">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?= Sis::apl()->tema->getUrlBase() ?>/recursos/images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?= Sis::CrearUrl(['principal/inicio']) ?>">Inicio</a></li>
                        <li><a href="<?= Sis::CrearUrl(['principal/elClub']) ?>">El club</a></li>
                        <li><a href="<?= Sis::CrearUrl(['Eventos/verEventos']) ?>">Eventos</a></li>
                        <li><a href="<?= Sis::CrearUrl(['Noticias/verNoticias']) ?>">Noticias</a></li>
<!--                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.html">Blog Single</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="shortcodes.html">Shortcodes</a></li>
                            </ul>
                        </li>-->
                        <li><a href="<?= Sis::CrearUrl(['principal/entrar']) ?>">Entrar</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->

    <section id="main-slider" class="no-margin">
        <?= $this->contenido ?>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    
</body>
</html>