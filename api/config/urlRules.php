<?php
return [
    [
        'controller' => ['v1/user'],
        'pluralize' => false,
        'extraPatterns' => [
            'GET status' => 'status',
        ],
        'except' => ['create', 'delete', 'update', 'view', 'index'],
    ],
];
