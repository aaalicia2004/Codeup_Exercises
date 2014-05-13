<?php

//Step 1.
fwrite(STDOUT, "Please enter a starting number! ");
$min_number = (int) fgets(STDIN);
fwrite(STDOUT, "Now please enter an ending number! ");
$max_num = (int) fgets(STDIN);

//Step 2.
fwrite(STDOUT, "Enter a number to increase your starting number by ");
$increase_min_number = (int) fgets(STDIN);

//Step 3.
if($increase_min_number== 0){
	$increase_min_number = 1;
}

for($a = $min_number; $a <= $max_num; $a += $increase_min_number){
	echo "{$a}\n";

}



