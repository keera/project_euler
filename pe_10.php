<?php
$isPrime = true;
$size = 10;

for($i = 0; $i <= $size; ++$i):
	$primes[$i] = $isPrime;
endfor;

//we may have to mark this to sqrt instead

for($i = 2; $i <= number_format(sqrt($size), 0); $i++):
	if($primes[$i] == true):
	//echo "Yes it is prime <br/>";
		for($j = $i + $i ; $j <= $size; $j += $i):
			$primes[$j] = false;
		endfor;
	endif;
endfor;

//now we'll loop over it and extract all the primes

$prime_sum;
for($i = 2; $i < $size; $i++):
	if($primes[$i] == true):
		$prime_sum += $i;
	endif;
endfor;
echo "The solution aka SUM is equal to $prime_sum";
?>