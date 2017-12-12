<?php


class HomepageCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
	   $I->amOnPage('/');
	   $I->seeElement('.page-header');
       $I->seeElement('#maincontent');
	   $I->seeElement('.footer');
    }
}
