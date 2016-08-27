
<?php
 
return [
    'version' => '1.0.0',
    'nombre' => 'web-site',
    'charset' => 'utf-8',
    'modoProduccion' => false,
    
    'apacheRewrite' => true,
    'importar' => [
        '!aplicacion.modelos',
        '!aplicacion.componentes',
    ],
    'modulos' => [
        /* Comenta el generador de código al entrar en modo producción
        'codegen' => [
            'ruta' => '!web.modulos.codegen',
            'clase' => 'codeGen',
            'controladorPorDefecto' => 'generador',
            'usuario' => 'admin',
            'clave' => 'admin',
        ],
        */
    ],
    'componentes' => [
        'bd' => [
            'driver' => 'mysql',
            'servidor' => '127.0.0.1',
            'usuario' => 'root',
            'clave' => '',
            'bd' => 'test',
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