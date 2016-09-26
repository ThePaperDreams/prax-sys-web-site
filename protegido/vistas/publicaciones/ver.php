<?php
$this->migas = [
'Publicaciones' => ['publicaciones/todas'],
$publicacion->titulo,
];
?>
<div class="col-md-8">
    <header class="single-post-header clearfix">
        <h1 class="post-title"><?= $publicacion->titulo ?></h1>
        <div class="meta-data alt">
            <div><i class="fa fa-clock-o"></i> <?= $publicacion->fecha_publicacion ?></div>
        </div>
    </header>

    <article class="post-content">
        <?= $publicacion->contenido ?>

        <!-- About Author -->
<!--        <section class="about-author">
            <img src="images/user1.jpg" alt="avatar" class="img-thumbnail">
            <div class="post-author-content">
                <h3>Beverly Barnett <span class="label label-primary">Author</span></h3>
            </div>
        </section>-->

    </article>

    <section class="post-comments" id="comments">
        <h2><i class="fa fa-comment"></i> Comentarios (<?= $publicacion->totalComentarios ?>)</h2>
        <ol class="comments">
            <?php foreach($publicacion->Comentarios AS $comentario): ?>
            <li>
                <div class="post-comment-block">
                    <?php if($comentario->Autor->foto != ""): ?>
                    <img src="<?= URL_APP . 'publico/imagenes/usuarios/thumbs/tmb_' . $comentario->Autor->foto ?>" alt="avatar" class="img-thumbnail">
                    <?php else: ?>
                    <img src="<?= $comentario->Autor->foto ?>" alt="avatar" class="img-thumbnail">
                    <?php endif ?>

                    <div class="post-comment-content">
                        <a href="#" class="btn btn-default btn-xs pull-right">Responder</a>
                        <h5><?= $comentario->Autor->nombreMasUsuario ?> dice: </h5>
                        <span class="meta-data"><?= $comentario->fecha ?></span>
                        <p><?= $comentario->comentario ?></p>
                    </div>
                </div>
                <?php if(count($comentario->respuestas) > 0): ?>
                    <ul>
                        <?php foreach($comentario->respuestas AS $respuesta):  ?>
                        <li>
                            <div class="post-comment-block">
                                <?php if($respuesta->Autor->foto != ""): ?>
                                <img src="<?= URL_APP . 'publico/imagenes/usuarios/thumbs/tmb_' . $respuesta->Autor->foto ?>" alt="avatar" class="img-thumbnail">
                                <?php else: ?>
                                <img src="<?= $comentario->Autor->foto ?>" alt="avatar" class="img-thumbnail">
                                <?php endif ?>
                                <div class="post-comment-content">
                                    <a href="#" class="btn btn-default btn-xs pull-right">Responder</a>
                                    <h5><?= $respuesta->Autor->nombreMasUsuario ?> respondió: </h5>
                                    <span class="meta-data"><?= $respuesta->fecha ?></span>
                                    <p><?= $respuesta->comentario ?></p>
                                </div>
                            </div>
                        </li>
                        <?php endforeach ?>
                    </ul>
                <?php endif ?>
            </li>
            <?php endforeach?>
        </ol>
    </section>
    <section class="post-comment-form">
        <h3><i class="fa fa-share"></i> Deja un comentario</h3>
<?php if(Sis::apl()->usuario->esVisitante): ?>
        <div class="row">
            <div class="form-group">
            <a class="btn btn-primary" href="<?= Sis::apl()->crearUrl(['principal/entrar']) ?>">Inicia sesión para dejar un comentario</a>
            </div>
        </div>
<?php else:  ?>
        <form method="POST">
            <div class="row">
                <div class="form-group">
                    <div class="col-md-12">
                        <textarea cols="8" rows="4" name="comentario" class="form-control input-lg" placeholder="Tu opinión..."></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-lg">Envia tu comentario <i class="fa fa-send"></i></button>
                    </div>
                </div>
            </div>
        </form>
<?php endif ?>
    </section>

</div>
<div class="col-md-4 sidebar right-sidebar">

    <?= $this->vistaP('_resumenPublicaciones', ['ultimosPosts' => $ultimosPosts ]) ?>
    <?= $this->vistaP('_resumenEventos', ['ultimosPosts' => $ultimosPosts ]) ?>

</div>