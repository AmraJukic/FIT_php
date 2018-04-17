<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 2/6/2018
 * Time: 2:34 PM
 */

echo "1.) Naredbe uslovljavanja : </br></br>";

/*
 * U PHP-u imamo sledeće uslovne izjave:

IF izjava - izvršava neki kod ako je jedan uslov tačan
IF ... ELSE izjava - izvršava neki kod ako je uslov tačan i drugi kod ako je to stanje lažno
IF ... ELSEIF .... ELSE izjava - izvršava različite kodove za više od dva uslova
switch statement - bira jedan od mnogih blokova koda koji će se izvršiti
 */

echo "Naredba IF </br></br>";


// Primer 1 :
$a = 10;
$b = 20;

if ($a < $b){
    $a = 0;
    echo "Promenljiva a je : ". $a . "</br>";
}
else $b = 0;
echo "Promenljiva b je : " . $b;


echo "</br></br>";


// Primer 2 :

$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

echo "</br></br>";


// Primer 3 :


$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

echo "</br></br>";


// Primer 4 :


$bool = true;

if ($bool) {
    $hi = 'Hello to all people!';
    echo $hi;
}

echo "</br></br>";


$bool = false;

if ($bool) {
    $hi = 'Hello to all people!';
}else
    echo "False";

echo "</br></br>";


// Primer 5 : Alphabetical Comparison


$a = "brian";
$b = "zebra";

if ($a < $b){

    echo $a . " is before " . $b . " in the alphabet";
}
else{

    echo $a . " is after " . $b . " in the alphabet";
}
// Result : brian is before zebra in the alphabet

echo "</br></br>";


// Primer 6 :


$var = TRUE;

echo $var==TRUE ? 'TRUE' : 'FALSE';
// get TRUE
echo $var==FALSE ? 'TRUE' : 'FALSE';
// get FALSE

echo "</br></br>";


// Primer 7 : Number comparison


$a = "C";
$b = "X";
if ($a < $b) {

    echo $a . "is smaller than" . $b;
}
// Result : C is smaller than X

echo "</br></br>";


// Primer 8 :

$a = 10;
$b = 20;

// Ovakav zapis bi samo promenljivoj a dodelio vrednost promenljive b
if ($a = $b)
{
    print("Vrednost promenljive a sada je : " .$a);
}


echo "</br>";


// ovde vec poredimo vrednosti promenljive a i b
if ($a == $b) {

    print("Sada je : a = b");
}

echo "</br></br>";


// Primer 9 :

$a = 10;
$b = 20;

if ($a > $b) {

    echo "a is bigger than b";
} elseif ($a == $b) {

    echo "a is equal to b";
} else {

    echo "a is smaller than b";
}

echo "</br></br>";


// Primer 10 :

if ($a > $b):

    echo $a . " is greater than " . $b;

elseif ($a == $b):

    echo $a . " equals " . $b;

else:

    echo $a . " is neither greater than or equal to " . $b;

endif;

echo "</br></br>";


// Primer 11 :

if(true) {
    echo 'true';
    // show this
} else {
    echo 'false';
}


echo "</br>";


if(false) {
    echo 'true';
} else {
    echo 'false';
    // show this
}

echo "</br></br>";


// Primer 12 :

$i = 2;

if ($i == 0) {

    echo "i equals 0";

} elseif ($i == 1) {

    echo "i equals 1";

} elseif ($i == 2) {

    echo "i equals 2";
}

echo "</br></br></br>";



echo "Naredba SWITCH </br></br>";

/*
 * Evo kako to funkcioniše : prvo imamo jedan izraz n (najčešće varijabla), koja se jednom procenjuje.
 * Vrednost izraza zatim se upoređuje sa vrednostima za svaki slučaj u strukturi.
 * Ako postoji podudaranje, blok koda povezan sa tom slučajem se izvršava.
 * Koristite pauzu kako biste spriječili da se kod automatski pokreće u sljedeći slučaj.
 * Podrazumevana reč se koristi ako se ne pronađe nijedno podudaranje.
 */

// Primer 1 :

$favcolor = "red";

switch ($favcolor) {

    case "red":
        echo "Your favorite color is red!";
        break;

    case "blue":
        echo "Your favorite color is blue!";
        break;

    case "green":
        echo "Your favorite color is green!";
        break;

    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

echo "</br></br>";


// Primer 2 :

$i = 2;

switch ($i) {

    case 0:
        echo "i equals 0";
        break;

    case 1:
        echo "i equals 1";
        break;

    case 2:
        echo "i equals 2";
        break;
}
echo "</br></br>";


// Primer 3 :

$i = 'cake';

switch ($i) {

    case "apple":
        echo "i is apple";
        break;

    case "bar":
        echo "i is bar";
        break;

    case "cake":
        echo "i is cake";
        break;
}

echo "</br></br>";


// Primer 4 : OVO NIJE DOBRO mora se pisati "break"

/*
 * Ako ne napišete izjavu o prekidu "break" na kraju liste izjava slučaja, PHP će nastaviti da izvršava izjave o sledećem slučaju.
 * Na primer:
 * Ovde, ako je $i = 0, PHP bi izvršio sve eho izjave!
 * Ako je $i = 1, PHP bi izvršio poslednja dva eha.
 * Dobili biste očekivano ponašanje ('i equals 2' biće prikazano) samo ako je $i = 2.
 */

switch ($i) {
    case 0:
        echo "i equals 0";

    case 1:
        echo "i equals 1";

    case 2:
        echo "i equals 2";
}

echo "</br></br>";


// Primer 5 :

$i = 2;

switch ($i) {
    case 0:
    case 1:
    case 2:
        echo "i is less than 3 but not negative";
        break;

    case 3:
        echo "i is 3";
}

echo "</br></br>";


// Primer 6 :

$i = 3;

switch ($i) {
    case 0:
    case 1:
    case 2:
        echo "i is less than 3 but not negative";
        break;

    case 3:
        echo "i is 3";
}

echo "</br></br>";


// Primer 7 : Poseban slučaj je podrazumevani slučaj. Ovaj slučaj odgovara svemu što nije u skladu sa prethodno navedenim slučajevima

$i = 3;
switch ($i) {

    case 0:
        echo "i equals 0";
        break;

    case 1:
        echo "i equals 1";
        break;

    case 2:
        echo "i equals 2";
        break;

    default:
        echo "i is not equal to 0, 1 or 2";
}

echo "</br></br>";


// Primer 8 :

switch ($i):

    case 0:
        echo "i equals 0";
        break;

    case 1:
        echo "i equals 1";
        break;

    case 2:
        echo "i equals 2";
        break;

    default:
        echo "i is not equal to 0, 1 or 2";

endswitch;

echo "</br></br>";


// Primer 9 :

$beer = '';

switch($beer) {

    case 'tuborg';
    case 'carlsberg';
    case 'heineken';
        echo 'Good choice';
        break;

    default;
        echo 'Please make a new selection...';
        break;
}

echo "</br></br>";


// Primer 10 :

$a = 'tuborg';
switch($a) {

    case 'tuborg';
    case 'carlsberg';
    case 'heineken';
        echo 'Good choice';
        break;

    default;
        echo 'Please make a new selection...';
        break;
}

echo "</br></br>";


// Primer 11 :

switch(2) {

    case 1:
        echo "One\n";
        break;

    case 2:
        echo "Two\n";
        break;

    case 3:
        echo "Three\n";
        break;

    // Ovaj ne dostize
    case 2:
        echo "Two again\n";
        break;
}

echo "</br></br>";


switch(2) {

    case 1:
        echo "One\n";
        break;

    case 2:
        echo "Two again\n";
        break;

    // Sada ovaj ne dostize
    case 2:
        echo "Two\n";
        break;

    case 3:
        echo "Three\n";
        break;
}

echo "</br></br>";


// Primer 12 :

$out = ' ';

for ($i = 1; $i < 10; $i++) {

    switch ($i) {

        case 1:
        case 2:
        case 3: echo $i . "</br>";
            break;

        default: $out .= ' ';
            echo "$i je vece od 3 </br>";
            break;
    }
}
echo $out;

echo "</br></br>";


// Primer 13 :

$today = date("D");
switch($today){
    case "Mon":
        echo "Today is Monday. Clean your house.";
        break;
    case "Tue":
        echo "Today is Tuesday. Buy some food.";
        break;
    case "Wed":
        echo "Today is Wednesday. Visit a doctor.";
        break;
    case "Thu":
        echo "Today is Thursday. Repair your car.";
        break;
    case "Fri":
        echo "Today is Friday. Party tonight.";
        break;
    case "Sat":
        echo "Today is Saturday. Its movie time.";
        break;
    case "Sun":
        echo "Today is Sunday. Do some rest.";
        break;

    default:
        echo "No information available for that day.";
        break;
}

echo "</br></br>";


// Primer 14 :

$value = 1;

switch ($value) {

    case 1 || 2:
        echo 'the value is either 1 or 2';
        break;

    default:
        echo "";
}

echo "</br></br>";


// Primer 15 :

$destination = "New York";

echo "Traveling to $destination</br>";

switch ($destination){
    case "Las Vegas":
        echo "Bring an extra $500";
        break;
    case "Amsterdam":
        echo "Bring an open mind";
        break;
    case "Egypt":
        echo "Bring 15 bottles of SPF 50 Sunscreen";
        break;
    case "Tokyo":
        echo "Bring lots of money";
        break;
    case "Caribbean Islands":
        echo "Bring a swimsuit";
        break;

    default:
        echo "Bring lots of underwear!";
        break;
}

echo "</br></br></br>";