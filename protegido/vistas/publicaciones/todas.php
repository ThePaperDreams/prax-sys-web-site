<?php 
$this->migas = [
    'Publicaciones',
];
?>

<div class="row">
    <div class="col-md-8">
        <div class="posts-listing">
            <!-- List Item -->
            <?php foreach ($publicaciones AS $publicacion): ?>
                <div class="list-item blog-list-item format-standard">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="post-media">
                                <a href="<?= Sis::CrearUrl(['publicaciones/ver', 'id' => $publicacion->id_publicacion]) ?>" class="img-thumbnail">
                                    <?php if ($publicacion->img_previsualizacion == null && $publicacion->img_previsualizacion == ""): ?>
                                        <img src="<?= Sis::UrlBase() ?>publico/imagenes/publicaciones/default.png" alt="" class="post-thumb">
                                    <?php else: ?>
                                        <img src="<?= Sis::UrlBase() ?>publico/imagenes/publicaciones/<?= $publicacion->img_previsualizacion ?>" alt="" class="post-thumb">
                                    <?php endif ?>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3><a href="<?= Sis::CrearUrl(['publicaciones/ver', 'id' => $publicacion->id_publicacion]) ?>"><?= $publicacion->titulo ?></a></h3>
                            <div class="meta-data alt">
                                <div><i class="fa fa-clock-o"></i> <?= $publicacion->fecha_publicacion ?></div>
                            </div>
                            <div class="list-item-excerpt">
                                <p><?= $publicacion->resumen ?></p>
                            </div>
                            <div class="post-actions">
                                <a href="<?= Sis::CrearUrl(['publicaciones/ver', 'id' => $publicacion->id_publicacion]) ?>" class="btn btn-primary">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

        <ul class="pagination">
            <li><a href="#" title="First"><i class="fa fa-chevron-left"></i></a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#" class="">2</a></li>
            <li><a href="#" class="">3</a></li>
            <li><a href="#" title="Last"><i class="fa fa-chevron-right"></i></a></li>
        </ul>
    </div>

    <div class="col-md-4 sidebar right-sidebar">

        <?= $this->vistaP('_resumenPublicaciones', ['ultimosPosts' => $ultimosPosts]) ?>
        <?= $this->vistaP('_resumenEventos', ['ultimosPosts' => $ultimosPosts]) ?>

    </div>
</div>