<?php

class ComUsuario extends CComponenteUsuario{
    public $_usr;
    public $_clv;
    public $nombres;

    public function autenticar() {
        $usuario = Usuario::modelo()->primer([
            'where' => "t.nombre_usuario = '" . $this->usuario . "' OR t.email = '$this->usuario'",
        ]);
        if ($usuario != null && $usuario->clave === sha1($this->clave) && $usuario->estado == '1') {
            if($usuario->recuperacion == '1'){
                $this->error = true;
            } else {          
                $this->error = false;
                $this->ID = $usuario->id_usuario;            
                $this->nombres = $usuario->NombreMasUsuario;                
            }
        } else {
            $this->error = true;
        }
        return !$this->error;
    }
}
