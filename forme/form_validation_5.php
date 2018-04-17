<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 3/19/2018
 * Time: 10:59 AM
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

$post_varijables['name']['value'] = isset($_POST['name']) ? testInput($_POST['name']) : null;
$post_varijables['semestar']['value'] = isset($_POST['semestar']) ? testInput($_POST['semestar']) : null;
$post_varijables['ecdl']['value'] = isset($_POST['ecdl']) ? testInput($_POST['ecdl']) : null;
$post_varijables['description']['value'] = isset($_POST['description']) ? testInput($_POST['description']) : null;

$post_varijables['name']['message'] = null;
$post_varijables['ecdl']['message'] = null;

if($_SERVER["REQUEST_METHOD"] == "POST" && (empty($post_varijables['name']['value']) || !preg_match("/[A-Z][a-z]+((\s)[A-Za-z]+){0,}/",$post_varijables['name']['value'])))
    $post_varijables['name']['message'] = "Name not valid!";

if($_SERVER["REQUEST_METHOD"] == "POST" && (empty($post_varijables['ecdl']['value']) || !preg_match("/(\d{1}|\d{2})/", $post_varijables['ecdl']['value'])))
    $post_varijables['ecdl']['message'] = "ECDL not valid!";

// print_r($post_varijables);

?>
<html>
<head>
</head>

<body>
<h2>PHP Form Validation Second Example : Add subject</h2>
<form action="form_validation_5.php" method="post">

    <p>Name : <br /><input type="text" name="name"/><br /></p>
    <label style="color: red;"><?=$post_varijables['name']['message'] ?></label>

    <p>Semestar : <br /><select name="semestar">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select><br /></p>


    <p>ECDL : <br /><input type="text" name="ecdl"/><br /></p>
    <label style="color: red;"><?=$post_varijables['ecdl']['message'] ?></label>

    <p>Description : <br /><br /><textarea rows="4" cols="50" name="description"></textarea><br /></p>

    <input type="submit" name="Send it!"/>

</form>
</body>
</html>
