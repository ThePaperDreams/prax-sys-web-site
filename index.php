<?php
$sistema = dirname(__FILE__) . '/../../jea-publico/sistema/Sis.php';
$configuraciones = dirname(__FILE__) . '/protegido/configuraciones/apl.php';

require_once $sistema;
Sis::crearAplicacion($configuraciones)->iniciar();