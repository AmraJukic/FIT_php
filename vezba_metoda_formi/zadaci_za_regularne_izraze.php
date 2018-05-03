<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 2/12/2018
 * Time: 3:49 PM
 */
echo "Zadaci za regularne izraze</br></br></br>";

// Zadatak 1 : Napišite PHP skriptu koja proverava da li string sadrži još jedan string.


// Objasnjenje :

$mystring = 'abc';
$findme   = 'a';

$pos = strpos($mystring, $findme);

if ($pos === false) {
    echo "The string '$findme' was not found in the string '$mystring'";
} else {
    echo "The string '$findme' was found in the string '$mystring'";
    echo " and exists at position $pos";
}

echo "</br></br>";


// Resenje zadatka :

$string = 'Radimo zadatke sa regularnim izrazima';

if (strpos($string, 'regularnim') !== false) {

    echo 'Trazena rec je prisutna';
} else {

    echo 'Trazena rec nije prisutna';
}

echo "</br></br>";



// Zadatak 2 : Napišite PHP skriptu koji uklanja poslednju reč iz stringa.

$string1 = 'Radimo zadatke sa regularnim izrazima';
echo $string1 . "</br>";

// '\1' ili '$1'
echo preg_replace('/\W\w+\s*(\W*)$/', '\1', $string1) . "</br>";

echo "</br></br>";



// Zadatak 3 : Napišite PHP skriptu koji uklanja prazne prostore iz stringa.

// Sample string : 'The quick " " brown fox'
// Expected Output : Thequick""brownfox

$string2 = 'The quick " "     brown fox';
echo $string2 . "</br>";

echo preg_replace('/\s+/', '', $string2);

echo "</br></br>";



// Zadatak 4 : Napišite PHP skriptu da biste uklonili nenumeričke znakove osim zareza i tačke.

$string3 = "$12,334.00A";
echo $string3 . "</br>";

echo preg_replace("/[^0-9,.]/", '', $string3);

echo "</br></br>";



// Zadatak 5 : Napišite PHP skriptu da uklonite nove redove i znakove iz stringa.

$string4 = "Twinkle, twinkle, little star!,\nHow I wonder what you# are.\nUp above the$ world so high,\nLike a diamond in the sky.";

// echo preg_replace('/\s+/', ' ', trim($string5));
echo preg_replace('/[^a-zA-Z0-9,.]/', ' ', trim($string4));

echo "</br></br>";



// Zadatak 6 : Napišite PHP skriptu da izvučete tekst (u zagradama) iz stringa.


// Prvi nacin :

$text1 = 'The quick brown [fox].';
$pattern = '/\[(\w{3}+)\]/';

if (preg_match($pattern, $text1, $match)){

    echo $match[0] . "</br>";
    echo $match[1];
}else{

    echo "There is no match";
}

echo "</br></br>";


// Drugi nacin :

$text2 = 'The quick brown [fox].';
preg_match('#\[(.*?)\]#', $text2, $match);

print $match[0] . "</br>";
// out : [fox]

print $match[1] . "</br>";
// out : fox

echo "</br></br>";



// Zadatak 7 : Napišite PHP skriptu da uklonite sve znakove iz stringa osim a-z A-Z 0-9 ili "".

$string5 = 'abcde$ddfd @abcd )der]';
echo "Old string : $string5 " . "</br>";

$newstring5 = preg_replace("/[^A-Za-z0-9 ]/", '', $string5);
echo "New string : $newstring5";

echo "</br></br>";



// Zadatak 8 : Napraviti funkciju koja pretvara cirilicu u latinicu i obratno



function zamena($textcyr = null, $textlat = null)
{
    $cyr = array(
        'а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п',
        'р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я',
        'А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П',
        'Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я');

    $lat = array(
        'a','b','v','g','d','e','io','zh','z','i','y','k','l','m','n','o','p',
        'r','s','t','u','f','h','ts','ch','sh','sht','a','i','y','e','yu','ya',
        'A','B','V','G','D','E','Io','Zh','Z','I','Y','K','L','M','N','O','P',
        'R','S','T','U','F','H','Ts','Ch','Sh','Sht','A','I','Y','e','Yu','Ya');

    if($textcyr)
        return str_replace($cyr, $lat, $textcyr);
    else if($textlat)
        return str_replace($lat, $cyr, $textlat);
    else
        return null;
}
echo zamena("Тествам с кирилица", null) . "</br>";
echo zamena(null, "I pone dotuk raboti!");


echo "</br></br>";



// Zadatak 9 : Napraviti funkciju koja uneseni mail validira


// Prvi nacin :


function validationEmail($email)
{
    $regexp = "/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/";

    if (preg_match($regexp, $email)) {
        echo "Email address is valid.";
    } else {
        echo "Email address is <u>not</u> valid.";
    }
}
validationEmail("firstname.lastname@aaa.bbb.com");

echo "</br></br>";


// Drugi nacin :

$email_a = 'joe@example.com';
$email_b = 'bogus';

if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
    echo "Email address '$email_a' is considered valid." . "</br>";
}
if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
    echo "Email address '$email_b' is considered valid." . "</br>";
} else {
    echo "Email address '$email_b' is considered invalid." . "</br>";
}

echo "</br></br>";



// Zadatak + :  Validacija IP adresa pomocu filter_var()

$ip_a = '127.0.0.1';
$ip_b = '42.42';

if (filter_var($ip_a, FILTER_VALIDATE_IP)) {
    echo "IP address '$ip_a' is considered valid.";
}
if (filter_var($ip_b, FILTER_VALIDATE_IP)) {
    echo "IP address '$ip_b' is considered valid.";
}

echo "</br></br>";



// Zadatak 10 : Napraviti funkciju koja validira da li je username prilikom registracije nekog naloga ispravan


// Prvi nacin :

function validationUname($usern)
{
    if(preg_match('/^\w{4,}$/',$usern)){
        echo "Username je korektan.";
}else{
        echo "Username nije korektan.";
    }
}
validationUname('Marko_123');
// Marko-123 Username nije korektan


echo "</br></br>";



// Drugi nacin :

function validateName($username)
{
    if(preg_match('/^[a-zA-Z0-9]{5,}$/',$username))
        echo "Username je korektan.";
    else
        echo "Username nije korektan";
}
validateName('markoM12');


echo "</br></br>";



// Treci nacin :

function validateName1($username)
{
    if(preg_match('/^[a-zA-Z0-9\.\_]{5,}$/',$username))
        echo "Username je korektan.";
    else
        echo "Username nije korektan";
}
validateName1('marko_M12');


echo "</br></br>";



// Cetvrti nacin :

function validateName2($username)
{
    if(preg_match('/^\w{4,}/',$username))
        echo "Username je korektan.";
    else
        echo "Username nije korektan";
}
validateName2('MarkoMarkovic_11');


echo "</br></br>";



// Peti nacin :

function validateUsername($string)
{
    // you can add here more value, you want to allow
    $allowed = array(".", "-", "_");

    if(ctype_alnum(str_replace($allowed, '', $string ))) {
        return $string;
    } else {
        $string = "Invalid Username";
        return $string;
    }
}
echo validateUsername('MarkoMarkovic_11');
// '#MarkoMarkovic_11'  =>   "Invalid Username"



echo "</br></br>";


// Zadatak 11 : Zamjeni tacke u prazni prostor od navedenih od sledecih navedenih stringova:

/*

Funny.TV.Show.Season.2.Episode.08.avi
Funny.TV.Show.Season.2.Episode.09.avi
Funny.TV.Show.Season.2.Episode.10.avi
Funny.TV.Show.Season.2.Episode.11.avi


Ovo bi trebao da bude ocekivani rezultat:
Funny TV Show Season 2 Episode 09.avi
Funny TV Show Season 2 Episode 10.avi

*/

$subject = 'Funny.TV.Show.Season.2.Episode.08.avi </br>
            Funny.TV.Show.Season.2.Episode.09.avi </br>
            Funny.TV.Show.Season.2.Episode.10.avi </br>
            Funny.TV.Show.Season.2.Episode.11.avi';
echo $subject . "</br></br>";

$pattern='~\.~';
$newstring = preg_replace($pattern, " ", $subject);
echo $newstring;



echo "</br></br>";



// Zadatak 12 : Manipulacija nad grupama !!!

/*

Naziv filmova
8.2 Groundhog Day (1993).avi
1.3 Groundhog Day (2164).avi
2.2 Groundhog Day (1987).avi

Preimenovati u:
(1993) Groundhog Day 8.2.avi
(2164) Groundhog Day 1.3.avi
(1987) Groundhog Day 2.2.avi

*/


$subject = '8.2 Groundhog Day (1993).avi </br>
            1.3 Groundhog Day (2164).avi </br>
            2.2 Groundhog Day (1987).avi </br>';

echo $subject . "</br></br>";

$pattern='/(([0-9]{1})\.([0-9]{1}))\s(\w+\s\w+)\s(\([0-9]{4}\)).avi/';
$newstring = preg_replace($pattern, "$5 $4 $1.avi", $subject);
echo $newstring;


echo "</br></br>";



// Zadatak + :

$note = 'Brojevi telefona dobitnika su :</br> 0038 268 310-173 </br>
                                              0038 267 310-173 </br>
                                              0038 267 312-773 </br>';
echo $note . "</br></br>";

$pattern='/(\(?\d{4}\)?)([ -]\d{3})([ -]\d{3})([ -]\d{3})/';
$newnote = preg_replace($pattern, "$1 $2 - XXX - XXX", $note);
echo $newnote;

echo "</br></br>";



// Zadatak ++ :

$note = 'Brojevi telefona dobitnika su :</br> 0038 268 31-0173 </br>
                                              0038 267 31 0173 </br>
                                              0038 267 31-2773 </br>';
echo $note . "</br></br>";

$pattern='/(\(?\d{4}\)?)([ -]\d{3})([ -]\d{2})([ -]\d{4})/';
$newnote = preg_replace($pattern, "$1 $2 $3 - XXXX", $note);
echo $newnote;

echo "</br></br>";



// Zadatak 13 : Iz navedenog teksta naci i izbrisati sve rijeci koje se ponavljaju poput "the the".

/*

“This is a popular example in the regex literature. I don't know about you you,
but it doesn't happen all that often often that mistakenly repeated words find their way way into my text.
If this example is so popular, it's probably because it's a short pattern that does a great job of showcasing the power of regex.“

*/


$string = "This is a popular example in the regex literature. I don't know about you you,
           but it doesn't happen all that often often that mistakenly repeated words find their way way into my text.
           If this example is so popular, it's probably because it's a short pattern that does a great job of showcasing the power of regex.</br>";

echo $string;

// 1 je blok/deo regularnog izraza
$newstring = preg_replace('/\b(\w+)\s+\1\b/', '\1', $string);
echo $newstring;

echo "</br></br>";



// Zadatak 14 : Zameniti pozicije imena i prezimena u sledecoj listi

$text = "Shiffman, Daniel </br>
         Schiffman, Danielle </br>
         Sheeefmahn, Danny </br>";

echo $text . "</br></br>";

$pattern='/(\w+),(\s+\w+)/';
$newtext = preg_replace($pattern, "$2 $1", $text);
echo $newtext;


echo "</br></br></br>";