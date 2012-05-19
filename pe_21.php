<?php
/*Question 21:
 *Evaluate the sum of all the amicable numbers under 10000.
*/

function getDivs($num){
	$sum = 1; //include 1
	for($i = 2; $i <= sqrt($num); $i++){
		if($num % $i == 0){
			$val = $num / $i;
			$sum+=($i+$val);
		}
	}
	return $sum;
}

$cache = array();
$amicable_sum = 0;
for($i = 1; $i < 10000; $i++):
	$sum = getDivs($i);
	if(!empty($cache[$i])):
		if($cache[$i] == $sum):
			$amicable_sum += ($i+$sum);
			unset($cache[$i]);
		endif;
	else:
		if($sum > $i) $cache[$sum] = $i;
	endif;
endfor;

echo $amicable_sum;

?>