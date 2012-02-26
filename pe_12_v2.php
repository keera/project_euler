<?php
/*Question 12:
 *What is the value of the first triangle number to have over five hundred divisors?
*/
$tri_num = 1; //first tri value
$target = 50; //target # of divisors
$found = false; 

for($i = 2; $found == false; $i++):
	$tri_num += $i;
	$div = numDivisors($tri_num);
	if($div > $target):
		$found = true;
		echo "The answer is $a";
	endif;
endif;

//efficient use of map + tau 
function numDivisors($num) {
	//no need to check if 1
	if($num == 1) return $num; endif;
	//if composites exist
	while($num != 1):
		//check up to $num due to possible prime
		for($i = 2; $i <= $num; $i++):
			if($num % $i == 0):
				$num = $num/$i;
				//check map
				if(empty($primes[$i])): 
					$primes[$i] = 1;
				else 
					$primes[$i]++;
				endif;
				break;
			endif;
		endfor;
	endwhile;
	
	$divisors = 1;
	//tau function d(n) 
	foreach($primes as $value):
		$divisors *= ($value+1);
	endforeach;
	
	return $divisors;
}

?>