<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/23/2018
 * Time: 5:12 PM
 */
$post_varijables = array();

$post_varijables['firstname']['value'] = isset($_POST['firstname']) ? strip_tags($_POST['firstname']) : null;
$post_varijables['lastname']['value'] = isset($_POST['lastname']) ? strip_tags($_POST['lastname']) : null;
$post_varijables['email']['value'] = isset($_POST['email']) ? strip_tags($_POST['email']) : null;
$post_varijables['password']['value'] = isset($_POST['password']) ? strip_tags($_POST['password']) : null;
$post_varijables['confirmpassword']['value'] = isset($_POST['confirmpassword']) ? strip_tags($_POST['confirmpassword']) : null;

$post_varijables['firstname']['message'] = null;
$post_varijables['lastname']['message'] = null;
$post_varijables['email']['message'] = null;
$post_varijables['password']['message'] = null;
$post_varijables['confirmpassword']['message'] = null;


if($_SERVER["REQUEST_METHOD"] == "POST" && (empty($post_varijables['firstname']['value']) || !preg_match("/[A-Z][a-z]+/", $post_varijables['firstname']['value'])))
    $post_varijables['firstname']['message'] = "Name not valid!";

if($_SERVER["REQUEST_METHOD"] == "POST" && (empty($post_varijables['lastname']['value']) || !preg_match("/[A-Z][a-z]+/", $post_varijables['lastname']['value'])))
    $post_varijables['lastname']['message'] = "Last name not valid!";

if($_SERVER["REQUEST_METHOD"] == "POST" && (empty($post_varijables['email']['value']) || !filter_var($post_varijables['email']['value'], FILTER_VALIDATE_EMAIL)))
    $post_varijables['email']['message'] = "Please write e-mail!";

if($_SERVER["REQUEST_METHOD"] == "POST" && (empty($post_varijables['password']['value'])))
    $post_varijables['password']['message'] = "Please write password";

if($_SERVER["REQUEST_METHOD"] == "POST" && (empty($post_varijables['confirmpassword']['value'])))
    $post_varijables['confirmpassword']['message'] = "Please confirm password!";

?>

<html>
    <head>
        <title>Simple Form</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <h1>Simple Form</h1>
        <form method="POST" action="method_POST9.php">

            <input type="text" placeholder="First Name" name="firstname"/>
            <label style="color: red;"><?= $post_varijables['firstname']['message']?></label>

            <input type="text" placeholder="Last Name" name="lastname"/>
            <label style="color: red;"><?= $post_varijables['lastname']['message']?></label>

            <input type="text" placeholder="E-mail" name="email"/>
            <label style="color: red;"><?= $post_varijables['email']['message']?></label>

            <input type="text" placeholder="Password" name="password"/>
            <label style="color: red;"><?= $post_varijables['password']['message']?></label>

            <input type="text" placeholder="Confirm Password" name="confirmpassword"/>
            <label style="color: red;"><?= $post_varijables['confirmpassword']['message']?></label>

            <div>
                <input type="radio" id = "male" name="gender" checked/><label for="male">Male</label>
                <input type="radio" id = "female" name="gender"/><label for="female">Female</label>
            </div>

            <input type="submit" name="Submit"/>
        </form>
    </body>
</html>