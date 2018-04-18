<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/18/2018
 * Time: 3:30 PM
 */

// Kako da prikazemo to sto je uneto u text box : koristimo SUPERGLOBALE

$name = $_REQUEST['name'];
$surname = $_REQUEST['surname'];


?>

<html>
    <head>
        <title>Get, Post and Request</title>
    </head>
    <body>
        <form method="get" action="method_REQUEST.php">

            <!-- http://vezbe.local/php/lib/primjeri/Form/method_POST_GET2.php
            OVO JE SIGURNIJE JER SE PODACI KOJE SMO UNELI NE POJAVLJUJU U URL-u -->

            name : <input type="text" name="name"/>
            surname : <input type="text" name="surname"/>

            <input type="submit" value="submit">

            <h2> Handling your data </h2>

            <!-- Ovde ce se stampati -->
            <?php echo "Your name is : " . $name . " " . $surname?>
        </form>
    </body>
</html>