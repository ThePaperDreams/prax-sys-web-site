<?php
# Se importan las librerias base js y css
Sis::Recursos()->JQuery(); 
Sis::Recursos()->Bootstrap3();
Sis::Recursos()->AwesomeFont();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title><?= Sis::apl()->nombre; ?></title>
        <meta charset="<?php echo Sis::apl()->charset; ?>">
    </head>
    <body>
        <?php $this->complemento('!siscoms.bootstrap3.CBNav', [
            'brand' => Sis::apl()->nombre,
            'elementos' => [
                ['texto' => 'Inicio', 'url' => ['principal/inicio']],
                ['texto' => 'Acerca', 'url' => ['principal/acerca']],
                ['texto' => 'Contacto', 'url' => ['principal/contacto']],
                [
                    'texto' => (Sis::apl()->usuario->esVisitante? 'Iniciar sesión' : 'Cerrar sesión'),
                    'url' => ['principal/' . (Sis::apl()->usuario->esVisitante? 'entrar' : 'salir')]
                ], 
            ],
        ]); ?>
        <?php $this->complemento('!siscoms.bootstrap3.CBBreadCrumbs', [
            'migas' => $this->migas
        ]) ?>
        <div class="container">            
            <div class="col-sm-<?= count($this->opciones) > 0? '9' : '12' ?>">
            <?= $this->contenido; ?>
            </div>
            <?php if(count($this->opciones)): ?>
            <div class="col-sm-3">
                <?php $this->complemento('!siscoms.bootstrap3.CBOpcionesPanel', [
                    'opciones' => $this->opciones,
                ]) ?>
            </div>
            <?php endif ?>
        </div>
    </body>
</html>