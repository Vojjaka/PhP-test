<?php
$I = new FunctionalTester($scenario);
$I->wantTo('Getting Http response 200');
$I->amOnPage('/');
$I->seeResponseCodeIs(200);
?>