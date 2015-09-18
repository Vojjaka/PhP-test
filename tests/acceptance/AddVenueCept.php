<?php
$I = new FunctionalTester($scenario);
$I->wantTo('Getting Http response 200');
$I->amOnPage('addvenue');
$I->seeResponseCodeIs(200);
?>