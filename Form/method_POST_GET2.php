<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/20/2018
 * Time: 12:54 PM
 */

// Kako da prikazemo to sto je uneto u text box : koristimo SUPERGLOBALE
$name = strip_tags($_POST['name']);
$age = strip_tags($_POST['age']);


?>

<html>
    <head>
        <title>Get and Post</title>
    </head>
    <body>
        <form method="post" action="method_POST_GET2.php">

            <!-- http://vezbe.local/php/lib/primjeri/Form/method_POST_GET2.php
            OVO JE SIGURNIJE JER SE PODACI KOJE SMO UNELI NE POJAVLJUJU U URL-u -->

            name : <input type="text" name="name"/>
            age : <input type="text" name="age"/>

            <input type="submit" value="submit"/>

            <h2> Handling your data </h2>

            <!-- Ovde ce se stampati -->
            <?php
            // out : array
            print_r($_POST);

            echo "<br/>Your name is : " . $name . "<br/>" . $age;
            ?>

        </form>
    </body>
</html>