<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/25/2018
 * Time: 1:34 PM
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

$post_variables['firstname']['value'] = "";
$post_variables['lastname']['value'] = "";
$post_variables['age']['value'] = "";

$post_variables['submit']['value'] = "";

// Promenjive u koje smestamo poruke koje ce se pojaviti ukoliko ne postoji unos
// u polje koje smo oznacili kao obavezno polje forme
$post_variables['firstname']['message'] = "";
$post_variables['lastname']['message'] = "";
$post_variables['age']['message'] = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['firstname'])) {
        $post_variables['firstname']['message'] = "Name is required";

    } else {

        $post_variables['firstname']['value'] = strip_tags($_POST['firstname']);

        // check if name only contains letters
        if (!preg_match("/^[A-Z]{1}[a-z]{2,}$/", $post_variables['firstname']['value'])) {
            $post_variables['firstname']['message'] = "Only letters allowed";
        }
    }


    if (empty($_POST['lastname'])) {
        $post_variables['lastname']['message'] = "Last Name is required";
    } else {
        $post_variables['lastname']['value'] = strip_tags($_POST['lastname']);

        // check if name only contains letters
        if (!preg_match("/^[A-Z]{1}[a-z]{2,}$/", $post_variables['lastname']['value'])) {
            $post_variables['lastname']['message'] = "Only letters allowed";
        }
    }


    if (empty($_POST['age'])) {
        $post_variables['age']['message'] = "Age is required";
    } else {
        $post_variables['age']['value'] = strip_tags($_POST['age']);

        // check if name only contains letters
        if (!preg_match("/^[0-9]{1,2}$/", $post_variables['age']['value'])) {
            $post_variables['age']['message'] = " Only numbers allowed";
        }
    }
}
?>

<html>
    <head>
        <title>User</title>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>
        <h2>PHP Form Example : Add user</h2>
        <p><span class="error"> * required field</span></p>

        <form method = "POST" "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            First Name: <input type = "text" name = "firstname" />
            <span class="error"> * <?php echo $post_variables['firstname']['message'];?></span>
            <br><br>

            Last Name: <input type = "text" name = "lastname" />
            <span class="error"> * <?php echo $post_variables['lastname']['message'];?></span>
            <br><br>

            Age: <input type = "text" name = "age" />
            <span class="error"> * <?php echo $post_variables['age']['message'];?></span>
            <br><br>

            <input type = "submit" name="submitted"/><br/>
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