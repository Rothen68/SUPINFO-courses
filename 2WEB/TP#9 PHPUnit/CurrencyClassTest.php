<?php

require('./classes/Currency.class.php');

class CurrencyClassTest extends PHPUnit_Framework_TestCase 
{
	public function testDollar()
	{
		$cc = new CurrencyClass();
		$this->assertEquals($cc->formatWithCurrency('$', 1), '$1');
	}	

	public function testLivre()
	{
		$cc = new CurrencyClass();
		$this->assertEquals($cc->formatWithCurrency('£', 1), '£1');
	}	

	public function testEuro()
	{
		$cc = new CurrencyClass();
		$this->assertEquals($cc->formatWithCurrency('€', 1), '1€');
	}
}
