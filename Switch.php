<?php

$grade = "A";

switch($grade){
    case "A":
        echo "you did excellent";
        break;
    case "B":
        echo "you did great";
        break;
    case "C":
        echo "you did good";
        break;
    case "D":
        echo "you did satisfactory";
        break;
    case "F":
        echo "you got failed";
        break;
    default:
        echo $grade . " grade is not valid";
}