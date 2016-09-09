<?php 
    $this->tituloPagina = "Registar Usuario";
    $this->migas = [
        'Home' => ['principal/inicio'],     
        'Registrar'
    ];
        
?>
<div class="col-sm-12">    
    <?php echo $this->mostrarVistaP('_formulario', ['modelo' => $modelo, 'url' => $url]); ?>
</div>