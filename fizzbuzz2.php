<?php

$x = 1;

while($x <= 100){
	switch($x){
		case ($x % 3 == 0 && $x % 5 == 0) :
			echo "FIZZ BUZZ" . PHP_EOL;
			break;
		case ($x % 5 == 0) :
			echo "BUZZ" . PHP_EOL;
			break;
		case ($x % 3 == 0) :
			echo "FIZZ" . PHP_EOL;
			break;
		default:
			echo "{$x}" . PHP_EOL;
			break;
	}
	$x++;
}

?>