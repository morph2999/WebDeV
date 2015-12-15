<!DOCTYPE html> 
<html> 

    <head> 
        <title>WebShop</title>

        <!-- Link zur css-Datei -->
        <link href="newcss.css" type="text/css" rel="stylesheet">

        <!-- link zur Javaskript-Datei -->
        <script language="javascript" type="text/javascript" src="javascript.js"></script>
        <meta charset="UTF-8">
    </head> 

    <body> 
        <div id="inhalt" style="z-index: 100001; position: absolute; background-color: white">  

            <?php
            $verbindung = mysql_connect("localhost", "root", "")
                    or die("keine Verbindung möglich. Benutzername oder Passwort sind falsch");

            mysql_select_db("parfum") or die("Die Datenbank existiert nicht.");

            if ($_POST["suchbegriff"]) {
                // Mysql Abfrage wird gespeichert mit den Notwendigen Parameter
                $sql = "SELECT * FROM produkte WHERE Name LIKE ('%" . mysql_real_escape_string(utf8_decode($_POST["suchbegriff"])) . "%')   UNION ALL SELECT * FROM produkte WHERE Preis LIKE ('%" . mysql_real_escape_string(utf8_decode($_POST["suchbegriff"])) . "%') ";

                // Mysql Abfrage wird durchgeführt
                $result = mysql_query($sql);

                // Suchbegriff wird ausgegeben
                echo "Sie Suchten nach: " . $_POST["suchbegriff"] . "<br/><br/>";

                // Ergebnis wird ausgegeben mit Zeilenumbruch
                while ($row = mysql_fetch_object($result)) {
                    echo utf8_encode($row->Name . "        Preis:       ");
                    echo utf8_encode($row->Preis);

                    echo "<br/>";
                }
            }
            ?>
        </div>
    </body>
</html>