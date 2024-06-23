<?php

// $a=19;

// if($a>18){
//     echo "you can vote...";
// }else{
//     echo "you can't vote";
// }

$hours =50;
$rate = 10;
$weekly = 0;


if($hours == 0){
    $weekly = $hours * $rate;
}
else if($hours <= 40){
    $weekly = $hours * $rate;
}
else{
    $weekly = (40 * $rate) + ($hours - 40) *($rate * 2);
}
echo "Your weekly pay is " .$weekly;