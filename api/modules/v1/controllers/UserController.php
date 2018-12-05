<?php

namespace api\modules\v1\controllers;


use api\modules\v1\models\User;
use base\rest\ActiveController;
use phpDocumentor\Reflection\Types\Null_;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\helpers\ArrayHelper;
use yii\rest\Controller;

class UserController extends Controller
{
    public $modelClass = 'api\modules\v1\models\User';

    /**
     * @SWG\Get(path="/v1/user",
     *     tags={"User"},
     *     summary="Retrieves the collection of User resources.",
     *     @SWG\Response(
     *         response = 200,
     *         description = "User collection response",
     *         @SWG\Schema(ref = "#/definitions/User")
     *     ),
     * )
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => User::find(),
        ]);

        return $dataProvider;
    }


    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            [
                'class' => CompositeAuth::class,
                // Status endpoint is inherited from the ActiveController class
                'except' => ['status', 'signup', 'register'],
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

    /**
     * @SWG\Post(
     *    path = "/user/register",
     *    tags = {"register"},
     *    operationId = "register",
     *    summary = "Register one user",
     *    description = "register a user",
     *    produces = {"application/json"},
     *    consumes = {"application/json"},
     *	@SWG\Parameter(
     *        in = "body",
     *        name = "body",
     *        description = "Register user",
     *        required = true,
     *        type = "string",
     *      @SWG\Schema(ref = "#/user")
     *    ),
     *	@SWG\Response(response = 200, description = "success")
     *)
     * @throws HttpException
     */
    public function actionRegister(){
        $model = new User();
        $request = Yii::$app->request->post();

        $model->username = $request["username"];
        $model->password = $request["password"];
        $model->email = $request["username"];

        $user  = User::find()
            ->where(['username' => $model->username])
            ->one();

        if($user == null){
            $register = User::register($model);
            return $register;

        }
        else{
            return ["message" => "username is used by other user"];

        }
        $response = $model->register();

        return $response;

    }

    /**
     * Rest Description: Your endpoint description.
     * Rest Fields: ['field1', 'field2'].
     * Rest Filters: ['filter1', 'filter2'].
     * Rest Expand: ['expandRelation1', 'expandRelation2'].
     */
    public function actionTest()
    {
        return ['field1', 'field2'];
    }

}