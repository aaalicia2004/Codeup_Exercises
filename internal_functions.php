<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY" ***Variable is set or variable is empty
// TEST: If var $nothing is set, display '$nothing is SET'
// TEST: If var $nothing is empty, display '$nothing is EMPTY'
// TEST: If var $something is set, display '$something is SET'

function check_for_isset_empty($a){
	if(isset($a) && empty($a)){
		return "Variable is SET & EMPTY!";
	}elseif(isset($a)){ 
		return "Variable is SET!";
	}elseif(empty($a)){
		return "Variable is EMPTY!";
	}
}

echo check_for_isset_empty($nothing) . PHP_EOL;
echo check_for_isset_empty($something) . PHP_EOL;
echo check_for_isset_empty($array) . PHP_EOL;

$serial= serialize($array);
echo "The array named \$array looks like this serialized: $serial" . PHP_EOL;






// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results


// Create the program to meet the criteria set by each comment.

// Test and verify the output is as expected.

// Update the 'is set' check on $something to see if it is 'empty'. What happens?

// Revert previous change.

// Before the first conditional, unset($nothing). What happens?

// Find php.net function reference for the following groups: arrays, math, and strings. Familiarize yourself with the available options by reading the descriptions of each function in each list.

