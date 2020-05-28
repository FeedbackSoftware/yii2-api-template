<?php

return [
    // the basePath of the application will be the `micro-app` directory
    'basePath' => (__DIR__ . '/../../../yii2-api-template'),
    // set an alias to enable autoloading of classes from the 'micro' namespace
    'aliases' => [
        '@api' => (__DIR__ . '/../../../yii2-api-template/api'),
        '@common' => (__DIR__ . '/../../../yii2-api-template/common'),
        '@console' => (__DIR__ . '/../../../yii2-api-template/console'),
    ],
];