<?php

function check_numeric($a,$b){
	if(is_numeric($a) && is_numeric($b)){
		return $a + $b;
	}else{
		if(!is_numeric($a)){
			return $a . " is not a number. DUH!";	
		} else{
			return $b . " is not a number. DUH!";
		}
	}
}

function divide_0_error($a,$b){
	if($b==0){
		echo "ERROR: Cannot divide by 0.";
		return FALSE;
	}
}

function add($a, $b){
	if(check_numeric($a,$b)){
			return $a+$b;
	}
}
echo add(50,"Alicia") . PHP_EOL;

function subtract($a, $b){
	if (check_numeric($a,$b)){
		return $a - $b;
	}
}
echo subtract(100,"Alicia") . PHP_EOL;

function multiply($a, $b){
	if (check_numeric($a,$b)){
		return $a * $b;
	}
}
echo multiply(25,'Nope') . PHP_EOL;

function divide($a, $b){
		if(divide_0_error($a,$b) && check_numeric($a, $b)){
		return $a / $b;
	}
}
echo divide(100,0) . PHP_EOL;

function modulo($a, $b){
		if(divide_0_error($a,$b) && check_numeric($a,$b)){
		return $a % $b;
	}
} 
echo modulo(100,0) . PHP_EOL;