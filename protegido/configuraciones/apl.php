
<?php
define('URL_APP', "http://localhost/proyecto-formacion/prax-sys/");
define('RUTA_APP', "C:\wamp\www\proyecto-formacion\prax-sys");

return [
    'version' => '1.0.0',
    'nombre' => 'Club Deportivo Praxis',
    'charset' => 'utf-8',
    'modoProduccion' => false,
//    'tema' => 'corlate',
    'tema' => 'vestige',
    'apacheRewrite' => true,
    'importar' => [
        '!aplicacion.modelos',
        '!aplicacion.componentes',
    ],
    'modulos' => [
        /* Comenta el generador de código al entrar en modo producción
        */
        'codegen' => [
            'ruta' => '!web.modulos.codegen',
            'clase' => 'codeGen',
            'controladorPorDefecto' => 'generador',
            'usuario' => 'admin',
            'clave' => 'admin',
        ],
    ],
    'componentes' => [
        'bd' => [
            'driver' => 'mysql',
            'servidor' => '127.0.0.1',
            'usuario' => 'pdeveloper',
            'clave' => 'pr@x1sdev',
            'bd' => 'prax_sys_dev',
            'prefijo' => 'tbl_',
            'charset' => 'utf8',
            'procedimientos' => false,
        ],
        'usuario' => [
            'ruta' => '!aplicacion.componentes',
            'clase' => 'ComUsuario',
            'usr' => 'admin',
            'clv' => 'admin',
        ],
        'JMail' => [
            'ruta' => '!aplicacion.componentes',
            'clase' => 'JMail',
            'emailAdmin' => 'info@jakolab.com',
        ]
    ],
    
    'extensiones' => [
        
    ],
];