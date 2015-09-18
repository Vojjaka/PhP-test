<?php
$I = new FunctionalTester($scenario);
$I->wantTo('Getting Http response 200');
$I->amOnPage('/sydney');
$I->seeResponseCodeIs(200);
?>