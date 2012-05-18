<?php
/*Question 19:
 *How many Sundays fell on the first of the month during the twentieth century (1 Jan 1901 to 31 Dec 2000)? 
*/
$month_map = array("1"=>array("January","31"),
				   "2"=>array("February","28"),
				   "3"=>array("March","31"),
		           "4"=>array("April","30"),
		           "5"=>array("May","31"),
		           "6"=>array("June","30"),
		           "7"=>array("July","31"),
		           "8"=>array("August","31"),
		           "9"=>array("September","30"),
		           "10"=>array("October","31"),
	               "11"=>array("November","30"),
	               "12"=>array("December","31")
		          );

$week_map = array("0"=>"Sunday",
		          "1"=>"Monday",
		          "2"=>"Tuesday",
		          "3"=>"Wednesday",
		          "4"=>"Thursday",
		          "5"=>"Friday",
		          "6"=>"Saturday"
		         );

$beginning_of_jan = 2; //starts on a tuesday
$sunday_count = 0;
for($year = 1901; $year <= 2000; $year++):
	//sets the leap year value for feb. 
	$month_map[2][1] = (($year % 100 == 0 && $year % 400 == 0) || $year % 4 == 0) ? 29 : 28;
	//set the first of month pos to 0.
	$day_pos = 0;
	foreach($month_map as $month_key => $month_info):
		if($month_key == 12): //If december, get the day of jan (next year).
			//days in $month_key - 1 + current position.
			$first_of_month = $month_info[1] + $day_pos; 
			//assume month begins at 0(sun). changes by offset (actual day).
			$beginning_of_jan = (((($first_of_month) % 7) + $beginning_of_jan) % 7);
			if($beginning_of_jan == 0): $sunday_count++; endif;
		else: //begin at feb with #ofdays in jan. 
			$first_of_month = $month_info[1] + $day_pos; //
			$day_pos += $month_info[1];
			$day = (((($first_of_month) % 7) + $beginning_of_jan) % 7);
			if($day == 0): $sunday_count++; endif;
		endif;
	endforeach;
endfor;

echo $sunday_count;
?>

		