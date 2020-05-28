<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'micro-api',
    // this is where the application will find all controllers
    'controllerNamespace' => 'api\controllers',
    'params' => $params,
    'language' => $params['language'],
    'timeZone' => $params['timeZone']
];