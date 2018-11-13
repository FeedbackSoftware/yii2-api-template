<?php

namespace api\modules\v1\controllers;


use base\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'common\models\User';
}