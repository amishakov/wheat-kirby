<?php

return [
    'cache' => [
        'pages' => [
            'active' => true,
        ]
    ],
    'debug'  => false,
    'auth' => [
        'methods' => ['password','code']
    ],
    'email' => [
        'transport' => [
            'type' => 'smtp',
            'host' => '	smtp.sendgrid.net',
            'port' => 465,
            'security' => true,
            'auth' => true,
            'username' => 'apikey',
            'password' => ''
        ]
    ]
];