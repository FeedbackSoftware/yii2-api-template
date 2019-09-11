<?php
return [
    [
        'controller' => ['v1/user'],
        'pluralize' => false,
        'extraPatterns' => [
            'GET status' => 'status',
            'POST signup' => 'signup',
            'POST register' => 'register'
        ],
        'except' => ['create', 'delete', 'update', 'view', 'index'],
    ],
];
