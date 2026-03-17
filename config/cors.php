<?php

return [

    // Permitimos que todas las rutas que empiecen por api/ sean accesibles
    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    // Permitimos todos los métodos (GET, POST, PUT, DELETE)
    'allowed_methods' => ['*'],

    // AQUÍ pones la URL exacta de tu frontend en GitHub Pages
    // También he añadido localhost para que puedas probarlo tú en tu PC
    'allowed_origins' => [
        'https://el-pozo-frontend.github.io', 
        'http://127.0.0.1:5500', 
        'http://localhost:3000'
    ],

    'allowed_origins_patterns' => [],

    // Permitimos que se envíen cabeceras (como Content-Type o Authorization)
    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,

];