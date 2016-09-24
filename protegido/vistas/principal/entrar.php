<?php 
$this->migas = [
    'Iniciar sesión',
];
?>
<div class="row">
    
    <div class="col-sm-offset-3 col-sm-6">

        <div class="panel panel-primary">
            <div class="panel-heading">
                Iniciar sesión
            </div>
            <div class="panel-body">
                <div class="col-sm-12">
                    <?php 
                    $form = new CBForm(['id' => 'login']);
                    $form->abrir();

                    echo CBoot::text('', ['group' => true, 'placeholder' => 'Ingrese su nombre de usuario', 'autofocus' => true, 'name' => 'login-usr']);
                    echo CBoot::passwordField('', ['group' => true, 'placeholder' => 'Ingrese su contraseña', 'autofocus' => true, 'name' => 'login-pwd']);
                    
                    ?>
                    <div class="form-group">
                        <?= CBoot::boton('Iniciar sesión', 'success', ['class' => 'btn-block']) ?>
                    </div>
                    <div class="form-group">
                        <a href="<?= Sis::CrearUrl(['principal/registro']) ?>">
                        <?= CBoot::boton('Registrarse', 'primary', ['class' => 'btn-block']) ?>                            
                        </a>
                    </div>
                    <div class="form-group text-center">
                        <a href="<?= Sis::CrearUrl(['principal/recuperar']) ?>">
                            ¿Olvidó su contraseña?
                        </a>
                    </div>
                    <?= $form->cerrar() ?>
                </div>
            </div>
        </div>

    </div>
    
</div>