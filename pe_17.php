<?php
/*Question 17:
 *If all the numbers from 1 to 1000 (one thousand) inclusive were written out in words, how many letters would be used?
*/
$ones = array(3,3,5,4,4,3,5,5,4); // 1 - 9
$teens = array(3,6,6,8,8,7,7,9,8,8); // 10 - 19
$tys = array(6,6,5,5,5,7,6,6); // 20 - 90
$sum_ones = array_sum($ones);
$sum_teens = array_sum($teens);
//now find all from 20 - 99;
for($i = 0; $i < sizeof($tys); $i++):
	$sum_tys += (($tys[$i]*10) + $sum_ones); //twenty + twenty + i 
endfor;

$under_100 = $sum_ones + $sum_teens + $sum_tys;
//now find all from 100 - 999
for($i = 0; $i < sizeof($ones); $i++):
	$sum_hun += ((($ones[$i]+10) * 100) + $under_100 - 3);
endfor;

$total = $sum_hun + $under_100 + 11;
echo $total;
?>