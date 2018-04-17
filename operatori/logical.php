<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/12/2018
 * Time: 7:55 AM
 */

/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 1/22/2018
 * Time: 3:56 PM
 */
echo "5.  PHP Logical Operators (Logički operatori) </br></br>";

/*
 * PHP logični operatori se koriste za kombinovanje uslovnih izjava.
 */



// True je ako su i x i y istinite
echo "And \$x and \$y :</br></br> True je ako su i x i y istinite </br>";

$x = 100;
$y = 50;

if ($x == 100 and $y == 50) {
    echo "True";
} else {

    echo "False";
}

echo "</br></br>";



// True je ako je x ili y istinito
echo "Or \$x or \$y :</br></br> True je ako je x ili y istinito </br>";

$x = 100;
$y = 50;

if ($x == 100 or $y == 80) {
    echo "True";
} else {

    echo "False";
}

echo "</br></br>";



// True je ako je x ili y istinito, ali ne oboje
echo "Xor  \$x xor \$y :</br></br> True je ako je x ili y istinito, ali ne oboje </br>";

$x = 100;
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "True";
} else{

    echo "False";
}

echo "</br>";

// Drugi primer za Xor :

$x = 100;
$y = 50;

if ($x == 10 xor $y == 50) {
    echo "True";
} else{

    echo "False";
}

echo "</br>";

// Treci primer za Xor :

echo "Koristi se i oznaka ^ za xor operator</br>";

$x = 100;
$y = 50;

if ($x == 10 ^ $y == 50) {
    echo "True";
} else{

    echo "False";
}

echo "</br></br>";



// True ako su i x i y istinite
echo "&&   And	\$x && \$y :</br></br> True ako su i x i y istinite </br>";

$x = 100;
$y = 50;

if ($x == 100 && $y == 50) {
    echo "True";
} else {

    echo "False";
}

echo "</br></br>";



// True ako je ili x ili y istinito
echo "||	Or	\$x || \$y :</br></br> True ako je x ili y istinito </br>";

$x = 100;
$y = 50;

if ($x == 100 || $y == 80) {
    echo "True";
} else {

    echo "False";
}

echo "</br></br>";



// True ako $x nije istinito
echo "!	Not	!\$x :</br></br> True ako $x nije istinito (tj x nije jednako ili razlicito je od x)</br>";

$x = 100;

if ($x !== 90) {
    echo "True";
} else {

    echo "False";
}

echo "</br></br></br>";



// Primer za logičke operatore :

echo "Primer za logičke operatore : </br>";

$year = 2014;
// Leap years are divisible by 400 or by 4 but not 100
// Godina deljiva sa 400 ili (deljiva sa 4 ali nije deljiva sa 100)

if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0))){

    echo "$year is a leap year.";

} else{

    echo "$year is not a leap year.";
}

echo "</br></br></br>";



echo "Prioriteti i razlike izmedju logickih operatora :";

echo "</br></br></br>";


// Razlika izmedju && i & :
echo "Razlika izmedju && i & : </br>";

/*
 * && se naziva operaterom AND i se takođe zove AND operatora, ali osnovna razlika između njih je u načinu na koji se izvršavaju. Sintaksa za && i & isto kao i za sledeće:

    bool_ekp1 && bool_ekp2
    bool_ekp1 & bool_ekp2

 * Sada sintaksa od 1 i 2 izgleda slično jedna drugoj, ali način na koji će se izvršiti je sasvim drugačiji :
 *
 * Nacin izvrsavanja za && :

 1.) U prvoj izjavi, prvi bool_ekp1 će se izvršiti i onda rezultat ovog izraza odlučuje o izvršenju druge izjave.
     Ako je false, AND će biti false, tako da nema smisla izvršiti drugu izjavu.

        Zatim :

 2.) Izjava bool_ekp2 se izvršava ako i samo ako bool_ekp1 vraća true na izvršenje.
     Poznat je i kao operater kratkog spoja, jer širi vezu (izvod) na osnovu rezultata prvog izraza
*/

$x = 0;
// kako 5 < 4 je false nece ni nastavljati dalje izvrsavanje (unutar if-a drugi usliov preskace jer i za true i za false prvo je false i nikako ne moze biti true ceo izraz)
if (5 < 4 && (7 / $x) == 0)
    echo "Won't execute!";
else
{
    echo "&& wont execute the 7/0 so no divide by zero error.";
}

echo "</br></br>";



/*
 * Kompajler će izvršiti obe izjave i onda će rezultat biti ANDed. To je neefikasan način obavljanja stvari
 * zato što nema smisla izvršiti drugu izjavu ako je prva false jer je rezultat efikasan samo kada su obe izjave tačne.
 */


$x = 0;
if (5 < 4 &  (7 / $x) == 0) {
    echo "Won't execute!";
}
else
{
    echo "&& wont execute the 7/0 so no divide by zero error.";
}

echo "</br></br></br>";



// Razlika izmedju “||” i “|” :
echo "Razlika izmedju “||” i “|” : </br>";

/*
 * U slučaju "||" samo jedna izjava se izvršava i ako je "true" onda se druga izjava neće izvršiti.
 * Ali ako je prva false onda će druga biti proverena za vrednost "true".
 *
 * Razlog za to je način na koji "ili" operater radi.
 * Operator "Or" zavisi samo od jedne istine, drugim riječima ako je neki od izraza true, rezultat će biti true.
 */

$x = 0;
if (5 > 4 || (7 / $x) == 0)
    echo "|| executed because 5 > 4 evaluates to true. No divide by zero error.";
else
{
    echo "Won't execute!";
}

echo "</br></br>";



/*
 * To je u redu, ali način na koji se "|" ponaša je isti kao i "&",
 * drugim rečima obe izjave se izvršavaju bez obzira na rezultat prve izjave.
 */

$x = 0;
if (5 > 4 | (7 / $x) == 0)
    echo "|| executed because 5 > 4 evaluates to true. No divide by zero error.";
else
{
    echo "Won't execute!";
}

echo "</br></br></br>";



// Razlika izmedju && i AND i Razlika izmedju || i OR : Zato što 'and / or' imaju niži prioritet od '=', ali '|| / &&' imaju veći prioritet.


echo "Razlika izmedju && i AND : </br>";

$bool = true && false;
var_dump($bool); // false, that's expected

$bool = true and false;
var_dump($bool); // true, ouch! NETACNO zato sto = ima veci prioritet nego AND !!!

$bool = (true and false);
var_dump($bool); // false, TACNO zato sto sam dodala ZAGRADE !!!


$bool = false && true;
var_dump($bool); // false, that's expected

$bool = false and true;
var_dump($bool); // false


$bool = true && true;
var_dump($bool); // true, that's expected

$bool = true and true;
var_dump($bool); // true


$bool = false && false;
var_dump($bool); // false, that's expected

$bool = false and false;
var_dump($bool); // false

echo "</br></br>";


echo "Razlika izmedju || i OR : </br>";

$bool = true || false;
var_dump($bool); // true

$bool = true or false;
var_dump($bool); // true


$bool = false || true;
var_dump($bool); // true zato sto '|| / &&' imaju veći prioritet od '='

$bool = false or true;
var_dump($bool); // false, NETACNO zato sto 'and / or' imaju niži prioritet od '=' !!!

$bool = (false or true);
var_dump($bool); // true, TACNO zato sto sam dodala ZAGRADE !!!


$bool = true || true;
var_dump($bool); // true

$bool = true or true;
var_dump($bool); // true


$bool = false || false;
var_dump($bool); // false

$bool = false or false;
var_dump($bool); // false


// Test :

echo "</br>Test :</br>";

$test = true and false;
var_dump($test); // true, NETACNO !!!

echo "</br>";

$test = (true and false);
var_dump($test); // false, TACNO zbog zagrada

echo "</br>";

$test = true && false;
var_dump($test); // false, TACNO jer '&&' ima veci prioritet nego '='

echo "</br>";

$test = (true && false);
var_dump($test); // false, TACNO jer '&&' ima veci prioritet nego '=' a postoje i zagrade

echo "</br></br></br>";



// Neki link (ok, mada ne nesto specijalno): https://gist.github.com/janogarcia/4268731

// Razlika izmedju OR i || :

$a = 'a';
$b = 'b';
$zero = 0;
$value = NULL;

// The logical "OR" operator has lower precendence than the assignment "=" operator
// The first assignment "$value = $a" evaluates to TRUE, thus the assignment on the right "$value = $b" will not be reached
var_dump($value = $a OR $value = $b); // TRUE bool('a')

// "$value" is assigned the value of the first assignment, "$value = $a"
var_dump($value); // 'a'



// The first assignment "$value = $zero" evaluates to FALSE, thus the assignment on the right "$value = $b" will be reached
var_dump($value = $zero OR $value = $b); // TRUE bool(0 OR 'b')

// "$value" is assigned the value of the last assignment, "$value = $b"
var_dump($value); // 'b'

echo "</br></br>";



// ILI :

// logički "||" operator ima veći prioritet od operatora "="
// Prvi zadatak "$value = $a" procenjuje na TRUE, tako da zadatak na desnoj "$value = $b" neće biti dostignut
var_dump($value = $a || $value = $b); // TRUE bool('a')

// "$value" is assigned the value of "$a || $value = $b"
var_dump($value); // TRUE bool('a' || 'b')

// The first assignment "$value = $zero" evaluates to FALSE, thus the assignment on the right "$value = $b" will be reached
var_dump($value = $zero || $value = $b); // TRUE bool(0 || 'b')

// "$value" is assigned the value of "$zero || $value = $b"
var_dump($value); // TRUE bool(0 || 'b')


echo "</br></br></br>";



// Razlika izmedju AND i && :

// The logical "AND" operator has lower precendence than the assignment "=" operator
// The first assignment "$value = $a" evaluates to TRUE, thus the expression on the right "$value = $b" will be reached
var_dump($value = $a AND $value = $b); // TRUE bool('a' AND 'b')

// "$value" is assigned the value of the last assignment, "$value = $b"
var_dump($value); // 'b'

// The first assignment "$value = $zero" evaluates to FALSE, thus the expression on the right "$value = $b" will not be reached
var_dump($value = $zero AND $value = $b); // FALSE bool(0)

// "$value" is assigned the value of the first assignment, "$value = $zero"
var_dump($value); // 0

echo "</br></br>";



// ILI :

// The logical "&&" operator has greater precendence than the assignment "=" operator
// The first assignment "$value = $a" evaluates to TRUE, thus the assignment on the right "$value = $b" will be reached
var_dump($value = $a && $value = $b); // TRUE bool('a' && 'b')

// "$value" is assigned the value of "$a && $value = $b", that is, TRUE
var_dump($value); // TRUE bool('a' && 'b')

// The first assignment "$value = $zero" evaluates to FALSE, thus the assignment on the right "$value = $b" will not be reached
var_dump($value = $zero && $value = $b); // FALSE bool(0)

// "$value" is assigned the value of "$zero && $value = $b", that is, FALSE
var_dump($value); // FALSE bool(0 && 'b')

echo "</br></br>";