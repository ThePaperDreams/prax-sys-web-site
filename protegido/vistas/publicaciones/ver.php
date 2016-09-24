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
        <!--<h2><i class="fa fa-comment"></i> Comments (4)</h2>-->
        <ol class="comments">
            <!--        <li>
                        <div class="post-comment-block">
                            <img src="images/user2.jpg" alt="avatar" class="img-thumbnail">
                            <div class="post-comment-content">
                                <a href="#" class="btn btn-default btn-xs pull-right">Reply</a>
                                <h5>John Doe says</h5>
                                <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                                <p>There have been human health concerns associated with the consumption of dolphin meat in Japan after tests showed that dolphin meat contained high levels of mercury.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="post-comment-block">
                            <img src="images/user1.jpg" alt="avatar" class="img-thumbnail">
                            <div class="post-comment-content">
                                <a href="#" class="btn btn-default btn-xs pull-right">Reply</a>
                                <h5>John Doe says</h5>
                                <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                                <p>Nicely said :)</p>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <div class="post-comment-block">
                                    <img src="images/user2.jpg" alt="avatar" class="img-thumbnail">
                                    <div class="post-comment-content">
                                        <a href="#" class="btn btn-default btn-xs pull-right">Reply</a>
                                        <h5>John Doe says</h5>
                                        <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                                        <p>Étienne de Flacourt (1607-60), French governor of Madagascar, described eating unborn dolphin calves cut out of the womb of a caught dolphin cow in Histoire de la grande isle Madagascar (1661). He considered the meat more tender and delicate than veal and believed it to be among the best meats he had eaten.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post-comment-block">
                                    <img src="images/user2.jpg" alt="avatar" class="img-thumbnail">
                                    <div class="post-comment-content">
                                        <a href="#" class="btn btn-default btn-xs pull-right">Reply</a>
                                        <h5>John Doe says</h5>
                                        <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                                        <p>Real post, i love reading it all through</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="post-comment-block">
                            <img src="images/user1.jpg" alt="avatar" class="img-thumbnail">
                            <div class="post-comment-content">
                                <a href="#" class="btn btn-default btn-xs pull-right">Reply</a>
                                <h5>John Doe says</h5>
                                <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                                <p>Dolphin meat is consumed in a small number of countries world-wide, which include Japan[125] and Peru (where it is referred to as chancho marino, or "sea pork").[126] While Japan may be the best-known and most controversial example, only a very small minority of the population has ever sampled it.</p>
                            </div>
                        </div>
                    </li>-->
        </ol>
    </section>

<!--    <section class="post-comment-form">
        <h3><i class="fa fa-share"></i> Post a comment</h3>
        <form>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-4 col-sm-4">
                        <input type="text" class="form-control input-lg" placeholder="Your name">
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <input type="email" class="form-control input-lg" placeholder="Your email">
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <input type="url" class="form-control input-lg" placeholder="Website (optional)">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-12">
                        <textarea cols="8" rows="4" class="form-control input-lg" placeholder="Your comment"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-lg">Submit your comment</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
-->
</div>
<div class="col-md-4 sidebar right-sidebar">

    <?= $this->vistaP('_resumenPublicaciones', ['ultimosPosts' => $ultimosPosts ]) ?>
    <?= $this->vistaP('_resumenEventos', ['ultimosPosts' => $ultimosPosts ]) ?>

</div>