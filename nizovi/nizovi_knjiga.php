<?php

/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 10/24/2017
 * Time: 1:19 PM
 */

    // Primer 1: Dodavanje elemenata u niz

$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";
// Prints elements of array
print_r($paper);

echo "</br></br>";

    // Primer 2: Dodavanje elemenata u niz koristeci eksplicitnu lokaciju.

$paper[0] = "Copier";
$paper[1] = "Inkjet";
$paper[2] = "Laser";
$paper[3] = "Photo";
// Prints elements of array
print_r($paper);

echo "</br></br>";

    // Primer 3: Dodavanje elemenata u niz i vracanje istih

$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";

echo "Na trecoj poziciji niza imamo: $paper[2]</br></br>";
// Lists all members of the string
for($j = 0 ; $j < 4 ; ++$j)
    echo "$j: $paper[$j]<br>";

echo "</br></br>";

        // Asocijativni nizovi - Koristecci ih, mozemo pozvati stavke u nizu po imenu, a ne po broju.

    // Primer 4: Dodavanje stavki u asocijativni niz i njihovo vracanje pomocu imena

$paper['copier'] = "Copier & Multipurpose";
$paper['inkjet'] = "Inkjet Printer";
$paper['laser'] = "Laser Printer";
$paper['photo'] = "Photographic Paper";
echo $paper['laser'];

echo "</br></br>";

    // Primer 5: Dodavanje stavki u niz pomoću ključne reči matrice (naziva)

$p1 = array("Copier", "Inkjet", "Laser", "Photo");

echo "p1 element: " . $p1[2] . "<br>";

$p2 = array(
    'copier' => "Copier & Multipurpose",
    'inkjet' => "Inkjet Printer",
    'laser' => "Laser Printer",
    'photo' => "Photographic Paper");

echo "p2 element: " . $p2['inkjet'] . "<br>";

echo "</br></br>";

    /* Primer 6: Nizovi $p1 i $p2 su razlicitog tipa i ovo nece sigurno raditi
                 u nizu $p1 elementi su na pozicijama 0 do 3 a u nizu $p2 pozicije imaju naziv */

echo @$p1['inkjet'];      // Namerno: Kontra primer
echo @$p2[3];             // Namerno: Kontra primer

echo "</br></br>";

    // Primer 7: Setamo kroz numericki niz koristeci foreach $j- ide od nule do poslednjeg clana niza
                // a $item je ovde postavljeno i uzima vrednost svakog elementa niza $paper

$paper = array("Copier", "Inkjet", "Laser", "Photo");
$j = 0;
foreach($paper as $item)
{
    // or echo "$j: $paper[$j]</br>";
    echo "$j: $item</br>";
    ++$j;
}

echo "</br></br>";

    // Primer 8: Setamo kroz asocijativni(mozemo pozvati stavke u nizu po imenu,a ne po broju)niz koristeći foreach...as

$paper = array(
    'copier' => "Copier & Multipurpose",
    'inkjet' => "Inkjet Printer",
    'laser' => "Laser Printer",
    'photo' => "Photographic Paper");

foreach($paper as $item => $description)
    // echo $item . "</br>";
    // echo $description . "</br>";
    echo "$item: $description</br>";

echo "</br></br>";

    // Primer 9: Setajuci kroz asocijativni niz koristeci each i list (alternativa za foreach)

/**
 * Function list prints all members of array, each($paper) string and their place names in the string
 *
 * @param mixed $item - The key is the arbitrary position name in array $paper
 * @param mixed $description - Random value (description) of a string element
 * @param array $paper - The argument function list is an arbitrary array(in this case,
 *                       a key/value that is returned for each function)
 *
 * return void
 */
$paper = array(
    'copier' => "Copier & Multipurpose",
    'inkjet' => "Inkjet Printer",
    'laser' => "Laser Printer",
    'photo' => "Photographic Paper");

while (list($item, $description) = each($paper))
    echo "$item: $description</br>";

echo "</br></br>";

    // Primer 10: Koriscenje funkcije list: Imamo niz stvoren iz dve zice Alice i Bob, a zatim prenete na funkciju liste,
                                            // koja dodeljuje te stringove kao vrijednosti varijable $a i $b.

/**
 * Function list assigns strings as the values ​​of the $a and $b variable.
 *
 * @param string $a - Arbitrary string
 * @param string $b - Arbitrary string
 *
 * return void
 */
list($a, $b) = array('Alice', 'Bob');
echo "a = $a </br> b = $b";

echo "</br></br>";

                                    // Multidimenzionalni nizovi

    // Primer 11: Kreirati multidimenzionalni asocijativni niz $products sa tri stavke items—paper, pens i misc
                  // od kojih svaka sadrzi jos po jedan niz sa key/value(kljuc/vrednost) parom

$products = array(
    'paper' => array(
        'copier' => "Copier & Multipurpose",
        'inkjet' => "Inkjet Printer",
        'laser' => "Laser Printer",
        'photo' => "Photographic Paper"),
    'pens' => array(
        'ball' => "Ball Point",
        'hilite' => "Highlighters",
        'marker' => "Markers"),
    'misc' => array(
        'tape' => "Sticky Tape",
        'glue' => "Adhesives",
        'clips' => "Paperclips")
);

echo "<pre>";
// The outer loop foreach pulls the main parts from the top level of the array
// Spoljna petlja foreach izvlaci glavne delove sa vrha nivo niza
foreach($products as $section => $items)
    // The inner loop pulls the key/value pairs for the categories within each section
    // Unutrasnja petlja izvlaci parove kljuc/vrednost za kategorije unutar svakog odeljka
    foreach($items as $key => $value)
        echo "$section:\t$key\t($value)<br>";
echo "</pre>";

echo "</br></br>";

    // Primer 12: Kreiranje visedimenzionalnog numerickog polja kljuc je

$chessboard = array(
    array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),
    array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
    array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
    array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R')
);

echo "<pre>";
// The outer loop foreach pulls the main parts from the top level of the array
foreach($chessboard as $row)
{
    // The inner loop pulls the value for the categories within each filename
    // Unutrasnja petlja izvlaci vrednost za kategorije unutar svakog podniza
    foreach ($row as $piece)
        echo "$piece ";
    echo "<br>";
}
echo "</pre>";


echo $chessboard[7][3];    // Ovako mozemo zahtevati stampu odredjenog elementa u nizu: Q

echo "</br></br>";

                                    // Koriscenje funkcija u nizovima

    // Primer 13: Primer funkcije is_array

$niz = array('prvi','drugi','treci','cetvrti','peti');
$niz1 = 20;

/**
 * Function finds whether a variable is an array
 *
 * @param array $niz - Arbitrary array
 */
echo (is_array($niz)) ? "</br> Is an array" : "</br>Is not an array";

/**
 * Function finds whether a variable is an array
 *
 * @param integer $niz1- An arbitrary input to show on the counter case
 */
echo (is_array($niz1)) ? "</br> Is an array" : "</br> Is not an array";

echo "</br></br>";

    // Primer 14: Primer funkcije count koja racuna broj elemenata niza

/**
 * Count all elements in an array, or something in an object
 *
 * @param array $niz - An arbitrary array whose number of elements is checked
 */
echo "Broj elemenata niza je: " . count($niz) . "</br>";


/**Funkcija count odredjuje i broj elemenata multidimenzionalnog niza,
 * prvi argument je niz a drugi argument je opcioni moze biti od nule do poslednjeg elementa niza
 * ili 1 da rekurzivno broji sve elemente niza do najvece dubine
 */
echo "Broj elemenata multidimenzionalnog niza je: " . count($chessboard, 1) . "</br>";

echo "Broj elemenata multidimenzionalnog niza je: " . count($products, 1);

echo "</br></br>";

    // Primer 15: Primer funkcije sort koja sortira elemente niza

$fruits = array("lemon","orange","banana","apple");

/**
 * Function sort an array
 *
 * @param $fruits - Arbitrary array
 *
 * return - TRUE on success or FALSE on failure
 */
sort($fruits);

// Foreach prints all sorted (in alphabetical order) members of the $ fruits array
// $key - number of positions in a row and $val - Element an array
foreach($fruits as $key => $val){
    echo "fruits [" . $key . "] = " . $val . "</br>" ;
}

echo "</br></br>";

    // Primer 16:

sort($niz, SORT_NUMERIC);
sort($niz, SORT_STRING);

echo "</br></br>";

// Takodje mozemo sortirati niz u obrnutom redosledu koristecci rsort f-ju:

rsort($niz, SORT_NUMERIC);
rsort($niz, SORT_STRING);

echo "</br></br>";

    // Primer:

echo "</br></br>";

    // Primer:

echo "</br></br>";

    // Primer:

// $a - Arbitrary array
$a = [];
for ($i = 0; $i<4; $i++){
    $a[]= $i;
}
print_r($a);

echo "</br></br>";

?>