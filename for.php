<?php

//Step 1.
fwrite(STDOUT, "Please enter a starting number! ");
$min_number = trim(fgets(STDIN));
fwrite(STDOUT, "Now please enter an ending number! ");
$max_num = trim(fgets(STDIN));
//Step 4.
if(!is_numeric ($min_number) || !is_numeric ($max_num))
{
    echo "Error: Please insert numbers only\n";
    (exit);
}

//Step 2.
fwrite(STDOUT, "Enter a number to increase your starting number by ");
$increase_min_number = (int) fgets(STDIN);

//Step 3.
if($increase_min_number== 0)
{
    $increase_min_number = 1;
}

for($a = $min_number; $a <= $max_num; $a += $increase_min_number)
{
    echo "{$a}\n";
}



