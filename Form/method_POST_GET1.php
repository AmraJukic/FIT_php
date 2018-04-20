<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/18/2018
 * Time: 3:52 PM
 */

// Da prikazemo to sto je uneto u text box : koristimo SUPERGLOBALE
// F-ja strip_tags kojom ne dozvoljavamo zlonamerne izmene unosa npr. <b>Name</b>
$name = strip_tags($_GET['name']);
$age = strip_tags($_GET['age']);


?>

<html>
    <head>
        <title>Get and Post</title>
    </head>
    <body>
        <form method="get" action="method_POST_GET1.php">

            name : <input type="text" name="name"/>
            age : <input type="text" name="age"/>

            <input type="submit" value="submit"/>

            <h2> Handling your data </h2>

        </form>

        <!-- Ovde ce se stampati -->
        <?php
        // out : array
        print_r($_GET);

        echo "<br/>Your name is : " . $name . "<br/>" . $age;
        ?>
    </body>
</html>