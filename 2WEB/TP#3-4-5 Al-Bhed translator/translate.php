<?php
function translate($str)
{
	$chars = str_split('YPLTAVKREZGMSHUBXNCDIJFQOW');
	$str = str_split(strtoupper($str));

	$buffer = '';
	foreach ($str as $c) 
	{
		$buffer .= $chars[ord($c)-65];
	}

	return $buffer;
}

echo translate('apricot');