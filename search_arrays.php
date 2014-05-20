<?php

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function array_has_value($needle, $haystack)
{
	if (array_search($needle, $haystack) === FALSE) 
	{
		return FALSE;

	}
	else
	{
		return TRUE;
	}
//simplified return array_search($needle, $haystack) !== false;
}//var_dump(True_or_False_array('Bob', $names));
//echo True_or_False_array('Bob', $names) . PHP_EOL;

function array_common_count($array1,$array2)
{
	$count = 0;

	foreach($array1 as $value)
{
		if (array_has_value($value, $array2)) 
		{
			$count++;
		}
	}

	return $count;
}

var_dump(array_common_count ($names, $compare));


