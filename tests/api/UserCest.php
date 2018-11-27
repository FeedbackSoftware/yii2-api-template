<?php

use Codeception\Util\HttpCode;

class UserCest
{
    public function _before(ApiTester $I)
    {
        //$file = 'var-local.php';
        /*if (file_exists($file)) {
            require $file;
            $this->path = $path ?? "";
        } */
        $this->path = "http://127.0.0.1/~mariale/yii2-api-template/api/web/v1/";
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->sendGET( $this->path.'user/status');
        $I->seeResponseCodeIs(HttpCode::OK); // 200
        $I->seeResponseIsJson();

    }

    public function trySigUp(ApiTester $I){
        $I->sendPOST( $this->path.'user/signup', ['username' => 'test@yopmail.com', 'password' => '123456']);
        $I->seeResponseCodeIs(HttpCode::OK); // 200
        $I->seeResponseIsJson();
        $I->canSeeResponseContainsJson([
           'success' => true,
            ]);
        $I->seeResponseMatchesJsonType([
            'success' => 'boolean',
            'data' => 'array',

        ]);

    }

    public function tryRegister(ApiTester $I){
        $I->sendPOST( $this->path.'user/register', ['username' => 'test2@example.com', 'password' => '123456']);
        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeResponseIsJson();
        $I->seeResponseMatchesJsonType([
            'success' => 'boolean',
            'data' => 'array',

        ]);
    }
}
