<?php
/*
$config =  yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/main.php'),
    require(__DIR__ . '/main-local.php'),
    [
        'id' => 'app-tests',
        'components' => [
            'db' => [
                'dsn' => 'mysql:host=localhost;dbname=yii_app_test',
            ]
        ]
    ]
);
return $config;
*/

return [
    'id' => 'app-api-tests',
    'basePath' => dirname(__DIR__),
    'components' => [
        'db2' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=127.0.0.1;dbname=yii_app_test',
            'username' => 'root',
            'password' => 'm4r14l3j',
            'charset' => 'utf8',
        ]
    ]
];



