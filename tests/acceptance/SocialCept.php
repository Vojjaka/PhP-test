<?php
$I = new FunctionalTester($scenario);
$I->wantTo('Getting Http response 200');
$I->amOnPage('/social');
$I->seeResponseCodeIs(200);
?>