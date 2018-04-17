<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/12/2018
 * Time: 7:53 AM
 */

/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 1/22/2018
 * Time: 3:55 PM
 */
echo "4.  PHP Increment/Decrement Operators (Operatori povećanja/smanjenja) </br></br>";

/*
 * PHP increment operateri se koriste za povećanje vrednosti promenljive
 * PHP decrement operateri se koriste za smanjenje vrednosti promenljive
 */


echo "++\$x	Pre-increment : Povećava x za jedan, a zatim vraća novo x</br>";

$x = 10;
echo ++$x;

echo "</br></br>";



echo "\$x++	Post-increment : Vraća x, a zatim povećava x za jedan</br>";

$x = 10;
echo $x++;

echo "</br>Posle povecanja x je : " . $x;

echo "</br></br>";



echo "--\$x	Pre-decrement : Smanjuje x za jedan, a zatim vraća novo x</br>";

$x = 10;
echo --$x;

echo "</br></br>";



echo "\$x--	Post-decrement : Vraća x, a zatim smanji x za jedan</br>";

$x = 10;
echo $x--;

echo "</br>Posle smanjenja x je : " . $x;

echo "</br></br></br>";



// Primer za sve operatore povećanja/smanjenja :

echo "Primer za sve operatore povećanja/smanjenja : </br>";

$x = 10;

echo ++$x . "</br>";
// Outputs: 11
echo $x . "</br></br>";
// Outputs: 11


$x = 10;
echo $x++ . "</br>";
// Outputs: 10
echo $x . "</br></br>";
// Outputs: 11


$x = 10;
echo --$x . "</br>";
// Outputs: 9
echo $x . "</br></br>";
// Outputs: 9


$x = 10;
echo $x-- . "</br>";
// Outputs: 10
echo $x . "</br>";
// Outputs: 9

echo "</br></br></br>";