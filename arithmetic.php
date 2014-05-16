<?php

function divide_0_error($a,$b){
		return "ERROR: Please choose a number other than ZERO!";
}

function add($a, $b){
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
echo add(50,"Alicia") . PHP_EOL;

function subtract($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		return $a - $b;
	}else{
		if(!is_numeric($a)){
			return $a . " is not a number. DUH!";	
		}else{
			return $b . " is not a number. DUH!";
		}
	}
}
echo subtract(100,"Alicia") . PHP_EOL;

function multiply($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		return $a * $b;
	}else{
		if(!is_numeric($a)){
			return $a . " is not a number. DUH!";	
		}else{
			return $b . " is not a number. DUH!";
		}
	}
}
echo multiply(25,'Nope') . PHP_EOL;

function divide($a, $b){
	if($b==0){
		return divide_0_error($a,$b);
	}elseif(is_numeric($a) && is_numeric($b)){
		return $a / $b;
	}else{
		if(!is_numeric($a)){
			return $a . " is not a number. DUH!";	
		}else{
			return $b . " is not a number. DUH!";
		}
	}
}
echo divide(100,0) . PHP_EOL;

function modulo($a, $b){
	if ($b == 0){
		return divide_0_error($a,$b);
	}elseif(is_numeric($a) && is_numeric($b)){
		return $a % $b;
	}else{
		if(!is_numeric($a)){
			return $a . " is not a number. DUH!";	
		}else{
			return $b . " is not a number. DUH!";
		}
	}
} 
echo modulo(100,0) . PHP_EOL;