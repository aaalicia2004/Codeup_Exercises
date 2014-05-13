<?php

//Step 1.
fwrite(STDOUT, "Please enter a starting number!");
$min_number = (int) fgets(STDIN);
fwrite(STDOUT, "Now please enter an ending number!");
$max_num = trim(fgets(STDIN));

for($a = $min_number; $a <= $max_num; $a++)
{
	echo "{$a}\n";
}

//Step 2. 
