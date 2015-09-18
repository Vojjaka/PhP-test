<?php
$I = new FunctionalTester($scenario);
$I->wantTo('Getting Http response 200');
$I->amOnPage('/top25');
$I->seeResponseCodeIs(200);
?>