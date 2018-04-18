<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/18/2018
 * Time: 4:33 PM
 */

if(isset($_GET['name']) &&  isset($_GET['age']) &&  isset($_GET['weight'])) {

    $name = $_GET['name'];
    $age = $_GET['age'];
    $weight = $_GET['weight'];

    if(!empty($name) && !empty($age) && !empty($weight)) {
        echo "Name : " . $_GET['name'] . "<br/>";
        echo "Age : " . $_GET['age'] . "<br/>";
        echo "Weight : " . $_GET['weight'] . "<br/>";
    } else {
        echo "Please enter all fields.";
    }
}