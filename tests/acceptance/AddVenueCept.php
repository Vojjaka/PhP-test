<?php
$I = new FunctionalTester($scenario);
$I->wantTo('Getting Http response 200');
$I->amOnPage('add_venue');
$I->seeResponseCodeIs(200);
?>