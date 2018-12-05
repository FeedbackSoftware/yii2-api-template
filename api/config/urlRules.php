
<?php
return [
    [
        'class' => 'yii\rest\UrlRule',
        'controller' => ['v1/user', 'v1/site'],
        'pluralize' => false,
        'extraPatterns' => [
            'GET status' => 'status',
            'POST signup' => 'signup',
            'POST register' => 'register',
            'GET,HEAD user' => 'index',
            'POST test' => 'test',
            'GET, HEAD docs' => 'docs',
        ],
        'except' => ['create', 'delete', 'update', 'view'],
    ],

];

