<?php

namespace base\rest;

use common\filters\CustomCors;
use Yii;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\web\Response;

class ActiveController extends \yii\rest\ActiveController
{
    public function behaviors()
    {
        return array_merge(parent::behaviors(), [
            'corsFilter' => [
                'class' => CustomCors::class,
                'cors' => [
                    'Origin' => Yii::$app->params['CORS'],
                    'Access-Control-Request-Method' => ['POST', 'GET', 'PUT', 'OPTIONS'],
                    'Access-Control-Request-Headers' => ['Authorization', 'Content-type', 'Credentials'],
                    'Access-Control-Allow-Credentials' => true,
                ],
            ],
            [
                'class' => 'yii\filters\ContentNegotiator',
                'formats' => [
                    'application/json' => Response::FORMAT_JSON,
                ],
            ],
            [
                'class' => CompositeAuth::class,
                'except' => ['status'],
                'authMethods' => [
                    HttpBearerAuth::class,
                ],
            ]
        ]);
    }

    public function actionStatus()
    {
        $version = `git log -1 --pretty=%h`;
        $version = str_replace(array("\r", "\n"), '', $version);
        return ['status' => Yii::t('api', 'online'), 'version' => $version];
    }


}
