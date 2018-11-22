<?php

namespace api\modules\v1\controllers;


use api\modules\v1\models\User;
use base\rest\ActiveController;
use Yii;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\helpers\ArrayHelper;

class UserController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\User';

    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            [
                'class' => CompositeAuth::class,
                // Status endpoint is inherited from the ActiveController class
                'except' => ['status', 'signup'],
                'authMethods' => [
                    HttpBearerAuth::class,
                ],
            ]
        ]);
    }

    public function actionSignup()
    {
        $model = new User();
        $request = Yii::$app->request->post();

        $model->username = $request["username"];
        $model->password = $request["password"];

        $response = $model->login();

        return $response;

    }

}