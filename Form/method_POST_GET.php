<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 4/18/2018
 * Time: 12:03 PM
 */

/* URL na pocetku : http://vezbe.local/php/lib/primjeri/Form/method_POST_GET.php
   URL izgleda ovako ako koristimo metodu GET I u text box upisemo npr. "Imamo predavanja" : http://vezbe.local/php/lib/primjeri/Form/method_POST_GET.php?mytextbox=Imamo+predavanja
                                                                                                  method_POST_GET.php - naziv fajla
                                                                                                  ? - argument
                                                                                                  mytextbox= ide jer  je name = "mytextbox
                                                                                                  Imamo+predavanja vrednost uneta u text box


    Ako ostavimo method = "GET" i pozovemo : http://vezbe.local/php/lib/primjeri/Form/method_POST_GET.php
            zatim u text box upisemo "Imamo predavanja"
            nas URL postaje : http://vezbe.local/php/lib/primjeri/Form/method_POST_GET.php?mytextbox=Imamo+predavanja
            sve informacije koje GET prikupi on prikazuje u URL - u
*/



/*
  F-ja strip_tags kojom ne dozvoljavamo zlonamerne izmene unosa npr. <b>Imamo predavanja</b>
  $mytextbox = strip_tags($_POST['mytextbox']);

  // ispisuje ono sto se trenutno nalazi u promenjivoj $mytextbox
  echo $mytextbox;
*/
?>

<html>

    <head>
        <title>Method POST and GET</title>
    </head>

    <body>

        <!-- U method ide naziv metode "POST" za slanje na server ili "GET" za zahtevanje necega sa servera a u action unosimo naziv fajla u kom se nalazimo -->
        <form method="GET" action="method_POST_GET.php">

            <!-- Ako ostavimo method = "POST" i pozovemo : http://vezbe.local/php/lib/primjeri/Form/method_POST_GET.php
            zatim u text box upisemo "Imamo predavanja"
            nas URL ostaje nepromenjen : http://vezbe.local/php/lib/primjeri/Form/method_POST_GET.php -->

            <!-- Ako method = "GET" i pozovemo : http://vezbe.local/php/lib/primjeri/Form/method_POST_GET.php
            zatim action="search.php"
            zatim u text box upisemo "Imamo predavanja" + ENTER
            nas URL postaje : http://vezbe.local/php/lib/primjeri/Form/search.php?mytextbox=Imamo+predavanja
            Ali vraca i obavestenje Object noc found! jer search.php nije ispravan naziv naseg trenutnog fajla
            -->


            <input type = "text" name = "mytextbox" value=""/>
        </form>

    </body>
</html>