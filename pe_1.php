<?php
//PHP Solution
$sum = 0;
for ($i = 3; $i < 1000; ++$i):
	if ($i % 3 == 0 || $i % 5 == 0)
		$sum += $i;
endfor;
echo $sum;
?>