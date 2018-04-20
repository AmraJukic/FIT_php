<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/18/2018
 * Time: 3:30 PM
 */

// Kako da prikazemo to sto je uneto u text box : koristimo SUPERGLOBALE
$name = strip_tags($_REQUEST['name']);
$surname = strip_tags($_REQUEST['surname']);


?>

<html>
    <head>
        <title>Get, Post and Request</title>
    </head>
    <body>
        <!-- Mozemo koristiti bilo koju metodu post/get -->
        <form method="get" action="method_REQUEST.php">

            name : <input type="text" name="name"/>
            surname : <input type="text" name="surname"/>

            <input type="submit" value="submit"/>

            <h2> Handling your data </h2>

            <!-- Ovde ce se stampati -->
            <?php
            // out: array
            print_r($_REQUEST);

            echo "<br/>Your name is : " . $name . " " . $surname;
            ?>
        </form>
    </body>
</html>