<?php

$a = 20;
$b = 10;

//Arithmatic Operators in PHP

// $c = $a + $b;
// $d = $a - $b;
// $e = $a * $b;
// $f = $a / $b;
// $g = $a % $b;
// $i = $a ** $b;
// echo "The addition of " .$a ." + " .$b." = ".$c; 
// echo "<br>The subtraction of " .$a ." - " .$b." = ".$d; 
// echo "<br>The multiply of " .$a ." * " .$b." = ".$e; 
// echo "<br>The division of " .$a ." / " .$b." = ".$f; 
// echo "<br>The modulus of " .$a ." % " .$b." = ".$g; 
// echo "<br>The power of " .$a ." % " .$b." = ".$i; 


//increment/Decrement Operators
echo "the actual value:" .$a;
$a++;
echo "<br> the increment is:" .$a;
$a--;
echo "<br> the decrement is:" .$a;

//Operator Precedence

$total = 4 / 2 * 3 +(5 + 10) ** 2;
echo "<br>";
echo $total;