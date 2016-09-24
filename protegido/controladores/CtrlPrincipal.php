<?php

class CtrlPrincipal extends CControlador{
    
    public function inicializar() {
        parent::inicializar();
        $this->plantilla = 'inicial';
    }
    
    public function accionInicio(){
        $opciones = [];
        $this->getPublicaciones($opciones);
        $this->getTorneos($opciones);
        $this->getEventos($opciones);
        $this->mostrarVista('inicio', $opciones);
    }
    
    private function getEventos(&$opciones){
        $c = new CCriterio();
        $c->agrupar("fecha");
        $m1 = Evento::modelo()->listar($c);
        
        $c->limpiar('agrupar');
        $eventos = [];
        foreach($m1 AS $ev){
            $c->condicion("fecha", $ev->fecha);
            $eventos[$ev->fecha] = Evento::modelo()->listar($c);
        }        
        $opciones['eventos'] = $eventos;
    }
    
    private function getPublicaciones(&$opciones) {
        $c = new CCriterio();
        $c->condicion('tipo_id', '1');
        $c->limitar(4);
        $c->orden("id_publicacion", false);
        
        $opciones['publicaciones'] = Publicacion::modelo()->listar($c);
    }
    
    private function getTorneos(&$opciones) {
        $c = new CCriterio();
        $c->limitar(8);
        $opciones['torneos'] = Torneo::modelo()->listar($c);
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
        
        $this->plantilla = 'login';
        
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
