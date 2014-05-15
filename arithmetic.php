<?php

function add($a, $b){
	if(is_numeric($a) && is_numeric($b)){
		echo $a + $b;
	}else{
		if(!is_numeric($a)){
			echo $a . " is not a number. DUH!";	
		} else{
			echo $b . " is not a number. DUH!";
		}
	}
	echo PHP_EOL;
}
add(50,"Alicia");

function subtract($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		echo $a - $b;
	}else{
		if(!is_numeric($a)){
			echo $a . " is not a number. DUH!";	
		}else{
			echo $b . " is not a number. DUH!";
		}
	}
	echo PHP_EOL;
}
subtract(100,"Alicia");

function multiply($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		echo $a * $b;
	}else{
		if(!is_numeric($a)){
			echo $a . " is not a number. DUH!";	
		}else{
			echo $b . " is not a number. DUH!";
		}
	}
	echo PHP_EOL;
}
multiply(25,'Nope');

function divide($a, $b){
	if ($b == 0){
		echo "ERROR: Please choose a number other than ZERO!";
	}elseif(is_numeric($a) && is_numeric($b)){
		echo $a / $b;
	}else{
		if(!is_numeric($a)){
			echo $a . " is not a number. DUH!";	
		}else{
			echo $b . " is not a number. DUH!";
		}
	}
	echo PHP_EOL;
}
divide(100,0);

function modulo($a, $b){
	if ($b == 0){
		echo "ERROR: Please choose a number other than ZERO!";
	}elseif(is_numeric($a) && is_numeric($b)){
		echo $a % $b;
	}else{
		if(!is_numeric($a)){
			echo $a . " is not a number. DUH!";	
		}else{
			echo $b . " is not a number. DUH!";
		}
	}
	echo PHP_EOL;
} 
modulo(100,0); //Note: the remainder of 100 divided by 50 is 0.

