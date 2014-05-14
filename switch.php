<?php

//Switch statements should always have a break after each condition. 

// $fruit = "Pineapple";

// switch($fruit){
// 	case 'apple':
// 		echo 'Apples are red' . PHP_EOL;
// 		break;
// 	case 'orange':
// 		echo 'Oranges are orange' . PHP_EOL;
// 		break;
// 	case 'banana':
// 		echo 'Bananas are yellow' . PHP_EOL;
// 		break;
// 	case 'donut':
// 		echo 'Donuts are good' . PHP_EOL;
// 		break;
// 	default:
// 		echo $fruit . "..is unknown" . PHP_EOL;
// 		break;
// }





// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = date('N');
// $day_of_week = 5;
var_dump($day_of_week);

switch($day_of_week) {
    case 1:
        // Output Monday
    	echo "Monday" . PHP_EOL;
    	break;
    case 2:
        // Output Tuesday
    	echo "Tuesday" . PHP_EOL;
    	break;
    case 3:
    	echo "Wednesday" . PHP_EOL;
    	break;
    case 4:
    	echo "Thursday" . PHP_EOL;
    	break;
    case 5:
    	echo "Friday" . PHP_EOL;
    	break;
    case 6:
    	echo "Saturday" . PHP_EOL;
    	break;
    case 7:
    	echo "Sunday" . PHP_EOL;
    	break;
    default:
    	echo $day_of_week . "...is unknown" . PHP_EOL;
    	break;
    	
    // etc through day 7
}