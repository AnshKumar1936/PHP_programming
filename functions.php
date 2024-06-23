<?php

//String functions

$name = "Ansh kumar singh";
echo strlen($name);
echo "<br>";
echo str_replace("a" , "H" , $name); //case sensitive
echo "<br>";
echo str_ireplace("a" , "H" , $name); //not case sensitive
echo "<br>";
echo ucwords($name); //Uppercase every word first letter
echo "<br>";
echo ucfirst($name); //Uppercase only first word first letter
echo "<br>";
echo strtoupper($name); //Uppercase all elements
echo "<br>";

//Number elements
$num = 30.9;
var_dump(is_int($num)); //check if no is integer
echo "<br>";
var_dump(is_float($num)); 
echo "<br>";
var_dump(is_string($num)); 
echo "<br>";
var_dump(is_numeric($num)); 
echo "<br>";

//Maths functions
echo pi();
echo "<br>";
echo abs(-10);
echo "<br>";
echo sqrt(100);
echo "<br>";
echo round(10.6556);
echo "<br>";
echo rand(1,100);

