<section>
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            <div class="item active" style="background-image: url(<?= Sis::UrlRecursos() ?>/galeria/bg-gallery-3.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-7">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                            </div>
                        </div>

                        <div class="col-sm-5 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="<?= Sis::UrlRecursos()?>/galeria/soccer-child.png" class="img-responsive" style="width: 460px;">
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url(<?= Sis::UrlRecursos() ?>/galeria/bg-gallery-1.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-7">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                            </div>
                        </div>

                        <div class="col-sm-5 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="<?= Sis::UrlRecursos()?>/galeria/soccer-child.png" class="img-responsive" style="width: 460px;">
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url(<?= Sis::UrlRecursos() ?>/galeria/bg-gallery-1.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-7">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                            </div>
                        </div>
                        <div class="col-sm-5 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="<?= Sis::UrlRecursos()?>/galeria/soccer-child.png" class="img-responsive" style="width: 460px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
    
</section><!--/#main-slider-->

<section id="recent-works" data-uk-parallax="{bg: '-1000'}" style="background-image: url(<?= Sis::UrlRecursos() ?>pics/Soccer-Wallpaper-HD.jpg); background-size: 100%;">
    <div class="container">
        <div id="cont-tit-not" class="center wow fadeInDown">
            <h2>Noticias</h2>          
        </div>
        <div class="uk-grid" data-uk-grid-margin="">
        <?php $delay = 300 ?>
        <?php foreach($publicaciones AS $p):  ?>
            <div class="col-sm-4">
                <div class="uk-panel uk-panel-box wow fadeInDown animated" data-wow-duration="1000ms" data-wow-offset="1" data-wow-delay="<?= $delay += 300 ?>ms">
                    <h3 class="uk-panel-title"><?= $p->titulo ?></h3>
                    <p><?= $p->resumen ?></p>
                </div>
            </div>
        <?php endforeach; ?>
        </div>            
        <div class="col-sm-offset-4 col-sm-4">
            <a class="btn btn-primary btn-block animation animated-item-3" href="#">Ver todas</a>
        </div>
    </div><!--/.container-->
</section><!--/#recent-works-->

<section id="services" class="service-item">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Eventos</h2>
        </div>

        <div class="row">

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="<?= Sis::apl()->tema->getUrlBase() ?>/recursos/images/services/services1.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">SEO Marketing</h3>
                        <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                    </div>
                </div>
            </div>            
            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="<?= Sis::apl()->tema->getUrlBase() ?>/recursos/images/services/services6.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">SEO Marketing</h3>
                        <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                    </div>
                </div>
            </div>                                                
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#services-->

<section id="partner">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Our Partners</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>    

        <div class="partners">
            <ul>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="<?= Sis::apl()->tema->getUrlBase() ?>/recursos/images/partners/partner1.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="<?= Sis::apl()->tema->getUrlBase() ?>/recursos/images/partners/partner2.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="<?= Sis::apl()->tema->getUrlBase() ?>/recursos/images/partners/partner3.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="<?= Sis::apl()->tema->getUrlBase() ?>/recursos/images/partners/partner4.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="<?= Sis::apl()->tema->getUrlBase() ?>/recursos/images/partners/partner5.png"></a></li>
            </ul>
        </div>        
    </div><!--/.container-->
</section><!--/#partner-->
    
    <script>
        $(function(){
            var headerh = $("#header").height();
            var wh = parseInt($(window).height());
            $("#main-slider .carousel .item").css({
                "max-height" : wh + "px",
            });
        });
    </script>