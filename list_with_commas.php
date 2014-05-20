<?php

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicists_array = explode(', ' , $physicists_string);


function humanized_list($array, $alpha = false)
{
if($alpha == true)
{
	sort($array);
}
$pop_and_push_element =  'and ' . array_pop($array);

array_push($array, $pop_and_push_element);

print_r($array);

$string = implode(', ' , $array);
return $string;
}


$famous_fake_physicists_string = humanized_list($physicists_array, true);

echo "Some of the most famous fictional theoretical physicists are $famous_fake_physicists_string" . PHP_EOL;






