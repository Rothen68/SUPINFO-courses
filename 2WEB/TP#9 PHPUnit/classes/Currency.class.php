<?php

class CurrencyClass
{
	private function prependCurrencySymbol($currency, $amount)
	{
		return $currency.$amount;
	}

	private function appendCurrencySymbol($currency, $amount)
	{
		return $amount.$currency;
	}

	public function formatWithCurrency($currency, $amount)
	{
		$prependc = str_split('$£');
		$appendc = str_split('€');

		if(in_array($currency, $prependc))
		{
			return $this->prependCurrencySymbol($currency, $amount);
		}
		else
		{
			return $this->appendCurrencySymbol($currency, $amount);
		}
	}
}