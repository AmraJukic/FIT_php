<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/24/2018
 * Time: 11:00 AM
 */


/**
 * Function return clean string
 *
 * @param $data - Arbitrary variable
 *
 * @return string

function testInput($data) {

    // uklanja nepotrebne znakove iz korisničkih ulaznih podataka
    $data = trim($data);

    // Uklonite backslashes (\)
    $data = stripslashes($data);

    // prosledjuje sve varijable f-je
    $data = htmlspecialchars($data);

    return $data;
}
*/

// Arbitrary array
$get_variables = array();

// Proveri da li je promenljiva poslata ako jeste idi na testInput f-ju a ako nije dodaj vrednost null
$get_variables['firstname']['value'] = isset($_GET['firstname']) ? strip_tags($_GET['firstname']) : null;
$get_variables['lastname']['value'] = isset($_GET['lastname']) ? strip_tags($_GET['lastname']) : null;
$get_variables['age']['value'] = isset($_GET['age']) ? strip_tags($_GET['age']) : null;
$get_variables['submit']['value'] = isset($_GET['submit']) ? strip_tags($_GET['submit']) : null;


$get_variables['firstname']['message'] = null;
$get_variables['lastname']['message'] = null;
$get_variables['age']['message'] = null;


if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($get_variables['submit']['value']) && empty($get_variables['firstname']['value']))
    $get_variables['firstname']['message'] = "Name not valid";


if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($get_variables['submit']['value']) && empty($get_variables['lastname']['value']))
    $get_variables['lastname']['message'] = "Last name not valid";


if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($get_variables['submit']['value']) && empty($get_variables['age']['value']))
    $get_variables['age']['message'] = "Age not valid";

?>

<html>
<head>
    <title>User</title>
</head>
<body>

<h2>PHP Form Example : Add user</h2>

<form method = "GET" action="method_GET6.php">

    First Name: <input type = "text" name = "firstname" /><a style="color: red;"> *</a><br/>
    <label style="color: red;"><?= $get_variables['firstname']['message']?></label><br/>

    Last Name: <input type = "text" name = "lastname" /><a style="color: red;"> *</a><br/>
    <label style="color: red;"><?= $get_variables['lastname']['message']?></label><br/>

    Age: <input type = "text" name = "age" /><a style="color: red;"> *</a><br/>
    <label style="color: red;"><?= $get_variables['age']['message']?></label><br/>

    <input type = "submit" name="submit"/><br/>
</form>

<?php
    if($get_variables['firstname']['value'] != null)
        echo "First Name: " . $get_variables['firstname']['value'];

    if($get_variables['lastname']['value'] != null)
        echo "<br/>Last Name: " . $get_variables['lastname']['value'] . "<br />";

    if($get_variables['age']['value'] != null)
        echo "<br />You are " . $get_variables['age']['value'] . " years old.";
?>
</body>
</html>