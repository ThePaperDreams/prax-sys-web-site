
<?php
 
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
        ]
    ],
    
    'extensiones' => [
        
    ],
];