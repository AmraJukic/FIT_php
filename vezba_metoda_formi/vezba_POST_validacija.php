<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/24/2018
 * Time: 11:22 AM
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
$post_varijables['gender']['value'] = isset($_POST['gender']) ? testInput($_POST['gender']) : null;
$post_varijables['index']['value'] = isset($_POST['index']) ? testInput($_POST['index']) : null;
$post_varijables['age']['value'] = isset($_POST['age']) ? testInput($_POST['age']) : null;
$post_varijables['course']['value'] = isset($_POST['course']) ? testInput($_POST['course']) : null;

$post_varijables['firstname']['message'] = null;
$post_varijables['lastname']['message'] = null;
$post_varijables['gender']['message'] = null;
$post_varijables['index']['message'] = null;
$post_varijables['age']['message'] = null;
$post_varijables['course']['message'] = null;



if($_SERVER["REQUEST_METHOD"] == "POST" && (empty($post_varijables['firstname']['value']) || !preg_match("/^[A-Z]{1}[a-z]{2,}$/",$post_varijables['firstname']['value'])))
    $post_varijables['firstname']['message'] = "Name not valid!";

if($_SERVER["REQUEST_METHOD"] == "POST" && (empty($post_varijables['lastname']['value']) || !preg_match("/^[A-Z]{1}[a-z]{2,}$/",$post_varijables['lastname']['value'])))
    $post_varijables['lastname']['message'] = "Last name not valid!";

if($_SERVER["REQUEST_METHOD"] == "POST" && empty($post_varijables['gender']['value']))
    $post_varijables['gender']['message'] = "Please select gender!";

if($_SERVER["REQUEST_METHOD"] == "POST" && (empty($post_varijables['index']['value']) || !preg_match("/(\d{1}|\d{2})(\/)\d{2}/",$post_varijables['index']['value'])))
    $post_varijables['index']['message'] = "Index not valid! For example : 12/15";

if($_SERVER["REQUEST_METHOD"] == "POST" && (empty($post_varijables['age']['value']) || !preg_match("/^[0-9]{1,2}$/",$post_varijables['age']['value'])))
    $post_varijables['age']['message'] = "Age not valid!";

if($_SERVER["REQUEST_METHOD"] == "POST" && (empty($post_varijables['course']['value']) || !preg_match("/[A-Z][a-z]+(\s){0,1}[a-z]+/",$post_varijables['course']['value'])))
    $post_varijables['course']['message'] = "Course not valid!";

// print_r($post_varijables);

?>
<html>
    <head>
    </head>

    <body>
        <h2>PHP Form Validation : Add student</h2>
        <form action="vezba_POST_validacija.php" method="post">

            <p>First name : <br /><input type="text" name="firstname"/><br /></p>
            <label style="color: red;"><?=$post_varijables['firstname']['message'] ?></label>

            <p>Last name : <br /><input type="text" name="lastname"/><br /></p>
            <label style="color: red;"><?=$post_varijables['lastname']['message'] ?></label>

            <p>Gender : <br /><input type="radio" name="gender" value="male" checked/> Male <br />
                <input type="radio" name="gender" value="female"/> Female <br /></p>
            <label style="color: red;"><?=$post_varijables['gender']['message'] ?></label>

            <p>Index : <br /><input type="text" name="index"/><br /></p>
            <label style="color: red;"><?=$post_varijables['index']['message'] ?></label>

            <p>Age: <br/><input type = "text" name = "age" /><br/></p>
            <label style="color: red;"><?=$post_varijables['age']['message'] ?></label>

            <p>Course : <br /><input type="text" name="course"/><br /></p>
            <label style="color: red;"><?=$post_varijables['course']['message'] ?></label><br />

            <input type="submit" name="Send it!"/>
        </form>
    </body>
</html>