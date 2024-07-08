<?php
/*
Write a PHP script to find the largest number among three given numbers: $num1 = 4, $num2 = 5, and $num3 = 6. 
Use if-else statements.
*/


$num1 = 4;
$num2 = 5;
$num3 = 6;

if($num1 > $num2) {
    if($num1 > $num3) {
        echo "Largest number is: $num1";
    } else {
        echo "Largest number is: $num3";
    }
} else if($num2 > $num3) {
    echo "Largest number is: $num2";
} else {
    echo "Largest number is: $num3";
}