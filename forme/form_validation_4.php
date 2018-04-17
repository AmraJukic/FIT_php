<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 3/19/2018
 * Time: 9:56 AM
 */

/**
 * Function return clean string
 *
 * @param $data - Arbitrary variable
 *
 * @return string
 */
function testInput($data) {

    // uklanja nepotrebne znakove iz korisničkih ulaznih podataka
    $data = trim($data);

    // Uklonite backslashes (\)
    $data = stripslashes($data);

    // prosledjuje sve varijable f-je
    $data = htmlspecialchars($data);

    return $data;
}

// Definisanje niza promenljivih
$post_varijables = array();

$post_varijables['firstname']['value'] = isset($_POST['firstname']) ? testInput($_POST['firstname']) : null;
$post_varijables['lastname']['value'] = isset($_POST['lastname']) ? testInput($_POST['lastname']) : null;
$post_varijables['age']['value'] = isset($_POST['age']) ? testInput($_POST['age']) : null;
$post_varijables['subject']['value'] = isset($_POST['subject']) ? testInput($_POST['subject']) : null;

$post_varijables['firstname']['message'] = null;
$post_varijables['lastname']['message'] = null;
$post_varijables['age']['message'] = null;
$post_varijables['subject']['message'] = null;


    if($_SERVER["REQUEST_METHOD"] == "POST" && (empty($post_varijables['firstname']['value']) || !preg_match("/[A-Z][a-z]+/",$post_varijables['firstname']['value'])))
        $post_varijables['firstname']['message'] = "Name not valid!";

    if($_SERVER["REQUEST_METHOD"] == "POST" && (empty($post_varijables['lastname']['value']) || !preg_match("/[A-Z][a-z]+/",$post_varijables['lastname']['value'])))
        $post_varijables['lastname']['message'] = "Last name not valid!";

    if($_SERVER["REQUEST_METHOD"] == "POST" && (empty($post_varijables['age']['value']) || !preg_match("/(\d{1}|\d{2})/", $post_varijables['age']['value'])))
        $post_varijables['age']['message'] = "Age not valid!";

    if($_SERVER["REQUEST_METHOD"] == "POST" && (empty($post_varijables['subject']['value']) || !preg_match("/[A-Z][a-z]+((\s)[A-Za-z]+){0,}/",$post_varijables['subject']['value'])))
        $post_varijables['subject']['message'] = "Subject not valid!";

    // print_r($post_varijables);

?>
<html>
<head>
</head>

<body>
<h2>PHP Form Validation Second Example : Add profesor</h2>
<form action="form_validation_4.php" method="post">

    <p>First name : <br /><input type="text" name="firstname"/><br /></p>
    <label style="color: red;"><?=$post_varijables['firstname']['message'] ?></label>

    <p>Last name : <br /><input type="text" name="lastname"/><br /></p>
    <label style="color: red;"><?=$post_varijables['lastname']['message'] ?></label>

    <p>Age : <br /><input type="text" name="age"/><br /></p>
    <label style="color: red;"><?=$post_varijables['age']['message'] ?></label>

    <p>Subject : <br /><br /><input type="text" name="subject"/><br /></p>
    <label style="color: red;"><?=$post_varijables['subject']['message'] ?></label><br />

    <input type="submit" name="Send it!"/>

</form>
</body>
</html>