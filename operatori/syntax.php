<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/1/2018
 * Time: 11:04 AM
 */

// PHP String : A string can be any text inside quotes. You can use single or double quotes:
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "</br>";
echo $y;

echo "</br></br>";


// PHP Integer : An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.

/* Rules for integers:

An integer must have at least one digit
An integer must not have a decimal point
An integer can be either positive or negative
Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)

*/

// In the following example $x is an integer. The PHP var_dump() function returns the data type and value:

$x = 5985;
var_dump($x);

echo "</br></br>";


// PHP Float : A float (floating point number) is a number with a decimal point or a number in exponential form.

// In the following example $x is a float. The PHP var_dump() function returns the data type and value:

$x = 10.365;
var_dump($x);

echo "</br></br>";


// PHP Boolean : A Boolean represents two possible states: TRUE or FALSE.

$x = true;
$y = false;
var_dump($x);
echo "</br>";
var_dump($y);

echo "</br></br>";


// PHP Array : An array stores multiple values in one single variable.

// In the following example $cars is an array. The PHP var_dump() function returns the data type and value:

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

echo "</br></br>";


// In the following example $mix is an array. The PHP var_dump() function returns the data type and value:

$mix = array("Volvo","BMW","Toyota", 1, 2, 3, -10, null, 3.5, -0.35, true);
var_dump($mix);

echo "</br></br>";