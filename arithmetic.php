<?php

function add($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		echo $a + $b;
	}else{
		echo "Value entered is not numeric!";
	}
	echo PHP_EOL;
}
add(50,50);

function subtract($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		echo $a - $b;
	}else{
		echo "Value entered is not numeric!";
	}
	echo PHP_EOL;
}
subtract(100,25);

function multiply($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		echo $a * $b;
	}else{
		echo "Value entered is not numeric!";
	}
	echo PHP_EOL;
}
multiply(25,4);

function divide($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		echo $a / $b;
	}else{
		echo "Value entered is not numeric!";
	}
	echo PHP_EOL;

}
divide(100,4);

function modulo($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		echo $a % $b;
	}else{
		echo "Value entered is not numeric!";
	}
	echo PHP_EOL;
} 
modulo(100, 50); //Note: the remainder of 100 divided by 50 is 0.

