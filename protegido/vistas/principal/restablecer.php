<?php 
$this->migas = [
    'Recuperar contraseña',
];
?>
<div class="row">
    
    <div class="col-sm-offset-3 col-sm-6">

        <div class="panel panel-primary">
            <div class="panel-heading">
                Restablecer contraseña
            </div>
            <div class="panel-body">
                <div class="col-sm-12">
                    <div class="alert alert-info">
                        Ingrese la dirección de correo eléctronico con que se registró
                    </div>
                    <?php 
                    $form = new CBForm(['id' => 'login']);
                    $form->abrir();                    
                    ?>
                    <?= CBoot::passwordField('', ['id' => 'clave', 'placeholder' => 'Ingrese la nueva contraseña', 'class' => 'login-control', 'name' => 'recuperar-pwd', 'id' => 'pwd1', 'autofocus' => true]) ?>
                    <div class="p-5"></div>
                    <?= CBoot::passwordField('', ['id' => 'clave', 'placeholder' => 'Confirme la contraseña', 'class' => 'login-control', 'id' => 'pwd2']) ?>
                    <div class="p-5"></div>
                    <?=  CBoot::boton('Restablecer', 'success btn-block', ['class' => 'btn btn-sm m-r-5']); ?>
                    <div class="p-5"></div>
                    <?= $form->cerrar() ?>
                </div>
            </div>
        </div>

    </div>
    
</div>
<script>
    $(function(){
        $("#login").submit(function(){
            var pwd1 = $("#pwd1");
            var pwd2 = $("#pwd2");
            var send = false;
            if($.trim(pwd1.val()) === ""){
                lobiAlert("error", "Por favor ingrese una contraseña");
                pwd1.focus();
            } else if(pwd1.val().length < 6){
                lobiAlert("error", "La contraseña debe tener un mínimo de 6 cáracteres");
                pwd1.focus();
            } else if($.trim(pwd2.val()) === ""){
                lobiAlert("error", "Por favor confirme la contraseña");
                pwd2.focus();
            } else if(pwd1.val() !== pwd2.val()){
                lobiAlert("error", "Las contraseñas no coinciden");
                pwd2.focus().select();
            } else {
                send = true;
            }
            return send;
        });
    });
</script>