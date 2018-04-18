<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/18/2018
 * Time: 12:03 PM
 */

// URL na pocetku : http://vezbe.local/php/lib/primjeri/Form/method_POST_GET.php
/* URL kada u text box upisemo npr. "Imamo predavanja" : http://vezbe.local/php/lib/primjeri/Form/method_POST_GET.php?mytextbox=Imamo+predavanja
                                                                                                  method_POST_GET.php - naziv fajla
                                                                                                  ? - argument
                                                                                                  mytextbox= ide jer  je name = "mytextbox
                                                                                                  Imamo+predavanja vrednost uneta u text box
*/

$mytextbox = strip_tags($_POST['mytextbox']);
echo $mytextbox;

?>

<html>

    <head>
        <title>Method POST and GET</title>
    </head>

    <body>


        <!-- u method ide naziv metode "POST" za slanje na server ili "GET" za zahtevanje necega sa servera a u action unosimo naziv fajla u kom se nalazimo -->
        <form method="POST" action="method_POST_GET.php">

            <!-- Ako ostavimo method = "GET" i pozovemo : http://vezbe.local/php/lib/primjeri/Form/method_POST_GET.php
            zatim u text box upisemo "Imamo predavanja"
            nas URL postaje : http://vezbe.local/php/lib/primjeri/Form/method_POST_GET.php?mytextbox=Imamo+predavanja
            sve informacije koje GET prikupi on prikazuje u URL - u -->

            <!-- Ako ostavimo method = "POST" i pozovemo : http://vezbe.local/php/lib/primjeri/Form/method_POST_GET.php
            zatim u text box upisemo "Imamo predavanja"
            nas URL ostaje nepromenjen : http://vezbe.local/php/lib/primjeri/Form/method_POST_GET.php -->

            <!-- Ako method = "GET" i pozovemo : http://vezbe.local/php/lib/primjeri/Form/method_POST_GET.php
            zatim action="search.php"
            zatim u text box upisemo "Imamo predavanja" + ENTER
            nas URL postaje : http://vezbe.local/php/lib/primjeri/Form/search.php?mytextbox=Imamo+predavanja -->


            <input type = "text" name = "mytextbox" value=""/>
        </form>

    </body>
</html>