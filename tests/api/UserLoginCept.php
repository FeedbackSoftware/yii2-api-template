<?php 
$I = new ApiTester($scenario);
$I->wantTo('Test SignUp');

//$I->sendPOST('user/signup', ['username' => 'uname', 'password' => '123456']);
$I->sendGET('user/signup');
$I->seeResponseCodeIs(HttpCode::OK); // 200
$I->seeResponseIsJson();
$I->seeResponseMatchesJsonType([
    'message' => 'string']);
