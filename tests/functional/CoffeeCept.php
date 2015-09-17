<?php
$I = new FunctionalTester($scenario);
// $I->wantTo('perform actions and see result');
$I->amOnPage('/');
$I->seeResponseCodeIs(200);
$I->amOnPage('/social');
$I->seeResponseCodeIs(200);
?>