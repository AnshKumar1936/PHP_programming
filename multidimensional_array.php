<?php

$students = array(
    array("name" => "ansh" , "class" =>"bca"),
    array("name" => "anmol" , "class" =>"bsc"),
);

foreach ($students as $key => $value){
    // echo "<pre>";
    // print_r($value);

    foreach ($value as $k => $v){
        echo "<b>".ucwords($k)."</b> :". $v. "<br>";
         
    }
}
