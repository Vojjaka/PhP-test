<?php
$I = new FunctionalTester($scenario);
$I->wantTo('Getting Http response 200');
$I->amOnPage('/guides-to-go');
$I->seeResponseCodeIs(200);
?>