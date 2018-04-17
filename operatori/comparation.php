<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/12/2018
 * Time: 7:49 AM
 */

/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 1/22/2018
 * Time: 3:54 PM
 */
echo "3.  PHP Comparison Operators (Operatori upoređivanja/komparacije)</br></br>";

/*
 * Operatori upoređivanja PHP koriste se za upoređivanje dve vrednosti (broja ili stringa):
 */

echo "Uporedjivanje  ==	 is equal isto je kao : x == y </br> Vraća true ako je x jednako y </br>";

$x = 100;
$y = "100";

var_dump($x == $y);
// vraca true jer su vrednosti jednake

echo "</br></br>";



echo "Uporedjivanje  ===  is identical isto je kao : x === y </br> Vraća true ako je x jednako y, i oni su istog tipa </br>";

$x = 100;
$y = "100";

var_dump($x === $y);
// vraca false jer su vrednosti jednake ali tipovi nisu (x - tipa int a y - tipa string)

echo "</br></br>";



echo "Uporedjivanje  !=  Not equal isto je kao : x != y </br> Vraća true ako x nije jednako y </br>";

$x = 100;
$y = "100";

var_dump($x != $y);
// vraca false jer su vrednosti jednake (tip podataka nije bitan u ovom slucaju)

echo "</br></br>";



echo "Uporedjivanje  <>	 Not equal isto je kao : x <> y </br> Vraća true ako x nije jednako y </br>";

$x = 100;
$y = "100";

var_dump($x <> $y);
// vraca false jer su vrednosti jednake

echo "</br></br>";



echo "Uporedjivanje  !==	Not identical isto je kao : x !== y </br> Vraća true ako x nije jednako y, ILI nisu istog tipa </br>";

$x = 100;
$y = "100";

var_dump($x !== $y);
// vraca true jer tipovi nisu isti (moraju se razlikovati bar vrednosti ILI bar tipovi)
// ako su iste i vrednosti i tipovi vraca false !

echo "</br></br>";



echo "Uporedjivanje  >  Greater than isto je kao :  x > y </br> Vraća true ako je x veće od y </br>";

$x = 100;
$y = 50;

var_dump($x > $y);
// vracca true jer je x vece od y

echo "</br></br>";



echo "Uporedjivanje  <  Less than isto je kao :  x < y </br> Vraća true ako je x manje od y </br>";

$x = 10;
$y = 50;

var_dump($x < $y);
// vracca true jer je x manje od y

echo "</br></br>";



echo "Uporedjivanje  >=	 Greater than or equal to isto je kao : x >= y </br> Vraća true ako je x veći ili jednak y </br>";

$x = 50;
$y = 50;

var_dump($x >= $y);
// vraca true jer je x vece ili jednako od y (ovde je = )

echo "</br></br>";



echo "Uporedjivanje  <=	 Less than or equal to isto je kao : x <= y </br> Vraća true ako je x manji ili jednak y </br>";

$x = 50;
$y = 50;

var_dump($x <= $y);
// vraca true jer je x manje ili jednako od y (ovde je = )

echo "</br></br></br>";



// Primer za sve operatore upoređivanja/komparacije :

echo "Primer za sve operatore upoređivanja/komparacije : </br>";

$x = 25;
$y = 35;
$z = "25";

var_dump($x == $z);
// Outputs: boolean true jer su iste vrednosti , tip ovde nije bitan

var_dump($x === $z);
// Outputs: boolean false jer su iste vrednosti ali jedna je int druga string (moraju i tipovi biti isti da vraca true)

var_dump($x != $y);
// Outputs: boolean true

var_dump($x !== $z);
// Outputs: boolean true jer se tip razlikuje nisu jednaki x i z

var_dump($x < $y);
// Outputs: boolean true

var_dump($x > $y);
// Outputs: boolean false

var_dump($x <= $y);
// Outputs: boolean true

var_dump($x >= $y);
// Outputs: boolean false

echo "</br></br></br>";