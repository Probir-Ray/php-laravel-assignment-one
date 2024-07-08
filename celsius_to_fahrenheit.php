<?php
/*
Write a PHP script to convert a temperature of 32 degrees Celsius to Fahrenheit. 
Store just the temperature value in a variable, no need to store the unit(Celsius). 
*/

$celsius = 32;
$fahrenheit = $celsius * 9/5 + 32;
printf("Temperature in fahrenheit: %4.2f", $fahrenheit);