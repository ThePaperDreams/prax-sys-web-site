<?php

class CtrlError extends CControlador{
    public function accion500(){
        $this->vista("500");
    }
}
