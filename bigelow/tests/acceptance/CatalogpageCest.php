<?php


class CatalogpageCest
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
	   $I->amOnPage('/c-o-bigelow-products/bath-body.html');
	   
	   $I->expectTo('see the layered navigation');
	   $I->seeElement('.block-content .filter-content');
       
	   $I->expectTo('see the price filter');
	   $I->seeElement('.am_shopby_filter_items_attr_price');
	   
	   $I->expectTo('see at least one product');
	   $I->seeElement('.product product-item');
	   
	   $I->expectTo('see pagination line');
	   $I->seeElement('.paging-counter');
    }
}
