<?php

$fruits= array("apple" , "banana" , "litchi");


// array_push($fruits, "coconut", "pineapple");
// array_pop($fruits);
// array_shift($fruits);
// $new = array_reverse($fruits);
// array_multisort($new);
echo count($fruits);


foreach ($fruits as $fruit){
    echo "<br>". $fruit . "<br>";
}