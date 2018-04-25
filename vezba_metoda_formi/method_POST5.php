<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/23/2018
 * Time: 4:17 PM
 */

$post_variables = array();

// Proveri da li je promenljiva poslata ako jeste idi na testInput f-ju
// ili koristi strip_tags a ako nije dodaj vrednost null
$post_variables['firstname']['value'] = isset($_POST['firstname']) ? strip_tags($_POST['firstname']) : null;
$post_variables['lastname']['value'] = isset($_POST['lastname']) ? strip_tags($_POST['lastname']) : null;
$post_variables['age']['value'] = isset($_POST['age']) ? strip_tags($_POST['age']) : null;


?>

<html>
    <head>
        <title>User</title>
    </head>
    <body>
        <h2>PHP Form Example : Add user</h2>

        <form method = "POST" action="method_POST5.php">
            First Name: <input type = "text" name = "firstname" /><br/><br/>

            Last Name: <input type = "text" name = "lastname" /><br/><br/>

            Age: <input type = "text" name = "age" /><br/><br/>

            <input type = "submit" /><br/><br/>
        </form>

        <?php
        if($post_variables['firstname']['value'] != null)
            echo "First Name : " . $post_variables['firstname']['value'];

        if($post_variables['lastname']['value'] != null)
            echo "<br/>Last Name : " . $post_variables['lastname']['value'] . "<br />";

        if($post_variables['age']['value'] != null)
            echo "<br />You are " . $post_variables['age']['value'] . " years old.";
        ?>
    </body>
</html>