<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/25/2018
 * Time: 1:34 PM
 */

$get_variables = array();

$get_variables['firstname']['value'] = "";
$get_variables['lastname']['value'] = "";
$get_variables['age']['value'] = "";

isset($_GET['submit']) ? $get_variables['submit']['value'] = $_GET['submit'] : $get_variables['submit']['value'] = "";

// Promenjive u koje smestamo poruke koje ce se pojaviti ukoliko ne postoji unos
// u polje koje smo oznacili kao obavezno polje forme
$get_variables['firstname']['message'] = "";
$get_variables['lastname']['message'] = "";
$get_variables['age']['message'] = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($get_variables['submit']['value'])) {

    if (empty($_GET['firstname'])) {
        $get_variables['firstname']['message'] = "Name is required";

    } else {

        $get_variables['firstname']['value'] = strip_tags($_GET['firstname']);

        // check if name only contains letters
        if (!preg_match("/^[A-Z]{1}[a-z]{2,}$/", $get_variables['firstname']['value'])) {
            $get_variables['firstname']['message'] = "Only letters allowed";
        }
    }


    if (empty($_GET['lastname'])) {
        $get_variables['lastname']['message'] = "Last Name is required";
    } else {
        $get_variables['lastname']['value'] = strip_tags($_GET['lastname']);

        // check if name only contains letters
        if (!preg_match("/^[A-Z]{1}[a-z]{2,}$/", $get_variables['lastname']['value'])) {
            $get_variables['lastname']['message'] = "Only letters allowed";
        }
    }


    if (empty($_GET['age'])) {
        $get_variables['age']['message'] = "Age is required";
    } else {
        $get_variables['age']['value'] = strip_tags($_GET['age']);

        // check if name only contains letters
        if (!preg_match("/^[0-9]{1,2}$/", $get_variables['age']['value'])) {
            $get_variables['age']['message'] = " Only numbers allowed";
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

        <form method = "GET" "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            First Name: <input type = "text" name = "firstname" />
            <span class="error"> * <?php echo $get_variables['firstname']['message'];?></span>
            <br><br>

            Last Name: <input type = "text" name = "lastname" />
            <span class="error"> * <?php echo $get_variables['lastname']['message'];?></span>
            <br><br>

            Age: <input type = "text" name = "age" />
            <span class="error"> * <?php echo $get_variables['age']['message'];?></span>
            <br><br>

            <input type = "submit" name="submit" value="Send it!"/><br/>
        </form>

        <?php
            if ($get_variables['firstname']['value'] != null)
                echo "First Name : " . $get_variables['firstname']['value'];

            if ($get_variables['lastname']['value'] != null)
                echo "<br/>Last Name : " . $get_variables['lastname']['value'] . "<br />";

            if ($get_variables['age']['value'] != null)
                echo "<br />You are " . $get_variables['age']['value'] . " years old.";
        ?>
    </body>
</html>