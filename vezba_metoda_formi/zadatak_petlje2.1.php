<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 12/19/2017
 * Time: 11:17 AM
 */

// 1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position.

for ($row = 1; $row <=10; $row++){

    if($row < 10){

        echo "$row" . "-";
        // ili echo "$i-";
    } else{

        echo "$row";
    }
}
echo "</br></br>";

// 2. Create a script using a for loop to add all the integers between 0 and 30 and display the total.

// Prvi nacin :

$sum = 0;
for ($row = 0; $row <= 30; $row++){

    echo "$row ";
    $sum = $sum + $row;
}
echo "</br>Suma niza je : $sum";

echo "</br></br>";


// Drugi nacin :

$sum1 = 0;
for ($row = 0; $row <= 30; $row++){

    echo "$row ";
    $sum1 += $row;
}
echo "</br>Suma niza je : $sum1";

echo "</br></br>";

// Treci nacin :

$sum2 = 0;
for ($row = 0; $row <= 30; $row++){

    echo "$row ";

    $sum2 = ($row*($row+1)) / 2;
}
echo "</br>Suma niza je : $sum2";

echo "</br></br>";

// 3. Create a script to construct the following pattern, using nested for loop.
// *
// * *
// * * *
// * * * *
// * * * * *

// Prvi nacin :

for ($row = 1; $row <= 5; $row++){

    for ($j = 1; $j <= $row; $j++){

        echo "* ";
    }
    echo "</br>";
}

echo "</br></br>";

// Drugi nacin : Malo formalnije kada $n nije fiksirano (vec proizvoljno uzeto 5)

$n = 5;

for ($row = 1; $row <= $n; $row++){

    for ($j = 1; $j <= $row; $j++){

        echo "* ";
    }
    echo "</br>";
}

echo "</br></br>";

// Treci nacin : samo razmak definisan odvojeno od * gde ce se pojavljivati

for ($row = 1; $row <= 5; $row++){

    for ($j = 1; $j <= $row; $j++){

        echo "*";

        if ($j < $row){

            echo " ";
        }
    }
    echo "</br>";
}

echo "</br></br>";

// 4. Create a script to construct the following pattern, using a nested for loop.
// *
// * *
// * * *
// * * * *
// * * * * *
// * * * * *
// * * * *
// * * *
// * *
// *

// Prvi nacin :

for ($row = 1; $row <= 5; $row++){

    for($j = 1; $j <= $row; $j++){

        echo "* ";

    }
    echo "</br>";
}

for($row = 5; $row >= 1; $row--){

    for($j=1; $j <=$row; $j++){

        echo "* ";
    }
    echo "</br>";
}

echo "</br></br>";

// Drugi nacin : Malo formalnije kada $n nije fiksirano (vec proizvoljno uzeto 5)

$n = 5;

for($row = 1; $row <= $n; $row++) {

    for($j = 1; $j <= $row; $j++) {

        echo "* ";
    }
    echo "</br>";
}

for($row = $n; $row >= 1; $row--) {

    for($j = 1; $j <= $row; $j++) {

        echo ' * ';
    }
    echo "</br>";
}

echo "</br></br>";

// 5. Write a program to calculate and print the factorial of a number using a for loop.
// The factorial of a number is the product of all integers up to and including that number, so the factorial of 4 is 4*3*2*1= 24.

// Prvi nacin :

$n = 5;
$factorial = 1;

for ($row = 1; $row <= $n-1; $row++){

    $factorial = $factorial * ($row+1);
}
echo $factorial;

echo "</br></br>";

// Drugi nacin :

$n = 5;
$factorial = 1;

for ($row = $n; $row >= 1; $row--){

    $factorial = $factorial * $row;
}
echo $factorial;

echo "</br></br>";


// 6. Write a program which will give you all of the potential combinations of a two-digit decimal combination, printed in a comma delimited format :
// Sample output :
// 00, 01, 02, 03, 04, 05, 06, 07, 08, 09, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35,
// 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71,
// 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99,

// Prvi nacin :

for ($row = 0; $row <= 9; $row++){

    for($j = 0; $j <= 9; $j++) {

        echo "$row$j, ";
    }
}

echo "</br></br>";

// Drugi nacin :

for ($row = 0; $row < 10; $row++){

    for($j = 0; $j < 10; $j++) {

        echo $row . $j . ", ";
    }
}

echo "</br></br>";

// 7. Write a program which will count the "r" characters in the text "w3resource".

// ukupan broj karaktera u "w3resource" :
$str = "w3resource";
echo strlen($str);

echo "</br></br>";

// Prvi nacin :

// substr_count - Count the number of substring occurrences

$str = "w3resource";
echo "Broj pojavljivanja slova 'r' u $str je : ";
echo substr_count($str, 'r');

echo "</br></br>";

// Drugi nacin :

$text = "Welcome to PHP";
$searchChar = "e";
$count = "0";

for($row = "0"; $row < strlen($text); $row++){

    if(substr($text, $row,1) == $searchChar){

        $count++;
    }
}
echo $count;

echo "</br></br>";

// 8. Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cellspacing="0px" to the table tag.

// 1 * 1 = 1	1 * 2 = 2	1 * 3 = 3	1 * 4 = 4	1 * 5 = 5
// 2 * 1 = 2	2 * 2 = 4	2 * 3 = 6	2 * 4 = 8	2 * 5 = 10
// 3 * 1 = 3	3 * 2 = 6	3 * 3 = 9	3 * 4 = 12	3 * 5 = 15
// 4 * 1 = 4	4 * 2 = 8	4 * 3 = 12	4 * 4 = 16	4 * 5 = 20
// 5 * 1 = 5	5 * 2 = 10	5 * 3 = 15	5 * 4 = 20	5 * 5 = 25
// 6 * 1 = 6	6 * 2 = 12	6 * 3 = 18	6 * 4 = 24	6 * 5 = 30

// petlja za redove 1 <= $i <= 6

echo "<table cellpadding = 3px cellspacing = 0px>";

for($row = 1; $row <= 6; $row++) {

    echo "<tr>";

    for ($j = 1; $j <= 5; $j++) {


        echo "<td> $row * $j = " . $row * $j . str_repeat('&nbsp;', 10). "</td>" ;

    }

    echo "</tr>";
}

echo "</table>";

echo "</br></br>";

// 9. Write a PHP script using nested for loop that creates a chess board as shown below.
// Use table width="270px" and take 30px as cell height and width.

// chess board

echo "<table border = 1px width = 270px>";

for($row = 1; $row <= 8; $row++) {

    echo "<tr>";

    for($col = 1; $col <= 8; $col++) {

        $total = $row + $col;

        // po modulu = 0 tj ostatak je nula, na ovaj nacin delimo tabelu na crna/bela polja
        if($total % 2 == 0) {

            echo "<td bgcolor = black height = 30px width = 30px></td>";
        } else {

            echo "<td bgcolor = white height = 30px width = 30px></td>";
        }
    }
    echo "</tr>";
}

echo "</table>";

echo "</br></br>";

// 10. Write a PHP script that creates the following table (use for loops).

// 1	2	3	4	5	6	7	8	9	10
// 2	4	6	8	10	12	14	16	18	20
// 3	6	9	12	15	18	21	24	27	30
// 4	8	12	16	20	24	28	32	36	40
// 5	10	15	20	25	30	35	40	45	50
// 6	12	18	24	30	36	42	48	54	60
// 7	14	21	28	35	42	49	56	63	70
// 8	16	24	32	40	48	56	64	72	80
// 9	18	27	36	45	54	63	72	81	90
// 10	20	30	40	50	60	70	80	90	100

echo "<table>";

for ($row = 1; $row <= 10; $row++){

    echo "<tr>";

    for ($col = 1; $col <= 10; $col++){

        // proizvod svakog reda i kolone
        $product = $row * $col;

        echo "<td>" . $product . "</td>";
    }
    echo "</tr>";
}

echo "<table>";

echo "</br></br>";

// 11. Write a PHP program which iterates the integers from 1 to 50. For multiples of three print "Fizz" instead of the number
//     and for the multiples of five print "Buzz". For numbers which are multiples of both three and five print "FizzBuzz".


for ($i = 1; $i <= 100; $i++) {

    if ($i%3 == 0 && $i%5 == 0) {

        echo $i . " FizzBuzz" . "</br>";
    }
    else if ($i%3 == 0) {

        echo $i. " Fizz" . "</br>";
    }
    else if ($i%5 == 0) {

        echo $i. " Buzz" . "</br>";
    }
    else {

        echo $i . "</br>";
    }
}

echo "</br></br>";

// 12. Write a PHP program to generate and display the first n lines of a Floyd triangle. (use n=5 and n=11 rows).
// According to Wikipedia Floyd's triangle is a right-angled triangular array of natural numbers, used in computer science education. It is named after Robert Floyd. It is defined by filling the rows of the triangle with consecutive numbers, starting with a 1 in the top left corner:
// Sample output for n = 5 :
// 1
// 2 3
// 4 5 6
// 7 8 9 10
// 11 12 13 14 15

$n = 5;
echo "n = " . $n . "</br>";
$count = 1;

for ($i = $n; $i > 0; $i--) {

    for ($j = $i; $j < $n + 1; $j++) {

        printf("%4s", $count);
        $count++;
    }
    echo "</br>";
}

echo "</br></br>";

// 13. Write a PHP program to print alphabet pattern 'A'.
// Expected Output:

//  ***
// *   *
// *   *
// *****
// *   *
// *   *
// *   *
// *   *

for ($row = 0; $row <= 7; $row++) {

    for ($column = 0; $column <= 4; $column++) {

        if ((($column == 0 or $column == 4) and $row != 0) or (($row == 0 or $row == 3) and ($column > 0 and $column < 4)))
            echo "*";
        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}
echo "</br></br>";

// 14. Write a PHP program to print alphabet pattern 'B'.
// Expected Output:

// ****
// *   *
// *   *
// ****
// *   *
// *   *
// ****

for ($row = 0; $row <= 6; $row++) {

    for ($column = 0; $column <= 4; $column++) {

        if ($column == 0 or (($row == 0 or $row == 3 or $row == 6) and ($column < 4 and $column > 0)) or ($column == 4 and ($row != 0 and $row != 3 and $row != 6)))

            echo "*";

        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}

echo "</br></br>";

// 15. Write a PHP program to print alphabet pattern 'C'.
// Expected Output:

//  ***
// *   *
// *
// *
// *
// *   *
//  ***

for ($row = 0; $row <= 6; $row++){

    for($column = 0; $column <= 4; $column++){

        if((($row == 0 or $row == 6 ) and ($column > 0 and $column < 4)) or ($column == 0 and ($row != 0 and $row != 6)) or ($column == 4 and ($row == 1 or $row == 5)))
            echo "*";

        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}

echo "</br></br>";

// 16. Write a PHP program to print alphabet pattern 'D'.
// Expected Output:

// ****
// *   *
// *   *
// *   *
// *   *
// *   *
// ****

for ($row = 0; $row <= 6; $row++){

    for($column = 0; $column <= 4; $column++){

        if($column == 0 or (($row == 0 or $row == 6) and ($column > 0 and $column < 4)) or ($column == 4 and ($row != 0 and $row != 6)))
            echo "*";
        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}
echo "</br></br>";

//17. Write a PHP program to print alphabet pattern 'E'.
//Expected Output:

// *****
// *
// *
// ****
// *
// *
// *****

for ($row = 0; $row <= 6; $row++){

    for($column = 0; $column <= 4; $column++){

        if($column == 0 or ($row ==3 and ($column > 0 and $column < 4)) or (($row == 0 or $row == 6) and ($column > 0 and $column <= 4)))
            echo "*";
        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}
echo "</br></br>";


// 18. Write a PHP program to print alphabet pattern 'F'.
// Expected Output:

// *****
// *
// *
// ****
// *
// *
// *

for ($row = 0; $row <= 6; $row++){

    for($column = 0; $column <= 4; $column++){

        if($column == 0 or ($row == 0 and ($column > 0 and $column <= 4)) or ($row == 3 and ($column > 0 and $column < 4)))
            echo "*";
        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}
echo "</br></br>";


// 19. Write a PHP program to print alphabet pattern 'G'.
// Expected Output:

//  ***
// *   *
// *
// * ***
// *   *
// *   *
//  ***

for ($row = 0; $row <= 6; $row++){

    for($column = 0; $column <= 4; $column++){

        if(($column == 0 and ($row != 0 and $row != 6)) or
            (($row == 0 or $row == 6) and ($column > 0 and $column < 4)) or
            ($row == 3 and ($column > 1 and $column <= 4)) or
            ($column == 4 and ($row == 1 or ($row > 3 and $row < 6) )))

            echo "*";
        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}
echo "</br></br>";


// 20. Write a PHP program to print alphabet pattern 'H'.
// Expected Output:

// *   *
// *   *
// *   *
// *****
// *   *
// *   *
// *   *

for ($row = 0; $row <= 6; $row++){

    for($column = 0; $column <= 4; $column++){

        if($column == 0 or $column == 4 or ($row == 3 and ($column > 0 and $column < 4)))
            echo "*";
        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}
echo "</br></br>";


// 21. Write a PHP program to print alphabet pattern 'I'.
// Expected Output:

// *****
//   *
//   *
//   *
//   *
//   *
// *****

for ($row = 0; $row <= 6; $row++){

    for($column = 0; $column <= 4; $column++){

        if($row == 0 or $row == 6 or ($column == 2 and ($row > 0 and $row < 6)))
            echo "*";
        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}
echo "</br></br>";

// 22. Write a PHP program to print alphabet pattern 'J'.
// Expected Output:

//   ***
//    *
//    *
//    *
//    *
//  * *
//   *

for ($row = 0; $row <= 6; $row++){

    for($column = 0; $column <= 3; $column++){

        if(($row == 0 and ($column > 0 and $column <= 3))or
            ($row == 6 and $column == 1) or
            ($row == 5 and $column == 0)or
            ($column == 2 and ($row > 0 and $row < 6)))

            echo "*";
        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}

echo "</br></br>";

// 23. Write a PHP program to print alphabet pattern 'K'.
// Expected Output:

// *   *
// *  *
// * *
// **
// * *
// *  *
// *   *
// *    *

for ($row = 0; $row <= 7; $row++){

    for($column = 0; $column <= 5; $column++){

        if($column == 0 or ($column == 1 and $row == 3) or
            ($column == 2 and ($row == 2 or $row == 4))or
            ($column == 3 and ($row == 1 or $row == 5)) or
            ($column == 4 and ($row == 0 or $row == 6)) or
            ($column == 5 and $row == 7))
            echo "*";
        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}

echo "</br></br>";

// 24. Write a PHP program to print alphabet pattern 'L'.
// Expected Output:

// *
// *
// *
// *
// *
// *
// *****

for ($row = 0; $row <= 6; $row++){

    for($column = 0; $column <= 4; $column++){

        if($column == 0 or ($row == 6 and ($column > 0 and $column <= 4)))
            echo "*";
        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}

echo "</br></br>";

// 25. Write a PHP program to print alphabet pattern 'M'.
// Expected Output:

// *   *
// *   *
// ** **
// * * *
// *   *
// *   *
// *   *

for ($row = 0; $row <= 6; $row++){

    for($column = 0; $column <= 4; $column++){

        if($column == 0 or $column == 4 or ($row == 2 and ($column == 1 or $column == 3)) or ($row == 3 and $column == 2))
            echo "*";
        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}

echo "</br></br>";



// 26. Write a PHP program to print alphabet pattern 'N'.
// Expected Output:

// *   *
// *   *
// **  *
// * * *
// *  **
// *   *
// *   *


for ($row = 0; $row <= 6; $row++){

    for($column = 0; $column <= 4; $column++){

        if($column == 0 or $column == 4 or ($row == 2 and $column == 1) or ($row == 3 and $column == 2) or ($row == 4 and $column == 3))
            echo "*";
        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}


echo "</br></br>";

// 27. Write a PHP program to print alphabet pattern 'O'.
// Expected Output:

//  ***
// *   *
// *   *
// *   *
// *   *
// *   *
//  ***


for ($row = 0; $row <= 6; $row++){

    for($column = 0; $column <= 4; $column++){

        if((($column == 0 or $column == 4) and ($row > 0 and $row < 6)) or (($row == 0 or $row == 6) and ($column > 0 and $column < 4)))
            echo "*";
        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}


echo "</br></br>";

// 28. Write a PHP program to print alphabet pattern 'P'.
// Expected Output:

// ****
// *   *
// *   *
// ****
// *
// *
// *


for ($row = 0; $row <= 6; $row++){

    for($column = 0; $column <= 4; $column++){

        if($column == 0 or (($row == 0 or $row == 3) and ($column > 0 and $column < 4)) or ($column ==4 and ($row == 1 or $row == 2)))
            echo "*";
        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}


echo "</br></br>";

// 29. Write a PHP program to print alphabet pattern 'Q'.
// Expected Output:

//  ***
// *   *
// *   *
// *   *
// * * *
// *  *
//  ** *


for ($row = 0; $row <= 6; $row++){

    for($column = 0; $column <= 4; $column++){

        if(($column == 0 and ($row > 0 and $row < 6)) or
            ($column == 4 and ($row > 0 and $row < 5)) or
            ($row == 0 and ($column > 0 and $column < 4)) or
            ($row == 4 and $column == 2) or
            ($row == 5 and $column == 3) or
            ($row == 6 and ($column == 1 or $column == 2 or $column == 4)))

            echo "*";
        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}

echo "</br></br>";

// 30. Write a PHP program to print alphabet pattern 'R'.
// Expected Output:

// ****
// *   *
// *   *
// ****
// * *
// *  *
// *   *


for ($row = 0; $row <= 6; $row++){

    for($column = 0; $column <= 4; $column++){

        if($column == 0 or
            (($row == 0 or $row == 3) and ($column > 0 and $column < 4)) or
            ($column ==4 and ($row == 1 or $row == 2)) or
            ($column == 2 and $row == 4) or
            ($column == 3 and $row == 5) or
            ($column == 4 and $row == 6))

            echo "*";
        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}

echo "</br></br>";

// 31. Write a PHP program to print alphabet pattern 'S'.
// Expected Output:

//  ****
// *
// *
//  ***
//     *
//     *
// ****


for ($row = 0; $row <= 6; $row++){

    for($column = 0; $column <= 4; $column++){

        if(($row == 0 and $column > 0) or
            ($row == 6 and $column < 4) or
            ($row == 3 and ($column > 0 and $column < 4)) or
            ($column == 0 and ($row == 1 or $row == 2)) or
            ($column == 4 and ($row == 4 or $row == 5)))
            echo "*";
        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}

echo "</br></br>";

// 32. Write a PHP program to print alphabet pattern 'T'.
// Expected Output:

// *****
//   *
//   *
//   *
//   *
//   *

for ($row = 0; $row <= 5; $row++){

    for($column = 0; $column <= 4; $column++){

        if($row == 0 or ($column == 2 and ($row > 0 and $row <= 5)))

            echo "*";
        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}

echo "</br></br>";

// 33. Write a PHP program to print alphabet pattern 'U'.
// Expected Output:

// *   *
// *   *
// *   *
// *   *
// *   *
// *   *
//  ***

for ($row = 0; $row <= 6; $row++){

    for($column = 0; $column <= 4; $column++){

        if(($column == 0 and $row < 6) or ($column == 4 and $row < 6) or ($row == 6 and ($column > 0 and $column < 4)))

            echo "*";
        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}

echo "</br></br>";

// 34. Write a PHP program to print alphabet pattern 'V'.
// Expected Output:

// *   *
// *   *
// *   *
// *   *
// *   *
//  * *
//   *

for ($row = 0; $row <= 6; $row++){

    for($column = 0; $column <= 4; $column++){

        if(($column == 0 and $row < 5) or ($column == 4 and $row < 5) or ($row == 5 and ($column == 1 or $column == 3)) or ($row == 6 and $column == 2))

            echo "*";
        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}

echo "</br></br>";

// 35. Write a PHP program to print alphabet pattern 'W'.
// Expected Output:

// *   *
// *   *
// *   *
// *   *
// * * *
// * * *
//  * *

for ($row = 0; $row <= 6; $row++){

    for($column = 0; $column <= 4; $column++){

        if(($column == 0 and $row < 6) or
            ($column == 4 and $row < 6) or
            ($row == 6 and ($column == 1 or $column == 3)) or
            ($row == 5 and $column == 2) or
            ($row == 4 and $column == 2))

            echo "*";
        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}

echo "</br></br>";

// 36. Write a PHP program to print alphabet pattern 'X'.
// Expected Output:

// *   *
// *   *
//  * *
//   *
//  * *
// *   *
// *   *

for ($row = 0; $row <= 6; $row++){

    for($column = 0; $column <= 4; $column++){

        if((($column == 0 or $column == 4) and ($row == 0 or $row == 1 or $row == 5 or $row == 6)) or
            ($column == 1 or $column == 3) and ($row == 2 or $row == 4) or
             $column == 2 and $row == 3)

            echo "*";
        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}

echo "</br></br>";

// 37. Write a PHP program to print alphabet pattern 'Y'.
// Expected Output:

// *   *
// *   *
//  * *
//   *
//   *
//   *
//   *

for ($row = 0; $row <= 6; $row++){

    for($column = 0; $column <= 4; $column++){

        if((($column == 0 or $column == 4) and ($row == 0 or $row == 1)) or
            ($row == 2 and ($column == 1 or $column == 3)) or
            ($column == 2 and ($row > 2 and $row <= 6)))

            echo "*";
        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}

echo "</br></br>";

// 38. Write a PHP program to print alphabet pattern 'Z'.
// Expected Output:

//*******
//     *
//    *
//   *
//  *
// *
//*******

for ($row = 0; $row <= 6; $row++){

    for($column = 0; $column <= 6; $column++){

        if($row == 0 or $row == 6 or
            ($row == 1 and $column == 5) or
            ($row == 2 and $column == 4) or
            ($row == 3 and $column == 3) or
            ($row == 4 and $column == 2) or
            ($row == 5 and $column == 1))

            echo "*";
        else
            echo "&nbsp&nbsp";
    }
    echo "</br>";
}

echo "</br></br>";