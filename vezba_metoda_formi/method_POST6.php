<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/23/2018
 * Time: 4:17 PM
 */


/*

/**
 * Function return clean string
 *
 * @param $data - Arbitrary variable
 *
 * @return string

function testInput($data)
{
    // uklanja nepotrebne znakove iz korisničkih ulaznih podataka
    $data = trim($data);

    // Uklonite backslashes (\)
    $data = stripslashes($data);

    // prosledjuje sve varijable f-je
    $data = htmlspecialchars($data);

    return $data;
}

*/

$post_variables = array();

// Proveri da li je promenljiva poslata ako jeste idi na testInput f-ju
// ili koristi strip_tags a ako nije dodaj vrednost null
$post_variables['firstname']['value'] = isset($_POST['firstname']) ? strip_tags($_POST['firstname']) : null;
$post_variables['lastname']['value'] = isset($_POST['lastname']) ? strip_tags($_POST['lastname']) : null;
$post_variables['age']['value'] = isset($_POST['age']) ? strip_tags($_POST['age']) : null;
$post_variables['submit']['value'] = isset($_POST['submit']) ? strip_tags($_POST['submit']) : null;


// Promenjive u koje smestamo poruke koje ce se pojaviti ukoliko ne postoji unos u polje koje smo oznacili kao obavezno polje forme
$post_variables['firstname']['message'] = null;
$post_variables['lastname']['message'] = null;
$post_variables['age']['message'] = null;


if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($post_variables['submit']['value']) && empty($post_variables['firstname']['value']))
    $post_variables['firstname']['message'] = "Name not valid";


if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($post_variables['submit']['value']) && empty($post_variables['lastname']['value']))
    $post_variables['lastname']['message'] = "Last name not valid";


if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($post_variables['submit']['value']) && empty($post_variables['age']['value']))
    $post_variables['age']['message'] = "Age not valid";
?>

<html>
    <head>
        <title>User</title>
    </head>
    <body>
        <h2>PHP Form Example : Add user</h2>

        <form method = "POST" action="method_POST6.php">
            First Name: <input type = "text" name = "firstname" /><a style="color: red;"> *</a><br/>
            <label style="color: red;"><?= $post_variables['firstname']['message']?></label><br/>

            Last Name: <input type = "text" name = "lastname" /><a style="color: red;"> *</a><br/>
            <label style="color: red;"><?= $post_variables['lastname']['message']?></label><br/>

            Age: <input type = "text" name = "age" /><a style="color: red;"> *</a><br/>
            <label style="color: red;"><?= $post_variables['age']['message']?></label><br/>

            <input type = "submit" name="submit"/><br/>
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