<html>

    <!-- I Fajl: method_POST2.php

        check=1
    -->

    <head>
        <title>POST</title>
    </head>
    <body>
        <!-- Definisemo check=1 u URL-u DA SE PRIKAZE -->
        <form method="post" action="method_POST2.php?check=1">

            <b>Name : </b> <input type="text" name="name"><br/><br/>
            <b>Message : </b> <textarea name="message"></textarea><br/><br/>

            <input type="submit" value="Send Message"><br/>

            <br/><br/>
        </form>
    </body>
</html>