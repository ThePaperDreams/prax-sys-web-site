<?php
Sis::Recursos()->recursoCss(['url' => Sis::urlRecursos() . 'librerias/boot-file-input/css/fileinput.min.css']);
Sis::Recursos()->recursoJs(['url' => Sis::urlRecursos() . 'librerias/boot-file-input/js/fileinput.min.js']);
Sis::Recursos()->recursoCss([
    'url' => Sis::urlRecursos() . 'librerias/boot-file-input/css/fileinput.min.css',
]);
Sis::Recursos()->recursoJs([
    'url' => Sis::urlRecursos() . 'librerias/boot-file-input/js/fileinput.min.js',
]);
$formulario = new CBForm(['id' => 'form-usuarios', 'opcionesHtml' => ['enctype' => 'multipart/form-data']]);
$formulario->abrir();
?>
<div class="panel panel-warning col-sm-6">
    <div class="panel-heading">Regístrate</div>
    <div class="panel-body">
        <p>Los campos con <span class="text-danger">*</span>  son requeridos</p>
        <div class="row">
            <div class="col-sm-12">
                <?php echo $formulario->campoArchivo($modelo, 'foto', ['label' => true, 'group' => true]) ?>
            </div>
        </div>   
            <div class="tile p-15">   
                <div class="row">
                    <div class="col-sm-6">
                        <?php echo $formulario->campoTexto($modelo, 'nombres', ['label' => true, 'group' => true, 'maxlength' => '40']) ?>        
                    </div>
                    <div class="col-sm-6">
                        <?php echo $formulario->campoTexto($modelo, 'apellidos', ['label' => true, 'group' => true, 'maxlength' => '40']) ?>
                    </div>
                    <div class="col-sm-6">
                        <?php echo $formulario->campoTexto($modelo, 'nombre_usuario', ['label' => true, 'group' => true, 'maxlength' => '30', 'data-toggle'=>'tooltip']) ?>
                    </div>
                    <div class="col-sm-6">
                        <?php echo $formulario->campoTexto($modelo, 'email', ['label' => true, 'group' => true, 'maxlength' => '80']) ?>
                    </div>

                    <div id="passwords">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="usuario-clave">Clave <span class="text-danger">*</span></label>
                                <p class="text-danger form-requerido" style="display:none" id="err-clave">El campo <b>Clave</b> no puede estar vacio</p>
                                <?= CBoot::passwordField('', ['requerido' => '1', 'class' => 'form-group', 'id' => 'usuario-clave', 'name' => 'Usuarios[uclave]', 'data-toggle'=>'tooltip']) ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="confirmar-clave">Confirmar Clave <span class="text-danger">*</span></label>
                                <p class="text-danger form-requerido" style="display:none" id="err-clave">El campo <b>Confirmar Clave</b> no puede estar vacio</p>
                                <?= CBoot::passwordField('', ['requerido' => '1', 'class' => 'form-group', 'id' => 'confirmar-clave']) ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-offset-4 col-sm-4">
                        <div class="form-group">
                        <?php echo CHtml::link(CBoot::fa('undo') . ' Cancelar', ['usuario/inicio'], ['class' => 'btn btn-primary btn-block']); ?>
                        </div>
                    </div>    
                    <div class="col-sm-4">
                        <div class="form-group">
                        <?php echo CBoot::boton(CBoot::fa('save') . ' ' . ($modelo->nuevo ? 'Guardar' : 'Actualizar'), 'success', ['class' => 'btn-block', 'style'=>'margin-top: 10px']); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php $formulario->cerrar(); ?>
    </div>    
</div>   
<script>
    $(function () {
        $("#usuario-clave").attr("title", "La clave debe contener: 6 o más caracteres, mínimo un número, una letra minúscula y una letra mayúscula.");
        $("#Usuarios_nombre_usuario").attr("title", "El nombre de usuario debe contener: 6 o más caracteres.");
        $('[data-toggle="tooltip"]').tooltip();         
        $("#Usuarios_foto").fileinput({
            showPreview: false,
            showRemove: false,
            showUpload: false,
            browseLabel: "Seleccionar archivo",
        });
        $("#form-usuarios").submit(function(){  
                //console.log($("#Usuarios_email").val(),$("#Usuarios_nombre_usuario").val());
                //return false;
                if (validarClave() && validarEmail()) {
                    validarUsuarioEmail();
                }
            return false;
            });
        });    
        function validarUsuarioEmail() {
        var email = $("#Usuarios_email").val();
        var usuario = $("#Usuarios_nombre_usuario").val();
        if (email === "" || usuario === "" || usuario.length < 6) {
            lobiAlert("error", "El Nombre de usuario debe contener: 6 o más caracteres.");
            return false;
        }
        $.ajax({
            type: 'POST',
            url: '<?php echo $url ?>',
            data: {
                validarUsuarioEmail: true,
                usuario: $.trim(usuario),
                email: $.trim(email)
            },
            success: function (respuesta) {
                if (respuesta.error === true) {
                    lobiAlert("error", "El nombre de usuario o el email no está disponible");
                } else {                    
                    document.getElementById("form-usuarios").submit();
                }
            }
        });
    }
    

    function validarEmail(){
        var emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
        var email = $("#Usuarios_email");
        //console.log(email, emailRegex);
        if (emailRegex.test(email.val())) {
            return true;
        } else {
            lobiAlert('error','Ingresa un email válido');
            email.focus();
            return false;
        }
    }
    
    function validarClave() {
        var claveRegex = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
        var clave = $("#usuario-clave");
        var clave2 = $("#confirmar-clave").val(); 
        if (clave.val() !== "" && clave.val() === clave2) {
            if(claveRegex.test(clave.val())){
                return true;
            }else{
                lobiAlert("error", "La clave debe contener: 6 o más caracteres, mínimo un número, una letra minúscula y una letra mayúscula.");
                clave.focus();
                return false;
            }
        }else{
            lobiAlert("error", "Las constraseñas no son iguales");
            clave.focus();
            return false;
        }        
    }   
    </script>