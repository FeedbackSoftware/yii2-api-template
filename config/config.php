<?php
return [
    'id' => 'micro-api',
    // the basePath of the application will be the `micro-app` directory
    'basePath' => (__DIR__ . '/..'),
    // this is where the application will find all controllers
    // TODO namespace updated
    'controllerNamespace' => 'micro\controllers',
    // set an alias to enable autoloading of classes from the 'micro' namespace
    'aliases' => [
        '@micro' => (__DIR__ . '/..'),
    ],
];