<?php

//$fruit = ["Star Fruit", "Grapefruit", "Kiwi", "Mango", "Coconut", "Apple"];
//$i = 0;

//FIRST STEP: Create an array of fruit (3-5). Write a loop that prints the fruit.
//Write as a for loop and as a foreach loop.

//While Loop:

//while($i < count($fruit)){
//	echo $i+1 . ". ";
//	echo $fruit[$i] . "\n";
//	$i++;
//}

//For Loop:

//for($i = 0; $i < count($fruit); $i++){
//	echo $i+1 . ". ";
//	echo $fruit[$i] . "\n";
//}


//ForEach Loop:

//foreach($fruit as $key => $value) {
//	echo $key + 1 . ". ";
//	echo $value . "\n";
//}

//SECOND STEP:

//Modify the above fruit array so that you have the fruit name and color.
//Print using a foreach loop. 

$fruits =[
	'apples' => 'red',
	'oranges' => 'orange',
	'bananas' => 'yellow',
	'tomatoes' => 'green'
];

foreach ($fruits as $fruit => $color){
		echo "{$fruit} are {$color}\n";
}








