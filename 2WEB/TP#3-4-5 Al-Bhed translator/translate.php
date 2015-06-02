<?php

include('index.php');

function translate($str)
{
	$str = str_split(strtoupper($str));
	$chars = str_split('YPLTAVKREZGMSHUBXNCDIJFQOW');

	$buffer = '';
	if(count($str) == 0)
	{
		foreach ($str as $c) 
		{
			$buffer .= $chars[ord($c) - 65];
		}
	}

	return $buffer;
}

echo translate(empty($_POST['content']) ? '' : $_POST['content']);