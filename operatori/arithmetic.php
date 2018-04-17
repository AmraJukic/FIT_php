<?php
/** Created by PhpStorm.*/
echo "1.  PHP Arithmetic Operators (Aritmetički operatori) </br></br>";

echo "+	Addition : </br>";
$x = 10;
$y = 6;
$sum = $x + $y;

echo "\$x + \$y = Sum of $x and $y is " . $sum;

echo "</br></br>";



echo "-	Subtraction : </br>";

$x = 10;
$y = 6;
$dif = $x - $y;

echo "\$x - \$y = Difference of $x and $y is " . $dif;

echo "</br></br>";



echo "*	Multiplication : </br>";

$x = 10;
$y = 6;
$pro = $x * $y;

echo "\$x * \$y =	Product of $x and $y is " . $pro;

echo "</br></br>";



echo "/	Division : </br>";

$x = 10;
$y = 6;
$div = $x / $y;

echo "\$x / \$y =	Quotient of $x and $y is " . $div;

echo "</br></br>";



echo "%	Modulus(mod - ostatak pri deljenju) : </br>";

$x = 10;
$y = 6;
$rem = $x % $y;

echo "\$x % \$y =	Remainder of $x divided by $y is " . $rem;

echo "</br></br>";




echo "**	Exponentiation : </br>";

$x = 10;
$y = 6;
$exp = $x ** $y;

echo "\$x ** \$y = \$x to the \$y'th power is " . $exp;

echo "</br></br></br>";



// Primer za sve Aritmeticke operatore :

echo "Primer za sve Aritmeticke operatore : </br>";

$x = 10;
$y = 4;

echo($x + $y) . "</br>";
// 0utputs: 14

echo($x - $y) . "</br>";
// 0utputs: 6

echo($x * $y) . "</br>";
// 0utputs: 40

echo($x / $y) . "</br>";
// 0utputs: 2.5

echo($x % $y) . "</br>";
// 0utputs: 2

echo($x ** $y);
// 0utputs: 10 000

echo "</br></br></br>";



// Zagrade i prioriteti :
echo "Zagrade i prioriteti : </br></br>";

$x = 10;
$y = 6;
$z = 4;

$prviIzraz = ($x * $z) + $y;
echo "$prviIzraz </br>";

$drugiIzraz = $x * $z + $y;
echo "$drugiIzraz </br></br>";



$treciIzraz = ($x * $z) - $y;
echo "$treciIzraz </br>";

$cetvrtiIzraz = $x * $z - $y;
echo "$cetvrtiIzraz </br></br>";



$petiIzraz = ($x + $z) * $y;
echo "$petiIzraz </br>";

$sestiIzraz = $x + $z * $y;
echo "$sestiIzraz </br></br>";



$sedmiIzraz = ($x - $z) * $y;
echo "$sedmiIzraz </br>";

$osmiIzraz = $x - $z * $y;
echo "$osmiIzraz </br></br>";


// Analogno kao za "*" i za operator "/"


$devetiIzraz = $x + ($z * $y);
echo "$devetiIzraz </br>";

$desetiIzraz = $x + $z * $y;
echo "$desetiIzraz </br></br>";



$jedanaestiIzraz = $x - ($z * $y);
echo "$jedanaestiIzraz </br>";

$dvanaestiIzraz = $x - $z * $y;
echo "$dvanaestiIzraz </br></br>";



$trinaestiIzraz = $x * ($z + $y);
echo "$trinaestiIzraz </br>";

$cetrnaestiIzraz = $x * $z + $y;
echo "$cetrnaestiIzraz </br></br>";



$petnaestiIzraz = $x * ($z - $y);
echo "$petnaestiIzraz </br>";

$sesnaestiIzraz = $x * $z - $y;
echo "$sesnaestiIzraz </br></br>";

echo "</br></br></br>";


echo "</br> Prioritet operatora :</br>";

echo "Najvisi prioritet imaju () i [] i .</br>";
echo "Zatim imamo ++ i -- </br>";
echo "Zatim imamo * i / i %</br>";
echo "Zatim imamo + i - </br>";


echo "</br></br></br>";