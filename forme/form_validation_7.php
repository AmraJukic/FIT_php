<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 3/19/2018
 * Time: 11:19 AM
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

$post_varijables['email']['value'] = isset($_POST['email']) ? testInput($_POST['email']) : null;
$post_varijables['password']['value'] = isset($_POST['password']) ? testInput($_POST['password']) : null;

$post_varijables['email']['message'] = null;
$post_varijables['password']['message'] = null;


    if($_SERVER["REQUEST_METHOD"] == "POST" && (empty($post_varijables['email']['value']) || !filter_var($post_varijables['email']['value'], FILTER_VALIDATE_EMAIL)))
        $post_varijables['email']['message'] = "Email not valid!";

    if($_SERVER["REQUEST_METHOD"] == "POST" && empty($post_varijables['password']['value']))
    $post_varijables['password']['message'] = "Please enter your password";

    // print_r($post_varijables);

?>
<html>
<head>
</head>

<body>
<h2>PHP Form Validation Second Example : Login</h2>
<form action="form_validation_7.php" method="post">

    <p>E-mail : <br/><input type="text" name="email"/><br/></p>
    <label style="color: red;"><?= $post_varijables['email']['message'] ?></label>

    <p>Password : <br/><input type="text" name="password"/><br/></p>
    <label style="color: red;"><?= $post_varijables['password']['message'] ?></label><br/>

    <input type="submit" name="Login"/>

</form>
</body>
</html>