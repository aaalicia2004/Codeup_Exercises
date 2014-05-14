<?php

//1.  Create a for loop that shows all even numbers between 1 and 100 using continue.

// for($i=0; $i<100; $i++){
// 	echo $i . "\n";
// 	if($i%2 ==1){
// 		continue;
// 	}
// 	echo "...This is an even number\n";
// }
// echo "DONE!\n";



//1A. Alternative way to create the loop so that the even numbers show an even string
//next to them and odds show only the numbers.
// for ($i=0; $i<100; $i++) {	
// 	if ($i % 2 == 0) {
// 		echo "$i even\n";
// 	} else 
// 		echo "$i\n";
// }
// 	//echo "...This is an even number\n";

// echo "DONE!\n";


//2. Create another for loop that counts from 1 to 100, but stops after 10 using break.

for($i=0; $i<= 100; $i++){
	echo $i . "\n";
	if ($i==10){
		break;
	}
}