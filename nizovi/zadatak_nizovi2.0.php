<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 11/13/2017
 * Time: 2:26 PM
 */


// 1. $color = array('white', 'green', 'red', 'blue', 'black');
// Write a script which will display the following string:
// "The memory of that scene for me is like a frame of film forever frozen at that moment:
// the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. Richard M. Nixon"
// and the words 'red', 'green' and 'white' will come from $color.

$color = array('white', 'green', 'red', 'blue', 'black');

echo "The memory of that scene for me is like a frame of film forever frozen at that moment:
the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady.
Richard M. Nixon";

echo "</br></br>";

// 2. $color = array('white', 'green', 'red'')
// Write a PHP script which will display the colors in the following way :
// Output : white, green, red,
// green
// red
// white

$color = array('white', 'green', 'red');

echo $color[0] . ", " . $color[1] . ", " . $color[2];
echo "</br></br>";

echo $color[1] . "</br>" . $color[2] . "</br>" . $color[0];

echo "</br></br>";

// 3. $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
//                  "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
//                  "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
//                  "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London",
//                  "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
//                  "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna",
//                  "Poland"=>"Warsaw") ;

// Create a PHP script which displays the capital and country name from the above array $ceu.
// Sort the list by the capital of the country.

// Sample Output :
// The capital of Netherlands is Amsterdam
// The capital of Greece is Athens
// The capital of Germany is Berlin

$ceu = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen",
    "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana",
    "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London",
    "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin",
    "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna",
    "Poland" => "Warsaw");

foreach ($ceu as $index => $item) {
    echo "The capital of $index is $item </br>";
}


echo "</br></br>";

// 4. $x = array(1, 2, 3, 4, 5);
// Delete an element from the above PHP array. After deleting the element, integer keys must be normalized.
// Sample Output :
// array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
// array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }

$assocArray = array(1, 2, 3, 4, 5);
print_r($assocArray);
echo "</br>";

array_splice($assocArray, 3, 1);
print_r($assocArray);
echo "</br>";

// dodatni slucaj:
$assocArray = array(1, 2, 3, 4, 5);
// ['key'] = offset, length - number of elements whitch we wihs to delete
array_splice($assocArray, 1, 3);
print_r($assocArray);
echo "</br>";

// drugi nacin
$assocArray = array(1, 2, 3, 4, 5);
unset($assocArray[3]);
// normalize key in an array ['key']
$assocArray = array_values($assocArray);
print_r($assocArray);

echo "</br></br>";


// 5. $color = array(4 => 'white', 6 => 'green', 11=> 'red');
// Write a PHP script to get the first element of the above array.
// Expected result : white

$color = array(4 => 'white', 6 => 'green', 11 => 'red');
echo $color['4'];
echo "</br>";

foreach ($color as $index => $item) {
    if ($index == 4)
        echo $item;
}

echo "</br></br>";

// 6. Write a PHP script which decodes the following JSON string.
// Sample JSON code :
// {"Title": "The Cuckoos Calling",
// "Author": "Robert Galbraith",
// "Detail": {
//    "Publisher": "Little Brown"
// }}
// Expected Output :
// Title : The Cuckoos Calling
// Author : Robert Galbraith
// Publisher : Little Brown

$json = array(
    'Title' => 'The Cuckoos Calling',
    'Author' => 'Robert Galbraith',
    'Detail' => array('Publisher' => 'Little Brown')
);
foreach ($json as $index => $item) {

    if ($index == 'Title')
        echo $index . ": " . $item . "</br>";

    if ($index == 'Author')
        echo $index . ": " . $item . "</br>";

    elseif ($index == 'Detail')

        foreach ($json['Detail'] as $index => $item) {
            echo $index . ": " . $item;
        }
}

echo "</br></br>";

// 7. Write a PHP script that inserts a new item in an array in any position.
// Expected Output :
// Original array :
// 1 2 3 4 5
// After inserting '$' the array is :
// 1 2 3 $ 4 5

$original = array(1, 2, 3, 4, 5);
print_r($original);
echo "</br>";

$inserted = array('x'); // Not necessarily an array

array_splice($original, 3, 0, $inserted); // splice in at position 3
// $original is now a b c x d e
print_r($original);

echo "</br></br>";

// 8. Write a PHP script to sort the following associative array :
// array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
// a) ascending order sort by value
// b) ascending order sort by Key
// c) descending order sorting by Value
// d) descending order sorting by Key

// a) ascending order sort by value
$niz = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
// sortira po vrednosti i to od min ka max
asort($niz);
print_r($niz);
echo "</br>";

// c) descending order sorting by Value
$niz = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
// sortira po vrednosti i to od max ka min
arsort($niz);
print_r($niz);
echo "</br></br>";

// b) ascending order sort by Key
$niz = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
// low to high
ksort($niz);
print_r($niz);
echo "</br>";

// d) descending order sorting by Key
$niz = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
// high to low
krsort($niz);
print_r($niz);
echo "</br></br>";

// 9. Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
// Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74,
//                         62, 62, 65, 64, 68, 73, 75, 79, 73
// Expected Output :
// Average Temperature is : 70.6
// List of seven lowest temperatures : 60, 62, 63, 63, 64,
// List of seven highest temperatures : 76, 78, 79, 81, 85,

$temperature = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74,
    62, 62, 65, 64, 68, 73, 75, 79, 73);
/**
 * Function return average temperature
 *
 * @param array $temperature - Arbitrary array
 *
 * @return float|int
 */
function averageTemperature($temperature)
{
    return array_sum($temperature) / count($temperature);
}

$avt = averageTemperature($temperature);
echo "Average Temperature is : $avt </br>";


$maxElem = max($temperature);
echo "Max temperatura je: $maxElem </br>";

$minElem = min($temperature);
echo "Min temperatura je : $minElem </br>";


echo "</br></br>";


// Odredimo 5 max temperatura:


/**
 * Function determines five max temperature in this array
 *
 * @param array $temperature - Arbitrary array
 *
 * return void
 */
function maxTemperature($temperature)
{
    $maxElem = [];
    $maxElem[0] = max($temperature);

    for ($i = 1; $i < 5; $i++) {
        // u niz maxElem na poziciji $i ubaci=max(od elemenata iz $temperature koji se razlikuju od elemenata iz $maxElem)
        $maxElem[$i] = max(array_diff($temperature, $maxElem));

    }

    foreach ($maxElem as $key => $value) {
        echo "  " . $value;
    }
}

maxTemperature($temperature);

echo "</br></br>";


// Odredimo 5 min temperatura:


/**
 * Function determines five min temperature in this array
 *
 * @param array $temperature - Arbitrary array
 *
 * return void
 */
function minTemperature($temperature)
{
    $minElem = [];
    $minElem[0] = min($temperature);

    for ($i = 1; $i < 5; $i++) {
        $minElem[$i] = min(array_diff($temperature, $minElem));
    }

    foreach ($minElem as $key => $value) {
        echo "   " . $value;
    }
}

minTemperature($temperature);

echo "</br></br>";


// 10. Write a PHP program to sort an array of positive integers using the Bead-Sort Algorithm.
// According to Wikipedia "Bead-sort is a natural sorting algorithm, developed by Joshua J. Arulanandham,
// Cristian S. Calude and Michael J. Dinneen in 2002.
// Both digital and analog hardware implementations of bead sort can achieve a sorting time of O(n);
// however, the implementation of this algorithm tends to be significantly slower in software and can only
// be used to sort lists of positive integers".
// Input array : Array ( [0] => 5 [1] => 3 [2] => 1 [3] => 3 [4] => 8 [5] => 7 [6] => 4 [7] => 1 [8] => 1
// [9] => 3 )
// Expected Result : Array ( [0] => 8 [1] => 7 [2] => 5 [3] => 4 [4] => 3 [5] => 3 [6] => 3 [7] => 1
// [8] => 1 [9] => 1 )

$inputArray = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);

echo "Unsorted array is: ";
echo "<br />";
print_r($inputArray);


for ($j = 0; $j < count($inputArray); $j++) {

    for ($i = 0; $i < count($inputArray) - 1; $i++) {

        if ($inputArray[$i] < $inputArray[$i + 1]) {

            $temporary = $inputArray[$i + 1];
            $inputArray[$i + 1] = $inputArray[$i];
            $inputArray[$i] = $temporary;
        }
    }
}

echo "Sorted Array is: ";
echo "<br />";
print_r($inputArray);

echo "</br></br>";


// 11. Write a PHP program to merge (by index) the following two arrays.
// Sample arrays :
// $array1 = array(array(77, 87), array(23, 45));
// $array2 = array("w3resource", "com");
// Expected Output :
//
// Array (
//    [0] => Array (
//        [0] => w3resource
//        [1] => 77
// [2] => 87)
// [1] => Array (
//    [0] => com
//    [1] => 23
//[2] => 45)
//)

$array1 = array(array(77, 87), array(23, 45));
print_r($array1);
echo "</br>";

$array2 = array("w3resource", "com");
print_r($array2);
echo "</br>";

$result = array_merge($array1, $array2);
print_r($result);
var_dump($result);


echo "</br></br>";


// 12. Write a PHP function to change the following array's all values to upper or lower case.
// Sample arrays :
// $Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
// Expected Output :
// Values are in lower case.
// Array ( [A] => blue [B] => green [c] => red )
// Values are in upper case.
// Array ( [A] => BLUE [B] => GREEN [c] => RED )

$color1 = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

function toLower($value)
{
    return strtolower($value);
}

function toUpper($value)
{
    return strtoupper($value);
}


echo "<br>Values are in lower case:<br>";
print_r(array_map("toLower", $color1));

echo "<br>Values are in upper case:<br>";
print_r(array_map("toUpper", $color1));


echo "</br></br>";

// 13. Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.
// Note : Do not use any PHP control statement.
// Expected Output : 200,204,208,212,216,220,224,228,232,236,240,244,248

echo "Prvi nacin: </br>";
$num = 200;

/**
 * Function prints numbers between 200 and 250 which are divisible with 4
 *
 * @param integer $num - Arbitrary number
 *
 * return void
 */
function numDivisible($num)
{
    for ($num = 200; $num < 250; $num++)

        if ($num % 4 == 0) {

            echo "$num" . ', ';

        } else
            continue;
}

numDivisible($num);


echo "</br></br>Drugi nacin: </br>";

echo implode(", ", range(200, 250, 4));


echo "</br></br>Treci nacin: </br>";

$num = 200;

function numDivisible1($num)
{
    $arrayNum = array();

    for ($num = 200; $num <= 250; $num++) {

        if ($num % 4 == 0) {
            $arrayNum[] = $num;
        }
    }

    return $arrayNum;
}

echo '<pre>' . print_r(numDivisible1($num), true) . '</pre>';


echo "</br></br>";


// 14. Write a PHP script to get the shortest/longest string length from an array.
// Sample arrays : ("abcd","abc","de","hjjj","g","wer")
// Expected Output : The shortest array length is 1. The longest array length is 4.

$arrayString = array("abcd", "abc", "de", "hjjj", "g", "wer");

// Function strlen returns length of string
$assocArray = strlen($arrayString[1]);
echo "$assocArray </br>";


$newarray = array_map('strlen', $arrayString);

echo "The shortest array length is: " . min($newarray) . "</br>";
echo "The longest array length is: " . max($newarray) . "</br>";


echo "</br></br>";


// 15. Write a PHP script to generate unique random numbers within a range.
// Sample Range : (11, 20)
// Sample Output : 17 16 13 20 14 19 18 15 11 12

echo "Prvi nacin: </br>";

$numbers = range(11, 20);
shuffle($numbers);

var_dump($numbers);


echo "Drugi nacin: </br>";

$numbers = range(11, 20);
shuffle($numbers);

for ($i = 0; $i < 10; $i++) {

    echo $numbers[$i] . ' ';
}

echo "</br></br>";

// 16. Write a PHP script to get the largest key in an array.

$arr = array("a" => "test", "b" => "ztest", "c" => "blablabla", "d" => "blabla");
$max = max(array_keys($arr));
echo "Najveci key niza arr je: $max </br>";

$arr1 = array(1, 2, 3, 4);
$max1 = max(array_keys($arr1));
echo "Najveci key niza arr1 je: $max1 </br>";

echo "</br></br>";

// 17. Write a PHP function that returns the lowest integer that is not 0.

/**
 * Function that returns the lowest integer that is not 0
 *
 * @param integer $values - Arbitrary elements of array $numbers
 *
 * @return mixed
 */
function lowestInt(array $values)
{
    $numbers = array(-10, -5, 0, 5, 10);
    return min(array_diff($numbers, array(0)));
}

echo "Najmenja vrednost brojeva iz niza numbers je: ";
print_r(lowestInt($numbers));

echo "</br></br>";

// 18. Write a PHP function to floor decimal numbers with precision.
// Note: Accept three parameters number, precision, and $separator
// Sample Data :
// 1.155, 2, "."
// 100.25781, 4, "."
// -2.9636, 3, "."
//
// Expected Output :
// 1.16
// 100.2578
// -2.964

// Formatiranje broja:

$num = 1999.94587;
$formattedNum = number_format($num)."<br>";
echo $formattedNum;

$formattedNum = number_format($num, 2);
echo $formattedNum;

echo "</br></br>";

// vraca prvi manji ceo broj:

echo floor(4.3);   // 4
echo floor(9.999); // 9
echo floor(-3.14); // -4

echo "</br></br>";

// vraca prvi veci ceo broj:

echo ceil(4.3);    // 5
echo ceil(9.999);  // 10
echo ceil(-3.14);  // -3

echo "</br></br>";

// vraca ceo broj ako je precision = 0; a ako je npr 2 zaokruzuje br na dve decimale:

echo round(3.4);         // 3
echo round(3.5);         // 4
echo round(3.6);         // 4
echo round(3.6, 0);      // 4
echo round(1.95583, 2);  // 1.96
echo round(1241757, -3); // 1242000
echo round(5.045, 2);    // 5.05
echo round(5.055, 2);    // 5.06

// vraca ceo broj half_up, half_down, half_even, half_odd

echo round(9.5, 0, PHP_ROUND_HALF_UP);   // 10
echo round(9.5, 0, PHP_ROUND_HALF_DOWN); // 9
echo round(9.5, 0, PHP_ROUND_HALF_EVEN); // 10
echo round(9.5, 0, PHP_ROUND_HALF_ODD);  // 9

echo "</br></br>";

echo "Prvi nacin: </br>";

function decimalN($number, $decimals)
{
    $newNum = number_format($number, $decimals);
    echo $newNum . "</br>";

}
decimalN(15.4789,2);
decimalN(15.89,0);

echo "</br></br>";

echo "Drugi nacin: </br>";

$numbers = array(0.001, 0.002, 0.003, 0.004, 0.005, 0.006, 0.007, 0.008, 0.009);

foreach ($numbers as $number)

    print $number. " -> " .number_format($number, 2, '.', ',')."<br>";

echo "</br>Treci nacin: </br>";

/*
 * Function return corect decimal number
 *
 * @param $number - Arbitrary number
 *
 * @param $precision - Arbitrary number
 */
function decimal($number, $precision)
{
    $new_number = round($number, $precision);
    echo $new_number . "</br>";
}
decimal(15.7895, 2);
decimal(15.7895, 0);
decimal(15.7895723, 4);

decimal(1.155, 2);
decimal(100.25781, 4);
decimal(-2.9636, 3);


echo "</br>Cetvrti nacin: </br>";
/*
 * Function return corect decimal number
 *
 * @param $number - Arbitrary number
 *
 * @param $precision - Arbitrary number
 *
 * @param $separator - Separator
 *
 * @return void
 */
function decimalNum($number, $precision, $separator)
{
    // razdvaja broj na delove
    $part_of_number = explode($separator, $number);

    $part_of_number[1] = substr_replace($part_of_number[1], $separator, $precision,0);

    if($part_of_number[0] >= 0){

        // ako je pozicija [0] >= 0 na poziciju [1] vrati prvi manji ceo br od onog koji predajemo
        $part_of_number[1] = floor($part_of_number[1]);
    }else {

        // inace vrati prvi veci ceo broj
        $part_of_number[1] = ceil($part_of_number[1]);
    }
    $ceil_number = array($part_of_number[0],$part_of_number[1]);
    return implode($separator,$ceil_number);
}
print_r(decimalNum(1.155, 2, ".") . "</br>");
print_r(decimalNum(100.25781, 4, ".") . "</br>");
print_r(decimalNum(-2.9636, 3, ".") . "</br>");


echo "</br></br>";


// 19. Write a PHP script to print "Second" and Red from the following array.
// Sample Data :
// $color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
//    "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
//    "holes" => array ( "First", 5 => "Second", "Third"));

$color = array("color" => array("a" => "Red", "b" => "Green", "c" => "White"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes" => array("First", 5 => "Second", "Third"));

print_r($color['holes']['5']);
echo "</br>";
print_r($color['color']['a']);


echo "</br></br>";

// 20. Write a PHP function to sort an array according to another array acting as a priority list.

function lista($a, $b)
{
    global $niz;

    foreach($niz as $key => $value)
    {
        if($a == $value)
        {
            return 0;
            break;
        }

        if($b == $value)
        {
            return 1;
            break;
        }
    }
    return $niz;
}

$niz[0] = 1;
$niz[1] = 3;
$niz[2] = 4;
$niz[3] = 2;

$array[0] = 2;
$array[1] = 1;
$array[2] = 3;
$array[3] = 4;
$array[4] = 2;
$array[5] = 1;
$array[6] = 2;

usort($array, "lista");

print_r($array);

echo "</br></br>";

// 21. Write a PHP function to sort subnets.

echo "Prvi nacin: </br>";

$subnetList = array('193.62.83.1', '193.52.83.1', '193.63.54.126', '193.62.83.129', '193.62.83.158');

function sortSubnets($x, $y)
{
    $x_arr = explode('.', $x);
    $y_arr = explode('.', $y);

    foreach (range(0, 3) as $i) {

        if ($x_arr[$i] < $y_arr[$i]) {
            return -1;
        } elseif ($x_arr[$i] > $y_arr[$i]) {
            return 1;
        }
    }
    return -1;
}

usort($subnetList, 'sortSubnets');
print_r($subnetList);

echo "</br></br>";


echo "Drugi nacin: </br>";

$subnetList = array('193.62.83.1', '193.52.83.1', '193.63.54.126', '193.62.83.129', '193.62.83.158');

// Ready function sorting IP addresses
natsort($subnetList);
print_r($subnetList);

echo "</br></br>";
echo implode(' < ', $subnetList);


echo "</br></br>";


echo "</br>Treci nacin: </br>";   // Peske uporediti i sortirati subnete


$subnetList1 = array('197.62.83.1', '193.52.83.1', '194.63.54.126',
    '193.62.83.129', '193.62.83.158');

print_r($subnetList1);
echo "</br>Sortiran niz je: </br>";


// Sortira niz a $sort_flags = SORT_NUMERIC je opcioni arg
sort($subnetList1, $sort_flags = SORT_NUMERIC);
print_r($subnetList1);


echo "</br></br>";


echo "</br>Cetvrti nacin: </br>";


$subnetList2 = array('197.62.83.1', '192.52.83.1', '194.63.54.126',
                     '193.62.83.129', '193.62.83.158');


echo "</br>Pocetni niz je: </br>";
print_r($subnetList2);
echo "</br>";

function cmpSort($x, $y)
{

    if ($x === $y)
        return 0;
    else
        return ($x < $y ? 1 : -1);
}
uksort($subnetList2, 'cmpSort');

echo "</br>Niz je sortiran od najveceg do najmanjeg kljuca: </br>";
print_r($subnetList2);


echo "</br>";


uasort($subnetList2, 'cmpSort');

echo "</br>Niz je sortiran po vrednostima elemenata: </br>";
print_r($subnetList2);


echo "</br>";


usort($subnetList2, 'cmpSort');

echo "</br>Niz je sortiran po vrednostima elemenata i kljucevi su poslozeni redom: </br>";
print_r($subnetList2);

echo "</br></br>";
echo "</br></br>";


echo "</br>Peti nacin: </br>";


$subnetList3 = array('197.62.83.1', '192.52.83.1', '194.62.83.1',
                     '193.62.83.130', '193.62.83.129');

echo "</br>Pocetni niz je: </br>";
print_r($subnetList3);


function razdvoj($subnetList3)
{
    $ip_array = array();

    foreach ($subnetList3 as $item) {

        $ip_array[] = explode('.', $item);
        echo "</br>";

    }

    echo $ip_array[0][0];
    echo $ip_array[1][0];

    return $ip_array;
}
$multDimArr = razdvoj($subnetList3);
print_r($multDimArr);


/*
function sortirajArr($multDimArr)
{
    for ($a = 0; $a < count($multDimArr); $a++) {

        for ($b = $a + 1; $b < count($multDimArr); $b++) {

            if ($multDimArr[$a][$b] > $multDimArr[$a + 1][$b]) {

                $temp = $multDimArr[$a + 1];                  // manji smesti u $temp

                $multDimArr[$a + 1] = $multDimArr[$a];        // sada veci smesti umesto manjeg na poziciju $arr[$b+1]

                $multDimArr[$a] = $temp;                    // zameni veci manjim
            }
        }
    }
    return $multDimArr;
}
$sortiran = sortirajArr($multDimArr);
echo "</br></br>";
print_r($sortiran);
*/


echo "</br></br>";
echo "</br></br>";


$subnetList3 = array(
                    '197.62.83.1',
                    '1.1.2.1',
                    '192.52.83.1',
                    '194.62.83.1',
                    '1.1.1.2',
                    '193.62.83.130',
                    '1.1.1.4',
                    '193.62.83.129',
                    '1.1.1.1',
                    '192.52.83.2',
                    '192.52.82.2',
                    '192.51.82.2',
                    '1.1.2.2',
                    '192.50.82.2',
                    '1.1.1.3',
                    '1.1.2.1',
                    '1.2.2.2'
);


function sortiranje($subnetList3)
{

    for ($i = 0; $i < count($subnetList3); $i++) {

        for ($j = $i + 1; $j < count($subnetList3); $j++) {

            $prvi = explode('.', $subnetList3[$i]);

            $drugi = explode('.', $subnetList3[$j]);


            if ($prvi[0] > $drugi[0]) {

                $temp = $subnetList3[$i];

                $subnetList3[$i] = $subnetList3[$j];

                $subnetList3[$j] = $temp;
            }
            elseif($prvi[0] == $drugi[0]){

                if ($prvi[1] > $drugi [1]){

                    $temp = $subnetList3[$i];

                    $subnetList3[$i] = $subnetList3[$j];

                    $subnetList3[$j] = $temp;

                }
                elseif($prvi[1] == $drugi[1]){

                    if ($prvi[2] > $drugi [2]){

                        $temp = $subnetList3[$i];

                        $subnetList3[$i] = $subnetList3[$j];

                        $subnetList3[$j] = $temp;
                    }
                    elseif($prvi[2] == $drugi[2]){

                        if ($prvi[3] > $drugi [3]){

                            $temp = $subnetList3[$i];

                            $subnetList3[$i] = $subnetList3[$j];

                            $subnetList3[$j] = $temp;
                        }
                    }
                }
            }
        }
    }
    return $subnetList3;
}
echo "Pocetni niz je:<br>";
print_r($subnetList3);

$subnetList4 = sortiranje($subnetList3);
echo "<br> Sortiran niz je: <br>";
print_r($subnetList4);


echo "</br></br>";



// Prvi podlink : Za merge sort (resen preko tog algoritma)

/*
 * Function for sorting an array with merge sort algorithm.
 *
 * @param $subnetList3 - Arbitrary array
 *
 * return $array
 */
function mergeSort2($subnetList3)
{
    if(count($subnetList3) == 1 ) {
        return $subnetList3;
    }

    // srednji clan niza
    $middle = count($subnetList3) / 2;

    // levi podniz
    $left = array_slice($subnetList3, 0, $middle);

    // desni podniz
    $right = array_slice($subnetList3, $middle);

    // rekurzivni poziv f-je za levi podniz
    $left = mergeSort2($left);

    // rekurzivni poziv f-je za desni podniz
    $right = mergeSort2($right);

    // spoji levi i desni podniz i sortiraj ih istovremeno
    return merge($left, $right);
}

/*
 * Function for sorting arrays $left and $right with merge sort algorithm.
 *
 * @param $left - Arbitrary array
 *
 * @param $right - Arbitrary array
 *
 * @return array
 */
function merge($left, $right)
{
    // rezultat (spojeni i sortirani levi i desni podnizovi)
    $res = array();

    while (count($left) > 0 && count($right) > 0){

        if($left[0] > $right[0]){

            // na prvu poziciju novog niza smesti manji element koji se nalazi na prvoj poziciji
            $res[] = $right[0];

            // izdvoj mi jedan element (prvi u podnizu)
            $right = array_slice($right , 1);

        }else{

            // na prvu poziciju novog niza smesti manji element koji se nalazi na prvoj poziciji
            $res[] = $left[0];

            // izdvoj mi jedan element (prvi u podnizu)
            $left = array_slice($left, 1);
        }
    }

    // ako je jedan od podnizova ovde count($right) = 0
    while (count($left) > 0){
        $res[] = $left[0];
        $left = array_slice($left, 1);
    }

    // ako je jedan od podnizova ovde count($left) = 0
    while (count($right) > 0){
        $res[] = $right[0];
        $right = array_slice($right, 1);
    }
    return $res;
}
echo "Original Array : </br>";
echo implode(', ',$subnetList3);

echo "</br></br>Sorted Array aaaaaaaaaaaa :</br>";
echo implode(', ',mergeSort2($subnetList3))."\n";



// drugi nacin: Za mergeSort


/*
 * Function for sorting an array with merge sort algorithm.
 *
 * @param $subnetList3 - Arbitrary array
 *
 * @return array
 */
function mergeSort5($subnetList3)
{

    $length = count($subnetList3);

    if ($length <= 1) {

        return $subnetList3;

    }

    $left = $right = $result = array();

    $middle = round($length / 2, 0);

    for ($i = 0; $i < $middle; $i++) {

        $left[] = $subnetList3[$i];

    }

    for ($j = $middle; $j < $length; $j++) {

        $right[] = $subnetList3[$j];

    }

    $left = mergeSort5($left);

    $right = mergeSort5($right);

    $result = mergee($left, $right);

    return $result;
}

/*
 * Function for sorting an array with merge sort algorithm.
 *
 * @param $left - Arbitrary array
 *
 * @param $right - Arbitrary array
 *
 * @return array
 */
function mergee($left, $right)
{
    $result = array();

    while (count($left) > 0 || count($right) > 0) {

        if (count($left) > 0 && count($right) > 0) {

            if ($left[0] <= $right[0]) {

                // uzmi prvi element iz niza $left i stavi u $rezultat
                $result[] = array_shift($left);

            } else {

                // uzmi prvi element iz niza $right i stavi u $rezultat
                $result[] = array_shift($right);
            }

            // ako je count( $right ) = 0
        } elseif (count($left) > 0) {

            $result[] = array_shift($left);


            // ako je count( $left ) = 0
        } else {

            $result[] = array_shift($right);

        }

    }
    return $result;
}
echo "</br></br>Original array : </br>";
print_r($subnetList3);

echo "</br>Sorted Array :</br>";
$sorted = mergeSort5($subnetList3);

print_r($sorted);


echo "</br></br>";
echo "</br></br>";

// Treci podlink : Za heap sort (resen preko tog algoritma)


/*
 * Function for sorting an array with Heap sort algorithm.
 *
 * @param $subnetList3 - Arbitrary array
 *
 * @param $i - Arbitrary number
 *
 * @param $size - dimension of array
 *
 * @return void
 */
function heapify(&$subnetList3, &$i, &$size)
{
    // levi cvor
    $l = $i*2 + 1;
    // desni cvor
    $r = $i*2 + 2;


    //ako je levi indeks cvora < od dimenzije niza i element na i poziciji < od elementa na poziciji indeksa levog cvora
    if ($l < $size && $subnetList3[$i] < $subnetList3[$l]) {

        $largest = $l;
    } else {

        // u suprotnom najveci cvor ostaje i
        $largest = $i;
    }

    //ako je desni indeks cvora < od dimenzije niza i element na $largest poziciji < od elementa na poziciji indeksa desnog cvora
    if ($r < $size && $subnetList3[$largest] < $subnetList3[$r]) {

        $largest = $r;
    }

    // ako je najveci razlicit od pozicije $i pokazivaca menjamo mesta elementima
    if ($largest != $i) {

        // u $temp smesti element niza sa pozicije $i
        $temp = $subnetList3[$i];

        // na poziciju tog elementa stavi veci element
        $subnetList3[$i] = $subnetList3[$largest];

        // a na poziciju na kojoj je bio veci element stavi $temp
        $subnetList3[$largest] = $temp;

        // rekurzivni poziv f-je
        heapify($subnetList3, $largest, $size);
    }
}

function buildHeap1(&$subnetList3, &$size)
{
    // pocetni cvor
    $len = floor($size / 2);

    // brojac i za pocetni cvor
    for ($i = $len; $i > -1; $i--) {

        // predajemo niz, brojac i, dimenziju niza
        heapify($subnetList3, $i, $size);
    }
}

function heapsort(&$subnetList3)
{
    // dimenzija niza
    $size = count($subnetList3);

    // predajemo dimenziju niza i niz
    buildHeap1($subnetList3, $size);

    while ($size--) {
        $t = $subnetList3[$size];
        $subnetList3[$size] = $subnetList3[0];
        $subnetList3[0] = $t;
        buildHeap1($subnetList3, $size);
    }
}
echo "</br>Original array :</br>";
print_r($subnetList3);

heapsort($subnetList3);
echo "</br>Sorted Array: </br>";
print_r($subnetList3);

echo "</br></br>";
echo "</br></br>";

// Prvi nacin : Za quicksort (uradjen preko tog algoritma)

$subnetList4 = array(
    '197.62.83.1',
    '1.1.2.1',
    '192.52.83.1',
    '194.62.83.1',
    '1.1.1.2',
    '193.62.83.130',
    '1.1.1.4',
    '193.62.83.129',
    '1.1.1.1',
    '192.52.83.2',
    '192.52.82.2',
    '192.51.82.2',
    '1.1.2.2',
    '192.50.82.2',
    '1.1.1.3',
    '1.1.2.1',
    '1.2.2.2'
);

function quicksort($subnetList4)
{
    // $array - niz dimenzije jedan
    if(count($subnetList4) < 2) return $subnetList4;

    $left = $right = array();


    // reset - vraca unutrasnji pokazivac niza sa ma koje pozicije u nizu na prvi element
    reset($subnetList4);

    // key - Funkcija key() vraća ključ elementa niza na koji trenutno ukazuje unutrašnji pokazivač.
    // Ne pomera pokazivač na bilo koji način. Ako unutrašnji pokazivač ukazuje na kraj liste elemenata ili je niz prazan, vraća NULL.
    $pivot_key = key($subnetList4);



    // array_shift - skrati niz za jedan prvi element a sve ostale elemente poslozi na pozicije od [0] do kraja niza
    // a taj prvi element iz $array stavi u novu promenljivu $pivot
    $pivot = array_shift($subnetList4);

    // Zatim vrsi poredjenje svih ostalih elemenata sa '$pivotom'
    foreach($subnetList4 as $k => $v) {

        if ($v < $pivot) {

            // ako je vrednost elementa < od prvog elem iz niza stavi je u levi niz
            $left[$k] = $v;

        } else {

            // inace stavi je u desni niz
            $right[$k] = $v;
        }
    }

    // array_merge - Spaja elemente jednog ili vise nizova zajedno tako da se vrednosti drugog itd dodaju na kraj prethodnog.
    // Ako ulazni niz ima iste stringove na istim pozicijama, onda će kasnije vrednost za taj ključ pripisati prethodnoj vrednosti (nece ponavljati stringove).
    // Ako, međutim, nizovi sadrže brojeve, kasnija vrednost se neće pripisati prvobitnoj vrednosti, već će biti dodata (elem se ponavljaju).

    return array_merge(quicksort($left), array($pivot_key => $pivot), quicksort($right));
}
echo "</br>Pocetni niz je :</br>";
print_r($subnetList4);

$array = quicksort($subnetList4);
echo "</br>Sortiran niz je :</br>";
print_r($array);

echo "</br></br>";
echo "</br></br>";



// Cetvrti podlink : Za insertSort (uradjen preko tog algoritma)

// Prvi nacin :

$subnetList5 = array(
    '197.62.83.1',
    '1.1.2.1',
    '192.52.83.1',
    '194.62.83.1',
    '1.1.1.2',
    '193.62.83.130',
    '1.1.1.4',
    '193.62.83.129',
    '1.1.1.1',
    '192.52.83.2',
    '192.52.82.2',
    '192.51.82.2',
    '1.1.2.2',
    '192.50.82.2',
    '1.1.1.3',
    '1.1.2.1',
    '1.2.2.2'
);

/*
 *  Function for sorting an array with insertion sort algorithm.
 *
 * @param $subnetList5 - Arbitrary array
 *
 *  @return array
 */
function insertSort2(&$subnetList5)
{
    $size = count($subnetList5);

    // privremena promenljiva
    $tmp = null;

    for ($i = 0; $i < $size; $i++) {

        $j = $i + 1;

        // ako $j dodje do poslednjeg elementa niza
        if ($j == $size) {
            break;
        }

        // dok je element na vecoj poziciji manji od elementa na manjoj poziciji   npr. (23, 1)  1 < 23
        while ($subnetList5[$j] < $subnetList5[$i]) {

            // stavi u $tmp veci element
            $tmp = $subnetList5[$i];

            // na poziciju veceg stavi manji element
            $subnetList5[$i] = $subnetList5[$j];

            // na poziciju manjeg stavi veci element iz $tmp
            $subnetList5[$j] = $tmp;

            if ($i > 0) {

                $i--;
            }
            $j--;
        }
    }
    return $subnetList5;
}
echo "</br>Original Array : </br>";
print_r($subnetList5);


echo "</br>Sorted Array : </br>";
print_r(insertSort2($subnetList5));

echo "</br></br>";
echo "</br></br>";


//   Treci podlink : Za insertSort (uradjen preko tog algoritma)

$subnetList6 = array(
    '197.62.83.1',
    '1.1.2.1',
    '192.52.83.1',
    '194.62.83.1',
    '1.1.1.2',
    '193.62.83.130',
    '1.1.1.4',
    '193.62.83.129',
    '1.1.1.1',
    '192.52.83.2',
    '192.52.82.2',
    '192.51.82.2',
    '1.1.2.2',
    '192.50.82.2',
    '1.1.1.3',
    '1.1.2.1',
    '1.2.2.2'
);

/*
* Function witch sort elements of an arbitrary array
*
* @param $subnetList6 - Arbitrary array
*
* @retutn array
*/
function selectionSort3(&$subnetList6)
{
    $size = count($subnetList6);

    for ($i = 0; $i < $size - 1; $i++) {

        // na ovoj poziciji u nizu je minimalni element
        $min = $i;

        for ($j = $i + 1; $j < $size; $j++)

            if ($subnetList6[$j] < $subnetList6[$min])

                $min = $j;

        list($subnetList6[$i], $subnetList6[$min]) = array($subnetList6[$min], $subnetList6[$i]);
    }
    return $subnetList6;
}

echo "Original Array :</br>";
print_r($subnetList6);

selectionSort3($subnetList6);
echo "</br></br>Sorted Array :</br>";
print_r($subnetList6);


echo "</br></br>";
echo "</br></br>";

// Drugi podlink : Za bubbleSort (uradjen preko tog algoritma)

// Prvi nacin:


$subnetList7 = array(
    '197.62.83.1',
    '1.1.2.1',
    '192.52.83.1',
    '194.62.83.1',
    '1.1.1.2',
    '193.62.83.130',
    '1.1.1.4',
    '193.62.83.129',
    '1.1.1.1',
    '192.52.83.2',
    '192.52.82.2',
    '192.51.82.2',
    '1.1.2.2',
    '192.50.82.2',
    '1.1.1.3',
    '1.1.2.1',
    '1.2.2.2'
);

/*
 * Function for implementation Bubble Sort Algorithm
 *
 * @param $subnetList7 - Arbitrary array
 *
 * @return array
 */
function bubbleSort(&$subnetList7)
{

    $size = count($subnetList7);

    for ($i = 0; $i < $size; $i++) {

        // $j < $size - 1 - $i    !!!
        for ($j = 0; $j < $size-1-$i; $j++) {

            // ako je element na poziciji (j+1) veci od elementa na poziciji j zameni im mesta
            if ($subnetList7[$j+1] < $subnetList7[$j]) {

                swap($subnetList7, $j, $j+1);
            }
        }
    }
    return $subnetList7;
}

function swap(&$subnetList7, $a, $b) {

    // u $tmp smesti element niza sa pozicije $a (veci element)
    $tmp = $subnetList7[$a];

    // u nizu na poziciju $a smesti element niza koji je trenutno na poziciji $b (manji element)
    $subnetList7[$a] = $subnetList7[$b];

    // na poziciju $b smesti element iz $tmp (veci element)
    $subnetList7[$b] = $tmp;
}
print("</br>UNSORTTED ARRAY : </br>");
print_r($subnetList7);

$arr1 = bubbleSort($subnetList7);
print("</br> SORTED ARRAY : </br>");
print_r($arr1);

echo "</br></br>";
echo "</br></br>";

// Za shellSort (uradjen preko tog algoritma)

$subnetList7 = array(
    '197.62.83.1',
    '1.1.2.1',
    '192.52.83.1',
    '194.62.83.1',
    '1.1.1.2',
    '193.62.83.130',
    '1.1.1.4',
    '193.62.83.129',
    '1.1.1.1',
    '192.52.83.2',
    '192.52.82.2',
    '192.51.82.2',
    '1.1.2.2',
    '192.50.82.2',
    '1.1.1.3',
    '1.1.2.1',
    '1.2.2.2'
);


function shellSortAmra($subnetList7)
{
    // dimenzija niza
    $count = count($subnetList7);

    // pocetni index odnosno od kog elementa krece sortiranje
    $gap = floor($count/2);

    while ($gap > 0) {

        // brojac $i prati elemente niza koji zelimo da sortiramo
        for ($i = $gap; $i < $count; $i++) {

            // element s kojim uporedjujemo dr elem niza
            $element = $subnetList7[$i];

            // petlja u kojoj se uporedjuju elementi i menjaju im se mesta
            $j = $i;

            while ($j >= $gap && $subnetList7[$j - $gap] > $element) {

                $subnetList7[$j] = $subnetList7[$j - $gap];

                $j = $j - $gap;
            }
            $subnetList7[$j] = $element;
        }
        // ovde se $gap menja u II, III ... itd "pass" jer se ne uzima 1/2 od br elemenata vec 1/2 od prethodnog gap-a
        $gap = floor($gap/2);
    }
    return $subnetList7;
}
echo "</br>Original Array : </br>";
print_r($subnetList7);


echo "</br>Sorted Array : </br>";
print_r(shellSortAmra($subnetList7));


echo "</br></br>";
echo "</br></br>";



// Za combSort (uradjen preko tog algoritma)

$subnetList8 = array(
    '197.62.83.1',
    '1.1.2.1',
    '192.52.83.1',
    '194.62.83.1',
    '1.1.1.2',
    '193.62.83.130',
    '1.1.1.4',
    '193.62.83.129',
    '1.1.1.1',
    '192.52.83.2',
    '192.52.82.2',
    '192.51.82.2',
    '1.1.2.2',
    '192.50.82.2',
    '1.1.1.3',
    '1.1.2.1',
    '1.2.2.2'
);

/**Function for sorting an array with Comb sort algorithm.
 *
 * @param array $subnetList8 - Arbitrary array
 *
 * @return array
 */
function combSortA($subnetList8)
{
    $swapped = false;

    // dimenzija niza
    $length = count($subnetList8);

    // rastojanje izmedju elemenata
    $gap = floor($length/1.3);

    // operator II ($a || $b	Or	TRUE if either $a or $b is TRUE)
    while($gap > 1 || $swapped) {

        if ($gap > 1) {

            $gap = floor($gap / 1.3);
        }
        $swapped = false;


        for ($i = 0; $i + $gap < $length; $i++) {

            if ($subnetList8[$i] > $subnetList8[$i+$gap]) {

                $tmp = $subnetList8[$i];

                $subnetList8[$i] = $subnetList8[$i+$gap];

                $subnetList8[$i+$gap]= $tmp;

                $swapped = true;
            }
        }
    }
    return $subnetList8;
}
echo "Original Array : </br>";
print_r($subnetList8);

echo "</br>Sorted Array : </br>";
print_r(combSortA($subnetList8));

echo "</br></br>";
echo "</br></br>";


// Vezba pozicija elemenata u nizovima:


// izlistaj sve elemente ovog niza peske


function razdvojIp($subnetList3)
{
    $ip_array = array();

    foreach ($subnetList3 as $item) {

        $ip_array[] = explode('.', $item);
        echo "</br>";

    }

    echo $ip_array[0][0] . "</br>";
    echo $ip_array[1][0] . "</br>";

    return $ip_array;
}
$multDimArr = razdvoj($subnetList3);
print_r($multDimArr);

    echo "</br>Izlistaj sve elemente ovog niza peske</br>";

    echo $multDimArr[0][0] . '   ' . $multDimArr[0][1] . '   ' . $multDimArr[0][2] . '   ' . $multDimArr[0][3] . '</br>';
    echo $multDimArr[1][0] . '   ' . $multDimArr[1][1] . '   ' . $multDimArr[1][2] . '   ' . $multDimArr[1][3] . '</br>';
    echo $multDimArr[2][0] . '   ' . $multDimArr[2][1] . '   ' . $multDimArr[2][2] . '   ' . $multDimArr[2][3] . '</br>';
    echo $multDimArr[3][0] . '   ' . $multDimArr[3][1] . '   ' . $multDimArr[3][2] . '   ' . $multDimArr[3][3] . '</br>';
    echo $multDimArr[4][0] . '   ' . $multDimArr[4][1] . '   ' . $multDimArr[4][2] . '   ' . $multDimArr[4][3] . '</br>';


    // e sad izlistaj sve elemente ovog niza preko for petlje

    echo "</br>Izlistaj sve elemente ovog niza preko for petlje</br>";

    for ($k = 0; $k < count($multDimArr); $k++) {

        for ($l = 0; $l < count($multDimArr[$k]); $l++) {

            echo $multDimArr[$k][$l] . '   ';
        }
        echo '</br>';
    }

echo "</br></br>";
echo "</br></br>";

$unsorted = array(43, 21, 2, 1, 9, 24, 2, 99, 23, 8, 7, 114, 92, 5);

function quick_sort($array)
{
    // trazimo velicinu niza
    $length = count($array);

    // bazni slucaj, ako je niz duzine 0 tj ima samo jedan elem vrati taj niz
    if($length <= 1){
        return $array;
    }
    else{

        // varijabli $pivot dodelimo vrednost prvog elementa niza
        $pivot = $array[0];

        // definisemo dva niza kao dve particije (dela)
        $left = $right = array();

        // koristimo petlju da uporedimo svaki element niza sa $pivot i smestamo elemente u odgovarajuce particije (levu ili desnu)
        for($i = 1; $i < count($array); $i++)
        {
            if($array[$i] < $pivot){

                // ako je element na $i- toj poziciji manji od $pivot smesti ga u levi niz
                $left[] = $array[$i];
            }
            else{
                // u suprotnom smesti ga u desni niz
                $right[] = $array[$i];
            }
        }

        // koristimo rekurziju da bi sada sortirali levu i desnu listu elemenata
        return array_merge(quick_sort($left), array($pivot), quick_sort($right));
    }
}
$sorted = quick_sort($unsorted);
print_r($sorted);


// 22. Write a PHP script to sort the following array by the day (page_id) and username.

$arra[0]["transaction_id"] = "2025731470";
$arra[1]["transaction_id"] = "2025731450";
$arra[2]["transaction_id"] = "1025731456";
$arra[3]["transaction_id"] = "1025731460";
$arra[0]["user_name"] = "Sana";
$arra[1]["user_name"] = "Illiya";
$arra[2]["user_name"] = "Robin";
$arra[3]["user_name"] = "Samantha";

//convert timestamp to date
function convert_timestamp($timestamp)
{
    $limit = date("U");
    $limiting = $timestamp-$limit;
    return date ("Ymd", mktime (0,0,$limiting));
}

//comparison function
function funkcija($a, $b)
{
    $l = convert_timestamp($a["transaction_id"]);
    $k = convert_timestamp($b["transaction_id"]);
    if($k == $l){
        return strcmp($a["user_name"], $b["user_name"]);
    }else{
        return strcmp($k, $l);
    }
}

//sort array
usort($arra, "funkcija");

//print sorted info
while (list ($key, $value) = each ($arra)) {
    echo "\$arra[$key]: ";
    echo $value["transaction_id"];
    echo " user_name: ";
    echo $value["user_name"];
    echo "\n";
}

echo "</br></br>";


// 23. Write a PHP program to sort a multi-dimensional array set by a specific key.


echo "Prvi nacin: </br>";


$multiDimArray = array(
    '0' => array(
        'type' => 'suite',
        'name' => 'A-Name'
    ),
    '1' => array(
        'type' => 'suite',
        'name' => 'C-Name'
    ),
    '2' => array(
        'type' => 'suite',
        'name' => 'B-Name'
    )
);
echo "Uneti niz je: </br>";
var_dump($multiDimArray);
echo "</br></br>";


array_multisort($multiDimArray);
echo "Sortiran niz je: ";
var_dump($multiDimArray);


echo "</br></br>Drugi nacin: </br></br>";


$multiDimArray = array(
    '0' => array(
        'type' => 'suite',
        'name' => 'A-Name'
    ),
    '1' => array(
        'type' => 'suite',
        'name' => 'C-Name'
    ),
    '2' => array(
        'type' => 'suite',
        'name' => 'B-Name'
    )
);

function sortByName($a, $b)
{
    $a = $a['name'];
    $b = $b['name'];

    if($a == $b) return 0;
    return ($a < $b) ? -1 : 1;
}

function sortByType($a, $b)
{
    $a = $a['type'];
    $b = $b['type'];

    if($a == $b) return 0;
    return ($a < $b) ? -1 : 1;
}

usort($multiDimArray, 'sortByName');
usort($multiDimArray, 'sortByType');
echo "Sortiran niz je: ";
var_dump($multiDimArray);



echo "</br></br>Treci nacin: </br></br>";


$multiDimArray = array(
    '0' => array(
        'type' => 'suite',
        'name' => 'A-Name'
    ),
    '1' => array(
        'type' => 'suite',
        'name' => 'C-Name'
    ),
    '2' => array(
        'type' => 'suite',
        'name' => 'B-Name'
    )
);

function cmp($a, $b)
{
    if ($a == $b)
        return 0;
    return ($a['name'] < $b['name']) ? -1 : 1;
}

usort($multiDimArray, "cmp");
var_dump($multiDimArray);

echo "</br></br>";


// 24. Write a PHP script to sort an array using case-insensitive natural ordering.


$xArray = array('file15.txt', 'File10.txt', 'file1.txt', 'File22.txt', 'file2.txt');

natsort($xArray);
echo "Natural order: ";
var_dump($xArray);
echo "<br />";

natcasesort($xArray);
echo "Natural order case insensitve: ";
var_dump($xArray);


echo "</br></br>";


// 25. Write a PHP function to sort entity letters.

echo "Prvi tip: </br>";

$cars = array("Volvo", "BMW", "Toyota");
// lowest to highest
sort($cars);
print_r($cars);


echo "</br>Drugi tip: </br>";

$cars = array("Volvo", "BMW", "Toyota");
// highest to lowest
rsort($cars);
print_r($cars);


echo "</br>Treci tip: </br>";

$cars = array("Volvo", "BMW", "Toyota");
// // lowest to highest but don't take care about the order of the keys
asort($cars);
print_r($cars);


echo "</br>Cetvrti tip: </br>";

$cars = array("Volvo", "BMW", "Toyota");
// highest to lowest key
krsort($cars);
print_r($cars);

echo "</br></br>";


// 26. Write a PHP function to shuffle an associative array, preserving key, value pairs.
echo "Funkcija shuffle miksa elemente niza ali cuva redosled kljuceva od najmanjeg do najveceg</br>";

$cars = array("Volvo", "BMW", "Toyota");

shuffle($cars);
print_r($cars);

echo "</br>";

$numbers = array(1, 2, 3, 4, 5, 6, 7);

shuffle($numbers);
print_r($numbers);

echo "</br></br>";

// 27. Write a PHP function to generate a random password (contains uppercase, lowercase,
// numeric and other) using shuffle() function.

function randomPassword($uppercase = 3, $lowercase = 3, $numeric = 3, $other = 3)
{

    $passwordArray = Array();
    $password = '';


    for ($i = 0; $i < $uppercase; $i++) {
        $passwordArray[] = chr(rand(65, 78));
    }
    for ($i = 0; $i < $lowercase; $i++) {
        $passwordArray[] = chr(rand(97, 122));
    }
    for ($i = 0; $i < $numeric; $i++) {
        $passwordArray[] = chr(rand(48, 57));
    }
    for ($i = 0; $i < $other; $i++) {
        $passwordArray[] = chr(rand(33, 47));
    }

    // miksa niz karaktera
    shuffle($passwordArray);


    foreach ($passwordArray as $item) {
        $password .= $item;
    }
    return $password;
}

echo "\n" . "Password is : " . randomPassword() . "\n";


echo "</br></br>";

// 28. Write a PHP script to sort an array in reverse order (highest to lowest).

$numbers = array(1, 2, 3, 4, 5, 6, 7);
// highest to lowest
rsort($numbers);
print_r($numbers);

echo "</br></br>";

$colors = array("Red", "Orange", "Black", "White");
rsort($colors);
print_r($colors);

echo "</br></br>";


// 29. Write a PHP program to generate an array with a range taken from a string.

$numberArray = array();
$rangeArray = array('10', '20', '5', '6');
$range = $rangeArray[2];


for ($i = 0; $i < $range; $i++) {

    $x = rand(1, 20);
    $numberArray[$i] = $x;
}
var_dump($numberArray);


echo "</br></br>";

// 30. Write a PHP program to create a letter range with arbitrary length.

// Prvi nacin :

$seed = str_split('abcdefghijklmnopqrstuvwxyz'
                        .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                        .'0123456789!@#$%^&*()');

shuffle($seed);
$rand = '';
foreach (array_rand($seed, 5) as $k) $rand .= $seed[$k];

$number = range(0,50,10);
print_r($number);

// Drugi nacin :

function letterRange($length)
{
    $dataRange = array();

    $letters = range('A', 'Z');

    for($i = 0; $i < $length; $i++)
    {
        $position = $i * 26;

        foreach($letters as $ii => $letter)
        {
            $position++;
            if($position <= $length)
                $dataRange[] = ($position > 26 ? $dataRange[$i-1] : '') . $letter;
        }
    }
    return $dataRange;
}
echo "</br></br>";
print_r(letterRange(7));
echo "</br></br>";

// 31. Write a PHP program to get the index of the highest value in an associative array.

$assocArray = array(
    'value1' => 3021,
    'value2' => 2365,
    'value3' => 5215,
    'value4' => 5214,
    'value5' => 2145);
reset($assocArray);

// Sort an array in reverse order and maintain index association
arsort($assocArray);

$keyOfMax = key($assocArray);
echo "Index of the highest value : " . $keyOfMax . "\n";

echo "</br></br>";

// 32. Write a PHP program to get the extension of a file.
/**
 * Function return the extension of a file
 *
 * @param $str - arbitrary file
 *
 * @return array|string
 */
function fileExtension($str)
{
    $str = implode("", explode("\\", $str));

    $str=explode(".", $str);

    $str = strtolower(end($str));

    return $str;
}
$file = 'example.txt';
echo "\n" . fileExtension($file) . "\n";

echo "</br></br>";

// 33. Write a PHP function to search a specified value within the values of an associative array.

/**
 * Function search a specified value within the values of an associative array
 *
 * @param $array - Arbitrary array
 *
 * @param $search - Arbitrary element
 *
 * return void
 */
function arraySearch($array, $search)
{
    reset($array);

    while (list ($key, $val) = each($array)) {

        if (preg_match("/$search/i", $val)) {

            echo $search . " has found in " . $key . "</br>";

        } else {

            echo $search . " has not found in " . $key . "</br>";
        }
    }
}
$exercises = array("part1" => "PHP array", "part2" => "PHP String", "part3" => "PHP Math");
arraySearch($exercises, "Math");

echo "</br></br>";

// 34. Write a PHP program to sort an associative array (alphanumeric with case-sensitive data) by values.


$exampleArray = array(
    0 => 'example1',
    1 => 'Example10',
    2 => 'example12',
    3 => 'Example2',
    4 => 'example3',
    5 => 'EXAMPLE10',
    6 => 'example10'
);

//default sorting
asort($exampleArray);
var_dump($exampleArray);

echo "</br></br>";

/*
SORT_REGULAR - compare items normally (don't change types)
SORT_NUMERIC - compare items numerically
SORT_STRING - compare items as strings
SORT_LOCALE_STRING - compare items as strings, based on the current locale. It uses the locale, which can be changed using setlocale()
SORT_NATURAL - compare items as strings using "natural ordering" like natsort()
SORT_FLAG_CASE - can be combined (bitwise OR) with SORT_STRING or SORT_NATURAL to sort strings case-insensitively
 */
asort($exampleArray, SORT_STRING | SORT_FLAG_CASE | SORT_NATURAL);
var_dump($exampleArray);

echo "</br></br>";

// 35. Write a PHP script to trim all the elements in an array using array_walk function. (primenjuje funkciju koju smo definisali na svaki element niza)

$colors = array( "Red ", " Green", "Black ", " White ");
var_dump($colors);


// trim($val) -  brise sve razmake praznine u stringu
array_walk($colors, create_function('&$val', '$val = trim($val);'));
var_dump($colors);

echo "</br></br>";

// 36. Write a PHP script to lower-case and upper-case, all elements in an array.    ARRRAY_MAP - da primenimo na svaki element niza!!!

$colors = array( "Red", "Green", "Black", "White");
echo "Pocetni niz je oblika : </br>";
var_dump($colors);

$lowerColors = array_map('strtolower', $colors);
echo "</br>Niz gde su svi elementi ispisani malim slovima : </br>";
var_dump($lowerColors);

$upperColors = array_map('strtoupper', $colors);
echo "</br>Niz gde su svi elementi ispisani velikim slovima : </br>";
var_dump($upperColors);

echo "</br></br>";

// 37. Write a PHP script to count the total number of times a specific value appears in an array.

// Prvi nacin : koliko se puta broj 2 pojavljuje u nizu $number

$number = array(1, 2, 100, -1, 1, 2, 100, -10, 0, 2);
$cnt = count(array_filter($number,create_function('$a','return $a == 2;')));
echo "</br> Broj 2 se pojavljuje " . $cnt . " puta u nizu brojevi. </br>";

echo "</br></br>";

// Drugi nacin : array_keys - sa varijablama(ime niza, i trazeni element)

$uid = array(12, 23, 12, 4, 2, 5, 56);
$indexes = array_keys($uid, 12);
echo "Broj 12 se pojavljuje : " . count($indexes) . " puta </br>";

echo "</br></br>";

// Treci nacin :

function timesAppears($array, $match)
{
    $brojac = 0;

    foreach ($array as $key => $value)
    {
        // ako se vrednost elementa ponavlja povecaj brojac
        if ($value == $match)
        {
            $brojac++;
        }
    }
    return $brojac;
}

$colors = array("Green", "Red", "Green", "Yellow", "Red", "Yellow", "Red");

echo "Boja Red se pojavljuje " . timesAppears($colors, "Red") . " puta </br>";

echo "</br></br>";

// 38. Write a PHP function to create a multidimensional unique array for any single key index.

function createArray($array, $key)
{
    // definisemo niz
    $result = array();
    $i = 0;
    // definisemo niz
    $keyArray = array();

    foreach($array as $val){

        if (!in_array($val[$key], $keyArray)){

            $keyArray[$i] = $val[$key];
            $result[$i] = $val;
        }
        $i++;
    }
    return $result;
}
$students = array(
    0 => array("city_id"=>"1", "name"=>"Sara",  "mobile_num"=>"1111111111"),
    1 => array("city_id"=>"2", "name"=>"Robin", "mobile_num"=>"2222222222"),
    2 => array("city_id"=>"1", "name"=>"Sonia", "mobile_num"=>"3333333333"),
);

print_r(createArray($students, "city_id"));

echo "</br></br>";

// 39. Write a PHP program to remove duplicate values from an array which contains only strings or only integers.
// da uklonimo duplirane vrednosti iz niza koji sadrži samo stringove ili samo cele brojeve

// Prvi nacin :

$color = array('Green', 'Red', 'Red', 'Green', 'White', 'Black');
$number = array(1, 2, 100, -1, 1, 2, 100, -10, 0);

// array_unique - uklanja elemente koji se ponavljaju u nizu
$uColor = array_unique($color);
var_dump($uColor);

// array_unique - uklanja elemente koji se ponavljaju u nizu
$uNumber = array_unique($number);
var_dump($uNumber);

// Drugi nacin :

$colors = array('Green', 'Red', 'Red', 'Green', 'White', 'Black');
$numbers = array(1, 2, 100, -1, 1, 2, 100, -10, 0);

// array_values - vraca sve vrednosti elemenata i ove koji se ponavljaju
$values1 = array_values($colors);
var_dump($values1);
$values2 = array_values($numbers);
var_dump($values2);

// dok su kljucevi jedinstveni tj moze postojati jedan kljuc sa nazivom 4 itd... array_keys - vraca sve nazive kljuceva iz nekog niza
$keys1 = array_keys($colors);
var_dump($keys1);
$keys2 = array_keys($numbers);
var_dump($keys2);

// array_flip - ključevi iz matrice postaju vrednosti, a vrednosti iz matrice postaju kljucevi
$uniqColors = array_keys(array_flip($colors));
$uniqNumbers = array_keys(array_flip($numbers));

print_r($uniqColors);
echo "</br></br>";

print_r($uniqNumbers);
echo "</br></br>";

// 40. Write a PHP program to get a sorted array without preserving the keys.

// nova f-ja/naredba array_values - vraca sve vrednosti elemenata niza i dodeli indekse tim elemenatima redom od 0 do max

$array = array("size" => "XL", "color" => "gold");
print_r(array_values($array));

echo "</br></br>";

// Nas zadatak :

$array = array("red", "3", "black", "red", "white", 3);

// prvo array_unique - obezbedi da se elementi u nizu ne ponavljaju
// zatim array_values vraca sve vrednosti elemenata niza i dodeli indekse tim elemenatima redom od 0 do max
$sorted_unique_array = array_values(array_unique($array));

print_r($sorted_unique_array);

echo "</br></br>";

// 41. Write a PHP program to identify the email addresses which are not unique.

function notUnique($array)
{
    // definisemo novi niz
    $same = array();

    // sortira niz prirodno
    natcasesort($array);
    reset ($array);

    $oldKey = NULL;
    $oldValue = NULL;

    // za svaki element niza
    foreach ($array as $key => $value){

        // ako je vrednost elementa = NULL nastavi dalje
        if ($value === NULL){

            continue;
        }

        // ako je stara vrednost elementa = vrednosti elementa
        if ($oldValue == $value){

            $same[$oldKey] = $oldValue;
            $same[$key] = $value;
        }
        $oldValue = $value;
        $oldKey = $key;
    }
    return $same;
}
$test_array = array();
$test_array[1] = 'abc@example.com';
$test_array[2] = 'dfg@example.com';
$test_array[3] = 'abc@example.com';
$test_array[4] = 'rty@example.com';

print_r(notUnique($test_array));

echo "</br></br>";

// 42. Write a PHP function to find unique values from multidimensional arrays and flatten them in zero depth.

function arrayFlat($array)
{
    // definisemo novi niz
    $newArray = array();

    // brojac je nula
    $l = 0;

    // za svaki element iz niza
    foreach($array as $key => $value){

        // ako element nije niz nego samo jedan element (broj/string)
        if(!is_array($value)){

            // u novi niz dodaj taj element
            $newArray[ ]= $value;

            continue;
        }
        // ako je element niza neki podniz
        // povecaj brojac
        $l++;

        // u novi niz smestimo elemente posle izvrsenja f-je ovde je argument $value - element(podniz glavnog niza)
        $newArray = arrayFlat($value);

        // smanji brojac
        $l--;
    }
    if($l == 0)
        $newArray = array_values(array_unique($newArray));
    return $newArray;
}
$tmp = array( 'a' => array(-1,-2, 0, 2, 3),
              'b' => array( 'c' => array(-1, 0, 2, 0, 3)) );
print_r(arrayFlat($tmp));

echo "</br></br>";


// 43. Write a PHP script to merge two commas separated lists with unique value only.
// Napišite PHP skriptu za spajanje dve liste u jednu listu sa jedinstvenom vrijednošću svakog elementa.

$list1 = "1, 2, 3, 4";
$list2 = "1, 2, 4, 8";

// Prvo isvucemo elemente iz prve i druge liste
$elemList1 = explode(",",$list1);
$elemList2 = explode(",",$list2);

$list3 = array_merge($elemList1, $elemList2);
echo "Elementi obe liste : ";
var_dump($list3);

// kombinuje obe liste samo sa jedinstvenim vrednostima jer array_unique - uklanja duplikate iz niza
$result = implode("," , array_unique($list3));
echo $result . "\n";

echo "</br></br>";

// 44. Write a PHP a function to remove a specified, duplicate entry from an array.


// Prvi nacin :

$array = array("a" => "red",
         "b" => "green",
         "c" => "red");

print_r(array_unique($array));

echo "</br></br>";

// Drugi nacin :

$arr = array('1', '2', '3', '4', '5', '2', '1', '3');

// dimenzija niza
$len = count($arr);

for ($i = 0; $i < $len; $i++) {

    // u temp smestamo svaki element niza redom da bi ga uporedili u sledecoj petlji
    $temp = $arr[$i];

    $j = $i;


    // k novi brojac koji ce da se vrti brze od j i uporedjuje element koji smo smestili u $temp sa svakim elementom niza redom
    for ($k = 0; $k < $len; $k++) {

        // ako je k razlicito od j
        if ($k != $j) {

            // ako je element u $temp = elementu sa pozicije k iz niza
            if ($temp == $arr[$k]) {

                // stampaj element koji se ponavlja
                echo $temp . "<br>";

                // u nizu na poziciji k ostavi prazan prostor (ukloni element sa te pozicije)
                $arr[$k] = " ";
            }
        }
    }
}

// Stampa niz ali bez duplih elemenata (jer smo ih ispred uklonili)
for ($i = 0; $i < $len; $i++) {

    echo $arr[$i] . "<br>";
}

// Treci nacin :


// Nova funkcija unset

// Prvi slucaj : Uklanja odredjeni kljuc niza i element niza koji je na toj poziciji

$a = array(1, 2, 3, 4, 5);
unset($a[2]);
// 1, 2, 4, 5
var_dump($a);

echo "</br></br>";

// Drugi slucaj : Uklanja odredjeni kljuc niza i element niza koji je na toj poziciji

$a = array('a', 'b', 'c');
var_dump($a);

// uklanja kljuc 1 i element sa te pozicije
unset($a[1]);
var_dump($a);

echo "</br></br>";

// Treci slucaj :

$array = array('a', 'b', 'c');
var_dump($array);

// uklanja ceo niz $a
unset($array);

echo "</br></br>";

// Cetvrti slucaj :

// proizvoljne varijable
$a = 15;
$b = 15;
$c = 15;
echo "Varijable na pocetku su : $a , $b , $c ";

unset($a);
$a = 150;
echo "</br>Varijable posle unset-a su : $a , $b , $c ";

echo "</br></br>";

// zadatak (nije los al drugi nacin je bolji):

function arrayUniq($myArray, $value)
{
    $count = 0;

    foreach($myArray as $key => $value) {

        if ( ($count > 0) && ($value == $value) )
        {
            unset($myArray[$key]);
        }

        if ($value == $value)
            $count++;
    }
    return array_filter($myArray);
}
$numbers = array(4, 5, 6, 7, 4, 7, 8);
print_r(arrayUniq($numbers, 7));


echo "</br></br>";

// 45. Write a PHP script to do a multi-dimensional difference, i.e. returns values of the first array that are not in the second array.
// Note : Use array_udiff() function.


// Napišite PHP skriptu da uradite višedimenzionalnu razliku, tj. Vraća vrijednosti prvog polja koji nisu u drugom nizu.
// Napomena: Koristite arrai_udiff () funkciju.

/*
Funkcija upoređivanja povratnih poziva u array_udiff.

Funkcija upoređivanja mora vratiti cijeli broj manji od, jednak ili veći od nule,
ako se smatra da je prvi argument manji od, jednak ili većem od drugog.
*/

/**
 * Function - The comparison function must return an integer less than, equal to,
 * or greater than zero if the first argument is considered to be respectively less than,
 * equal to, or greater than the second.
 *
 * @param $a - Arbitrary array
 *
 * @param $b - Arbitrary array
 *
 * @return int
 */
function difffunction($a,$b)
{
    if ($a === $b){

        return 0;
    }
    return ($a > $b)? 1:-1;
}

$a1 = array("a"=>"red","b"=>"green","c"=>"blue");
$a2 = array("a"=>"blue","b"=>"black","e"=>"blue");

// vraca vrednosti iz prvog niza koje su drugacije nego vrednosti u drugom nizu
$result = array_udiff($a1, $a2,"difffunction");
print_r($result);

echo "</br></br>";

// Za tri niza :

function myFunction($a, $b)
{
    if ($a === $b){

        return 0;
    }
    return ($a > $b)? 1:-1;
}

$a1 = array("a"=>"red","b"=>"green","c"=>"blue","yellow");
$a2 = array("A"=>"red","b"=>"GREEN","yellow","black");
$a3 = array("a"=>"green","b"=>"red","yellow","black");

$result=array_udiff($a1,$a2,$a3, "myFunction");
print_r($result);
echo "</br></br>";


// Nas zadatak :


$color1 = array( array('Red', 80), array('Green', 70), array('white', 60) );

$color2 = array( array('Green', 70), array('Black', 95) );

$color = array_udiff($color1, $color2, create_function(

        '$a,$b', 'return strcmp( implode("", $a), implode("", $b) ); '));

print_r($color);


// 46. Write a PHP function to check whether all array values are strings or not.

// Da li neki element postoji u nizu :

$people = array("Peter", "Joe", "Glenn", "Cleveland");

if (in_array("Glenn", $people)) {

    echo "</br>Match found";
} else {
    echo "</br>Match not found";
}

echo "</br></br>";

// ispituje kojeg je tipa element niza

$array = array(1, 12, 'Amra', null, false, 'Lep dan' , true);

/*
foreach ($array as $element) {
     switch(true)
    {
        case is_array($element):
            // array
            break;
        case is_string($element):
            // string
            break;
        case is_int($element):
            // int
            break;
        case is_float($element):
            // float
            break;
        case is_bool($element):
            // bool
            break;
        case is_object($element):
            // object
            break;
        case is_resource($element):
            // resource
            break;
        default:
            // null
    }
}
*/

// Nas zadatak :

function isString($array)
{
    if (is_array($array) == true) {

        foreach ($array as $element) {

            $x = is_string($element);

            if($x == true){

                echo "Element " . $element . " je string </br>";

            }

        }
    }
    return $array;
}
var_dump(isString($array));


echo "</br></br>";



// Drugi nacin za nas zadatak :

function stringsInArray($arr)
{
    // ukupno vraca da li je niz niz stringova ili ne tj ako postoji bar jedan element koji nije string vratice nam false
    return array_sum(array_map('is_string', $arr)) == count($arr);
}
$arr1 = array('PHP', 'JS', 'Python');
$arr2 = array('SQL', 200, 'MySQL');

var_dump(stringsInArray($arr1));
var_dump(stringsInArray($arr2));

echo "</br></br>";

// 47. Write a PHP function to get an array with the first key and value.

// array_keys - vraca sve kljuceve iz niza $a:

$a = array("Volvo"=>"XC90", "BMW"=>"X5", "Toyota"=>"Highlander");
print_r(array_keys($a));

echo "</br></br>";


// Nas zadatak :

function firstElement($array)
{
    list($k) = array_keys($array);

    $result  = array($k => $array[$k]);

    // ukloniti datu varijablu
    unset($array[$k]);

    return $result;
}
$array = array('c1'=>'Red', 'c2'=>'Green', 'c3'=>'Black');
echo "Prvi element je : </br>";
var_dump(firstElement($array));

echo "</br></br>";

// 48. Write a PHP function to set union of two arrays.

// Prvi nacin : Ako su nizovi a i b nizovi razlicitih elemenata ali kljucevi se poklapaju

$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

$c = $a + $b; // Union of $a and $b
echo "Union of \$a and \$b: \n";
var_dump($c);

$c = $b + $a; // Union of $b and $a
echo "Union of \$b and \$a: \n";
var_dump($c);

echo "</br></br>";


// Drugi nacin : Ako imamo nizove u kojima se elementi ponavljaju array_unique - uklanja sve ponovljene elemente

$input1 = array("a" => "green", "red", "b" => "green", "blue", "red");
$result1 = array_unique($input1);
var_dump($result1);
echo "</br></br>";

$input2 = array(4, "4", "3", 4, 3, "3");
$result2 = array_unique($input2);
var_dump($result2);
echo "</br></br>";

echo "</br>Union is : </br>";
$result3 = $result1 + $result2;
var_dump($result3);
echo "</br></br>";

// Treci nacin :

$a = array(1, 2, 3, 4, 5, 6);
$b = array(2, 3, 4, 5, 6, 7, 8, 9);

function arrayUnion($a, $b)
{
    // Unija dva skupa = sumi razlika ta dva skupa i njihovom preseku (jer su to elementi koji bi se ponavljali jer ih imamo u oba skupa)

    // ovo je presek ta dva niza
    $ab = array_intersect($a, $b);

    $onlya = array_diff($a, $b);

    $onlyb = array_diff($b, $a);

    $union =  array_merge($ab, $onlya, $onlyb);
    return $union;
}
echo "</br>Unija ova dva niza je : </br>";
var_dump(arrayUnion($a, $b));



echo "</br></br>";

// 49. Write a PHP script to get an array containing all the entries of an array which have the keys that are present in another array.
/*Test Data : 1st array : ('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', c4 => 'Black')
 2nd array : ('c2', 'c4')
 Output :
 Array
(
[c2] => Green
[c4] => Black
)*/
// Prvi nacin : ako su nizovi istih dimenzija

$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_intersect_key($array1, $array2));


// Drugi nacin :

$firstArray = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
$allowed = array('c2', 'c4');

// prvo zamenimo kljuceve i vrednosti u ovom nizu jer nam odgovara da c2 i c4 budu kljucevi kao u prvom nizu
$temp = array_flip($allowed);

// ovo nam vraca elemente sa istim kljucevima iz ova dva niza
$result = array_intersect_key($firstArray, $temp);
var_dump($result);


echo "</br></br>";

// 50. Write a PHP script to get the last value of an array without affecting the pointer.


// Prvi nacin :

$array = array('a', 'b', 'c', 'd');
echo $array[sizeof($array) - 1];
//$x = sizeof($array) - 1;
//echo $array[$x];

echo "</br></br>";


// Drugi nacin :

// array_keys - Returns an array of all the keys in array
$array = array('a', 'b', 'c', 'd');
$keys = array_keys($array);
print_r($keys);

function arrayLast($array)
{
    if (count($array) < 1)
    return null;

    // Returns an array of all the keys in array
    $keys = array_keys($array);

    // vraca nam element iz $array koji je na poziciji u nizu kljuceva poslednji - 1
    return $array[$keys[sizeof($keys) - 1]];
}
echo "</br></br>";
print_r(arrayLast($array));

echo "</br></br>";


// Treci nacin :

$array = array('a' => 'a', 'b' => 'b', 'c' => 'c');
echo end($array);

echo "</br></br>";

// Cetvrti nacin :

// neke popularne funkcije za dobijanje odredjenog elementa iz niza

$transport = array('foot', 'bike', 'car', 'plane');
$mode = current($transport); // $mode = 'foot';
$mode = next($transport);    // $mode = 'bike';
$mode = next($transport);    // $mode = 'car';
$mode = prev($transport);    // $mode = 'bike';
$mode = end($transport);     // $mode = 'plane';


// na nasem primeru

$colors = array('c1' => 'Red',  'c2' => 'Green',  'c3' => 'White',  'c4' => 'Black');

echo current($colors) . "</br>";     // out: Red
echo next($colors) . "</br>";        // out: Green
echo prev($colors) . "</br>";        // out: Red
echo end($colors) . "</br>";         // out: Black

echo "</br></br>";

$last = end($colors);
echo "Poslednji element niza je : " . $last;

echo "</br></br>";

// 51. Write a PHP program to filter out some elements with certain key-names.
/*Test Data :
1st array : ('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', c4 => 'Black')
2nd array : ('c2', 'c4')
Output :
Array
(
[c1] => Red
[c3] => White
)*/

// Nova funkcija : array_flip - menja mesta vrednostima i kljucevima niza tj vrednosti niza postaju kljucevi a kljucevi postaju vrednosti

$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);

print_r($flipped);

echo "</br></br>";



// Nas zadatak :

$firstArray = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
$secondArray = array('c2', 'c4');

// array_diff_key - vrati one kljuceve iz $firstArray-a koji se razlikuju od kljuceva u $secondArray-u
$resultArray = array_diff_key( $firstArray, array_flip( $secondArray));
print_r($resultArray);

echo "</br></br>";

// 52. Write a PHP function to filter a multi-dimensional array. The function will return those items that will match with the specified value.


function arrayFilterByValue($myArray, $index, $value)
{
    $newArray = array();
    // ako je niz i ako mu je dimenzija veca od nule
    if(is_array($myArray) && count($myArray) > 0)
    {
        // za svaki kljuc (o ili 1) ovog niza $myArray
        foreach(array_keys($myArray) as $key){

            // $temp[$key] = $temp[0] ili $temp[1]
            // a $myArray[$key][$index] je ili $myArray[0][$index] ili $myArray[1][$index] gde je [index] = key1 ili key2 ili key3
            $temp[$key] = $myArray[$key][$index];

            // ako je vrednost u $temp[$key] == sadrzi trazenu vrednost ovde: 'White' dodajemo $myArray[$key] u novi niz
            if ($temp[$key] == $value){
                $newArray[$key] = $myArray[$key];
            }
        }
    }
    return $newArray;
}
$colors = array(
    0 => array('key1' => 'Red', 'key2' => 'Green', 'key3' => 'Black'),
    1 => array('key1' => 'Yellow', 'key2' => 'White', 'key3' => 'Pink')
);
$results = arrayFilterByValue($colors, 'key2', 'White');
print_r($results);

echo "</br></br>";


// 53. Write a PHP script to delete a specific value from an array using array_filter() function.

// Prvi nacin :

$myArray = array('sheldon', 'leonard', 'howard', 'penny');
$toRemove = array('howard');
// na ovaj nacin nestaje i kljuc broj 2 zajedno sa tim elementom
$result = array_diff($myArray, $toRemove);
var_dump($result);

echo "</br></br>";


// Drugi nacin :

$array = array( 'apple', 'orange', 'pear' );
// i na ovaj nacin nestaje i kljuc broj 1 zajedno sa tim elementom
unset( $array[array_search( 'orange', $array )] );
var_dump($array);

echo "</br></br>";

// Treci nacin : resenje sa napisanom funkcijom

$myArray = array('one', 'two', 'deleteme', 'three');
$output = array_filter($myArray, function($val) { return $val != 'deleteme'; });
var_dump($output);

echo "</br></br>";

// Cetvrti nacin : resenje sa napisanom funkcijom

$myArray = array('one', 'two', 12, 1, 3, 'three');
$output = array_filter($myArray, function($val) { return $val != '12'; });
var_dump($output);


echo "</br></br>";

// 54. Write a PHP script to remove all white spaces in an array.

$arrayA = array('a ', 'b', "  ", 10, "", " \n", "Red", 15, "\t");
var_dump($arrayA);
echo "</br></br>";

$trimmedArray = array_map('trim',$arrayA);
var_dump($trimmedArray);

echo "</br></br>";


// 55. Write a PHP function to convert a string to an array (trimming every line and remove empty lines).

$string = "Vi uopšte ne ličite na moju ružu,

vi još ništa ne značite - reče im on - niko vas nije pripitomio i vi niste nikoga pripitomile. 
Vi ste kao što je bila moja lisica. Bila je to obična lisica slična stotinama hiljada drugih.

Ali ja sam od nje napravio svog prijatelja i ona je sada jedinstvena na svetu.";

// explode (razdvaja string na vise delova cim se pojavi oznaka za novi red "\n")
$separateString = explode("\n", $string);

// array_map (objedinjuje i primenjuje gotove funkcije na sve elemente niza: 1) trim - vraca duzinu tj broj karaktera svakog elementa proizvoljnog niza stringova
// a 2) strlen - vraca duzinu tj broj karaktera nekog teksta stringa u to ulazi i broj paraznina i primenjuje na string koji je obradjen u $separateString f-jom explode)

$result = array_filter(array_map('trim', $separateString), 'strlen');
print_r($result);
var_dump($result);

echo "</br></br>";


// Dodatno:

// uklanja prazne linije iz stringa i zameni iz razmakon
$string1 = trim(preg_replace('/\s+/', ' ', $string));
echo $string1 . "</br></br>  ili : </br>";
var_dump($string1);


// 56. Write a PHP script to create a two-dimensional array (4x4), initialized to 10.


// Prvi nacin : Preko moje funkcije

$arr = array();

function initialized($arr)
{
    for ($i = 0; $i < 4; $i++) {

        for ($j = 0; $j < 4; $j++) {

            $arr[$i][$j] = 10;
        }
    }
    return $arr;
}
var_dump(initialized($arr));


// Drugi nacin : Preko gotove funkcije array_fill

// popunja jednodimenzionalni niz vrednostima
$array = array_fill(0, 4,10);
print_r($array);
var_dump($array);


// popunja dvodimenzionalni niz vrednostima
$array = array_fill(0, 4, array_fill(0, 4, 10));
print_r($array);
var_dump($array);

echo "</br></br>";

// 57. Write a PHP function to compares two multidimensional arrays and returns the difference.

// Prvi nacin :

/**
 * @param $a
 * @param $b
 * @return int
 */
function keyCompare($a, $b)
{
    // ===	Identical - Returns true if $x is equal to $y, and they are of the same type
    if($a === $b)
        return 0;

    return($a > $b)? 1:-1;
}
function multidimenssionalArrayDiff($arr1, $arr2)
{
    // vraca razlike izmedju prvog i drugog niza u kljucevima 'c' tj vraca one vrednosti koje postoje u prvom nizu a drugacije su ili ih nema u drugom nizu
    return array_diff_uassoc($arr1['c'], $arr2['c'],"keyCompare");
}

// multidimenssional arrays
$color1=array('a'=>'White','b'=>'Red','c'=>array('a'=>'Green','b'=>'Blue','c'=>'Yellow'));
$color2=array('a'=>'White','b'=>'Red','c'=>array('a'=>'White','b'=>'Red','c'=>'Yellow'));

print_r(multidimenssionalArrayDiff($color1, $color2));

echo "</br></br>";



// Drugi nacin :


function keyCompareFunc($a, $b)
{
    // ===	Identical - Returns true if $x is equal to $y, and they are of the same type
    if ($a === $b) {
        return 0;
    }
    return ($a > $b)? 1:-1;
}

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");

// vraca razlike izmedju prvog i drugog niza tj vraca one kljuceve koji postoje u prvom nizu a nema ih u drugom
$result = array_diff_uassoc($array1, $array2, "keyCompareFunc");
print_r($result);

echo "</br></br>";

// 58. Write a PHP script to combine (using one array for keys and another for its values) the following two arrays.
// ('x', 'y', 'y'), (10, 20, 30)

// Prvi nacin :  Ali radi samo ako se svi kljucevi razlikuju (jer u suprotnom stavlja samo jedan kljuc sa tim imenom i dodeli mu poslednju definisanu vrednost) ovde 'y' => 30

// niz kljuceva
$arrayKeys =  array('x', 'y', 'y');

// niz vrednosti
$arrayValues = array(10, 20, 30);

$result = array_combine($arrayKeys, $arrayValues);

print_r($result);
var_dump($result);

echo "</br></br>";

// Drugi nacin :  Ali radi samo ako se svi kljucevi razlikuju (jer u suprotnom stavlja samo jedan kljuc sa tim imenom i dodeli mu poslednju definisanu vrednost)
// dok vrednosti mogu biti iste ako se nazivi kljuceva razlikuju nema nikakav problem

// niz kljuceva
$arrayKeys =  array('x', 'y', 'z');

// niz vrednosti
$arrayValues = array(10, 20, 20);

$result = array_combine($arrayKeys, $arrayValues);

print_r($result);
var_dump($result);

echo "</br></br>";

// Treci nacin : Funkcija ako zelimo da sacuvamo sve vrednosti u svim kljucevima

// niz kljuceva
$arrayKeys =  array('x', 'y', 'y');

// niz vrednosti
$arrayValues = array(10, 20, 30);

function combineArrays($arrayKeys, $arrayValues)
{
    $result = array();

    // ovde: $i = 0, 1, 2   a  $k = x, y, y
    foreach ($arrayKeys as $i => $k){

        // u niz $result smesta nazive kljuceva sa [$k] to su x, y, y
        // a vrednosti u niz $result uzima iz $arrayValues[$i] i dodeljuje redom
        $result[$k][] = $arrayValues[$i];

    }
    // array_walk - primenjuje datu funkciju na svaki element niza $rezult
    array_walk($result, create_function('$v', '$v = (count($v) == 1)? array_pop($v): $v;'));
    return $result;
}
print_r(combineArrays($arrayKeys, $arrayValues));
var_dump(combineArrays($arrayKeys, $arrayValues));

echo "</br></br>";

// Cetvrti nacin : Funkcija ako zelimo da sacuvamo sve vrednosti u svim kljucevima

// niz kljuceva
$arrayKeys =  array('x', 'y', 'y');

// niz vrednosti
$arrayValues = array(10, 20, 30);

function combineArrays1($arrayKeys, $arrayValues)
{
    $result = array();

    // ovde: $i = 0, 1, 2   a  $k = x, y, y
    foreach ($arrayKeys as $i => $k){

        // u niz $result smesta nazive kljuceva sa [$k] to su x, y, y
        // a vrednosti u niz $result uzima iz $arrayValues[$i] i dodeljuje redom
        $result[$k][] = $arrayValues[$i];

    }
    // array_walk - primenjuje datu funkciju na svaki element niza $rezult
    array_walk($result, function($v)
    {
        $v = (count($v) == 1)? array_pop($v): $v;
    });
    return $result;
}
print_r(combineArrays1($arrayKeys, $arrayValues));
var_dump(combineArrays1($arrayKeys, $arrayValues));

echo "</br></br>";



// 59. Write a PHP program to create a range like the following array.
/*Array
(
[20] => 2
[21] => 3
[22] => 4
[23] => 5
[24] => 6
[25] => 7
)
*/
// Prvi nacin :

$number = array('20' => 2 , '21' => 3, '22' => 4, '23' => 5, '24' => 6, '25' => 7);
print_r(array_combine(range(20, 25),range(2,7)));
var_dump(array_combine(range(20, 25),range(2,7)));

echo "</br></br>";

// Drugi nacin :

$arrayKey = range(20, 25);
$arrayVal = range(2, 7);

$resultArray = array_combine($arrayKey, $arrayVal);
var_dump($resultArray);

echo "</br></br>";