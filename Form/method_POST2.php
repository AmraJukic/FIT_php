<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/18/2018
 * Time: 5:34 PM
 */

// I Fajl: method_POST3.php


// check=1


if(isset($_GET['check']))
{
    echo strip_tags($_POST['name']) . "</br>";
    echo strip_tags($_POST['message']);
}