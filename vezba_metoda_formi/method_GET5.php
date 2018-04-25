<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/23/2018
 * Time: 1:35 PM
 */

/*
/**
 * Function return clean string
 *
 * @param $data - Arbitrary variable
 *
 * @return string

function testInput($data) {

    // uklanja nepotrebne znakove iz korisničkih ulaznih podataka
    $data = trim($data);

    // Uklonite backslashes (\)
    $data = stripslashes($data);

    // prosledjuje sve varijable f-je
    $data = htmlspecialchars($data);

    return $data;
}
*/

// Arbitrary array
$get_variables = array();

// Proveri da li je promenljiva poslata ako jeste idi na testInput f-ju ili strip_tags
// a ako nije dodaj vrednost null
$get_variables['firstname']['value'] = isset($_GET['firstname']) ? strip_tags($_GET['firstname']) : null;
$get_variables['lastname']['value'] = isset($_GET['lastname']) ? strip_tags($_GET['lastname']) : null;
$get_variables['age']['value'] = isset($_GET['age']) ? strip_tags($_GET['age']) : null;

?>

<html>
    <head>
        <title>User</title>
    </head>
    <body>

        <h2>PHP Form Example : Add user</h2>

        <form method = "GET" action="method_GET5.php">
            First Name: <input type = "text" name = "firstname" /><br/><br/>

            Last Name: <input type = "text" name = "lastname" /><br/><br/>

            Age: <input type = "text" name = "age" /><br/><br/>

            <input type = "submit" name = "submit"/><br/><br/>
        </form>


        <?php
            if($get_variables['firstname']['value'] != null)
                echo "First Name : " . $get_variables['firstname']['value'];

            if($get_variables['lastname']['value'] != null)
                echo "<br/>Last Name : " . $get_variables['lastname']['value'] . "<br />";

            if($get_variables['age']['value'] != null)
                echo "<br />You are " . $get_variables['age']['value'] . " years old.";
        ?>
    </body>
</html>