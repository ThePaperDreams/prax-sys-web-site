<?php
$url = Sis::apl()->tema->getUrlBase() . '/recursos/';
?>
<div class="container">
    <div class="row">
            <?php foreach($publicaciones AS $publicacion): ?>
        <div class="col-md-3 col-sm-12">
            <div class="featured-block">
                <figure>
                    <a href="<?= Sis::apl()->crearUrl(['publicaciones/ver', 'id' => $publicacion->id_publicacion]) ?>">
                        <?php if ($publicacion->img_previsualizacion == null && $publicacion->img_previsualizacion == ""): ?>
                        <img src="<?= Sis::UrlBase() ?>publico/imagenes/publicaciones/default.png" alt="" class="post-thumb">
                        <?php else: ?>
                        <img src="<?= $publicacion->img_previsualizacion ?>" alt="" class="post-thumb">
                        <?php endif ?>
                        <span class="caption"></span>
                    </a>
                </figure>
                <h4><?= $publicacion->titulo ?></h4>
                <p><?= $publicacion->resumen ?></p>
                <a href="<?= Sis::apl()->crearUrl(['publicaciones/ver', 'id' => $publicacion->id_publicacion]) ?>" class="basic-link">Leer más</a>
            </div>
        </div>                
            <?php endforeach; ?>
    </div>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <a class="btn btn-block btn-primary" href="<?= Sis::apl()->crearUrl(['publicaciones/todas']) ?>">Ver todas</a>
        </div>
    </div>
</div>

<div class="spacer-50"></div>
<div class="dgray-bg">
    <div class="skewed-title-bar">
        <div class="container">
            <h4>
                <span>Torneos</span>
            </h4>
        </div>
    </div>
    <div class="padding-tb45">
        <div class="container">
            <div class="carousel-wrapper">
                <div class="row">
                    <ul class="owl-carousel carousel-fw" id="venues-slider" data-columns="3" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="3" data-items-desktop-small="2" data-items-tablet="2" data-items-mobile="1">
                        <?php foreach($torneos AS $torneo): ?>
                        <li class="item">
                            <div class="featured-block featured-block-secondary format-standard">
                                <figure>
                                    <a href="venue-single.html" class="media-box">
                                        <?php if ($torneo->imagen == null && $torneo->imagen == ""): ?>
                                        <img src="<?= Sis::UrlBase() ?>publico/imagenes/publicaciones/no-disponible.jpg" alt="" class="post-thumb">
                                        <?php else: ?>
                                        <img src="<?= Sis::UrlBase() ?>publico/imagenes/publicaciones/<?= $publicacion->img_previsualizacion ?>" alt="" class="post-thumb">
                                        <?php endif ?>
                                    </a>
                                </figure>
                                <div class="featured-block-in">
                                    <h3><a href="#"><?= $torneo->nombre ?></a></h3>   
                                    <p><?= $torneo->descripcion ?></p>
                                </div>
                            </div>
                        </li>                                                
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="spacer-50"></div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Coming Exhibitions -->
            <div class="widget widget_upcoming_exhibitions">
                <h3 class="widget-title">Eventos</h3>
                <?php foreach($eventos AS $k=>$v):  ?>
                <?php 
                $dt = DateTime::createFromFormat("Y-m-d", $k);           
                $mes = $dt->format("F");
                $dia = $dt->format("d");
                $anio = $dt->format("Y");
                ?>
                <div class="exhibitions-timeline">
                    <div class="timeline-stamp">
                        <div class="timeline-stamp-table">
                            <div class="timeline-stamp-tablecell">
                                <div class="timeline-stamp-in">
                                    <!--<span class="label label-default">Today</span>-->
                                    <span class="timeline-stamp-day"><?= $dia ?></span>
                                    <span class="timeline-stamp-month"><?= $mes ?>, <?= $anio ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="timeline-slot">
                        <ul class="slot-exhibitions">
                            <?php foreach($v AS $evts): ?>
                            <?php
                            $partes = explode(':', $evts->hora);
                            unset($partes[count($partes) - 1]);
                            $hora = implode(':', $partes);
                            ?>
                            <li class="venue1">
                                <span class="exhibition-time"><?= $hora ?></span>
                                <div class="exhibition-teaser">
                                    <h5 class="post-title"><a href="exhibition-single.html"><?= $evts->titulo ?></a></h5>
                                    <div class="meta-data alt">
                                        <div><a href="venue-single.html"><i class="fa fa-map-marker"></i> <?= $evts->lugar ?></a></div>
                                    </div>
                                </div>
                            </li>            
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
                <?php endforeach ?>
                

                <!-- 
                <div class="exhibitions-timeline">
                    <div class="timeline-stamp">
                        <div class="timeline-stamp-table">
                            <div class="timeline-stamp-tablecell">
                                <div class="timeline-stamp-in">
                                    <span class="timeline-stamp-day">24</span>
                                    <span class="timeline-stamp-month">April, 2015</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-slot">
                        <ul class="slot-exhibitions">
                            <li class="venue1">
                                <span class="exhibition-time">09:00 am</span>
                                <div class="exhibition-teaser">
                                    <h5 class="post-title"><a href="exhibition-single.html">A new version: Modernist Photography</a></h5>
                                    <div class="meta-data alt">
                                        <div><i class="fa fa-clock-o"></i> Closing soon</div>
                                        <div><a href="venue-single.html"><i class="fa fa-map-marker"></i> Accrue Homestead</a></div>
                                    </div>
                                </div>
                            </li>
                            <li class="venue1">
                                <span class="exhibition-time">12:00 pm</span>
                                <div class="exhibition-teaser">
                                    <h5 class="post-title"><a href="exhibition-single.html">Abstract expressionist New York</a></h5>
                                    <div class="meta-data alt">
                                        <div><i class="fa fa-clock-o"></i> Until 25 May 2015</div>
                                        <div><a href="venue-single.html"><i class="fa fa-map-marker"></i> Accrue Homestead</a></div>
                                    </div>
                                </div>
                            </li>
                            <li class="venue2">
                                <span class="exhibition-time">05:30 pm</span>
                                <div class="exhibition-teaser">
                                    <h5 class="post-title"><a href="exhibition-single.html">Swedish photography from Chris until today</a></h5>
                                    <div class="meta-data alt">
                                        <div><i class="fa fa-clock-o"></i> Opening 23 April 2015</div>
                                        <div><a href="venue-single.html"><i class="fa fa-map-marker"></i> Mehar mansion</a></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                -->
            </div>
        </div>

        <!-- Sidebar -->
<!--        <div class="col-md-4">
             Widget Special Events 
            <div class="widget widget_special_events">
                <h3 class="widget-title">Special Events</h3>
                <div class="widget_special_events_in">

                    <div class="event-item format-standard">
                        <a href="event-single.html" class="media-box event-featured-img"><img src="<?= $url ?>images/image4.jpg" alt=""></a>
                        <div class="meta-data alt">
                            <div>May 20, 2015</div>
                            <div><a href="venue-single.html">Shop Pleu</a></div>
                        </div>
                        <h3 class="post-title"><a href="event-single.html">An Artist Combing the Shores of Time</a></h3>
                        <a href="event-single.html" class="basic-link">View details</a>
                    </div>

                    <div class="event-item format-standard">
                        <div class="meta-data alt">
                            <div>June 01, 2015</div>
                            <div><a href="venue-single.html">Shop Pleu</a></div>
                        </div>
                        <h3 class="post-title"><a href="event-single.html">We Come This Far by Faith</a></h3>
                        <a href="event-single.html" class="basic-link">View details</a>
                    </div>

                </div>
            </div>                        
        </div>-->
    </div>
</div>