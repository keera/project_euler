<?php
$count = 2;
for($i = 3; $count <= 10001; $i+=2):
	$is_prime = true;
	for($j = 2; $j <= (sqrt($i)+1) && $is_prime == true; ++$j):
		if($i % $j == 0): $is_prime = false; endif;
	endfor;
	if($is_prime): $count++; endif;
endfor;
printf("The 10001th prime is %d\n", $i -2);
?>

