<?php


//$numbers = array(1, 2, 3, 4, 5);
//for ($i = 0; $i < count($numbers); $i++) {
  //  echo ("\$numbers has an element with a value of {$numbers[$i]}\n");
//}

//$numbers = array(1, 2, 3, 4, 5);
//foreach ($numbers as $value) {
//    echo ("\$number has a value of {$value}\n");
//}

//$numbers = array(1, 2, 3, 4, 5);
//foreach ($numbers as $value) {
  //  $new_number = $value * 2;
    //echo ("$value * 2 is {$new_number}\n");
//}

//$data = array(42, 'bacon', (6 * 3), 'The Big Bang Theory', 98.6);
//foreach ($data as $datum) {
  //  if (is_numeric($datum)) {
    //    echo "{$datum} is a number\n";
   // } else if (is_string($datum)) {
     //   echo "{$datum} is a string\n";
    //}
//}

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach($things as $thing){
	if(is_integer ($thing)){
		echo "{$thing} is an integer\n";
	}elseif(is_float ($thing)){
		echo "{$thing} is a float\n";
	}elseif(is_bool ($thing)){
		if((int)$thing == 0){
			echo "false is a boolean\n";
		} else {
			echo "true is a boolean\n";
		}
		// echo (int)$thing . " is a boolean\n";
	}elseif(is_array ($thing)){
		echo "{$thing} is an array\n";
	}elseif(is_null ($thing)){
		echo "null value is NULL\n";
	}elseif(is_string ($thing)){
		echo "{$thing} is a string\n";
	}
}

