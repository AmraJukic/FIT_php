<?php
/** Created by PhpStorm. */

echo "2.  PHP Assignment Operators (Operatori zaduženja/dodeljivanja)</br></br>";

/*
 * Operatori dodeljivanja PHP se koriste sa numeričkim vrijednostima za upis vrijednosti na varijablu.
 * Osnovni operator zaduzenja u PHP-u je "=" . To znači da se vrednost levog operanda postavi na vrednost izraza zadatu s desne strane.
 */


echo "x = y	isto je kao : x = y	</br>";

// ovde je y = 10
$x = 10;
echo $x;
echo "</br>Levi operand se podesi na vrednost izraza s desne strane ";

echo "</br></br>";



echo "Dodeljivanje uz sabiranje x += y isto je kao : x = x + y </br>";

// ovde je y = 100
$x = 20;
$x += 100;
// isto kao x = x + 100

echo $x;

echo "</br></br>";



echo "Dodeljivanje uz oduzimanje x -= y isto je kao : x = x - y </br>";

// ovde je y = 30
$x = 50;
$x -= 30;
// isto kao x = x - 30

echo $x;

echo "</br></br>";



echo "Dodeljivanje uz mnozenje x *= y isto je kao : x = x * y </br>";

// ovde je y = 6
$x = 10;
$x *= 6;
// isto kao x = x * 6

echo $x;

echo "</br></br>";



echo "Dodeljivanje uz deljenje x /= y isto je kao : x = x / y </br>";

// ovde je y = 5
$x = 10;
$x /= 5;
// isto kao x = x / 5

echo $x;

echo "</br></br>";



echo "Dodeljivanje uz mod x %= y isto je kao : x = x % y </br>";

// ovde je y = 4
$x = 15;
$x %= 4;
// isto kao x = x % 4

echo $x;

echo "</br></br></br>";



// Primer za sve operatore zaduženja/dodeljivanja :

echo "Primer za sve operatore zaduženja/dodeljivanja : </br>";

$x = 10;
echo $x . "</br>";
// Outputs: 10

$x = 20;
$x += 30;
echo $x . "</br>";
// Outputs: 50

$x = 50;
$x -= 20;
echo $x . "</br>";
// Outputs: 30

$x = 5;
$x *= 25;
echo $x . "</br>";
// Outputs: 125

$x = 50;
$x /= 10;
echo $x . "</br>";
// Outputs: 5

$x = 100;
$x %= 15;
echo $x;
// Outputs: 10

echo "</br></br></br>";