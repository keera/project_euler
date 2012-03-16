<?php
/* Question 14
 * Which starting number, under one million, produces the longest chain, 
 * given n -> n/2 (n is even) and n->3n + 1 (n is odd?)
*/
$max = 0;
$start_num = 0;
//create a map for the numbers
$count_map = array();

for($i = 1 ; $i < 20; $i+=2):

	$num = $i;
	$count = countSequence($num, $count_map, 0);
	//add number to map
	if(empty($count_map[$i])) $count_map[$i] = $count; endif;
	if($count > $max):
		$max = $count; 
		$start_num = $i;
	endif;
	
endfor;

echo $start_num;
//recursive count
function countSequence($num, $count_map, $count){
	//if number exists in map, return the count
	if(!empty($count_map[$num])):
		$count += $count_map[$num];
		return $count;
	//return at basecase
	elseif($num == 1):
		return $count;
	else:
		$num = ($num % 2 == 0) ? ($num / 2) : ($num*3) + 1; 
		$count = countSequence($num, $count_map, $count+1);
	endif;
	
	return $count;
}
?>