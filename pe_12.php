<?php
/*Question 12 
 *What is the value of the first triangle number to have over five hundred divisors?
 *Note: This is the first attempt brute force method with the assumption that #of divisors >= triangle number. Awful time complexity. 
 ***********See pe_12_v2 for real solution.**************
*/
$a = 0;
$max = 500; //may fail
//used to set initial at high val
$tri_value = ($max/2) * ($max+1);
$found = false;
$target = 50;

for($i = $tri_value; $found == false; $i+=($max)):
  $div = num_divisors($i);
  if($div > $target):
	$found = true;
	echo "The value is $i";
  endif;
$max++;
endfor;

//brute force
function num_divisors($num){
	//include num and 1
	$count = 2;
	$hf = $num / 2;
	for($j = 2; $j <= $hf ; $j++):
		if($num % $j == 0):
			$count++;
		endif;
	endfor;
	
	return $count;
}

?>