<?php

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function True_or_False_array($needle, $haystack)
{
	if (array_search($needle, $haystack) !== FALSE) 
	{
		return TRUE;

	}
	else
	{
		return FALSE;
	}

}
echo True_or_False_array('Bob', $names) . PHP_EOL;






