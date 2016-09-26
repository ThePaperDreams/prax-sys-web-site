<?php 
$this->migas = [
	'Registrarse',
];
Sis::Recursos()->recursoCss(['url' => Sis::urlRecursos() . 'librerias/boot-file-input/css/fileinput.min.css']);
Sis::Recursos()->recursoJs(['url' => Sis::urlRecursos() . 'librerias/boot-file-input/js/fileinput.min.js']);

$f = new CBForm(['id' => 'registrarse', 'opcionesHtml' => ['enctype' => 'multipart/form-data']]);
$f->abrir();
 ?>
<div class="col-sm-8 col-sm-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">
			Crea tu cuenta
		</div>
		<div class="panel-body">
			<div class="alert alert-info">
				Los campos con <span class="text-danger">*</span> son requeridos
			</div>
			<div class="col-sm-6">
				<?= $f->campoTexto($modelo, 'email', ['label' => true, 'group' => true, 'autofocus' => true]) ?>
			</div>
			<div class="col-sm-6">
				<?= $f->campoTexto($modelo, 'nombre_usuario', ['label' => true, 'group' => true, 'autofocus' => true]) ?>
			</div>
			<div class="col-sm-6">
				<?= $f->campoPassword($modelo, 'clave', ['label' => true, 'group' => true, 'autofocus' => true]) ?>
			</div>
			<div class="col-sm-6">
				<?= CBoot::passwordField('', ['group' => true, 'label' => 'Confirme la contraseña']) ?>
			</div>
			<div class="col-sm-6">
				<?= $f->campoTexto($modelo, 'nombres', ['label' => true, 'group' => true]) ?>
			</div>
			<div class="col-sm-6">
				<?= $f->campoTexto($modelo, 'apellidos', ['label' => true, 'group' => true]) ?>
			</div>
			<div class="col-sm-12">
				<?= $f->campoArchivo($modelo, 'foto', ['label' => true, 'group' => true]) ?>
			</div>
			<div class="col-sm-12">
				<button type="submit" class="btn btn-primary btn-block">
					Registrarme
				</button>
				<a href="<?= Sis::CrearUrl(['principal/inicio']) ?>" class="btn btn-default btn-block">
					Cancelar
				</a>
			</div>
		</div>
	</div>
</div>
<?php $f->cerrar() ?>
<script>
       $(function(){
	       	$("#Usuarios_foto").fileinput({
	           showPreview: false,
	           showUpload: false,
	           showRemove: false,
	           browseLabel: "Buscar"
	       	});
       });
</script>