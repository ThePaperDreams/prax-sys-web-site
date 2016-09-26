<?php

class CtrlPrincipal extends CControlador{
    private $rolPredefinido;
    private $multiplo = 15;
    
    public function inicializar() {
        parent::inicializar();
        $this->plantilla = 'inicial';
        $this->rolPredefinido = 6;
    }
    
    public function accionInicio(){
        $opciones = [];
        $this->getPublicaciones($opciones);
        $this->getTorneos($opciones);
        $this->getEventos($opciones);
        $this->mostrarVista('inicio', $opciones);
    }

    public function accionRegistro(){
        $this->plantilla = 'login';
        $usuario = new Usuario();

        if(isset($this->_p['Usuarios'])){
            $this->guardarUsuario($usuario, $this->_p['Usuarios']);
        }

        $this->vista("registro", [
            'modelo' => $usuario,
        ]);
    }

    private function guardarUsuario(&$usuario, $atributos){
        $usuario->atributos = $atributos;
        $usuario->rol_id = $this->rolPredefinido;
        $usuario->clave = sha1($usuario->clave);
        $usuario->estado = 2;

        $this->guardarImagenUsuario($usuario);
        // $usuario->email = "demo@localhost.com";
        if($usuario->guardar()){
            $this->enviarEmailConfirmacion($usuario);
            Sis::Sesion()->flash('success', 'Se ha creado su cuenta, por favor revise su email para confirmar la cuenta');
        }
        $this->redireccionar('entrar');
    }

    public function accionConfirmar(){
        if(!isset($this->_g['t'])){ $this->redireccionar('inicio'); }
        $t = $this->_g['t'];
        $id = $this->desencriptarIdUsuario($t);
        $usuario = Usuario::modelo()->porPk($id);
        if($usuario !== null && $usuario->estado == 2){
            $usuario->estado = 1;
            if($usuario->guardar()){
                Sis::Sesion()->flash('success', 'Se ha activado correctamente la cuenta, ya puede iniciar sesión');
            }
        }   
        $this->redireccionar('entrar');
    }

    private function enviarEmailConfirmacion($usuario){
        $tokken = $this->generarUrlRecuperacion($usuario);
        $url = Sis::CrearUrl(['principal/confirmar', 't' => $tokken]);
        $mensaje = $this->vistaP('_confirmarUsuario', ['url' => $url]);
        $asunto = "Club Deportivo Praxis - Confirmación de cuenta";
        return Sis::apl()->JMail->enviar($usuario->email, $asunto, $mensaje);
    }

    private function generarUrlRecuperacion(&$usuario){
        $relleno = base64_encode(time());
        $distraccion = rand(0, 100);
        $tokken = $this->encriptarIdUsuario($usuario->id_usuario, $distraccion);
        $url = "$relleno#$tokken#" . base64_encode($distraccion);
        return $url;
    }
    
    private function encriptarIdUsuario($id, $mascara){
        return base64_encode((intval($id) * $this->multiplo) + $mascara) ;
    }
    
    private function desencriptarIdUsuario($tokken){
        $partes = explode("#", $tokken);
        $tmpId = base64_decode($partes[1]);
        $distraccion = base64_decode($partes[2]);
        $id = (intval($tmpId) - intval($distraccion)) / $this->multiplo;
        return $id;
    }

    private function guardarImagenUsuario(&$usuario){
        $imagen = CArchivoCargado::instanciarModelo("Usuarios", 'foto');
        if($imagen !== null && $imagen->getError() === CArchivoCargado::NINGUNO){
            $dirs = 'publico.imagenes.usuarios';
            $rutaDes = RUTA_APP . DS . implode(DS, explode('.', $dirs));
            $rutaThumbs = $rutaDes . DS . 'thumbs';
            $imagen->guardar($rutaDes, $usuario->nombre_usuario);
            $usuario->foto = $imagen->getNombre(true);
            $imagen->thumbnail($rutaThumbs, [
                'tamanio' => 400,
                'tipo' => strtolower($imagen->getExtension()),
            ]);            
        }
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
                Sis::apl()->usuario->iniciarSesion($comUsuario->getID(), $comUsuario->usuario);
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
