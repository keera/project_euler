<?php
/*Question 9
 *There exists exactly one Pythagorean triplet for which a + b + c = 1000.
 *Find the product abc.
 */
 
//Creates the number array
for($i = 0; $i <= 997; $i++):
	$square_list[$i] = $i*$i;
endfor;

//creates map for check
for($i = 0; $i < sizeof($square_list) ; $i++):
	$num_sq = $square_list[$i];
	$num = $i;
	$square_map[$num_sq] = $num;
endfor;

//now create the loops
for($i = sizeof($square_list)-1; $i >= 0; $i--):
	$a_sq = $square_list[$i];
	$a = $square_map[$a_sq];
	
	//values < $i
	for($j = ($i-1); $j >= 0; $j--):
		$b_sq = $square_list[$j];
		$b = $square_map[$b_sq];
		$c_sq = $a_sq - $b_sq;
		
		//Is it a perfect square?
		if(!empty($square_map[$c_sq])):
			$c = $square_map[$c_sq];
			$sum = $a+$b+$c;
			$product = $a*$b*$c;
			if($sum == 1000 && $product > 0): 
				echo "The product is $product";
				return;
			endif;		
		endif;
	endfor;
endfor;
?>