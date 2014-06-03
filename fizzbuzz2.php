<?php

$x = 1;

while($x <= 100){
	if ($x % 3 == 0 && $x % 5 == 0){
		echo "FIZZ BUZZ" . PHP_EOL;
	}else if($x % 5 == 0){
		echo "BUZZ" . PHP_EOL;
	}else if ($x % 3 == 0){
		echo "FIZZ" . PHP_EOL;
	}else{
		echo "{$x}" . PHP_EOL;
	}	
	$x++;
}

?>