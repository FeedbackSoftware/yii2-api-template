<?php
return [
    [
        'controller' => ['v1/user'],
        'pluralize' => false,
        'extraPatterns' => [
            'GET status' => 'status',
            'POST signup' => 'signup',
        ],
        'except' => ['create', 'delete', 'update', 'view', 'index'],
    ],
];
