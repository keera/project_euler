<?php
/*Question 4
 * Find the largest palindrome made from the product of two 3-digit numbers.
 */
$i = 999999;
while($i > 100001):
	if (isDiv($i))
		return $i;
	$i = (substr($i, 2, 2) == "00") ? $i-110 : $i-1100;
endwhile;

function isDiv($b) {
	for ($i = 100; $i <= 999; $i++):
		if ($b % $i == 0 && strlen($b / $i) == 3)
			return TRUE;
	endfor;
	return FALSE;
}
?>