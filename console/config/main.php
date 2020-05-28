<?php
return [
    'id' => 'console-app',
    // this is where the application will find all controllers
    'controllerNamespace' => 'console\controllers',
    'bootstrap' => ['gii'],
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
        ],
    ]
];