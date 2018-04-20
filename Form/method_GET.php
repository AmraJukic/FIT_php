<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/18/2018
 * Time: 2:05 PM
 */

// Kako da prikazemo to sto je uneto u text box : koristimo SUPERGLOBALE
$name = strip_tags($_GET['name']);
$surname = strip_tags($_GET['surname']);

?>

<html>
    <head>
        <title>Get</title>
    </head>
    <body>
        <form method="get" action="method_GET.php">

            <!-- http://vezbe.local/php/lib/primjeri/Form/method_GET.php?name=Ana&surname=Ivanovic
            OVO JE JAKO NESIGURNO JER AKO SALJETE PASSWORD ON CE SE NACI U URL-u -->

            name : <input type="text" name="name"/>
            surname : <input type="text" name="surname"/>

            <input type="submit" value="submit">

            <h2> Handling your data </h2>

            <!-- Ovde ce se stampati -->
            <?php echo "Your name is : " . $name . " " . $surname?>
        </form>
    </body>
</html>
