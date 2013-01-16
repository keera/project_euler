<?php
/* Question 23: Find the sum of all positive numbers that are not the sum of two abundant numbers */

$cache = array(); //hash table of values for O(1) check
$list = array(); //list for iteration

function getDivs($num){
    $sum = 1; //include 1
    for($i = 2; $i <= sqrt($num); $i++){
        if($num % $i == 0){
            $val = $num / $i;
            $sum+= ($i == $val) ? $i : ($i+$val);
        }
    }
    return $sum;
}

//tells you if num is the sum of 2 amicables
function checkPair($v, $list, $cache){
    for($i = 0; $list[$i] < $v; $i++){
        $other = $v - $list[$i];
        if($cache[$other]){
            return true;
        }
    }
    return false;
}
//get all the abundant #s and store in cache
for($i = 12; $i <= 28123; $i++){
    $val = getDivs($i);
    if($val > $i){
        array_push($list, $i);
        $cache[$i] = true;
    }
}
//all the sums of abundant numbers
$uniques = array();
for($i = 0; $i < sizeof($list); $i++){
    for($j = $i; $j < sizeof($list); $j++){
        $a = $list[$i];
        $b = $list[$j];
        $uniques[$a + $b] = true;
    }
}
//all the values that are != sums
$sum = 0;
for($i = 1; $i <= 28123; $i++){
    if(empty($uniques[$i]))
        $sum+=$i;
}

echo $sum;
?>
