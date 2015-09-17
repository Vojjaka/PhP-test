<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
// $I->amOnPage('/');
// $I->seeResponseCodeIs(200);
$I->amOnUrl('http://test.bottlez.jujumedia.co.uk/skin/frontend/default/theme589/img/logo.png');
$I->seeResponseCodeIs(200);
// $I->amOnPage('/quickstart'); // moves0 to http://codeception.com/quickstart
// $I->amOnPage('/');
// $I->seeResponseCodeIs(200);
?>