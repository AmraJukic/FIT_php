<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/18/2018
 * Time: 4:33 PM
 */

// I Fajl: method_GET3.php

// Na ovaj nacin smo definisali formu u kojoj sva polja moraju biti popunjena u suprotnom imamo poruku "Please enter all fields."
if(isset($_GET['name']) &&  isset($_GET['age']) &&  isset($_GET['weight'])) {

    $name = strip_tags($_GET['name']);
    $age = strip_tags($_GET['age']);
    $weight = strip_tags($_GET['weight']);

    // Ovde proverimo da li su sva polja popunjena i zahtevamo ispis sadrzaja svakog polja
    if(!empty($name) && !empty($age) && !empty($weight)) {
        echo "Name : " . $name . "<br/>";
        echo "Age : " . $age . "<br/>";
        echo "Weight : " . $weight . "<br/>";
    } else {
        echo "Please enter all fields.";
    }
}