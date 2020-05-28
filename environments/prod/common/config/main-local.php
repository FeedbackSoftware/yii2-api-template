<?php
return [
    'components' => [
        'db' => require(__DIR__ . '/db.php'),
        'mailer' => require(__DIR__ . '/mailer.php')
    ],
];
