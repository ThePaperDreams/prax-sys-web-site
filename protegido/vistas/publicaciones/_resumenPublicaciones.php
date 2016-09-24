<div class="widget sidebar-widget widget_recent_posts box-style1">
    <h3 class="widget-title">Últimas noticias</h3>
    <ul>
        <?php foreach ($ultimosPosts AS $post): ?>
            <li>
                <!--<a href="blog-single.html"><img src="images/image6.jpg" alt="" class="img-thumbnail"></a>-->
                <a href="<?= Sis::apl()->crearUrl(['publicaciones/ver', 'id' => $post->id_publicacion]) ?>">
                    <?= $post->titulo ?>
                </a>
                <span class="meta-data">Posted on April 14, 2015</span>
            </li>
        <?php endforeach ?>                                        
    </ul>
</div>
