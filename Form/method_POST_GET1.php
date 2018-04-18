<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/18/2018
 * Time: 3:52 PM
 */

// Kako da prikazemo to sto je uneto u text box : koristimo SUPERGLOBALE

$name = $_GET['name'];
$age = $_GET['age'];


?>

<html>
    <head>
        <title>Get and Post</title>
    </head>
    <body>
        <form method="get" action="method_POST_GET1.php">

            <!-- http://vezbe.local/php/lib/primjeri/Form/method_POST.php
            OVO JE SIGURNIJE JER SE PODACI KOJE SMO UNELI NE POJAVLJUJU U URL-u -->

            name : <input type="text" name="name"/>
            age : <input type="text" name="age"/>

            <input type="submit" value="submit">

            <h2> Handling your data </h2>

            <!-- Ovde ce se stampati -->
            <?php
                // out : array
                print_r($_GET);
                echo "<br/>Your name is : " . $name . "<br/>" . $age;
            ?>

        </form>
    </body>
</html>