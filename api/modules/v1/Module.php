<?php

namespace api\modules\v1;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'api\modules\v1\controllers';

    public function init()
    {
        parent::init();
//        // you can use ContentNegotiator at the level of module
//        // and remove this behavior declaration from controllers
//        \Yii::configure($this, [
//            'as contentNegotiator' => [
//                'class' => 'yii\filters\ContentNegotiator',
//                // if in a module, use the following IDs for user actions
//                // 'only' => ['user/view', 'user/index']
//                'formats' => [
//                    'application/json' => Response::FORMAT_JSON,
//                ],
//            ],
//        ]);

//        // you can daclare handler as function in you module and pass it as parameter here
//        \Yii::$app->response->on(Response::EVENT_BEFORE_SEND, function ($event) {
//            $response = $event->sender;
//            // here you can get and modify everything in current response
//            // (data, headers, http status etc.)
//            $response->data = [
//                'status' => 'Okay',
//                'data' => $response->data
//            ];
//        });
    }
}
