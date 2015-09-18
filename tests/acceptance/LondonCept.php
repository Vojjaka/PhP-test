<?php
$I = new FunctionalTester($scenario);
$I->wantTo('Getting Http response 200');
$I->amOnPage('/london');
$I->seeResponseCodeIs(200);
?>