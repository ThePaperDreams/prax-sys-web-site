<?php 
$this->migas = [
    'Recuperar contraseña',
];
?>
<div class="row">
    
    <div class="col-sm-offset-3 col-sm-6">

        <div class="panel panel-primary">
            <div class="panel-heading">
                Recuperar contraseña
            </div>
            <div class="panel-body">
                <div class="col-sm-12">
                    <div class="alert alert-info">
                        Ingrese la dirección de correo eléctronico con que se registró
                    </div>
                    <?php 
                    $form = new CBForm(['id' => 'login']);
                    $form->abrir();
                    echo CBoot::text('', ['id' => 'txt-email', 'group' => true, 'placeholder' => 'Ingrese su email', 'autofocus' => true, 'name' => 'email']);
                    
                    ?>
                    <div class="form-group">
                        <?= CBoot::boton('Enviar', 'primary', ['class' => 'btn-block', 'id' => 'recuperar-btn']) ?>
                    </div>
                    <?= $form->cerrar() ?>
                </div>
            </div>
        </div>

    </div>
    
</div>
<script>
    $(function(){

        $("#recuperar-btn").click(function(){
            var email = $("#txt-email");

            if($.trim(email.val()) === ""){
                alert("Por favor ingrese un email");
                email.focus();
                return false;
            }

            $(this).attr("disabled", "disabled");
            document.getElementById("login").submit();
        });
    });
</script>