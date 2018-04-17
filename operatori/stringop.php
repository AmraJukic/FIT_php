<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/12/2018
 * Time: 7:54 AM
 */

/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 1/22/2018
 * Time: 3:57 PM
 */
echo "6.  PHP String Operators (String operatori) </br></br>";



echo "  .  Concatenation  \$txt1  .  \$txt2	 Concatenation of \$txt1 and \$txt2 :</br>";

$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;

echo "</br></br>";



echo "  .=	Concatenation dodeljivanje	\$txt1 .= \$txt2	\$txt2 dodajemo \$txt1 :</br>";

$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1;

echo "</br></br></br>";



// // Primer za string operatore :

echo "Primer za string operatore : </br>";

$x = "Hello";
$y = " World!";
echo $x . $y . "</br>";
// Outputs: Hello World!

$x .= $y;
echo $x . "</br>";
// Outputs: Hello World!

echo "</br></br></br>";