<?php

class CtrlPrincipal extends CControlador{
    
    public function inicializar() {
        parent::inicializar();
        $this->plantilla = 'inicial';
    }
    
    public function accionInicio(){
        $c = new CCriterio();
        $c->condicion('tipo_id', '1');
        $c->limitar(12);
        $publicaciones = Publicacion::modelo()->listar($c);
        
        $this->mostrarVista('inicio', [
            'publicaciones' => $publicaciones,
        ]);
    }

    public function accionAcerca(){
    	$this->mostrarVista("acerca");
    }

    public function accionContacto(){
    	$this->mostrarVista("contacto");
    }

    public function accionEntrar(){
        if(!Sis::apl()->usuario->esVisitante){
            $this->redireccionar('inicio');
        }
        
        if(isset($this->_p['login-usr']) && isset($this->_p['login-pwd'])){
            $comUsuario = new ComUsuario($this->_p['login-usr'], $this->_p['login-pwd']);
            $comUsuario->cargarConfiguracion();
            if($comUsuario->autenticar()){
                Sis::apl()->usuario->iniciarSesion($comUsuario->usuario, $comUsuario->usuario);
                $this->redireccionar('inicio');
            }
        }
        
    	$this->mostrarVista("entrar");
    }

    public function accionSalir(){
        if(!Sis::apl()->usuario->esVisitante){
            Sis::apl()->usuario->cerrarSesion();
            $this->redireccionar("entrar");
        }
    	$this->redireccionar("inicio");
    }    
    
}
