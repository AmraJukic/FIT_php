<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 3/19/2018
 * Time: 10:58 AM
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

$post_varijables['username']['value'] = isset($_POST['username']) ? testInput($_POST['username']) : null;
$post_varijables['email']['value'] = isset($_POST['email']) ? testInput($_POST['email']) : null;
$post_varijables['password']['value'] = isset($_POST['password']) ? testInput($_POST['password']) : null;

$post_varijables['username']['message'] = null;
$post_varijables['email']['message'] = null;
$post_varijables['password']['message'] = null;


    if($_SERVER["REQUEST_METHOD"] == "POST" && (empty($post_varijables['username']['value']) || !preg_match("/[A-Z][a-z]+/",$post_varijables['username']['value'])))
        $post_varijables['username']['message'] = "Username not valid!";

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
<h2>PHP Form Validation Second Example : Add user</h2>
<form action="form_validation_6.php" method="post">

    <p>Username : <br/><input type="text" name="username"/><br/></p>
    <label style="color: red;"><?= $post_varijables['username']['message'] ?></label>

    <p>E-mail : <br/><input type="text" name="email"/><br/></p>
    <label style="color: red;"><?= $post_varijables['email']['message'] ?></label>

    <p>Password : <br/><input type="text" name="password"/><br/></p>
    <label style="color: red;"><?= $post_varijables['password']['message'] ?></label>

    <p>Is this user an Admin?<br/>
        <input type="checkbox" name="yes" checked> Yes </input><br />
        <input type="checkbox" name="no"> No </input></p><br />

    <input type="submit" name="Send it!"/>

</form>
</body>
</html>