<?php

class CtrlPublicaciones extends CControlador{
    
    
    public function accionVer($id){
        $this->plantilla = "blog-single";
        $publicacion = Publicacion::modelo()->porPk($id);
        $c = new CCriterio();
        $c->limitar(4);
        $ultimosPosts = Publicacion::modelo()->listar($c);
        
        $this->vista("ver", [
            'publicacion' => $publicacion,
            'ultimosPosts' => $ultimosPosts,
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
