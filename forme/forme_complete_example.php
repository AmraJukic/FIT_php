<!--
    Sledeći korak je pokazati kako spriječiti pražnjenje svih polja za unos kada korisnik dostavi obrazac
-->
<html>

<head>
    <style>
        .error{
            color: #FF0000;}
    </style>
</head>
<body>

<?php

function test_input($data) {

    // uklanja nepotrebne znakove iz korisničkih ulaznih podataka
    $data = trim($data);
    // Uklonite backslashes (\)
    $data = stripslashes($data);
    // prosledjuje sve varijable f-je
    $data = htmlspecialchars($data);
    return $data;
}

    // definisimo varijable i postavimo im vrednost = prazno
    $nameErr = $emailErr = $genderErr = $websiteErr = $commentErr = "";

    // definisimo varijable i postavimo im vrednost = prazno
    $name = $email = $gender = $website = $comment ="";

    // Ako je obrazac podnet treba ga validirati,
    // a ako nije preskace validaciju i prikaze prazan obrazac
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["name"])) {
            // dodelimo vrednost promenjivoj $nameErr koju ce prikazati ukoliko dodje do toga da korisnik ne unese Ime u tom polju
            $nameErr = "Ime je obavezno";
        } else {
            $name = test_input($_POST["name"]);

            // proveri da li ime sadrzi samo slova i prazne prostore
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {

                // dodelimo vrednost promenjivoj $nameErr koju ce prikazati ukoliko dodje do toga da korisnik unese nesto sto se razlikuje od slova i praznog prostora
                $nameErr = "Dozvoljena su samo slova i prazni prostori!";
            }
        }


        if(empty($_POST["email"])){
            $emailErr = "E-mail je obavezan";
        }else{
            $email = test_input($_POST["email"]);

            // proveri da li je e-mail odgovarajuceg formata
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

                $emailErr = "Neispravan format e-maila!";
            }
        }


        if(empty($_POST["website"])){

            $website = "";
        } else {

            $website = test_input($_POST["website"]);

            // Proveri da li je sintaksa URL adrese ispravna
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                $websiteErr = "Neispravna URL adresa";
            }
        }


        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Pol je obavezan";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }
?>


<h2>PHP Form Validation Example</h2>

<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr; ?>
    </span>
    <br><br>

    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?>
    </span>
    <br><br>

    Website: <input type="text" name="website" value="<?php echo $website;?>">
    <span class="error"><?php echo $websiteErr;?>
    </span>
    <br><br>

    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
    <br><br>

    Gender:
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>

    <input type="submit" name="submit" value="Submit">

</form>


<?php

    echo "<h2>Your Input:</h2>";
    echo $name . "<br>";
    echo $email . "<br>";
    echo $website . "<br>";
    echo $comment . "<br>";
    echo $gender . "<br>";

?>





</body>


</html>