<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 2/6/2018
 * Time: 2:35 PM
 */

echo "2.) Naredbe ciklusa : </br></br>";

/*
 * U PHP-u imamo sledeće petlje :

WHILE - petlja kroz blok koda sve dok je navedeno stanje tačno
DO...WHILE - petlje kroz blok koda jednom, a zatim ponavlja petlju sve dok je navedeno stanje tačno
FOR - petlje kroz blok koda određeni broj puta
FOREACH - petlje kroz blok koda za svaki element u nizu
*/

echo "while loop : </br></br>";


// Primer 1 :

$x = 1;

while($x <= 5) {

    echo "The number is: $x <br>";
    $x++;
}

echo "</br></br>";


// Primer 2 :

$i = 1;

while ($i <= 10):

    echo $i . ", ";
    $i++;

endwhile;

echo "</br></br>";


// Primer 3 :

$i = 1;

while ($i <= 5) {

    $j = 1;

    while ($j <= $i) {

        echo"*&nbsp&nbsp";
        $j++;
    }
    echo"<br>";
    $i++;
}

echo "</br></br>";


// or


$i = 1;

while ($i <= 5):

    $j = 1;
    while ($j <= $i):

        echo"*&nbsp&nbsp";
        $j++;

    endwhile;

    echo "<br>";
    $i++;

endwhile;

echo "</br></br>";


// Primer 4 :

$arr = array("orange", "banana", "apple", "raspberry");

$i = 0;
while ($i < count($arr)) {

    $a = $arr[$i];
    echo $a . "\n";
    $i++;
}

echo "</br></br>";


// or


$i = 0;
$c = count($arr);
while ($i < $c) {

    $a = $arr[$i];
    echo $a . "\n";
    $i++;
}

echo "</br></br>";


// Primer 5 :

$i = 0;
$num = 50;

while( $i < 10) {
    $num--;
    $i++;
}

echo ("Loop stopped at i = $i and num = $num" );



echo "</br></br></br>";



echo "do ... while loop : </br></br>";


// Primer 1 :

$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

echo "</br></br>";



// Primer 2 :

$x = 6;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

echo "</br></br>";


// Primer 3 :


$i = 0;
do {
    echo $i;
} while ($i > 0);

echo "</br></br>";


// Primer 4 :

$i = 0;
$num = 0;

do {
    $i++;
}

while( $i < 10 );
echo ("Loop stopped at i = $i" );



echo "</br></br></br>";



echo "for loop : </br></br>";


// Primer 1 :

for ($x = 0; $x <= 10; $x++) {

    echo "The number is: $x <br>";
}

echo "</br></br>";


// Primer 2 :

$a = 0;
$b = 0;

for( $i = 0; $i < 5; $i++ ) {
    $a += 10;
    $b += 5;
}

echo ("At the end of the loop a = $a and b = $b" );

echo "</br></br>";



echo "</br></br></br>";



echo "foreach loop : </br></br>";


// Primer 1 :

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value </br>";
}

echo "</br></br>";


// Primer 2 :

$array = array( 1, 2, 3, 4, 5);

foreach( $array as $value ) {

    if( $value == 3 )continue;

    echo "Value is $value </br>";
}

echo "</br></br></br>";