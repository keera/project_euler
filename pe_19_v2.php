<?php
/*Question 19:
 *How many Sundays fell on the first of the month during the twentieth century (1 Jan 1901 to 31 Dec 2000)? 
*/
$month_map = array("1"=>"31","2"=>"28","3"=>"31","4"=>"30","5"=>"31","6"=>"30",
				   "7"=>"31","8"=>"31","9"=>"30","10"=>"31","11"=>"30","12"=>"31"
		          );

$beginning_of_jan = 2; //starts on a tuesday
$sunday_count = 0;
$day_pos = 0;
for($year = 1901; $year <= 2000; $year++):
	//sets the leap year value for feb. 
	$month_map[2][1] = (($year % 100 == 0 && $year % 400 == 0) || $year % 4 == 0) ? 29 : 28;
	//set the first of month pos to 0.
	foreach($month_map as $month_key => $month_days):
		$first_of_month = $month_days + $day_pos;
		$day_pos += $month_days;
		$day = (((($first_of_month) % 7) + $beginning_of_jan) % 7);
		if($day == 0): $sunday_count++; endif;
	endforeach;
endfor;

echo $sunday_count;
?>

		