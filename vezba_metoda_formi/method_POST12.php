<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/24/2018
 * Time: 10:35 AM
 */

/*
Obratite pažnju da na početku provjeravamo da li je forma podneta pomoću
$_SERVER["REQUEST_METHOD"].

Ako je REQUEST_METHOD POST, onda je obrazac podnet - treba ga validirati.
Ako nije dostavljeno, preskočite validaciju i prikažite prazan obrazac.

PHP - Obavezna polja
    Sledeći korak je da se zahtevaju polja za unos i kreirate greške ako je potrebno
*/

// definisimo varijable i postavimo im vrednost = prazno
$name = $email = $gender = $comment = $website = "";

// Varijable greške će imati poruke o grešci za obavezna polja
$nameErr = $emailErr = $genderErr = $websiteErr = "";

// Ako je obrazac podnet treba ga validirati,
// a ako nije preskace validaciju i prikaze prazan obrazac
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = testInput($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = testInput($_POST["email"]);
    }

    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = testInput($_POST["website"]);
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = testInput($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "";
    } else {
        $gender = testInput($_POST["gender"]);
    }
}

/**
 * Function return clean string
 *
 * @param $data - Arbitrary variable
 *
 * @return string
 */
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

?>
<html>
<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>
<body>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>

<form method="post" action="method_POST7.php">

    Name: <input type="text" name="name">
    <span class="error">*
        <?php echo $nameErr; ?>
            </span>
    <br><br>

    E-mail: <input type="text" name="email">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br>

    Website: <input type="text" name="website">
    <br><br>

    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>

    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male" checked>Male
    <br><br>

    <input type="submit" name="submit" value="Submit"><br/>
</form>

<?php

echo "<h2>Your Input:</h2>";
echo $name . "</br>";
echo $email . "</br>";
echo $website . "</br>";
echo $comment . "</br>";
echo $gender . "</br>";

?>
</body>
</html>