<?php

class CtrlPublicaciones extends CControlador{
    
    
    public function accionVer($id){
        $this->plantilla = "blog-single";
        $publicacion = Publicacion::modelo()->porPk($id);
        if(isset($this->_p['comentario'])){
            $this->guardarComentario($id);
        }
        $c = new CCriterio();
        $c->limitar(4);
        $c->orden("id_publicacion", false);
        $ultimosPosts = Publicacion::modelo()->listar($c);
        
        $this->vista("ver", [
            'publicacion' => $publicacion,
            'ultimosPosts' => $ultimosPosts,
        ]);
    }

    public function guardarComentario($id){
        $comentario = new Comentario();
        $comentario->publicacion_id = $id;
        $comentario->estado = 2;
        $comentario->fecha = date("Y-m-d H:i:s");
        $comentario->usuario_id = Sis::apl()->usuario->getID();
        $comentario->comentario = $this->_p['comentario'];
        if($comentario->guardar()){
            $this->redireccionar('publicaciones/ver', ['id' => $id]);
        }
    }

    public function accionAjax(){
        if(!isset($this->_p['dataAjx'])){ Sis::fin(); }
        $padre = Comentario::modelo()->porPk($this->_p['padre']);
        $respuesta = new Comentario();
        $respuesta->publicacion_id = $padre->publicacion_id;
        $respuesta->padre_id = $padre->id_comentario;
        $respuesta->estado = 2;
        $respuesta->fecha = date("Y-m-d H:i:s");
        $respuesta->usuario_id = Sis::apl()->usuario->getID();
        $respuesta->comentario = $this->_p['texto'];
        $this->json([
            'error' => !$respuesta->guardar(),
        ]);
    }
    
    public function accionTodas(){
        $this->plantilla = "blog-single";
        $c = new CCriterio();
        $c->orden("id_publicacion", false);
        $p = Publicacion::modelo()->listar($c);
        $c->limitar(4);
        $ultimosPosts = Publicacion::modelo()->listar($c);
        
        $this->vista('todas', [
            'publicaciones' => $p,
            'ultimosPosts' => $ultimosPosts,
        ]);
    }
}
