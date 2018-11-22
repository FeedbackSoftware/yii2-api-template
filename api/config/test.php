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
];



