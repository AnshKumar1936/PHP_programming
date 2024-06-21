<?php

$employees = array(
    "ansh" => "web developer",
    "anmol" => "software engineer",
);
echo "<pre>";
print_r($employees);

foreach($employees as $work){
    echo "<br>".$work;
}